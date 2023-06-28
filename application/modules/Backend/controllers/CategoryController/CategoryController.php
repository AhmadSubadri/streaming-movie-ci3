<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CategoryController extends MY_controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('CategoryModel/Category_model', 'm_category');
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
            'title' => 'Video',
            'data' => $this->m_category->getCategories()
        );
        $this->load->view('partials/head', $data);
        $this->load->view('v_category/index', $data);
        $this->load->view('partials/footer', $data);
    }

    public function store()
    {
        if ($this->input->method() === 'post') {
            $this->form_validation->set_rules($this->m_category->rules());
            if ($this->form_validation->run() == FALSE) {
                $this->load->view('partials/head');
                $this->load->view('v_category/add');
                $this->load->view('partials/footer');
            } else {
                $data = array(
                    'kategori' => $this->input->post('kategori'),
                );
                $this->m_category->createCategory($data);
                $this->session->set_flashdata('msg', "good Job, Insert Successfuly!.");
                $this->session->set_flashdata('msg_class', 'alert-success');
                redirect(site_url('data-category'));
            }
        } else {
            $this->load->view('partials/head');
            $this->load->view('v_category/add');
            $this->load->view('partials/footer');
        }
    }

    public function update($id)
    {
        if ($this->input->method() === 'post') {
            $data = array(
                'kategori' => $this->input->post('kategori'),
            );
            $this->m_category->updateCategory($id, $data);
            $this->session->set_flashdata('msg', "good Job, Update Successfuly!.");
            $this->session->set_flashdata('msg_class', 'alert-success');
            redirect('data-category');
        } else {
            $data = [
                'data' => $this->m_category->getCategoryById($id)
            ];
            $this->load->view('partials/head', $data);
            $this->load->view('v_category/edit', $data);
            $this->load->view('partials/footer', $data);
        }
    }

    public function delete($id)
    {
        $this->m_category->deleteCategory($id);
        $this->session->set_flashdata('msg', "good Job, Delete Successfuly!.");
        $this->session->set_flashdata('msg_class', 'alert-success');
        redirect('data-category');
    }
}
