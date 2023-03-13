<?php
class Fakultas_master extends MY_controller
{
    function __construct()
    {
        parent:: __construct();
    }

    function index()
    {
		$data = array(
			'title' => 'Data Fakultas',
			'data' => 'Data Yayasan',
		);
		
		$this->load->view('template/header',$data);
        $this->load->view('template/sidemenu',$data);
        $this->load->view('fakultas/data_fakultas',$data);
        $this->load->view('template/footer',$data);
    }
    
}