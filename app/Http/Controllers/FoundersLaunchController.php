<?php

namespace App\Http\Controllers;

use App\FoundersLaunch;
use App\Http\Validators\FoundersLaunchValidator;
use App\Mail\FoundersLaunchFollowUp;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Mail;
use Torann\GeoIP\Facades\GeoIP;
use App\Http\Helpers\MailChimp as MailChimp;


class FoundersLaunchController extends Controller
{
    public function showForm()
    {
        return view('founderslaunch');
    }

    /**
     * @param Request $request
     * @return RedirectResponse|Redirector
     */
    public function send(Request $request)
    {
        $validateUserChange = new FoundersLaunchValidator();
        $validator = $validateUserChange->validate($request);

        if ($validator->fails()) {
            return redirect(route('marketing::founderslaunch'))
                ->withErrors($validator->errors())
                ->withInput($request->input());
        }

        $foundersLaunch = FoundersLaunch::where([
            'email' => $request->get('email')
        ])->first();

        if (!$foundersLaunch) {
            $foundersLaunch = new FoundersLaunch();
            $foundersLaunch->first_name = ucfirst($request->get('first_name'));
            $foundersLaunch->last_name = ucfirst($request->get('last_name'));
            $foundersLaunch->email = strtolower($request->get('email'));
            $foundersLaunch->ip = GeoIP::getLocation()->ip;
            $foundersLaunch->iso_code = GeoIP::getLocation()->iso_code;
            $foundersLaunch->country = GeoIP::getLocation()->country;
            $foundersLaunch->city = GeoIP::getLocation()->city;
            $foundersLaunch->state = GeoIP::getLocation()->state;
            $foundersLaunch->state_name = GeoIP::getLocation()->state_name;
            $foundersLaunch->postal_code = GeoIP::getLocation()->postal_code;
            $foundersLaunch->save();

            //SUBSCRIBE TO MAILCHIMP CAMPATIGN
            if (app()->environment('production')) {
                $mailChimpTags = [];
                $mailChimpTags['FOUNDERSLAUNCH'] = 'active';

                MailChimp::subscribe(
                    'd876d50ee6', //https://us4.admin.mailchimp.com/reports/summary?id=6314259
                    $foundersLaunch->email,
                    $mailChimpTags,
                    [
                        'FNAME' => $foundersLaunch->first_name ?? '',
                        'LNAME' => $foundersLaunch->last_name ?? '',
                    ],
                    [
                        'ip_signup' => $foundersLaunch->ip,
                    ]
                );
            }

            //Welcome Email
            // $user = [
            //     'first_name' => $foundersLaunch->first_name,
            //     'last_name' => $foundersLaunch->last_name,
            //     'email' => $foundersLaunch->email,
            // ];
            // Mail::to($request->get('email'))
            // ->send(new FoundersLaunchFollowUp($user));
        }

        return redirect(route('marketing::founderslaunch'))->with([
            'success' => true,
            'first_name' => $request->get('first_name')
        ]);
    }

}
