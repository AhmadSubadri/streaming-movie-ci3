<?php
class Data_mahasiswa extends MY_controller
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
            'title' => 'Data Mahasiswa',
            'data' => $this->mp_global->Get_Data_Mahasiswa_ByProdi(),
        );
        $this->load->view('template/header', $data);
        $this->load->view('template/sidemenu_prodi', $data);
        $this->load->view('Back_prodi/data_mahasiswa/index', $data);
        $this->load->view('template/footer', $data);
    }
}
