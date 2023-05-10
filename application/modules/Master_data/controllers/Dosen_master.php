<?php
class Dosen_master extends MY_controller
{
    function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Dosen_model', 'm_dosen');
    }

    function index()
    {
        $data = array(
            'title' => 'Data Dosen',
            'data' => $this->m_dosen->Index(),
            'kodePT' => $this->m_dosen->Get_Kode_PT(),
        );

        $this->load->view('template/header', $data);
        $this->load->view('template/sidemenu', $data);
        $this->load->view('dosen/data_dosen', $data);
        $this->load->view('template/footer', $data);
    }

    public function Insert()
    {
        $data = [
            'nip' => $this->input->post('nip'),
            'nama_dosen' => $this->input->post('nama_dosen'),
            'jenis_kelamin_dosen' => $this->input->post('jenis_kelamin_dosen'),
            'tempat_lahir_dosen' => $this->input->post('tempat_lahir_dosen'),
            'tanggal_lahir_dosen' => $this->input->post('tanggal_lahir_dosen'),
            'alamat_dosen' => $this->input->post('alamat_dosen'),
            'kode_pos_dosen' => $this->input->post('kode_pos_dosen'),
            'no_telepon_dosen' => $this->input->post('no_telepon_dosen'),
            'email_dosen' => $this->input->post('email_dosen'),
            'kode_pt' => $this->input->post('kode_pt'),
        ];
        $this->session->set_flashdata('msg', "Insert Data Lecturer Success!");
        $this->m_dosen->Insert($data);
        redirect(site_url('data-dosen'));
    }

    public function Update()
    {
        $id = $this->input->post('id');
        $data = [
            'nip' => $this->input->post('nip'),
            'nama_dosen' => $this->input->post('nama_dosen'),
            'jenis_kelamin_dosen' => $this->input->post('jenis_kelamin_dosen'),
            'tempat_lahir_dosen' => $this->input->post('tempat_lahir_dosen'),
            'tanggal_lahir_dosen' => $this->input->post('tanggal_lahir_dosen'),
            'alamat_dosen' => $this->input->post('alamat_dosen'),
            'kode_pos_dosen' => $this->input->post('kode_pos_dosen'),
            'no_telepon_dosen' => $this->input->post('no_telepon_dosen'),
            'email_dosen' => $this->input->post('email_dosen'),
            'kode_pt' => $this->input->post('kode_pt'),
        ];

        $this->session->set_flashdata('msg', "Update data Lecturer Success!");
        $this->m_dosen->Update($data, $id);
        redirect(site_url('data-dosen'));
    }

    public function Delete()
    {
        $id = $this->input->post('id');
        $this->session->set_flashdata('msg', "Delete data Lecturer Success!");
        $this->m_dosen->Delete($id);
        redirect(site_url('data-dosen'));
    }
}
