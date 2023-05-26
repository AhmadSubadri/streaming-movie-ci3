<?php
class Data_kurikulum extends MY_controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Kurikulumprodi_model', 'mp_kurikulum');
        is_logged_in();
    }

    public function index()
    {
        $prodi = $this->mp_kurikulum->GetProdi_ByName();
        $data = array(
            'title' => 'Data Kurikulum',
            'data' => $this->mp_kurikulum->Get_Kurikulum($prodi->kode_prodi),
        );
        $this->load->view('template/header', $data);
        $this->load->view('template/sidemenu_prodi', $data);
        $this->load->view('Back_prodi/kurikulum/data_kurikulum', $data);
        $this->load->view('template/footer', $data);
    }

    public function detail($id)
    {
        $data = array(
            'title' => 'Detail Kurikulum',
            'data' => $this->mp_kurikulum->Get_DetailMK_byProdi($id),
        );
        $this->load->view('template/header', $data);
        $this->load->view('template/sidemenu_prodi', $data);
        $this->load->view('Back_prodi/kurikulum/detail', $data);
        $this->load->view('template/footer', $data);
    }
}
