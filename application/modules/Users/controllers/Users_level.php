<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users_level extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_level_model', 'm_level');
    }

    public function index()
    {

        $data = array(
            'title' => 'Data Users Level',
            'data' => $this->m_level->Index(),
        );

        $this->load->view('template/header', $data);
        $this->load->view('template/sidemenu', $data);
        $this->load->view('users/data_level', $data);
        $this->load->view('template/footer', $data);
    }
    public function Insert()
    {
        $data = [
            'users_level' => $this->input->post('users_level'),
        ];
        $this->session->set_flashdata('msg', "Insert Tahun Akademik Success!");
        $this->m_level->Insert($data);
        redirect(site_url('users/users_level'));
    }

    public function Update()
    {
        $id = $this->input->post('id_level');
        $data = [
            'users_level' => $this->input->post('users_level'),
        ];

        $this->session->set_flashdata('msg', "Update Tahun Akademik Success!");
        $this->m_level->Update($data, $id);
        redirect(site_url('users/users_level'));
    }

    function Delete($id)
    {
        $this->m_level->Delete($id);
        $this->session->set_flashdata('msg', 'Data Succes Delete');
        redirect(base_url('users/users_level'));
    }
}
