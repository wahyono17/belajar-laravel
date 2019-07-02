<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class karyawan extends Model
{
    //
    protected $table ="pegawai";
    protected $fillable = ['nama','alamat'];
}
