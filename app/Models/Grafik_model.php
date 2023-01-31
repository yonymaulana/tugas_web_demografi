<?php

namespace App\Models;

use CodeIgniter\Model;

class Grafik_model extends Model
{
	

    public function grafik_gender_json(){ 
		$query = $this->db->query("select jenis_kelamin,count(nik) as jumlah from tab_penduduk group by jenis_kelamin");
	    return $query->getResult();
	}
   
	public function grafik_agama_json(){ 
		$query = $this->db->query("select b.agama, count(a.agama) as jumlah from tab_penduduk as a
		left join tab_agama as b on a.agama = b.id GROUP BY agama");
	    return $query->getResult();
	}
	public function grafik_pendapatan_json(){ 
		$query = $this->db->query("select c.pendapatan, count(a.pendapatan) as jumlah from tab_penduduk as a
		left join tab_pendapatan as c on a.pendapatan = c.id GROUP BY pendapatan");
	    return $query->getResult();
	}

	public function grafik_pendidikan_json(){
		$query = $this->db->query("select d.pendidikan, count(a.pendidikan) as jumlah from tab_penduduk as a
		left join tab_pendidikan as d on a.pendidikan = d.id GROUP BY pendidikan");
		return $query->getResult();
	}

	public function grafik_kelurahan_json(){
		$query = $this->db->query("select e.kelurahan, count(a.kelurahan) as jumlah from tab_penduduk as a
		left join tab_kelurahan as e on a.kelurahan = e.id GROUP BY kelurahan");
		return $query->getResult();
	}
};