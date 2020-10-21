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
//Home
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboardAdmin', 'HomeController@showDBAdmin');


//untuk Admin
Route::get('/tambah_user', 'UserController@addUser');
Route::post('/tambah_user', 'UserController@saveUser');
Route::get('/tampil_user', 'UserController@index');
Route::get('/detail_report/{id}','UserController@detailReport');
Route::get('/daftar_pelanggaran','UserController@detailReport2');
Route::get('/report_user/{id}','UserController@reportUser');
Route::post('/report_user/{id}','UserController@savereport');
Route::get('/edit_report/{id}', 'UserController@editReport');
Route::post('/edit_report/{id}', 'UserController@updateReport');
Route::get('/hapus_report/{id}', 'UserController@deleteReport');
Route::get('/edit_user/{id}','UserController@editUser');
Route::post('/edit_user/{id}','UserController@updateUser');
Route::post('/edit_user/{id}','UserController@updateUser');
Route::get('/reset_password/{id}', 'UserController@resetPassword');
Route::get('/profilAdmin/{id}', 'UserController@editProfilAdmin');
Route::post('/profilAdmin/{id}', 'UserController@updateProfilAdmin');

//tenaga
Route::get('/tampil_tenaga', 'TenagaPendidikController@index');
Route::get('/tambah_tenaga', 'TenagaPendidikController@create');
Route::post('/tambah_tenaga', 'TenagaPendidikController@store');
Route::get('/edit_tenaga/{id}', 'TenagaPendidikController@edit');
Route::post('/edit_tenaga/{id}', 'TenagaPendidikController@update');
Route::get('/hapus_tenaga/{id}', 'TenagaPendidikController@destroy');

//sarana
Route::get('/tampil_sarana', 'SaranaController@index');
Route::get('/tambah_sarana', 'SaranaController@create');
Route::post('/tambah_sarana', 'SaranaController@store');
Route::get('/edit_sarana/{id}', 'SaranaController@edit');
Route::post('/edit_sarana/{id}', 'SaranaController@update');
Route::get('/hapus_sarana/{id}', 'SaranaController@destroy');

//prasarana
Route::get('/tampil_prasarana', 'PrasaranaController@index');
Route::get('/tambah_prasarana', 'PrasaranaController@create');
Route::post('/tambah_prasarana', 'PrasaranaController@store');
Route::get('/edit_prasarana/{id}', 'PrasaranaController@edit');
Route::post('/edit_prasarana/{id}', 'PrasaranaController@update');
Route::get('/hapus_prasarana/{id}', 'PrasaranaController@destroy');

//buku tamu

Auth::routes();
Route::get('/tampil_contact', 'HomeController@tampil');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/visi_misi', function () {
	return view('visiMisi');
});

Route::get('/sejarah', function () {
	return view('sejarah');
});

Route::get('/peta', function () {
	return view('peta');
});

Route::get('/contact', function () {
	return view('contact');
});

Route::post('/contact', 'HomeController@contact');


Route::get('/fasilitas', 'PrasaranaController@fasilitas');


Route::get('/struktur','TenagaPendidikController@tampilStruktur'); 

Route::get('/profil', function () {
	return view('profil');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
