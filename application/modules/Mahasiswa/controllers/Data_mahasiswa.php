<?php
class Data_mahasiswa extends MY_controller
{
    function __construct()
    {
        parent:: __construct();
        $this->load->model('Mahasiswa_model', 'm_mahasiswa');
    }

    public function Index()
    {
        $data = array(
            'title' => 'Data Mahasiswa',
            'data' => $this->m_mahasiswa->Index(),
        );
        $this->load->view('template/header',$data);
        $this->load->view('template/sidemenu',$data);
        $this->load->view('data_mahasiswa',$data);
        $this->load->view('template/footer',$data);
    }
}