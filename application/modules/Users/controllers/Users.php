<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model', 'm_users');
    }

    public function index()
    {
        $data = array(
            'title' => 'Data Users',
            'data' => $this->m_users->Index(),
            'ulevel' => $this->m_users->Get_Name_Level(),
        );

        $this->load->view('template/header', $data);
        $this->load->view('template/sidemenu', $data);
        $this->load->view('users/data_users', $data);
        $this->load->view('template/footer', $data);
    }

    public function Insert()
    {
        $datausers = [
            'nama_users' => $this->input->post('nama_users'),
            'username' => $this->input->post('username'),
            'email_users' => $this->input->post('email_users'),
            'pass_users' => $this->input->post('password'),
        ];
        $this->m_users->Insert('tb_users', $datausers);
        $user_id = $this->db->insert_id();
        $level = $this->input->post('level');
        foreach($level as $lv){
            $datalevel = [
                'id_users' => $user_id,
                'id_level' => $lv
            ];
            $this->m_users->Insert('tb_users_levels', $datalevel);
        }
        $this->session->set_flashdata('msg', "Insert Users Success!");
        redirect(site_url('data-users'));
    }

    public function Update()
    {
        $id = $this->input->post('id_tahun');
        $data = [
            'kode_tahun_akademik' => $this->input->post('kode_tahun'),
            'nama_tahun_akademik' => $this->input->post('nama_tahun'),
            'tgl_mulai_krs' => $this->input->post('tgl_awal_krs'),
            'tgl_akhir_krs' => $this->input->post('tgl_akhir_krs'),
            'tgl_awal_ubah' => $this->input->post('tgl_awal_ubah'),
            'tgl_akhir_ubah' => $this->input->post('tgl_akhir_ubah'),
            'tgl_kuliah_awal' => $this->input->post('tgl_kuliah_awal'),
            'tgl_kuliah_akhir' => $this->input->post('tgl_kuliah_akhir'),
            'semester' => $this->input->post('semester'),
        ];

        $this->session->set_flashdata('msg', "Update Users Success!");
        $this->m_tahun->Update($data, $id);
        redirect(site_url('data-users'));
    }

    function Delete($id)
    {
        $this->m_tahun->Delete($id);
        $this->session->set_flashdata('msg', 'Data Users Success Delete');
        redirect(base_url('data-users'));
    }
}
