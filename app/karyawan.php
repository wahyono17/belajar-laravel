<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class karyawan extends Model
{
    //
    protected $table ="karyawan2";
    protected $fillable = ['nama','jabatan','umur','alamat'];
}
