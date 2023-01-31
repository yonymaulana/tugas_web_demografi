<?php

namespace App\Controllers;
use Config\Services;
use App\Models\Grafik_model;

class Grafik_pendapatan extends BaseController
{
    public function index()
    {
        $data = [
            'location'     => 'grafik_pendapatan'
        ];

        return view('grafik_pendapatan', $data);
    }

    public function grafik_pendapatan_json(){  
        $m_grafik        = new Grafik_model();
        $rs = $m_grafik->grafik_pendapatan_json();
        $data = array();
		$no = 1;
		
		foreach($rs as $r) {	
		$pendapatan = $r->pendapatan;  
		$jumlah = $r->jumlah;
		
			 $data[] = array(
				"pendapatan" => $pendapatan,
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