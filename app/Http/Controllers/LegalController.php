<?php

namespace App\Http\Controllers;
use Torann\GeoIP\Facades\GeoIP;

class LegalController extends Controller
{

    public function gdpr()
    {
        $iso_code = GeoIP::getLocation()->iso_code;
        $flgEstonia = false;
        if ($iso_code == 'EE')
            $flgEstonia = true;
        return view('legal.gdpr')->with('flgEstonia', $flgEstonia);
    }

    public function termsOfSupply()
    {
        $iso_code = GeoIP::getLocation()->iso_code;
        $flgEstonia = false;
        if ($iso_code == 'EE')
            $flgEstonia = true;
        return view('legal.terms-of-supply')->with('flgEstonia', $flgEstonia);
    }

    public function termsOfUse()
    {
        $iso_code = GeoIP::getLocation()->iso_code;
        $flgEstonia = false;
        if ($iso_code == 'EE')
            $flgEstonia = true;
        return view('legal.terms-of-use')->with('flgEstonia', $flgEstonia);
    }

}
