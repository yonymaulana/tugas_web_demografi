<?php

namespace App\Models;

use CodeIgniter\Model;

class Penduduk_model extends Model
{
    protected $table              = 'tab_penduduk';
    protected $primaryKey         = 'nik';

    public function data_penduduk_json(){ 
		$query = $this->db->query("select a.nik,a.no_kk,a.nama_lengkap,a.tempat_lahir,
		a.tgl_lahir,a.jenis_kelamin,b.pendidikan,c.pendapatan,
		d.agama,a.alamat_lengkap,e.kelurahan,a.penduduk_asli from tab_penduduk as a 
		left join tab_pendidikan as b on a.pendidikan = b.id
		left join tab_pendapatan as c on a.pendapatan = c.id
		left join tab_agama as d on a.agama = d.id
		left join tab_kelurahan as e on a.kelurahan = e.id");
	    return $query->getResult();
	}


	public function pro_add($data)
	{
		$builder = $this->db->table('tab_penduduk');
		$builder->insert($data);
	}

	public function penduduk_update($nik)
	{
		$query = $this->db->query("select * from tab_penduduk where nik = '$nik' ");
		return $query->getResult();
	}

	public function pro_update($data_update)
	{
		$builder = $this->db->table('tab_penduduk');
		$builder->where('nik', $data_update['nik']);
		$builder->update($data_update);
	}

	public function opt_agama()
	{
		$query = $this->db->query("select * from tab_agama");
		return $query->getResult();
	}

	public function opt_pendapatan()
	{
		$query = $this->db->query("select * from tab_pendapatan");
		return $query->getResult();
	}

	public function opt_pendidikan()
	{
		$query = $this->db->query("select * from tab_pendidikan");
		return $query->getResult();
	}

	public function opt_kelurahan()
	{
		$query = $this->db->query("select * from tab_kelurahan");
		return $query->getResult();
	}


   
}
