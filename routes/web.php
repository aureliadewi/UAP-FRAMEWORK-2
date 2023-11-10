<?php
use Illuminate\Support\Facades\Route;

Route::prefix('/mahasiswa')->group(function () {
    Route::get('/pendaftaran', function () {
        return 'Halaman pendaftaran untuk pendaftaran';
    });

    Route::get('/ujian', function () {
        return 'Halaman Ujian untuk /ujian';
    });

    Route::get('/nilai', function () {
        return 'Halaman nilai untuk /nilai';

});
});

Route::get('/', function () {
    return view('mahasiswa');
});






