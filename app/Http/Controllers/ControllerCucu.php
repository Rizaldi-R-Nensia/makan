<?php
namespace App\Http\Controllers;

class ControllerCucu extends Controller{
    public function tampil_pegawai(){
        return view("DaftarPegawai");
    }

    public function tampil_transaksi_pegawai(){
        return view("HasilTransaksi");
    }
}