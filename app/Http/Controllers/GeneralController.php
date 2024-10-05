<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Config;
use Exception;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GeneralController extends Controller
{
    //
    public function beranda() {
        return view('pages.home');
    }

    public function tentangKami() {
        return view('pages.about-us');
    }

    public function layanan() {
        return view('pages.services.index');
    }

    public function portofolio() {
        return view('pages.portfolio.index');
    }

    public function website() {
        return view('pages.portfolio.website');
    }


    public function hubungiKami() {
        return view('pages.contact-us');
    }

    public function kirimPesan(Request $request) {

        Carbon::setLocale('id');
        $tanggal = Carbon::now()->format('d-m-Y');
        $jam = Carbon::now()->format('H:i');

        $client = new Client();
        $botToken = Config::get('app.telegram_bot_token');
        $chatId = Config::get('app.telegram_client_id');

        $message =
            "*PESAN MASUK*\n".
            "-----------------------\n".
            "*Tanggal* : " . $tanggal. "\n".
            "*Jam* : " . $jam. "\n".
            "*Nama* : " .$request->name.  "\n".
            "*Email* : " .  $request->email."\n".
            "*No Hp* : "  . $request->phone_number."\n".
            "*Subjek* : " . $request->subject. "\n".
            "*Pesan* : " .$request->message."\n";

        try {
            $response = $client->post("https://api.telegram.org/bot{$botToken}/sendMessage", [
                'json' => [
                    'chat_id' => $chatId,
                    'text' => $message,
                    'parse_mode' => 'Markdown'
                ]
            ]);


        } catch (Exception $th) {
            return "Gagal mengirim pesan.";
        }






        return "Berhasil mengirim pesan.";
    }
}
