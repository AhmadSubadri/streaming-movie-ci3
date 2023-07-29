<?php
class Categories extends MY_controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Category_model', 'm_category');
        $this->load->model('template/Video_fmodel', 'm_video');
    }

    function index()
    {
        $data = array(
            'title' => 'Home',
            'category' => $this->m_category->getCategory(),
            'videos' => $this->m_video->getVideos()
        );
        $this->load->view('template/head', $data);
        $this->load->view('categories/categories', $data);
        $this->load->view('template/footer', $data);
    }
}
