<?php
class Home extends MY_controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $data = array(
            'title' => 'Home'
        );
        $this->load->view('template/head', $data);
        $this->load->view('template/slide', $data);
        $this->load->view('template/home', $data);
        $this->load->view('template/footer', $data);
    }
}
