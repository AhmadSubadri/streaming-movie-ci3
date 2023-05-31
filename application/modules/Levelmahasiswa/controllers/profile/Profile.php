<?php
class Profile extends MY_controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Profile_model', 'm_profile');
        is_mahasiswa();
    }

    public function index()
    {
        $data = array(
            'title' => 'Dashboard',
            'data' => $this->m_profile->Biodata_Mhs(),
        );
        $this->load->view('template/header', $data);
        $this->load->view('template/sidemenu_mhs', $data);
        $this->load->view('Levelmahasiswa/profile', $data);
        $this->load->view('template/footer', $data);
    }
}
