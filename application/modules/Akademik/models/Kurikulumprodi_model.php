<?php

class Kurikulumprodi_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function Index()
    {
        $this->db->select('*,tb_prodi.nama_prodi as nama_prodi, tb_kurikulum.nama_kurikulum as nama_kurikulum, tb_kurikulum.kode_kurikulum as kode_kurikulum, tb_kurikulum_prodi.id as id_kp, tb_kurikulum_prodi.kode_prodi as kode_prodi')->from('tb_kurikulum_prodi')
            ->join('tb_kurikulum', 'tb_kurikulum.kode_kurikulum = tb_kurikulum_prodi.kode_kurikulum')
            ->join('tb_prodi', 'tb_prodi.kode_prodi = tb_kurikulum_prodi.kode_prodi')
            ->distinct('tb_kurikulum_prodi.kode_prodi');
        $query = $this->db->get();
        return $query;
    }

    // public function Get()
    // {
    //     $this->db->select_dis
    // }
}
