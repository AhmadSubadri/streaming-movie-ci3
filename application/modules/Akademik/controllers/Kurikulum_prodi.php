<?php
class Kurikulum_prodi extends MY_controller
{
    function __construct()
    {
        parent:: __construct();
        $this->load->model('Kurikulumprodi_model', 'm_Kurikulumprodi');
    }

    function index()
    {
		$data = array(
			'title' => 'Data Kurikulum Prodi',
			// 'data' => $this->m_Kurikulumprodi->Index(),
		);
		
		$this->load->view('template/header',$data);
        $this->load->view('template/sidemenu',$data);
        $this->load->view('kurikulum_prodi/index',$data);
        $this->load->view('template/footer',$data);
    }
}