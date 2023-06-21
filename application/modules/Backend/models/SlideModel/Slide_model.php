<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Slide_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getSlides()
    {
        // Mendapatkan daftar semua slide
        $query = $this->db->get('Slide');
        return $query->result();
    }

    public function createSlide($data)
    {
        // Menyimpan slide baru ke database
        $this->db->insert('Slide', $data);
    }

    public function getSlideById($id)
    {
        // Mendapatkan informasi slide berdasarkan ID
        $query = $this->db->get_where('Slide', array('id' => $id));
        return $query->row();
    }

    public function updateSlide($id, $data)
    {
        // Mengupdate slide berdasarkan ID
        $this->db->where('id', $id);
        $this->db->update('Slide', $data);
    }

    public function deleteSlide($id)
    {
        // Menghapus slide berdasarkan ID
        $this->db->where('id', $id);
        $this->db->delete('Slide');
    }
}
