<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PegawaiController extends Controller
{
    public function index(){
        //get data from db
        $karyawan = DB::table('karyawan')->get();
        //tampil ke viw
        return view('index',[karyawan=>$karyawan]);
    }
}
