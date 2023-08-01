<?php

use JetBrains\PhpStorm\Internal\ReturnTypeContract;

defined('BASEPATH') or exit('No direct script access allowed');

class Video_fmodel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getSlides()
    {
        // Mendapatkan daftar semua slide
        $query = $this->db->get('tb_Slide');
        return $query->result();
    }

    public function getVideos()
    {
        $this->db->select('tb_video.*, tb_video.id as idvideo, tb_kategori.*, COUNT(tb_episode.id) AS jumlah_episode');
        $this->db->from('tb_video');
        $this->db->join('tb_episode', 'tb_episode.video_id = tb_video.uniq_id');
        $this->db->join('tb_kategori', 'tb_kategori.id = tb_video.kategori_id');
        $this->db->group_by('tb_video.id');
        $this->db->order_by('tb_video.tanggal_unggah', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_komentar($video_id)
    {
        $this->db->where('video_id', $video_id)->order_by('id', 'DESC')->limit(5);
        $query = $this->db->get('tb_komentar');
        return $query->result();
    }

    public function get_new_komentar($video_id, $last_comment_id)
    {
        $this->db->where('video_id', $video_id);
        $this->db->where('id >', $last_comment_id);
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('tb_komentar');
        return $query->result();
    }

    public function updateLikes($video_id, $type)
    {
        $data = $this->db->get_where('tb_penonton', ['video_id' => $video_id])->row();

        if ($data) {
            // Jika data dengan video_id ditemukan di tb_penonton, lakukan update sesuai dengan tipe (like atau dislike)
            if ($type === 'like') {
                $this->db->set('suka', $data->suka + 1);
            } elseif ($type === 'dislike') {
                $this->db->set('tidak_suka', $data->tidak_suka + 1);
            }

            $this->db->where('video_id', $video_id);
            $this->db->update('tb_penonton');
        } else {
            // Jika data dengan video_id tidak ditemukan di tb_penonton, tambahkan data baru
            $insert_data = [
                'video_id' => $video_id,
                'suka' => $type === 'like' ? 1 : 0,
                'tidak_suka' => $type === 'dislike' ? 1 : 0
            ];
            $this->db->insert('tb_penonton', $insert_data);
        }
    }

    public function get_likes($video_id)
    {
        $this->db->select('suka');
        $this->db->where('video_id', $video_id);
        $query = $this->db->get('tb_penonton');
        $result = $query->row();

        if ($result) {
            return $result->suka;
        }

        return 0;
    }

    // Fungsi untuk mendapatkan jumlah tidak suka (dislikes) dari video tertentu
    public function get_dislikes($video_id)
    {
        $this->db->select('tidak_suka');
        $this->db->where('video_id', $video_id);
        $query = $this->db->get('tb_penonton');
        $result = $query->row();

        if ($result) {
            return $result->tidak_suka;
        }

        return 0;
    }

    function insertGlobal($tb, $data)
    {
        return $this->db->insert($tb, $data);
    }

    public function get_episode($uniq_id)
    {
        $this->db->where('video_id', $uniq_id);
        $query = $this->db->get('tb_episode');
        return $query->result();
    }

    public function get_detail_Videos($slug)
    {
        $this->db->where('slug', $slug);
        $query = $this->db->get('tb_video');
        return $query->row();
    }
}
