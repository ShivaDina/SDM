<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('users', \App\Http\Controllers\UserController::class)
    ->middleware('auth');
// Route::resource('users', \App\Http\Controllers\PenggunaController::class)
//     ->middleware('auth');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

Route::get('/home', function() {
    return view('home');
})->name('home');



// Route::get('/pengguna', function() {
//     return view('pengguna.pengguna');
// })->name('pengguna');

// Route::get('/pengguna-entry', function() {
//     return view('pengguna.pengguna-entry');
// })->name('pengguna-entry');
Route::get('pegawai/cetak', ['as' => 'pegawai.cetak', 'uses' => '\App\Http\Controllers\PegawaiController@cetak']);
Route::resource('pegawai', \App\Http\Controllers\PegawaiController::class);

// Route::get('/pegawai', function() {
//     return view('pegawai.pegawai');
// })->name('pegawai');

// Route::get('/pegawai-entry', function() {
//     return view('pegawai.pegawai-entry');
// })->name('pegawai-entry');
Route::get('pendidikan/cetak', ['as' => 'pendidikan.cetak', 'uses' => '\App\Http\Controllers\PendidikanController@cetak']);
Route::resource('pendidikan', \App\Http\Controllers\PendidikanController::class);

// Route::get('/pendidikan', function() {
//     return view('pendidikan.pendidikan');
// })->name('pendidikan');

// Route::get('/pendidikan-entry', function() {
//     return view('pendidikan.pendidikan-entry');
// })->name('pendidikan-entry');

Route::resource('pengembangan', \App\Http\Controllers\PengembanganController::class);

// Route::get('/pengembangan', function() {
//     return view('pengembangan.pengembangan');
// })->name('pengembangan');

// Route::get('/pengembangan-entry', function() {
//     return view('pengembangan.pengembangan-entry');
// })->name('pengembangan-entry');

Route::resource('absensi', \App\Http\Controllers\AbsensiController::class);
// Route::get('/absensi', function() {
//     return view('absensi.absensi');
// })->name('absensi');

// Route::get('/absensi-entry', function() {
//     return view('absensi.absensi-entry');
// })->name('absensi-entry');

Route::resource('jenisijin', \App\Http\Controllers\JenisijinController::class);

// Route::get('/jenisijin', function() {
//     return view('jenisijin.jenisijin');
// })->name('jenisijin');

// Route::get('/jenisijin-entry', function() {
//     return view('jenisijin.jenisijin-entry');
// })->name('jenisijin-entry');

//Route::get('pengajuan/cetak', '\App\Http\Controllers\PengajuanController@cetak');
Route::get('pengajuan/cetak', ['as' => 'pengajuan.cetak', 'uses' => '\App\Http\Controllers\PengajuanController@cetak']);
Route::resource('pengajuan', \App\Http\Controllers\PengajuanController::class);

// Route::get('/pengajuanijin', function() {
//     return view('pengajuan.pengajuanijin');
// })->name('pengajuanijin');

// Route::get('/pengajuanijin-entry', function() {
//     return view('pengajuan.pengajuanijin-entry');
// })->name('pengajuanijin-entry');

Route::resource('gaji', \App\Http\Controllers\GajiController::class);

// Route::get('/gaji', function() {
//     return view('gaji.gaji');
// })->name('gaji');

// Route::get('/gaji-entry', function() {
//     return view('gaji.gaji-entry');
// })->name('gaji-entry');

Route::resource('tunjangan', \App\Http\Controllers\TunjanganController::class);

// Route::get('/tunjangan', function() {
//     return view('tunjangan.tunjangan');
// })->name('tunjangan');

// Route::get('/tunjangan-entry', function() {
//     return view('tunjangan.tunjangan-entry');
// })->name('tunjangan-entry');