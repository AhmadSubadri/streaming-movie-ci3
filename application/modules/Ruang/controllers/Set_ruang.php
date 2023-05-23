<?php
class Set_ruang extends MY_controller
{
    function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Data_setruangmodel', 'm_setruang');
    }

    public function index()
    {
        $data = array(
            'title' => 'Set Data Ruang',
            'data' => $this->m_setruang->get_setruang(),
            'ruang' => $this->m_setruang->get_Ruang(),
            'prodi' => $this->m_setruang->get_data_prodi(),
        );

        $this->load->view('template/header', $data);
        $this->load->view('template/sidemenu', $data);
        $this->load->view('ruang/set_ruang', $data);
        $this->load->view('template/footer', $data);
    }

    public function insert()
    {
        $data = [
            'kode_prodi' => $this->input->post('kode_prodi'),
            'id_ruang' => $this->input->post('kode_prodi'),
        ];
    }
}
