<?php
class Categories extends MY_controller
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
        $this->load->view('categories/categories', $data);
        $this->load->view('template/footer', $data);
    }
}
