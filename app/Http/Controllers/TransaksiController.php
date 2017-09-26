<?php
namespace App\Http\Controllers;

class TransaksiController extends Controller{
    public function tampil_transaksi(){
        return view("transaksi");
    }
}