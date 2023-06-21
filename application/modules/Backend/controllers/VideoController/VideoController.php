<?php
defined('BASEPATH') or exit('No direct script access allowed');

class VideoController extends MY_controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('video/Video_model', 'm_video');
        $this->load->model('auth/Login_model', 'm_login');
        if (!$this->m_login->CurrentUser()) {
            $this->session->set_flashdata('msg', "Make sure you have logged in account!.");
            $this->session->set_flashdata('msg_class', 'alert-danger');
            redirect('login');
        }
    }

    public function index()
    {
        // Menampilkan daftar video
        $data['videos'] = $this->VideoModel->getVideos();
        $this->load->view('video/index', $data);
    }

    public function create()
    {
        // Menampilkan halaman tambah video
        $this->load->view('video/create');
    }

    public function store()
    {
        // Menyimpan video baru ke database
        $data = array(
            'judul' => $this->input->post('judul'),
            'durasi' => $this->input->post('durasi'),
            'kategori' => $this->input->post('kategori'),
            'deskripsi' => $this->input->post('deskripsi')
        );
        $this->VideoModel->createVideo($data);
        redirect('video');
    }

    public function edit($id)
    {
        // Menampilkan halaman edit video berdasarkan ID
        $data['video'] = $this->VideoModel->getVideoById($id);
        $this->load->view('video/edit', $data);
    }

    public function update($id)
    {
        // Mengupdate video berdasarkan ID
        $data = array(
            'judul' => $this->input->post('judul'),
            'durasi' => $this->input->post('durasi'),
            'kategori' => $this->input->post('kategori'),
            'deskripsi' => $this->input->post('deskripsi')
        );
        $this->VideoModel->updateVideo($id, $data);
        redirect('video');
    }

    public function delete($id)
    {
        // Menghapus video berdasarkan ID
        $this->VideoModel->deleteVideo($id);
        redirect('video');
    }
}
