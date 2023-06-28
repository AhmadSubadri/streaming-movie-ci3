<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Video_model extends CI_Model
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
                'field' => 'judul',
                'label' => 'Title',
                'rules' => 'required'
            ],
            [
                'field' => 'deskripsi',
                'label' => 'Description',
                'rules' => 'required'
            ],
            [
                'field' => 'durasi',
                'label' => 'Duration',
                'rules' => 'required'
            ],
            [
                'field' => 'url_video',
                'label' => 'URL',
                'rules' => 'required'
            ],
            [
                'field' => 'slug',
                'label' => 'slug',
                'rules' => 'required'
            ],
        ];
    }

    public function getVideos()
    {
        // Mendapatkan daftar semua video
        $query = $this->db->select('*, tb_video.id as idvideo')->from('tb_video')->join('tb_kategori', 'tb_kategori.id = tb_video.kategori_id ');
        $query = $this->db->get();
        return $query->result();
    }

    public function createVideo($data)
    {
        // Menyimpan video baru ke database
        return $this->db->insert('tb_video', $data);
    }

    public function getVideoById($id)
    {
        // Mendapatkan informasi video berdasarkan ID
        $query = $this->db->get_where('tb_video', array('id' => $id));
        return $query->row();
    }

    public function updateVideo($id, $data)
    {
        // Mengupdate video berdasarkan ID
        $this->db->where('id', $id);
        $this->db->update('tb_video', $data);
    }

    public function deleteVideo($id)
    {
        // Menghapus video berdasarkan ID
        $this->db->where('id', $id);
        $this->db->delete('tb_video');
    }
}
