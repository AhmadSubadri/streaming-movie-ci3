<?php

use SebastianBergmann\Environment\Console;

class Home extends MY_controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Video_fmodel', 'm_video');
    }

    function index()
    {
        $data = array(
            'title' => 'Home',
            'videos' => $this->m_video->getVideos(),
            'slide' => $this->m_video->getSlides(),
        );
        $this->load->view('template/head', $data);
        $this->load->view('template/slide', $data);
        $this->load->view('template/home', $data);
        $this->load->view('template/footer', $data);
    }

    function read($slug)
    {
        $video = $this->m_video->get_detail_Videos($slug);
        $tontonriwayat = [
            'video_id' => $video->id,
            'tanggal_tonton' => date('Y-m-d')
        ];
        $this->m_video->insertGlobal('tb_riwayat_tontonan_tanpa_akun', $tontonriwayat);
        $data = array(
            'title' => 'Home',
            'videos' => $this->m_video->get_detail_Videos($slug),
            'comentar' => $this->m_video->get_komentar($video->id),
            'like' => $this->m_video->get_likes($video->id),
            'dislike' => $this->m_video->get_dislikes($video->id),
            'episode' => $this->m_video->get_episode($video->uniq_id)
        );
        $this->load->view('template/head', $data);
        $this->load->view('template/video/anime-watching', $data);
        $this->load->view('template/footer', $data);
    }

    public function save_comment_ajax()
    {
        $commentData = array(
            'video_id' => $this->input->post('video_id'), // ID video terkait komentar
            'nama' => $this->input->post('nama'),
            'isi' => $this->input->post('komentar'),
        );

        $comment_id = $this->m_video->insertGlobal('tb_komentar', $commentData);
        echo $comment_id;
    }

    public function get_new_comments_ajax()
    {
        $last_comment_id = $this->input->post('last_comment_id');
        $video_id = $this->input->post('video_id'); // ID video terkait komentar
        $new_comments = $this->m_video->get_new_komentar($video_id, $last_comment_id);
        echo json_encode($new_comments);
    }

    public function like()
    {
        $video_id = $this->input->post('video_id');
        $this->m_video->updateLikes($video_id, 'like');
        $currentLikeCount = $this->m_video->get_likes($video_id);
        // echo $currentLikeCount;
        $newLikeCount = $currentLikeCount + 1;
        $response = array(
            'status' => 'success',
            'likeCount' => $newLikeCount
        );
        echo json_encode($response);
    }

    public function dislike()
    {
        $video_id = $this->input->post('video_id');
        $this->m_video->updateLikes($video_id, 'dislike');
        $currentDislikeCount = $this->m_video->get_dislikes($video_id);
        $newDislikeCount = $currentDislikeCount + 1;
        $response = array(
            'status' => 'success',
            'dislikeCount' => $newDislikeCount
        );
        echo json_encode($response);
    }
}
