<?php

namespace App\Http\Controllers\Marketing;

use App\Http\Controllers\Controller;
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

    public function termsOfService()
    {
        $iso_code = GeoIP::getLocation()->iso_code;
        $flgEstonia = false;
        if ($iso_code == 'EE')
            $flgEstonia = true;
        return view('legal.terms-of-service')->with('flgEstonia', $flgEstonia);
    }

    public function termsOfUse()
    {
        $iso_code = GeoIP::getLocation()->iso_code;
        $flgEstonia = false;
        $flgCyprus = false;
        if ($iso_code == 'EE')
            $flgEstonia = true;
        if ($iso_code == 'CY')
            $flgCyprus = true;
        return view('legal.terms-of-use')->with(['flgEstonia'=>$flgEstonia, 'flgCyprus'=>$flgCyprus]);
    }

}
