<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getCategories()
    {
        // Mendapatkan daftar semua kategori
        $query = $this->db->get('Category');
        return $query->result();
    }

    public function createCategory($data)
    {
        // Menyimpan kategori baru ke database
        $this->db->insert('Category', $data);
    }

    public function getCategoryById($id)
    {
        // Mendapatkan informasi kategori berdasarkan ID
        $query = $this->db->get_where('Category', array('id' => $id));
        return $query->row();
    }

    public function updateCategory($id, $data)
    {
        // Mengupdate kategori berdasarkan ID
        $this->db->where('id', $id);
        $this->db->update('Category', $data);
    }

    public function deleteCategory($id)
    {
        // Menghapus kategori berdasarkan ID
        $this->db->where('id', $id);
        $this->db->delete('Category');
    }
}
