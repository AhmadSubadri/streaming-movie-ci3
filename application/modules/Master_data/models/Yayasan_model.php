<?php

class Yayasan_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function rules()
    {
        return [
            [
                'field' => 'kode_badan_hukum',
                'label' => 'Kode Badan Hukum',
                'rules' => 'required|numeric'
            ],
            [
                'field' => 'nama_badan_hukum',
                'label' => 'Nama Badan Hukum',
                'rules' => 'required'
            ],
            [
                'field' => 'telepon_yayasan',
                'label' => 'Telepon Yayasan',
                'rules' => 'required'
            ],
            [
                'field' => 'fax_yayasan',
                'label' => 'Fax Yayasan',
                'rules' => 'required|numeric'
            ],
            [
                'field' => 'alamat_yayasan',
                'label' => 'Alamat Yayasan',
                'rules' => 'required'
            ],
            [
                'field' => 'email_yayasan',
                'label' => 'Email Yayasan',
                'rules' => 'required|valid_email'
            ],
            [
                'field' => 'kota_yayasan',
                'label' => 'Kota Yayasan',
                'rules' => 'required'
            ],
            [
                'field' => 'pos_yayasan',
                'label' => 'Kode Pos Yayasan',
                'rules' => 'required'
            ],
            [
                'field' => 'awal_berdiri',
                'label' => 'Tahun Berdiri',
                'rules' => 'required'
            ],
        ];
    }

    public function Index()
    {
        $this->db->select('*')->from('tb_yayasan');
        $query = $this->db->get()->row();
        return $query;
    }

    public function Get_Data_Yayasan_ByID($id)
    {
        $this->db->select('*')->from('tb_yayasan')->where('id', $id);
        $query = $this->db->get()->row();
        return $query;
    }

    public function insert($data)
    {
        return $this->db->insert('tb_yayasan', $data);
    }

    public function update($data, $id)
    {
        return $this->db->update('tb_yayasan', $data, ['id' => $id]);
    }
}