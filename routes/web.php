<?php

use App\Http\Controllers\GeneralController;
use Illuminate\Support\Facades\Route;

Route::controller(GeneralController::class)->group(function() {
    Route::get('/', 'beranda')->name('beranda');
    Route::get('/tentang-kami', 'tentangKami')->name('tentang-kami');
    Route::get('/layanan', 'layanan')->name('layanan.index');
    Route::get('/layanan/pembuatan-website', 'layananWebsite')->name('layanan.website');
    Route::get('/layanan/kelola-sosial-media', 'layananSosialMedia')->name('layanan.sosial-media');
    Route::get('/portofolio', 'portofolio')->name('portofolio');
    Route::get('/hubungi-kami', 'hubungiKami')->name('hubungi-kami');
    Route::post('/kirim-pesan', 'kirimPesan')->name('kirim-pesan');
});
