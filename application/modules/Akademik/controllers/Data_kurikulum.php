<?php
class Data_kurikulum extends MY_controller
{
    function __construct()
    {
        parent:: __construct();
        $this->load->model('Kurikulum_model', 'm_kurikulum');
    }

    function index()
    {
		$data = array(
			'title' => 'Data Kurikulum',
			'data' => $this->m_kurikulum->Index(),
		);
		
		$this->load->view('template/header',$data);
        $this->load->view('template/sidemenu',$data);
        $this->load->view('kurikulum/data_kurikulum',$data);
        $this->load->view('template/footer',$data);
    }

    public function Insert()
    {
        $data = [
            'tahun_kurikulum' => $this->input->post('tahun_kurikulum'),
            'nama_kurikulum' => $this->input->post('nama_kurikulum'),
            'tanggal_awal' => $this->input->post('tanggal_awal'),
            'tanggal_akhir' => $this->input->post('tanggal_akhir'),
        ];
        $this->session->set_flashdata('msg', "Insert Tahun Kurikulum Success!");
        $this->m_kurikulum->Insert($data);
        redirect(site_url('data-kurikulum'));
    }

    public function Update()
    {
        $id = $this->input->post('id');
        $data = [
            'tahun_kurikulum' => $this->input->post('tahun_kurikulum'),
            'nama_kurikulum' => $this->input->post('nama_kurikulum'),
            'tanggal_awal' => $this->input->post('tanggal_awal'),
            'tanggal_akhir' => $this->input->post('tanggal_akhir'),
        ];
        $this->session->set_flashdata('msg', "Update Tahun Kurikulum Success!");
        $this->m_kurikulum->update($data, $id);
        redirect(site_url('data-kurikulum'));
    }

    public function Delete()
    {
        $id = $this->input->post('id');
        $this->m_kurikulum->Delete($id);
		$this->session->set_flashdata('msg', 'Data Succes Delete');
		redirect(base_url('data-kurikulum'));
    }
}