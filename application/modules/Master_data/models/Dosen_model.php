<?php

class Dosen_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function Index()
    {
        $this->db->select('*, tb_dosen.id as iddosen')->from('tb_dosen')->order_by('tb_dosen.nama_dosen', 'DESC')
            ->join('tb_prodi', 'tb_prodi.kode_prodi = tb_dosen.kode_prodi');
        $query = $this->db->get();
        return $query;
    }

    public function Get_Kode_PT()
    {
        $this->db->select('*')->from('tb_pt');
        $query = $this->db->get();
        return $query->row();
    }

    public function Get_Prodi()
    {
        $this->db->select('*')->from('tb_prodi');
        $query = $this->db->get();
        return $query->result();
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
