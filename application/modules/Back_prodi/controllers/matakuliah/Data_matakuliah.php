<?php
class Data_matakuliah extends MY_controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Matakuliahprodi_model', 'mp_matakuliah');
        is_logged_in();
    }

    public function index()
    {
        $prodi = $this->mp_matakuliah->GetProdi_ByName();
        $data = array(
            'title' => 'Data Matakuliah',
            'data' => $this->mp_matakuliah->Get_matakuliah($prodi->kode_prodi),
        );
        $this->load->view('template/header', $data);
        $this->load->view('template/sidemenu_prodi', $data);
        $this->load->view('Back_prodi/data_matakuliah/data_matakuliah', $data);
        $this->load->view('template/footer', $data);
    }
}
