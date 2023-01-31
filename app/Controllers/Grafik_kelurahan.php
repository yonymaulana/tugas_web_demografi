<?php

namespace App\Controllers;
use Config\Services;
use App\Models\Grafik_model;

class Grafik_kelurahan extends BaseController
{
    public function index()
    {
        $data = [
            'location'     => 'grafik_kelurahan'
        ];

        return view('grafik_kelurahan', $data);
    }

    public function grafik_kelurahan_json(){  
        $m_grafik        = new Grafik_model();
        $rs = $m_grafik->grafik_kelurahan_json();
        $data = array();
		$no = 1;
		
		foreach($rs as $r) {	
		$kelurahan = $r->kelurahan;  
		$jumlah = $r->jumlah;
		
			 $data[] = array(
				"kelurahan" => $kelurahan,
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