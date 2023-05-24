<?php
class Data_unit extends MY_controller
{
    function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Data_unitmodel', 'm_unit');
    }

    public function index()
    {
        $data = array(
            'title' => 'Data Unit',
            'data' => $this->m_unit->get_unit(),
        );

        $this->load->view('template/header', $data);
        $this->load->view('template/sidemenu', $data);
        $this->load->view('ruang/data_unit', $data);
        $this->load->view('template/footer', $data);
    }

    public function insert()
    {
        $data = [
            'nama_unit' => $this->input->post('nama_unit'),
            'nama_gedung' => $this->input->post('nama_gedung')
        ];

        $this->session->set_flashdata('msg', "Insert Data unit Success!");
        $this->m_unit->insert($data);
        redirect(site_url('administrator/data-unit'));
    }

    public function update()
    {
        $id = $this->input->post('id');
        $data = [
            'nama_unit' => $this->input->post('nama_unit'),
            'nama_gedung' => $this->input->post('nama_gedung')
        ];

        $this->session->set_flashdata('msg', "Update Data unit Success!");
        $this->m_unit->update($data, $id);
        redirect(site_url('administrator/data-unit'));
    }

    public function delete($id)
    {
        $this->m_unit->Delete($id);
        $this->session->set_flashdata('msg', 'Data Succes Delete');
        redirect(base_url('administrator/data-unit'));
    }
}
