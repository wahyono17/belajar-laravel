<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\nama;
class NamaController extends Controller
{
    //
    public function index(){
        $nama = nama::all();
        return view ('nama',['nama'=>$nama]);
    }
}
