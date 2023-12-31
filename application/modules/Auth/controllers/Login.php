<?php
class Login extends MY_controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model', 'm_login');
    }

    public function index()
    {
        if ($this->input->method() === 'post') {
            $this->form_validation->set_rules($this->m_login->rules());
            if ($this->form_validation->run() == FALSE) {
                $this->load->view('template/head');
                $this->load->view('google_login');
                $this->load->view('template/footer');
            } else {
                $email = $this->input->post('email');
                $password = $this->input->post('password');

                if ($this->m_login->LogVerify_Admin($email, $password)) {
                    $this->session->set_flashdata('msg', "good Job, Login Successfuly!.");
                    $this->session->set_flashdata('msg_class', 'alert-success');
                    redirect(site_url('dashboard'));
                } else {
                    $this->session->set_flashdata('msg', "Make sure your username and password are correct!.");
                    $this->session->set_flashdata('msg_class', 'alert-danger');
                    redirect(site_url('login'));
                }
            }
        } else {
            $this->load->view('template/head');
            $this->load->view('google_login');
            $this->load->view('template/footer');
        }
    }

    public function logout()
    {
        $this->m_login->logout();
        $this->session->set_flashdata('msg', "Good Job, Logout successfuly!.");
        $this->session->set_flashdata('msg_class', 'alert-success');
        redirect(site_url('login'));
    }
}
