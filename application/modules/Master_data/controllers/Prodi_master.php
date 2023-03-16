<?php
class Prodi_master extends MY_controller
{
    function __construct()
    {
        parent:: __construct();
        $this->load->model('Prodi_model', 'm_prodi');
    }

    function index()
    {
		$data = array(
			'title' => 'Data Program Studi',
			'data' => $this->m_prodi->Index(),
            'kodePT' => $this->m_prodi->Get_Kode_PT(),
            'fakultas' => $this->m_prodi->Get_Fakultas(),
		);
		
		$this->load->view('template/header',$data);
        $this->load->view('template/sidemenu',$data);
        $this->load->view('prodi/data_prodi',$data);
        $this->load->view('template/footer',$data);
    }
    
    public function Insert()
    {
        $data = [
            'kode_prodi' => $this->input->post('kode_prodi'),
            'nama_prodi' => $this->input->post('nama_prodi'),
            'jenjang_pendidikan' => $this->input->post('jenjang_pendidikan'),
            'kode_fak' => $this->input->post('kode_fak'),
            'kode_pt' => $this->input->post('kode_pt'),
        ];
        $this->session->set_flashdata('msg', "Insert Data Program Studi Success!");
        $this->m_prodi->Insert($data);
        redirect(site_url('data-program-studi'));
    }

    public function Update()
    {
        $id = $this->input->post('id');
        $data = [
            'kode_prodi' => $this->input->post('kode_prodi'),
            'nama_prodi' => $this->input->post('nama_prodi'),
            'jenjang_pendidikan' => $this->input->post('jenjang_pendidikan'),
            'kode_fak' => $this->input->post('kode_fak'),
            'kode_pt' => $this->input->post('kode_pt'),
        ];

        $this->session->set_flashdata('msg', "Update data Program Studi Success!");
        $this->m_prodi->Update($data, $id);
        redirect(site_url('data-program-studi'));
    }

    public function Delete()
    {
        $id = $this->input->post('id');
        $this->session->set_flashdata('msg', "Delete data Program Studi Success!");
        $this->m_prodi->Delete($id);
        redirect(site_url('data-program-studi'));
    }
}