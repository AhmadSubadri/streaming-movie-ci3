<?php
class Data_kurikulum extends MY_controller
{
    function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Kurikulum_model', 'm_kurikulum');
    }

    function index()
    {
        $data = array(
            'title' => 'Data Kurikulum',
            'data' => $this->m_kurikulum->Index(),
            'prodi' => $this->m_kurikulum->get_prodi(),
        );

        $this->load->view('template/header', $data);
        $this->load->view('template/sidemenu', $data);
        $this->load->view('kurikulum/data_kurikulum', $data);
        $this->load->view('template/footer', $data);
    }

    public function Insert()
    {
        $data = [
            'kode_prodi' => $this->input->post('kode_prodi'),
            'kode_kurikulum' => $this->input->post('kode_kurikulum'),
            'nama_kurikulum' => $this->input->post('nama_kurikulum'),
        ];
        $this->session->set_flashdata('msg', "Insert Tahun Kurikulum Success!");
        $this->m_kurikulum->Insert($data);
        redirect(site_url('administrator/data-kurikulum'));
    }

    public function Update()
    {
        $id = $this->input->post('id');
        $data = [
            'kode_prodi' => $this->input->post('kode_prodi'),
            'kode_kurikulum' => $this->input->post('kode_kurikulum'),
            'nama_kurikulum' => $this->input->post('nama_kurikulum'),
            'status' => $this->input->post('status'),
        ];
        $this->session->set_flashdata('msg', "Update Tahun Kurikulum Success!");
        $this->m_kurikulum->update($data, $id);
        redirect(site_url('administrator/data-kurikulum'));
    }

    public function Delete()
    {
        $id = $this->input->post('id');
        $this->m_kurikulum->Delete($id);
        $this->session->set_flashdata('msg', 'Data Succes Delete');
        redirect(base_url('administrator/data-kurikulum'));
    }
}
