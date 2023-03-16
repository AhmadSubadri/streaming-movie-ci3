<?php
class Fakultas_master extends MY_controller
{
    function __construct()
    {
        parent:: __construct();
        $this->load->model('Fakultas_model', 'm_fakultas');
    }

    function index()
    {
		$data = array(
			'title' => 'Data Fakultas',
			'data' => $this->m_fakultas->Index(),
			'kodePT' => $this->m_fakultas->Get_Kode_PT(),
		);
		
		$this->load->view('template/header',$data);
        $this->load->view('template/sidemenu',$data);
        $this->load->view('fakultas/data_fakultas',$data);
        $this->load->view('template/footer',$data);
    }
    
    public function Insert()
    {
        $data = [
            'kode_fak' => $this->input->post('kode_fak'),
            'nama_fak' => $this->input->post('nama_fak'),
            'kode_pt' => $this->input->post('kode_pt'),
        ];
        $this->session->set_flashdata('msg', "Insert Data Fakultas Success!");
        $this->m_fakultas->Insert($data);
        redirect(site_url('data-fakultas'));
    } 
}