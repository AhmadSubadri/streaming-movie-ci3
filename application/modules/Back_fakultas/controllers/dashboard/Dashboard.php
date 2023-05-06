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
        $this->load->view('template/sidemenu_fak', $data);
        $this->load->view('dashboard/dashboard_view', $data);
        $this->load->view('template/footer', $data);
    }
}
