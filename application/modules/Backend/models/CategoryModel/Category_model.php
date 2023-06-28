<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function rules()
    {
        return [
            [
                'field' => 'kategori',
                'label' => 'Category Name',
                'rules' => 'required'
            ],
        ];
    }

    public function getCategories()
    {
        // Mendapatkan daftar semua kategori
        $query = $this->db->get('tb_kategori');
        return $query->result();
    }

    public function createCategory($data)
    {
        // Menyimpan kategori baru ke database
        return $this->db->insert('tb_kategori', $data);
    }

    public function getCategoryById($id)
    {
        // Mendapatkan informasi kategori berdasarkan ID
        $query = $this->db->get_where('tb_kategori', array('id' => $id));
        return $query->row();
    }

    public function updateCategory($id, $data)
    {
        // Mengupdate kategori berdasarkan ID
        $this->db->where('id', $id);
        $this->db->update('tb_kategori', $data);
    }

    public function deleteCategory($id)
    {
        // Menghapus kategori berdasarkan ID
        $this->db->where('id', $id);
        $this->db->delete('tb_kategori');
    }
}
