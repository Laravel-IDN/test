<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('login');
});

Auth::routes();

Route::group(['middleware' =>'auth'], function (){

    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/kunjungan', 'KunjunganController@index')->name('kunjungan.index');
    Route::get('/kunjungan/create', 'KunjunganController@create')->name('kunjungan.create');
    Route::post('/kunjungan/create', 'KunjunganController@store');
    Route::get('/kunjungan/detail/{id}', 'KunjunganController@show')->name('kunjungan.detail');

    Route::get('/profile', 'Auth\ProfileController@index')->name('auth.profile');

});

Route::group(['prefix' => 'admin', 'middleware' =>'auth'], function (){
    // Dashboard
    Route::get('/dashboard/ringkasan', 'DashboardController@index1');
    Route::get('/dashboard/kritikdansaran', 'DashboardController@index2');
    Route::get('/dashboard/kamarhunian', 'DashboardController@index3');
    Route::get('/dashboard/tamping', 'DashboardController@index4');

    // Antrian
    Route::get('antrian', 'KunjunganController@antrian')->name('antrian.index');

    // WBP
    Route::get('wbp', 'WBPController@index')->name('wbp.index');
    Route::get('wbp/create', 'WBPController@create')->name('wbp.create');
    Route::post('wbp/create', 'WBPController@store');
    Route::get('wbp/edit/{id}', 'WBPController@edit')->name('wbp.edit');
    Route::post('wbp/edit/{id}', 'WBPController@update');

    // Status WBP
    Route::get('wbp/status', 'WBPController@index_status')->name('status.index');
    Route::get('wbp/status/create', 'WBPController@create_status')->name('status.create');

    // Petugas
    Route::get('petugas', 'PetugasController@index')->name('petugas.index');
    Route::get('petugas/create', 'PetugasController@create')->name('petugas.create');
    Route::post('petugas/create', 'PetugasController@store');

    // Petugas
    Route::get('meja', 'RuanganController@index')->name('meja.index');
    Route::get('meja/create', 'RuanganController@create')->name('meja.create');
    Route::post('meja/create', 'RuanganController@store');

    // Pengunjung
    Route::get('pengunjung', 'PengunjungController@index')->name('pengunjung.index');
    Route::get('pengunjung/create', 'PengunjungController@create')->name('pengunjung.create');
    Route::post('pengunjung/create', 'PengunjungController@store');

    // Jadwal
    Route::get('jadwal', 'JadwalController@index')->name('jadwal.index');
    Route::get('jadwal/create', 'JadwalController@create')->name('jadwal.create');
    Route::post('jadwal/create', 'JadwalController@store');

    // Kunjungan
    Route::get('kunjungan', 'KunjunganController@index_admin')->name('kunjungan.admin');
    Route::get('kunjungan/detail/{id}', 'KunjunganController@index_admin_detail')->name('kunjungan.admin.detail');

    Route::get('kunjungan/wnp', 'KunjunganController@index_admin_blok')->name('kunjungan.admin.blok');

    // Laporan
    Route::get('laporan/f', 'DashboardController@laporanf')->name('laporan.f');
    Route::get('laporan/e', 'DashboardController@laporane')->name('laporan.e');
});
