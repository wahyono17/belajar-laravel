<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class DikiController extends Controller
{
    public function data(){
		
		$parameter =[
			'nama' => 'Diki Alfarabi Hadi',
			'pekerjaan' => 'Programmer',
        ];
        unset($parameter['pekerjaan']);
		$enkripsi= Crypt::encrypt($parameter);
		echo "<a href='/data/".$enkripsi."'>Klik</a>";
	}
 
	public function data_proses($data){
		$data = Crypt::decrypt($data);
        var_dump($data);
        /*
		echo "Nama : " . $data['nama'];
		echo "<br/>";
        echo "Pekerjaan : " . $data['pekerjaan'];
        */
	}
}
