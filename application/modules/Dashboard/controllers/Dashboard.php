<?php
class Dashboard extends MY_controller
{
    function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    function index()
    {
        $data = array(
            'title' => 'Dashboard'
        );
        $this->load->view('template/header', $data);
        $this->load->view('template/sidemenu', $data);
        $this->load->view('dashboard_view', $data);
        $this->load->view('template/footer', $data);
    }

    function notfound()
    {
        $this->load->view('404');
    }
}
