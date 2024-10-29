<?php

namespace App\Http\Controllers;


use App\Http\Validators\ContactUsValidator;
use App\Mail\ContactUs;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('contact-us');
    }

    /**
     * @param Request $request
     * @return RedirectResponse|Redirector
     */
    public function send(Request $request)
    {
        $validateUserChange = new ContactUsValidator();
        $validator = $validateUserChange->validate($request);

        if ($validator->fails()) {
            return redirect(route('marketing::contact-us'))
                ->withErrors($validator->errors())
                ->withInput($request->input());
        }

        $userData = [
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'message' => $request->get('message')
        ];

        Mail::to('support@elysiumnetwork.io')
            ->send(new ContactUs($userData));

        return redirect(route('marketing::contact-us'))->with([
            'success' => 'Message sent'
        ]);
    }

}
