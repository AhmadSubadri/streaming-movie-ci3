<?php
class Perguruantinggi_master extends MY_controller
{
    function __construct()
    {
        parent:: __construct();
    }

    function index()
    {
		$data = array(
			'title' => 'Data Perguruan Tinggi',
			'data' => 'Data Yayasan',
		);
		
		$this->load->view('template/header',$data);
        $this->load->view('template/sidemenu',$data);
        $this->load->view('data_perguruan_tinggi',$data);
        $this->load->view('template/footer',$data);
    }
    
}