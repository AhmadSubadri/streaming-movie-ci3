<?php

class Kurikulum_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function Index()
    {
        $this->db->select('*, tb_prodi.nama_prodi as nama_prodi, tb_kurikulum.id as id_kur')->from('tb_kurikulum')->order_by('tb_kurikulum.id', 'DESC')
            ->join('tb_prodi', 'tb_prodi.kode_prodi = tb_kurikulum.kode_prodi');
        $query = $this->db->get();
        return $query;
    }

    public function get_prodi()
    {
        $this->db->select('*')->from('tb_prodi')->order_by('nama_prodi', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }

    public function Insert($data)
    {
        return $this->db->insert('tb_kurikulum', $data);
    }

    public function Update($data, $id)
    {
        return $this->db->update('tb_kurikulum', $data, ['id' => $id]);
    }

    public function Delete($id)
    {
        # code...
        return $this->db->delete('tb_kurikulum', ['id' => $id]);
    }
}
