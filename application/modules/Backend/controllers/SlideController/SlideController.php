<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SlideController extends MY_controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('slide/Slide_model', 'm_slide');
        $this->load->model('auth/Login_model', 'm_login');
        if (!$this->m_login->CurrentUser()) {
            $this->session->set_flashdata('msg', "Make sure you have logged in account!.");
            $this->session->set_flashdata('msg_class', 'alert-danger');
            redirect('login');
        }
    }

    public function index()
    {
        // Menampilkan daftar slide
        $data['slides'] = $this->SlideModel->getSlides();
        $this->load->view('slide/index', $data);
    }

    public function create()
    {
        // Menampilkan halaman tambah slide
        $this->load->view('slide/create');
    }

    public function store()
    {
        // Menyimpan slide baru ke database
        $data = array(
            'gambar' => $this->input->post('gambar'),
            'judul' => $this->input->post('judul'),
            'deskripsi' => $this->input->post('deskripsi'),
            'url' => $this->input->post('url')
        );
        $this->SlideModel->createSlide($data);
        redirect('slide');
    }

    public function edit($id)
    {
        // Menampilkan halaman edit slide berdasarkan ID
        $data['slide'] = $this->SlideModel->getSlideById($id);
        $this->load->view('slide/edit', $data);
    }

    public function update($id)
    {
        // Mengupdate slide berdasarkan ID
        $data = array(
            'gambar' => $this->input->post('gambar'),
            'judul' => $this->input->post('judul'),
            'deskripsi' => $this->input->post('deskripsi'),
            'url' => $this->input->post('url')
        );
        $this->SlideModel->updateSlide($id, $data);
        redirect('slide');
    }

    public function delete($id)
    {
        // Menghapus slide berdasarkan ID
        $this->SlideModel->deleteSlide($id);
        redirect('slide');
    }
}
