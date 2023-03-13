<?php
class Prodi_master extends MY_controller
{
    function __construct()
    {
        parent:: __construct();
    }

    function index()
    {
		$data = array(
			'title' => 'Data Program Studi',
			'data' => 'Data Yayasan',
		);
		
		$this->load->view('template/header',$data);
        $this->load->view('template/sidemenu',$data);
        $this->load->view('prodi/data_prodi',$data);
        $this->load->view('template/footer',$data);
    }
    
}