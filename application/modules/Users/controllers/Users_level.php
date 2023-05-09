<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users_level extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
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
            'users_level' => strtolower($this->input->post('users_level')),
        ];
        $this->session->set_flashdata('msg', "Insert Users Level Success!");
        $this->m_level->Insert($data);
        redirect(site_url('data-user-level'));
    }

    public function Update()
    {
        $id = $this->input->post('id_level');
        $data = [
            'users_level' => strtolower($this->input->post('users_level')),
        ];

        $this->session->set_flashdata('msg', "Update Users Level Success!");
        $this->m_level->Update($data, $id);
        redirect(site_url('data-user-level'));
    }

    function Delete()
    {
        $id = $this->input->post('id');
        $this->m_level->Delete($id);
        $this->session->set_flashdata('msg', 'Data Users Level Succes Delete');
        redirect(base_url('data-user-level'));
    }
}
