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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('kategori_artikel','Kategori_ArtikelController');

Route::resource('kategori_berita','Kategori_BeritaController');

Route::resource('kategori_pengumuman','Kategori_PengumumanController');

Route::resource('kategori_galeri','galeriController');

Route::resource('artikel','ArtikelController');

Route::resource('berita','BeritaController');

Route::resource('galeri','Kategori_GaleriController');

Route::resource('pengumuman','PengumumanController');
