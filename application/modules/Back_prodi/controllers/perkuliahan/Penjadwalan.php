<?php
class Penjadwalan extends MY_controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Penjadwalan_model', 'mp_penjadwalan');
        is_logged_in();
    }

    public function index()
    {
        $data = array(
            'title' => 'Data Penjadwalan',
            'data' => $this->mp_matakuliah->Get_matakuliah($prodi->kode_prodi),
        );
        $this->load->view('template/header', $data);
        $this->load->view('template/sidemenu_prodi', $data);
        $this->load->view('Back_prodi/data_matakuliah/data_matakuliah', $data);
        $this->load->view('template/footer', $data);
    }
}
