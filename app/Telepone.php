<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telepone extends Model
{
    //
    protected $table = "telepon";
 
    public function pengguna()
    {
    	return $this->belongsTo(nama::class);
    }
}
