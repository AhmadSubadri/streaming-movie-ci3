<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Category_model extends CI_Model
{
    function getCategory()
    {
        $this->db->select('*')->from('tb_kategori')->order_by('kategori', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }
}
