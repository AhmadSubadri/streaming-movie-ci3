<?php
defined('BASEPATH') or exit('No direct script access allowed');

class VideoController extends MY_controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('VideoModel/Video_model', 'm_video');
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
            'data' => $this->m_video->getVideos()
        );
        $this->load->view('partials/head', $data);
        $this->load->view('v_video/index', $data);
        $this->load->view('partials/footer', $data);
    }

    public function store()
    {
        if ($this->input->method() === 'post') {
            $this->form_validation->set_rules($this->m_video->rules());
            if ($this->form_validation->run() == FALSE) {
                $data = [
                    'category' => $this->m_category->getCategories()
                ];
                $this->load->view('partials/head', $data);
                $this->load->view('v_video/add', $data);
                $this->load->view('partials/footer', $data);
            } else {
                $config['upload_path'] = './assets/dashboard/images/thumbnile/';
                $config['allowed_types'] = 'jpg|jpeg|png'; // Ekstensi file yang diperbolehkan untuk diunggah
                $config['max_size'] = 2024; // Ukuran maksimum file (dalam kilobyte)

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('thumbnail')) {
                    $this->session->set_flashdata('msg', "Sorry, Check your image!.");
                    $this->session->set_flashdata('msg_class', 'alert-danger');
                    redirect('data-video/insert');
                } else {
                    date_default_timezone_set('Asia/Jakarta');
                    $uploadData = $this->upload->data();
                    $data = array(
                        'judul' => $this->input->post('judul'),
                        'durasi' => $this->input->post('durasi'),
                        'kategori_id' => $this->input->post('kategori_id'),
                        'thumbnail' => $uploadData['file_name'],
                        'tanggal_unggah' => date('Y-m-d H:i:s'),
                        'deskripsi' => $this->input->post('deskripsi'),
                        'url_video' => $this->input->post('url_video'),
                        'slug' => $this->input->post('slug')
                    );
                    $this->m_video->createVideo($data);
                    $this->session->set_flashdata('msg', "good Job, Insert Successfuly!.");
                    $this->session->set_flashdata('msg_class', 'alert-success');
                    redirect(site_url('data-video'));
                }
            }
        } else {
            $data = [
                'category' => $this->m_category->getCategories()
            ];
            $this->load->view('partials/head', $data);
            $this->load->view('v_video/add', $data);
            $this->load->view('partials/footer', $data);
        }
    }

    public function edit($id)
    {
        // Menampilkan halaman edit video berdasarkan ID
        $data['video'] = $this->m_video->getVideoById($id);
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
        $this->m_video->updateVideo($id, $data);
        redirect('video');
    }

    public function delete($id)
    {
        // Menghapus video berdasarkan ID
        $this->m_video->deleteVideo($id);
        redirect('video');
    }
}
