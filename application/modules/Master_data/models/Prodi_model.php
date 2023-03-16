<?php

class Prodi_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function Index()
    {
        $this->db->select('*, tb_prodi.id as idprodi, tb_prodi.kode_fak as kodefak')->from('tb_prodi')
        ->join('tb_fakultas', 'tb_prodi.kode_fak = tb_fakultas.kode_fak')
        ->order_by('tb_prodi.nama_prodi', 'DESC');
        $query = $this->db->get();
        return $query;
    }

    public function Get_Kode_PT()
    {
        $this->db->select('*')->from('tb_pt');
        $query = $this->db->get();
        return $query->row();
    }

    public function Insert($data)
    {
        return $this->db->insert('tb_prodi', $data);
    }

    public function Update($data, $id)
    {
        return $this->db->update('tb_prodi', $data, ['id' => $id]);
    }

    public function Delete($id)
    {
        return $this->db->delete('tb_prodi', ['id' => $id]);
    }

    public function Get_Fakultas()
    {
        $this->db->select('*')->from('tb_fakultas');
        $query = $this->db->get();
        return $query;
    }
}