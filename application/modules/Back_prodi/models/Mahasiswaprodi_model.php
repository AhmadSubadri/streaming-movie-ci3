<?php

class Mahasiswaprodi_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->db->select('*')->from('tb_mahasiswa')->order_by('nama_mahasiswa', 'ASC')
        ->join('tb_prodi', 'tb_prodi.kode_prodi = tb_mahasiswa.kode_prodi');
        $query = $this->db->get();
        return $query;
    }
}