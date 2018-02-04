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
    return view('index');
});

Route::get('/daftar', 'RegisterController@daftar');
Route::post('/sdaftar', 'RegisterController@simpan_pendaftaran');


Route::get('/login','LoginController@index');
Route::post('/login','LoginController@proses_login');
Route::post('/logout','LoginController@logout');
Route::get('/home_user','LoginController@home_user');
Route::get('/upload_cv','LoginController@upload_cv');


Route::get('/admin','AdminController@dashboard')->middleware('admins');
Route::get('/manajemen_cv','AdminController@kelola_cv')->middleware('admins');
Route::get('/manajemen_user','AdminController@mnj_user')->middleware('admins');
Route::post('/save_admin','AdminController@daftar_admin')->middleware('admins');
Route::delete('/del_user/{id}','AdminController@delet_user')->middleware('admins');
Route::delete('/del_dok/{id}','AdminController@delet_dok')->middleware('admins');
Route::post('/update/{id}','AdminController@update_dok')->middleware('admins');



//upload controller
Route::post('/do_upload','UploadController@upload');

// Route::get('/home_user','UserController@index');
// Route::get('/upload_cv','UserController@upload_cv');



//Route::post('/user',)




