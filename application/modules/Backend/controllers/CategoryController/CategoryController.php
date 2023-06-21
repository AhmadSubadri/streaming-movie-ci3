<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CategoryController extends MY_controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('category/Category-model', 'm_category');
        $this->load->model('auth/Login_model', 'm_login');
        if (!$this->m_login->CurrentUser()) {
            $this->session->set_flashdata('msg', "Make sure you have logged in account!.");
            $this->session->set_flashdata('msg_class', 'alert-danger');
            redirect('login');
        }
    }

    public function index()
    {
        // Menampilkan daftar kategori
        $data['categories'] = $this->CategoryModel->getCategories();
        $this->load->view('category/index', $data);
    }

    public function create()
    {
        // Menampilkan halaman tambah kategori
        $this->load->view('category/create');
    }

    public function store()
    {
        // Menyimpan kategori baru ke database
        $data = array(
            'nama' => $this->input->post('nama'),
            'deskripsi' => $this->input->post('deskripsi')
        );
        $this->CategoryModel->createCategory($data);
        redirect('category');
    }

    public function edit($id)
    {
        // Menampilkan halaman edit kategori berdasarkan ID
        $data['category'] = $this->CategoryModel->getCategoryById($id);
        $this->load->view('category/edit', $data);
    }

    public function update($id)
    {
        // Mengupdate kategori berdasarkan ID
        $data = array(
            'nama' => $this->input->post('nama'),
            'deskripsi' => $this->input->post('deskripsi')
        );
        $this->CategoryModel->updateCategory($id, $data);
        redirect('category');
    }

    public function delete($id)
    {
        // Menghapus kategori berdasarkan ID
        $this->CategoryModel->deleteCategory($id);
        redirect('category');
    }
}
