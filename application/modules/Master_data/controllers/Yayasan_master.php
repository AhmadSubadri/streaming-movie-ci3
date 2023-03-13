<?php
class Yayasan_master extends MY_controller
{
    function __construct()
    {
        parent:: __construct();
    }

    function index()
    {
		$data = array(
			'title' => 'Data Yayasan',
			'data' => 'Data Yayasan',
		);
		
		$this->load->view('template/header',$data);
        $this->load->view('template/sidemenu',$data);
        $this->load->view('yayasan/data_yayasan',$data);
        $this->load->view('template/footer',$data);
    }
    
}