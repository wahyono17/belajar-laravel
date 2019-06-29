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
    return view('welcome');
});

Route::get('halo', function () {
    return "halo selamat datang ini test";
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('dosen', 'DosenController@index');
Route::get('/formulir','FormulirController@formulir');
Route::post('/formulir/proses', 'FormulirController@proses');

//route blog
Route::get('/blog', 'BlogController@home');
Route::get('/blog/tentang', 'BlogController@tentang');
Route::get('/blog/kontak', 'BlogController@kontak');

//router crud
Route::get('/pegawai', 'PegawaiController@index');
Route::get('/pegawai/tambah', 'PegawaiController@tambah');
Route::post('/pegawai/post', 'PegawaiController@post');

Route::get('/pegawai/edit/{id}', 'PegawaiController@edit');
Route::post('/pegawai/update', 'PegawaiController@update');
Route::get('/pegawai/hapus/{id}', 'PegawaiController@hapus');
Route::get('/pegawai/cari', 'PegawaiController@cari');

//coba eloquent
Route::get('/karyawan', 'KaryawanController@index');
Route::get('/karyawan/tambah', 'KaryawanController@tambah');
Route::post('/karyawan/post', 'KaryawanController@post');
Route::get('/karyawan/edit/{ID}', 'KaryawanController@edit');
Route::put('/karyawan/update/{ID}','KaryawanController@update');