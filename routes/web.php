<?php

use App\Http\Controllers\DatamahasiswaController;
use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\KRSController;
use App\Models\Datamahasiswa;

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
Route::get('/viewkrs', [KRSController::class, 'index']);
Route::get('/datamahasiswa', [DatamahasiswaController::class, 'index'])->name('mahasiswa.index');
Route::get('/datamahasiswa/{nim}/krs', [DatamahasiswaController::class, 'showKrs'])->name('mahasiswa.krs');








