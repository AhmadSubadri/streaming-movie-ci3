<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model', 'm_users');
    }

    public function index()
    {

        $data = array(
            'title' => 'Data Users',
            'data' => $this->m_users->Index(),
            'level' => $this->m_users->Get_Users_Level()->row(),
            'ulevel' => $this->m_users->Get_Name_Level(),
        );

        $this->load->view('template/header', $data);
        $this->load->view('template/sidemenu', $data);
        $this->load->view('users/data_users', $data);
        $this->load->view('template/footer', $data);
    }

    public function Insert()
    {
        $data = [
            'kode_tahun_akademik' => $this->input->post('kode_tahun'),
            'nama_tahun_akademik' => $this->input->post('nama_tahun'),
            'tgl_mulai_krs' => $this->input->post('tgl_awal_krs'),
            'tgl_akhir_krs' => $this->input->post('tgl_akhir_krs'),
            'tgl_awal_ubah' => $this->input->post('tgl_awal_ubah'),
            'tgl_akhir_ubah' => $this->input->post('tgl_akhir_ubah'),
            'tgl_kuliah_awal' => $this->input->post('tgl_kuliah_awal'),
            'tgl_kuliah_akhir' => $this->input->post('tgl_kuliah_akhir'),
            'semester' => $this->input->post('semester'),
        ];
        $this->session->set_flashdata('msg', "Insert Tahun Akademik Success!");
        $this->m_tahun->Insert($data);
        redirect(site_url('tahun-akademik'));
    }

    public function Update()
    {
        $id = $this->input->post('id_tahun');
        $data = [
            'kode_tahun_akademik' => $this->input->post('kode_tahun'),
            'nama_tahun_akademik' => $this->input->post('nama_tahun'),
            'tgl_mulai_krs' => $this->input->post('tgl_awal_krs'),
            'tgl_akhir_krs' => $this->input->post('tgl_akhir_krs'),
            'tgl_awal_ubah' => $this->input->post('tgl_awal_ubah'),
            'tgl_akhir_ubah' => $this->input->post('tgl_akhir_ubah'),
            'tgl_kuliah_awal' => $this->input->post('tgl_kuliah_awal'),
            'tgl_kuliah_akhir' => $this->input->post('tgl_kuliah_akhir'),
            'semester' => $this->input->post('semester'),
        ];

        $this->session->set_flashdata('msg', "Update Tahun Akademik Success!");
        $this->m_tahun->Update($data, $id);
        redirect(site_url('tahun-akademik'));
    }

    function Delete($id)
    {
        $this->m_tahun->Delete($id);
        $this->session->set_flashdata('msg', 'Data Succes Delete');
        redirect(base_url('tahun-akademik'));
    }
}
