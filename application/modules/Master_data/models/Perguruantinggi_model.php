<?php

class Perguruantinggi_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function rules()
    {
        return [
            [
                'field' => 'kode_pt',
                'label' => 'Kode PT',
                'rules' => 'required|numeric'
            ],
            [
                'field' => 'email_pt',
                'label' => 'Email PT',
                'rules' => 'required|valid_email'
            ],
            [
                'field' => 'nama_pt',
                'label' => 'Nama PT',
                'rules' => 'required'
            ],
            [
                'field' => 'awal_berdiri_pt',
                'label' => 'Tahun Berdiri PT',
                'rules' => 'required'
            ],
            [
                'field' => 'website_pt',
                'label' => 'Website PT',
                'rules' => 'required'
            ],
            [
                'field' => 'no_telepon_pt',
                'label' => 'Nomor Telepon PT',
                'rules' => 'required'
            ],
            [
                'field' => 'fax_pt',
                'label' => 'Fax PT',
                'rules' => 'required'
            ],
            [
                'field' => 'alamat_pt',
                'label' => 'Alamat PT',
                'rules' => 'required'
            ],
            [
                'field' => 'kode_pos_pt',
                'label' => 'Kode Post PT',
                'rules' => 'required'
            ],
        ];
    }

    public function Index()
    {
        $this->db->select('*')->from('tb_pt');
        $query = $this->db->get()->row();
        return $query;
    }

    public function Get_Data_Perguruan_tinggi_ByID($id)
    {
        $this->db->select('*')->from('tb_pt')->where('id_pt', $id);
        $query = $this->db->get()->row();
        return $query;
    }

    public function insert($data)
    {
        return $this->db->insert('tb_pt', $data);
    }

    public function update($data, $id)
    {
        return $this->db->update('tb_pt', $data, ['id_pt' => $id]);
    }
}