<?php
class Dashboard_mahasiswa extends MY_controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Dashboard_model', 'lmhs_model');
        is_logged_in();
    }

    public function index()
    {
        $data = array(
            'title' => 'Dashboard',
            'biodata' => $this->lmhs_model->Biodata_Mhs(),
        );
        $this->load->view('template/header', $data);
        $this->load->view('template/sidemenu_mhs', $data);
        $this->load->view('Levelmahasiswa/Dashboard/dashboard_view', $data);
        $this->load->view('template/footer', $data);
    }
}
