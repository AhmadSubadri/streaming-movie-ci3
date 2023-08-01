<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SlideController extends MY_controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('SlideModel/Slide_model', 'm_slide');
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
            'title' => 'Slider',
            'data' => $this->m_slide->getSlides(),
        );
        $this->load->view('partials/head', $data);
        $this->load->view('v_slide/index', $data);
        $this->load->view('partials/footer', $data);
    }

    public function store()
    {
        if ($this->input->method() === 'post') {
            $config['upload_path'] = './assets/dashboard/images/slider/';
            $config['allowed_types'] = 'jpg|jpeg|png'; // Ekstensi file yang diperbolehkan untuk diunggah
            $config['max_size'] = 5024; // Ukuran maksimum file (dalam kilobyte)

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                $this->session->set_flashdata('msg', "Sorry, Check your image!.");
                $this->session->set_flashdata('msg_class', 'alert-danger');
                redirect('data-slide/insert');
            } else {
                $uploadData = $this->upload->data();
                $data = array(
                    'judul' => $this->input->post('judul'),
                    'deskripsi' => $this->input->post('deskripsi'),
                    'gambar' => $uploadData['file_name'],
                );
                $this->db->insert('tb_slide', $data);
                $this->session->set_flashdata('msg', "good Job, Insert Successfuly!.");
                $this->session->set_flashdata('msg_class', 'alert-success');
                redirect(site_url('data-slide'));
            }
        } else {
            $data = [
                'title' => "Add Slider"
            ];
            $this->load->view('partials/head', $data);
            $this->load->view('v_slide/add', $data);
            $this->load->view('partials/footer', $data);
        }
    }

    public function update($id)
    {
        if ($this->input->method() === 'post') {
            $config['upload_path'] = './assets/dashboard/images/slider/';
            $config['allowed_types'] = 'jpg|jpeg|png'; // Ekstensi file yang diperbolehkan untuk diunggah
            $config['max_size'] = 5024; // Ukuran maksimum file (dalam kilobyte)

            $this->load->library('upload', $config);
            $cekdata = $this->m_slide->getSlideById($id);
            if (!$this->upload->do_upload('gambar')) {
                $this->session->set_flashdata('msg', "Sorry, Check your image!.");
                $this->session->set_flashdata('msg_class', 'alert-danger');
                redirect('data-slide/update/' . $id);
            } else {
                $path = './assets/dashboard/images/slider/' . $cekdata->gambar;
                if ($cekdata->gambar && file_exists($path)) {
                    chmod($path, 0777);
                    unlink($path);
                }
            }
            $uploadData = $this->upload->data();
            $data = array(
                'judul' => $this->input->post('judul'),
                'deskripsi' => $this->input->post('deskripsi'),
                'gambar' => $uploadData['file_name'],
            );
            $this->db->update('tb_slide', $data, ['id' => $id]);
            $this->session->set_flashdata('msg', "good Job, Update Successfuly!.");
            $this->session->set_flashdata('msg_class', 'alert-success');
            redirect(site_url('data-slide'));
        } else {
            $data = [
                'data' => $this->m_slide->getSlideById($id)
            ];
            $this->load->view('partials/head', $data);
            $this->load->view('v_slide/edit', $data);
            $this->load->view('partials/footer', $data);
        }
    }

    public function delete($id)
    {
        // Menghapus slide berdasarkan ID
        $this->m_slide->deleteSlide($id);
        $this->session->set_flashdata('msg', "good Job, Delete Successfuly!.");
        $this->session->set_flashdata('msg_class', 'alert-success');
        redirect('data-slide');
    }
}
