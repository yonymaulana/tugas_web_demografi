<?php

namespace App\Controllers;
use Config\Services;
use App\Models\Grafik_model;

class Grafik_pendidikan extends BaseController
{
    public function index()
    {
        $data = [
            'location'     => 'grafik_pendidikan'
        ];

        return view('grafik_pendidikan', $data);
    }

    public function grafik_pendidikan_json(){  
        $m_grafik        = new Grafik_model();
        $rs = $m_grafik->grafik_pendidikan_json();
        $data = array();
		$no = 1;
		
		foreach($rs as $r) {	
		$pendidikan = $r->pendidikan;  
		$jumlah = $r->jumlah;
		
			 $data[] = array(
				"pendidikan" => $pendidikan,
                "jumlah" => $jumlah
			 );
			 $no++;
		}

		$output = array(
			   "data" => $data
		  );
		echo json_encode($data);
	}


}