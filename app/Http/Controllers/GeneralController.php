<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function layananWebsite() {
        return view('pages.services.website');
    }

    public function layananSosialMedia() {
        return view('pages.services.social-media');
    }

    public function portofolio() {
        return view('pages.portfolio.index');
    }

    public function hubungiKami() {
        return view('pages.contact-us');
    }

    public function kirimPesan() {

    }
}
