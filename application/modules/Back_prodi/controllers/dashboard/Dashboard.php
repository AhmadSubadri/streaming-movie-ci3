<?php
class Dashboard extends MY_controller
{
    function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data = array(
            'title' => 'Dashboard'
        );
        $this->load->view('template/header', $data);
        $this->load->view('template/sidemenu_prodi', $data);
        $this->load->view('Back_prodi/dashboard_view', $data);
        $this->load->view('template/footer', $data);
    }
}
