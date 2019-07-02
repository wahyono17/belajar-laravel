<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Karyawan;

class KaryawanController extends Controller
{
    public function index(){
        //ambil semua data dari model
        $karyawan = Karyawan::all();
        //return to index view
        return view('karyawan/index',['karyawan'=>$karyawan]);
    }

    public function tambah(){
        return view('karyawan/tambah');
    }

    public function post(Request $request){
        //validasi dulu
        $this->validate($request,[
            'nama' => 'required|min:5|max:20'
      
         ]);
        
        Karyawan::create([
            'nama'=>$request->nama,
            'alamat'=>$request->alamat
        ]);
        return redirect('/karyawan');
    }

    public function edit($id){
        $karyawan = Karyawan::find($id);
        return view('karyawan/edit',['karyawan'=>$karyawan]);
    }
    public function update($id, Request $request){
        $karyawan = Karyawan::find($id);
        $karyawan->nama = $request->nama;
        $karyawan->alamat = $request->alamat;
        $karyawan->save();
        return redirect('/karyawan');
    }

    public function hapus($id){
        $karyawan = Karyawan::find($id);
        //var_dump($karyawan);
        $karyawan->delete();
        return redirect('/karyawan');
    }
}
