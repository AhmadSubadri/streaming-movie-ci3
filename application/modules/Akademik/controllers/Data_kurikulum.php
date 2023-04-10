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
			// 'data' => $this->m_kurikulum->Index(),
		);
		
		$this->load->view('template/header',$data);
        $this->load->view('template/sidemenu',$data);
        $this->load->view('kurikulum/data_kurikulum',$data);
        $this->load->view('template/footer',$data);
    }
}