<?php

class Mahasiswa_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function Index()
    {
        $this->db->select('*')->from('tb_mahasiswa')->order_by('nama_mahasiswa', 'DESC')
            ->join('tb_prodi', 'tb_prodi.kode_prodi = tb_mahasiswa.kode_prodi');
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
        return $this->db->insert('tb_mahasiswa', $data);
    }

    public function Update($data, $id)
    {
        return $this->db->update('tb_mahasiswa', $data, ['id_mahasiswa ' => $id]);
    }

    public function Delete($id)
    {
        return $this->db->delete('tb_mahasiswa', ['id_mahasiswa ' => $id]);
    }
}
