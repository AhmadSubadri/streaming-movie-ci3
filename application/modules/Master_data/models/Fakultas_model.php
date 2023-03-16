<?php

class Fakultas_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function rules()
    {
        return [
            [
                'field' => 'kode_fak',
                'label' => 'Kode Fakultas',
                'rules' => 'required'
            ],
            [
                'field' => 'nama_fak',
                'label' => 'Nama Fakultas',
                'rules' => 'required'
            ],
        ];
    }

    public function Index()
    {
        $this->db->select('*')->from('tb_fakultas')->order_by('nama_fak', 'DESC');
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
        return $this->db->insert('tb_fakultas', $data);
    }

    public function Update($data, $id)
    {
        return $this->db->update('tb_fakultas', $data, ['id' => $id]);
    }
}