<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_auth');
	}

	public function index()
	{
		if ($this->session->userdata('users_level')) {
			redirect(site_url('/' . $this->session->userdata('users_level')));
		} else {
			$this->load->view('auth/login');
		}
	}


	public function login()
	{
		$this->form_validation->set_rules('username', 'username', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'password', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			# code...
			$this->session->set_flashdata('msg', 'Login Failed');

			redirect(base_url('auth'));
		} else {
			# code...
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));

			$query = $this->M_auth->cek_user($username, $password)->row_array();

			if ($query) {
				if ($query['is_active'] == 1) {
					# code...
					$data = [
						'id' => $query['id_users'],
						'username' => $query['username'],
						'users_level' => $query['users_level'],
						'nama_users' => $query['nama_users'],
					];
					$this->session->set_userdata($data);
					$this->session->set_flashdata('msg', 'Login Success');
					if ($this->session->userdata('users_level')) {
						redirect(base_url('/' . $this->session->userdata('users_level')));
					}
				} else {
					$this->session->set_flashdata('msg', 'Not Activated');
					redirect(base_url('auth'));
				}
			} else {
				# code...
				$this->session->set_flashdata('msg', 'Login Failed');
				redirect(base_url('auth'));
			}
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		$this->session->set_flashdata('msg', 'Logout');
		redirect(base_url('auth'));
	}

	public function block()
	{
		$this->load->view('404_global');
	}
}
