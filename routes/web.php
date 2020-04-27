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

Route::resource('/sepeda','SepedaController');

Route::resource('/fruit','FruitController');

Route::resource('/matakuliah','MatakuliahController');
Route::resource('/kurikulum','KurikulumController');
Route::resource('prodi','ProdiController');
Route::resource('dosen','DosenController');
Route::resource('penawaran_mk','PenawaranMkController');
Route::resource('krs','KrsController');
Route::resource('pengampu','PengampuController');

Route::get('/tambahmk','MatakuliahController@store');

Route::get('/tambahkrklm','KurikulumController@store');

Route::get('/tambahdosen','DosenController@store');

Route::get('/tambahprodi','ProdiController@store');

Route::get('/editmatakuliah','MatakuliahController@update');

Route::get('/editkurikulum','KurikulumController@update');

Route::get('/editdosen','DosenController@update');

Route::get('/editprodi','ProdiController@update');

Route::get('/deletematakuliah','MatakuliahController@destroy');

Route::get('/deletekurikulum','KurikulumController@destroy');

Route::get('/deletedosen','DosenController@destroy');

Route::get('/deleteprodi','ProdiController@destroy');

Route::get('/tambah','SepedaController@store');

Route::get('/edit','SepedaController@update');

Route::get('/delete','SepedaController@destroy');