<?php

class Dashboard_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    function TotalVideo()
    {
        $this->db->select('*')->from('tb_video');
        $query = $this->db->get();
        return $query->result();
    }

    function TotalAdmin()
    {
        $this->db->select('*')->from('tb_admin');
        $query = $this->db->get();
        return $query->result();
    }

    function TotalKategori()
    {
        $this->db->select('*')->from('tb_kategori');
        $query = $this->db->get();
        return $query->result();
    }

    function TotalUser()
    {
        $this->db->select('*')->from('tb_pengguna');
        $query = $this->db->get();
        return $query->result();
    }
}
