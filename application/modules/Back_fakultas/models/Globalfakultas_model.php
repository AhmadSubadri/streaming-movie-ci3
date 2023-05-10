<?php

class Globalfakultas_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function Get_Data_Dosen()
    {
        $this->db->select('*, tb_dosen.id as kd_dosen, tb_dosen.kode_prodi as kd_prodi')->from('tb_dosen')
            ->join('tb_prodi', 'tb_prodi.kode_prodi = tb_dosen.kode_prodi')
            ->join('tb_fakultas', 'tb_fakultas.kode_fak = tb_prodi.kode_fak')
            ->where('tb_fakultas.nama_fak', $_SESSION['nama_users'])
            ->order_by('nama_dosen', 'ASC');
        $query = $this->db->get();
        return $query;
    }

    public function Get_Data_Dosen_Filter($kode_prodi)
    {
        $this->db->select('*, tb_dosen.id as kd_dosen, tb_dosen.kode_prodi as kd_prodi')->from('tb_dosen')
            ->join('tb_prodi', 'tb_prodi.kode_prodi = tb_dosen.kode_prodi')
            ->join('tb_fakultas', 'tb_fakultas.kode_fak = tb_prodi.kode_fak')
            ->where('tb_fakultas.nama_fak', $_SESSION['nama_users'])
            ->where('tb_prodi.kode_prodi', $kode_prodi)
            ->order_by('nama_dosen', 'ASC');
        $query = $this->db->get();
        return $query;
    }

    public function Get_Data_Prodi()
    {
        $this->db->select('*, tb_prodi.id as idprodi, tb_prodi.kode_fak as kodefak')->from('tb_prodi')
        ->join('tb_fakultas', 'tb_prodi.kode_fak = tb_fakultas.kode_fak')
        ->where('tb_fakultas.nama_fak', $_SESSION['nama_users'])
        ->order_by('tb_prodi.nama_prodi', 'DESC');
        $query = $this->db->get();
        return $query;
    }

}
