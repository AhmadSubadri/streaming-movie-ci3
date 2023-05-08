<?php

class Globalprodi_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function Get_Data_Mahasiswa_ByProdi()
    {
        $this->db->select('*')->from('tb_mahasiswa')->order_by('nama_mahasiswa', 'ASC')
            ->join('tb_prodi', 'tb_prodi.kode_prodi = tb_mahasiswa.kode_prodi')->where('tb_prodi.nama_prodi', $_SESSION['nama_users']);
        $query = $this->db->get();
        return $query;
    }

    public function Get_Data_Dosen_ByProdi()
    {
        $this->db->select('*, tb_dosen.id as kd_dosen, tb_dosen.kode_prodi as kd_prodi')->from('tb_dosen')->order_by('nama_dosen', 'ASC')
            ->join('tb_prodi', 'tb_prodi.kode_prodi = tb_dosen.kode_prodi')->where('tb_prodi.nama_prodi', $_SESSION['nama_users']);
        $query = $this->db->get();
        return $query;
    }
}
