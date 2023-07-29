<?php
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
            'videos' => $this->m_video->getVideos()
        );
        $this->load->view('template/head', $data);
        $this->load->view('template/slide', $data);
        $this->load->view('template/home', $data);
        $this->load->view('template/footer', $data);
    }

    function read($slug)
    {
        $video = $this->m_video->get_detail_Videos($slug);
        $data = array(
            'title' => 'Home',
            'videos' => $this->m_video->get_detail_Videos($slug),
            'comentar' => $this->m_video->get_komentar($video->id),
            'episode' => $this->m_video->get_episode($video->uniq_id)
        );
        $this->load->view('template/head', $data);
        $this->load->view('template/video/anime-watching', $data);
        $this->load->view('template/footer', $data);
    }
}
