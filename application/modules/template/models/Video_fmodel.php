<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Video_fmodel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getVideos()
    {
        $this->db->select('tb_video.*, tb_kategori.*, COUNT(tb_episode.id) AS jumlah_episode, COUNT(tb_komentar.id) AS jumlah_komentar, COUNT(DISTINCT tb_riwayat_tontonan.pengguna_id) + COUNT(DISTINCT tb_riwayat_tontonan_tanpa_akun.id) AS jumlah_penonton');
        $this->db->from('tb_video');
        $this->db->join('tb_episode', 'tb_episode.video_id = tb_video.uniq_id');
        $this->db->join('tb_komentar', 'tb_komentar.video_id = tb_video.id', 'left');
        $this->db->join('tb_kategori', 'tb_kategori.id = tb_video.kategori_id', 'left');
        $this->db->join('tb_riwayat_tontonan', 'tb_riwayat_tontonan.video_id = tb_video.id', 'left');
        $this->db->join('tb_riwayat_tontonan_tanpa_akun', 'tb_riwayat_tontonan_tanpa_akun.video_id = tb_video.id', 'left');
        $this->db->group_by('tb_video.id');
        $this->db->order_by('jumlah_penonton', 'desc');
        $this->db->order_by('tb_video.tanggal_unggah', 'desc');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_komentar($video_id)
    {
        $this->db->where('video_id', $video_id);
        $query = $this->db->get('tb_komentar');
        return $query->result();
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
