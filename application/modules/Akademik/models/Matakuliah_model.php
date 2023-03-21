<?php

class Matakuliah_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function Index()
    {
        $this->db->select('matakuliah.id as id, matakuliah.kode_mk as kode_mk, matakuliah.nama_mk as nama_mk, matakuliah.sks_mk as sks_mk, matakuliah.kode_prodi as kode_prodi, tb_prodi.nama_prodi as nama_prodi, matakuliah.type_mk as type_mk')->from('matakuliah')->join('tb_prodi', 'tb_prodi.kode_prodi = matakuliah.kode_prodi')->order_by('matakuliah.kode_prodi', 'DESC');
        $query = $this->db->get();
        return $query;
    }

    public function Get_Nama_Prodi()
    {
        $this->db->select('*')->from('tb_prodi');
        $query = $this->db->get();
        return $query;
    }

    public function Insert($data)
    {
        return $this->db->insert('matakuliah', $data);
    }

    public function Update($data, $id)
    {
        return $this->db->update('matakuliah', $data, ['id' => $id]);
    }

    public function Delete($id)
	{
		return $this->db->delete('matakuliah', ['id' => $id]);
	}
}
