<?php
namespace App\Http\Controllers;

class LaporanController extends Controller{
    public function tampil_laporan(){
        return view("laporan");
    }
}