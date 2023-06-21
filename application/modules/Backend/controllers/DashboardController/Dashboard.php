<?php
class Dashboard extends MY_controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('DashboardModel/Dashboard_model', 'm_dashboard');
        $this->load->model('auth/Login_model', 'm_login');
        if (!$this->m_login->CurrentUser()) {
            $this->session->set_flashdata('msg', "Make sure you have logged in account!.");
            $this->session->set_flashdata('msg_class', 'alert-danger');
            redirect('login');
        }
    }

    public function index()
    {
        $data = array(
            'title' => 'Dashboard'
        );
        $this->load->view('partials/head', $data);
        $this->load->view('dashboard', $data);
        $this->load->view('partials/footer', $data);
    }
}
