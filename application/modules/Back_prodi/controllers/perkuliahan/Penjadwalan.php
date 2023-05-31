<?php
class Penjadwalan extends MY_controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Penjadwalan_model', 'mp_penjadwalan');
        is_logged_in();
    }

    public function index()
    {
        $nama_prodi = $this->mp_penjadwalan->Get_prodi_row();
        $data = array(
            'title' => 'Data Penjadwalan',
            'data' => $this->mp_penjadwalan->Get_Jadwal_Prodi($nama_prodi->kode_prodi),
            'mk' => $this->mp_penjadwalan->Get_Persebaran_MKProdi($nama_prodi->kode_prodi),
            'ruang' => $this->mp_penjadwalan->Get_ruang_Prodi($nama_prodi->kode_prodi),
            'prodi' => $this->mp_penjadwalan->Get_prodi_row(),
        );
        $this->load->view('template/header', $data);
        $this->load->view('template/sidemenu_prodi', $data);
        $this->load->view('Back_prodi/perkuliahan/penjadwalan', $data);
        $this->load->view('template/footer', $data);
    }

    public function insert()
    {
        $data = [
            'kode_prodi' => $this->input->post('kode_prodi'),
            'hari' => $this->input->post('hari'),
            'jam_mulai' => $this->input->post('jam_mulai'),
            'jam_selesai' => $this->input->post('jam_selesai'),
            'kode_mk' => $this->input->post('kode_mk'),
            'kode_ruang' => $this->input->post('kode_ruang'),
        ];

        $exc = $this->mp_penjadwalan->insert($data);
        if ($exc) {
            $this->session->set_flashdata('msg', "Insert Data Penjadwalan Success!");
            redirect(site_url('prodi/penjadwalan'));
        } else {
            $this->session->set_flashdata('msg', "Insert Data Penjadwalan Gagal!");
            redirect(site_url('prodi/penjadwalan'));
        }
    }

    public function update()
    {
        $idjadwalprodi = $this->input->post('idjadwalprodi');
        $data = [
            'hari' => $this->input->post('hari'),
            'jam_mulai' => $this->input->post('jam_mulai'),
            'jam_selesai' => $this->input->post('jam_selesai'),
            'kode_mk' => $this->input->post('kode_mk'),
            'kode_ruang' => $this->input->post('kode_ruang'),
        ];

        $exc = $this->mp_penjadwalan->update($data, $idjadwalprodi);
        if ($exc) {
            $this->session->set_flashdata('msg', "Update Data Penjadwalan Success!");
            redirect(site_url('prodi/penjadwalan'));
        } else {
            $this->session->set_flashdata('msg', "Update Data Penjadwalan Gagal!");
            redirect(site_url('prodi/penjadwalan'));
        }
    }
}
