<?php

class Dosen_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function Index()
    {
        $this->db->select('*')->from('tb_dosen')->order_by('nama_dosen', 'DESC');
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
        return $this->db->insert('tb_dosen', $data);
    }

    public function Update($data, $id)
    {
        return $this->db->update('tb_dosen', $data, ['id' => $id]);
    }

    public function Delete($id)
    {
        return $this->db->delete('tb_dosen', ['id' => $id]);
    }
}