<?php
class Dosen_master extends MY_controller
{
    function __construct()
    {
        parent:: __construct();
    }

    function index()
    {
		$data = array(
			'title' => 'Data Dosen',
			'data' => 'Data Yayasan',
		);
		
		$this->load->view('template/header',$data);
        $this->load->view('template/sidemenu',$data);
        $this->load->view('dosen/data_dosen',$data);
        $this->load->view('template/footer',$data);
    }
    
}