<?php
class Data_ruang extends MY_controller
{
    function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Data_ruangmodel', 'm_ruang');
    }

    public function index()
    {
        $data = array(
            'title' => 'Data Ruang',
            'data' => $this->m_ruang->get_ruang(),
            'unit' => $this->m_ruang->get_unit(),
        );

        $this->load->view('template/header', $data);
        $this->load->view('template/sidemenu', $data);
        $this->load->view('ruang/data_ruang', $data);
        $this->load->view('template/footer', $data);
    }

    public function get_autocomplete_unit()
    {
        $query = $this->input->post('id');
        $data = $this->m_ruang->search_data($query);
        header('Content-Type: application/json');
        echo json_encode($data);
    }

    public function get_autocomplete_ro_room()
    {
        $unit = $this->input->post('unit');
        $gedung = $this->input->post('gedung');
        $data = $this->m_ruang->search_data_ro_room($unit, $gedung);
        header('Content-Type: application/json');
        echo json_encode($data);
    }

    public function insert()
    {
        $data = [
            'kode_ruang' => $this->input->post('kode_ruang'),
            'nama_ruang' => $this->input->post('nama_ruang'),
            'nama_unit' => $this->input->post('nama_unit'),
            'nama_gedung' => $this->input->post('nama_gedung')
        ];

        $this->session->set_flashdata('msg', "Insert Data room Success!");
        $this->m_ruang->insert($data);
        redirect(site_url('administrator/data-ruang'));
    }

    public function update()
    {
        $id = $this->input->post('id');
        $data = [
            'kode_ruang' => $this->input->post('kode_ruang'),
            'nama_ruang' => $this->input->post('nama_ruang'),
            'nama_unit' => $this->input->post('nama_unit'),
            'nama_gedung' => $this->input->post('nama_gedung')
        ];

        $this->session->set_flashdata('msg', "Update Data room Success!");
        $this->m_ruang->update($data, $id);
        redirect(site_url('administrator/data-ruang'));
    }

    public function delete($id)
    {
        $this->m_ruang->Delete($id);
        $this->session->set_flashdata('msg', 'Data Succes Delete');
        redirect(base_url('administrator/data-ruang'));
    }
}
