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
        $nama_prodi = $this->mp_penjadwalan->Get_prodi_row();
        $data = array(
            'title' => 'Data Penjadwalan',
            'data' => $this->mp_penjadwalan->Get_Jadwal_Prodi($nama_prodi->kode_prodi),
        );
        $this->load->view('template/header', $data);
        $this->load->view('template/sidemenu_prodi', $data);
        $this->load->view('Back_prodi/perkuliahan/penjadwalan', $data);
        $this->load->view('template/footer', $data);
    }
}
