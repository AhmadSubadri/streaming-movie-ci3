<?php

class Kurikulumprodi_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function GetProdi_ByName()
    {
        $nama_prodi = $this->session->userdata('nama_users');
        $this->db->select('*')->from('tb_prodi')
            ->where('nama_prodi', $nama_prodi);
        $query = $this->db->get();
        return $query->row();
    }

    public function Get_Kurikulum($kode_prodi)
    {
        $this->db->select('*')->from('tb_kurikulum')
            ->where('kode_prodi', $kode_prodi)
            ->order_by('status', 'DESC');
        $query = $this->db->get();
        return $query;
    }
}