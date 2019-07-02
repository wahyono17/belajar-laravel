<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nama extends Model
{
    //
    protected $table = "namas";
    public function passport()
    {
        return $this->hasOne(passport::class);
    }
}
