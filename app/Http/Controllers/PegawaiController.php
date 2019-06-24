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
        return view('index',['karyawan'=>$karyawan]);
    }

    public function tambah(){
        return view('tambah');
    }

    public function post(Request $request){
        DB::table('karyawan')->insert([
            'nama'=>$request->nama,
            'jabatan'=>$request->jabatan,
            'umur'=>$request->umur,
            'alamat'=>$request->alamat
        ]);
        return redirect('/pegawai');
    }

    public function edit($id){
        //get where id
        $karyawan = DB::table('karyawan')->where('id',$id)->get();
        //parsing to view data yang di dapat
        return view('edit',['karyawan'=>$karyawan]);
    }

    public function update(Request $request){
        DB::table('karyawan')->where('id',$request->id)->update([
            'nama'=>$request->nama,
            'jabatan'=>$request->jabatan,
            'umur'=>$request->umur,
            'alamat'=>$request->alamat
        ]);
        return redirect('/pegawai');
    }
}
