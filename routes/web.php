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

<<<<<<< HEAD
Route::get('/laporan',"LaporanController@tampil_laporan");
Route::get('/transaksi',"TransaksiController@tampil_transaksi");
=======
Route::get('/pegawai', "ControllerCucu@tampil_pegawai");
Route::get('/transaksi', "ControllerCucu@tampil_transaksi");
>>>>>>> 997e1eaa71e677913c368303e7c69c75e12869f1
