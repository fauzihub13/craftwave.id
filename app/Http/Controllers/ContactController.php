<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class ContactController extends Controller
{
    public function konsultasi(String $need){

        $phoneNumber = Config::get('app.phone_number');

        $api = "https://api.whatsapp.com/send?phone={$phoneNumber}&text=";

        $type = $need!=" " ? " tertarik dengan jasa *" . $need . "*\n" : " ingin konsultasi..";

        $message =
            "*Hai, Crafwave.id 👋🏻*\n\n".
            "Saya{$type}";

        $url = $api . urlencode($message);

        return redirect($url);

    }
}
