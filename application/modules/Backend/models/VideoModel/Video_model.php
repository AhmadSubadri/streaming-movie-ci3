<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Video_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getVideos()
    {
        // Mendapatkan daftar semua video
        $query = $this->db->get('Video');
        return $query->result();
    }

    public function createVideo($data)
    {
        // Menyimpan video baru ke database
        $this->db->insert('Video', $data);
    }

    public function getVideoById($id)
    {
        // Mendapatkan informasi video berdasarkan ID
        $query = $this->db->get_where('Video', array('id' => $id));
        return $query->row();
    }

    public function updateVideo($id, $data)
    {
        // Mengupdate video berdasarkan ID
        $this->db->where('id', $id);
        $this->db->update('Video', $data);
    }

    public function deleteVideo($id)
    {
        // Menghapus video berdasarkan ID
        $this->db->where('id', $id);
        $this->db->delete('Video');
    }
}
