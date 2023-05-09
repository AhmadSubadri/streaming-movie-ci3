<?php
class Data_dosen extends MY_controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Globalprodi_model', 'mp_global');
        is_logged_in();
    }

    public function index()
    {
        $data = array(
            'title' => 'Data Dosen',
            'data' => $this->mp_global->Get_Data_Dosen_ByProdi(),
        );
        $this->load->view('template/header', $data);
        $this->load->view('template/sidemenu_prodi', $data);
        $this->load->view('Back_prodi/data_dosen/index', $data);
        $this->load->view('template/footer', $data);
    }
}
