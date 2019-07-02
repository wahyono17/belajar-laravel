<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class passport extends Model
{
    //
    protected $table = "passports";
    public function nama()
    {
        return $this->belongsTo(nama::class);
    }
}
