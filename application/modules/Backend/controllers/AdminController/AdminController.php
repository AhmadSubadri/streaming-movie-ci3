<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminController extends MY_controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('AdminModel/Admin_model', 'm_admin');
        $this->load->model('auth/Login_model', 'm_login');
        if (!$this->m_login->CurrentUser()) {
            $this->session->set_flashdata('msg', "Make sure you have logged in account!.");
            $this->session->set_flashdata('msg_class', 'alert-danger');
            redirect('login');
        }
    }

    public function index()
    {
        $data = array(
            'title' => 'Dashboard',
            'data' => $this->m_admin->getAdmins()
        );
        $this->load->view('partials/head', $data);
        $this->load->view('v_admin/index', $data);
        $this->load->view('partials/footer', $data);
    }

    public function store()
    {
        if ($this->input->method() === 'post') {
            $this->form_validation->set_rules($this->m_admin->rules());
            if ($this->form_validation->run() == FALSE) {
                $this->load->view('partials/head');
                $this->load->view('v_admin/add');
                $this->load->view('partials/footer');
            } else {
                $data = [
                    'nama' => $this->input->post('nama'),
                    'username' => $this->input->post('username'),
                    'email' => $this->input->post('email'),
                    'password' => password_hash($this->input->post('password'), PASSWORD_ARGON2I)
                ];
                $this->m_admin->createAdmin($data);
                $this->session->set_flashdata('msg', "good Job, Insert Successfuly!.");
                $this->session->set_flashdata('msg_class', 'alert-success');
                redirect(site_url('data-user'));
            }
        } else {
            $this->load->view('partials/head');
            $this->load->view('v_admin/add');
            $this->load->view('partials/footer');
        }
    }

    public function edit($id)
    {
        // Menampilkan halaman edit admin berdasarkan ID
        $data['admin'] = $this->m_admin->getAdminById($id);
        $this->load->view('admin/edit', $data);
    }

    public function update($id)
    {
        // Mengupdate admin berdasarkan ID
        $data = array(
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password')
        );
        $this->m_admin->updateAdmin($id, $data);
        redirect('data-user');
    }

    public function delete($id)
    {
        $this->m_admin->deleteAdmin($id);
        $this->session->set_flashdata('msg', "good Job, Delete Successfuly!.");
        $this->session->set_flashdata('msg_class', 'alert-success');
        redirect('data-user');
    }
}
