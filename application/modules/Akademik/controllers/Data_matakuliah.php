<?php
class Data_matakuliah extends MY_controller
{
    function __construct()
    {
        parent:: __construct();
        $this->load->model('Matakuliah_model', 'm_matkul');
    }

    function index()
    {
        $kode_prodi = $this->input->get('kode_prodi');
        // Cek apakah filter prodi ada atau tidak
        if($kode_prodi!=null){
            $data = array(
                'title' => 'Data Matakuliah',
                'data' => $this->m_matkul->Filter_Prodi($kode_prodi),
                'prodi' => $this->m_matkul->Get_Nama_Prodi(),
                'kurikulum' => $this->m_matkul->Get_Kurikulum(),
            );

        }else{
            $data = array(
                'title' => 'Data Matakuliah',
                'data' => $this->m_matkul->Index(),
                'prodi' => $this->m_matkul->Get_Nama_Prodi(),
                'kurikulum' => $this->m_matkul->Get_Kurikulum(),
            );
        }
		
		$this->load->view('template/header',$data);
        $this->load->view('template/sidemenu',$data);
        $this->load->view('matakuliah/data_matakuliah',$data);
        $this->load->view('template/footer',$data);
    }
    
    public function Insert()
    {
        $data = [
            'tahun_kurikulum' => $this->input->post('tahun_kurikulum'),
            'kode_mk' => $this->input->post('kode_mk'),
            'nama_mk' => $this->input->post('nama_mk'),
            'sks_mk' => $this->input->post('sks_mk'),
            'kode_prodi' => $this->input->post('kode_prodi'),
            'type_mk' => $this->input->post('type_mk'),
        ];
        $this->session->set_flashdata('msg', "Insert Matakuliah Success!");
        $this->m_matkul->Insert($data);
        redirect(site_url('data-matakuliah'));
    }

    public function Update()
    {
        $id = $this->input->post('id');
        $data = [
            'tahun_kurikulum' => $this->input->post('tahun_kurikulum'),
            'kode_mk' => $this->input->post('kode_mk'),
            'nama_mk' => $this->input->post('nama_mk'),
            'sks_mk' => $this->input->post('sks_mk'),
            'kode_prodi' => $this->input->post('kode_prodi'),
            'type_mk' => $this->input->post('type_mk'),
        ];

        $this->session->set_flashdata('msg', "Update Matakuliah Success!");
        $this->m_matkul->Update($data, $id);
        redirect(site_url('data-matakuliah'));
    }

    public function Delete()
	{
		$id = $this->input->post('id');
        $this->session->set_flashdata('msg', "Delete data Matakuliah Success!");
        $this->m_matkul->Delete($id);
		redirect(site_url('data-matakuliah'));
	}
}
