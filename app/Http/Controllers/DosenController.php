<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index(){
        $nama = "wahyono";
        $perkerjaan =["membuat data","semua troubleshoting","database enta dan lainnya"];
        return view('biodata',['nama'=>$nama,'pekerjaan'=>$perkerjaan]);
    }
}
