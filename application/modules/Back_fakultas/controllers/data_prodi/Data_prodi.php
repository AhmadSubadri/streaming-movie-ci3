<?php
class Data_prodi extends MY_controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Globalfakultas_model', 'mp_fakultas');
        is_logged_in();
    }

    public function index()
    {
        $data = array(
            'title' => 'Data Program Studi',
            'data' => $this->mp_fakultas->Get_Data_Prodi(),
        );
        // var_dump($data);
        $this->load->view('template/header', $data);
        $this->load->view('template/sidemenu_fak', $data);
        $this->load->view('Back_fakultas/data_prodi/index', $data);
        $this->load->view('template/footer', $data);
    }
}
