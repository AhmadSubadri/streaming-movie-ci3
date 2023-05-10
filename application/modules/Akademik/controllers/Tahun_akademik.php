<?php
class Tahun_akademik extends MY_controller
{
    function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Tahun_model', 'm_tahun');
    }

    function index()
    {
        $data = array(
            'title' => 'Data Tahun Akdemik',
            'data' => $this->m_tahun->Index(),
        );

        $this->load->view('template/header', $data);
        $this->load->view('template/sidemenu', $data);
        $this->load->view('tahun_akademik/data_tahun_akad', $data);
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
        redirect(site_url('administrator/tahun-akademik'));
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
        redirect(site_url('administrator/tahun-akademik'));
    }

    function Delete($id)
    {
        $this->m_tahun->Delete($id);
        $this->session->set_flashdata('msg', 'Data Succes Delete');
        redirect(base_url('administrator/tahun-akademik'));
    }
}
