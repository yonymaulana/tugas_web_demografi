<?php

namespace App\Models;

use CodeIgniter\Model;

class Dashboard_model extends Model
{
	
    public function dashboard_penduduk(){ 
		$query = $this->db->query("select nik ,count(nik) as jumlah_penduduk from tab_penduduk");
	    return $query->getRowArray();
	}
	public function dashboard_pendidikan(){ 
		$query = $this->db->query("select id ,count(id) as jumlah_pendidikan from tab_pendidikan");
	    return $query->getRowArray();
	}
	public function dashboard_agama(){ 
		$query = $this->db->query("select id ,count(id) as jumlah_agama from tab_agama");
	    return $query->getRowArray();
	}
}
