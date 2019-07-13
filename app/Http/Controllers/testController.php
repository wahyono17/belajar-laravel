<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    public function satu(){
        $coba = collect([1, 2, 3, 4])->first(function ($value, $key) {
            return $value > 2;
        });
        // 3
        //var_dump($coba);
    }
    
}
