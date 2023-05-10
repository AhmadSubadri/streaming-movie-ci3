<?php
class Data_dosen extends MY_controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Globalfakultas_model', 'mp_fakultas');
        is_logged_in();
    }

    public function index()
    {
        $kode_prodi = $this->input->get('kode_prodi');
        // Cek apakah filter prodi ada atau tidak
        if ($kode_prodi != null) {
            $data = array(
                'title' => 'Data Dosen',
                'data' => $this->mp_fakultas->Get_Data_Dosen_Filter($kode_prodi),
                'prodi' => $this->mp_fakultas->Get_Data_Prodi(),
            );
        } else {
            $data = array(
                'title' => 'Data Dosen',
                'data' => $this->mp_fakultas->Get_Data_Dosen(),
                'prodi' => $this->mp_fakultas->Get_Data_Prodi(),
            );
        }
        // var_dump($data);
        $this->load->view('template/header', $data);
        $this->load->view('template/sidemenu_fak', $data);
        $this->load->view('Back_fakultas/data_dosen/index', $data);
        $this->load->view('template/footer', $data);
    }
}
