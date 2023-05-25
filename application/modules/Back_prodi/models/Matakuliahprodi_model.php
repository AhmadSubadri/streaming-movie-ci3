<?php

class Matakuliahprodi_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function Get_matakuliah($kode_prodi)
    {
        $this->db->select('*')->from('tb_matakuliah')
            ->join('tb_dosen', 'tb_dosen.id = tb_matakuliah.kode_dosen')
            ->where('tb_matakuliah.kode_prodi', $kode_prodi)
            ->order_by('tb_matakuliah.nama_mk', 'ASC');
        $query = $this->db->get();
        return $query;
    }

    public function GetProdi_ByName()
    {
        $nama_prodi = $this->session->userdata('nama_users');
        $this->db->select('*')->from('tb_prodi')
            ->where('nama_prodi', $nama_prodi);
        $query = $this->db->get();
        return $query->row();
    }
}
