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

    public function get_prodi()
    {
        $this->db->select('*')->from('tb_prodi')->order_by('nama_prodi', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_kurikulum()
    {
        $this->db->select('*')->from('tb_kurikulum')->order_by('nama_kurikulum', 'ASC')->where('status', '1');
        $query = $this->db->get();
        return $query->result();
    }

    public function search_data($query)
    {
        $this->db->select('*');
        $this->db->from('tb_matakuliah')
            ->where('kode_prodi', $query);
        $query = $this->db->get();
        return $query->result();
    }

    public function insertMatakuliah($data)
    {
        $this->db->insert_batch('tb_kurikulum_prodi', $data);
    }
}
