<?php

class Matakuliah_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function Index()
    {
        $this->db->select('tb_matakuliah.id as id, tb_matakuliah.tahun_kurikulum as tahun_kurikulum, tb_matakuliah.kode_mk as kode_mk, tb_matakuliah.nama_mk as nama_mk, tb_matakuliah.sks_mk as sks_mk, tb_matakuliah.kode_prodi as kode_prodi, tb_prodi.nama_prodi as nama_prodi, tb_matakuliah.type_mk as type_mk')
        ->from('tb_matakuliah')
        ->join('tb_prodi', 'tb_prodi.kode_prodi = tb_matakuliah.kode_prodi')
        ->order_by('tb_matakuliah.kode_prodi', 'DESC');
        $query = $this->db->get();
        return $query;
    }

    // Fungsi untuk get tb_matakuliah berdasarkan filter kode prodi
    public function Filter_Prodi($kode_prodi){
        $this->db->select('tb_matakuliah.id as id, tb_matakuliah.tahun_kurikulum as tahun_kurikulum, tb_matakuliah.kode_mk as kode_mk, tb_matakuliah.nama_mk as nama_mk, tb_matakuliah.sks_mk as sks_mk, tb_matakuliah.kode_prodi as kode_prodi, tb_prodi.nama_prodi as nama_prodi, tb_matakuliah.type_mk as type_mk')
        ->from('tb_matakuliah')
        ->join('tb_prodi', 'tb_prodi.kode_prodi = tb_matakuliah.kode_prodi')
        ->order_by('tb_matakuliah.kode_prodi', 'DESC')
        ->where('tb_matakuliah.kode_prodi', $kode_prodi);
        $query = $this->db->get();
        return $query;
    }

    // Fungsi untuk get nama prodi
    public function Get_Nama_Prodi()
    {
        $this->db->select('*')->from('tb_prodi');
        $query = $this->db->get();
        return $query;
    }

    public function Get_Kurikulum()
    {
        $this->db->select('*')->from('tb_kurikulum')->order_by('tahun_kurikulum', 'DESC');
        $query = $this->db->get();
        return $query;
    }

    public function Insert($data)
    {
        return $this->db->insert('tb_matakuliah', $data);
    }

    public function Update($data, $id)
    {
        return $this->db->update('tb_matakuliah', $data, ['id' => $id]);
    }

    public function Delete($id)
	{
		return $this->db->delete('tb_matakuliah', ['id' => $id]);
	}
}
