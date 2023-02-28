<?php
class Dashboard extends MY_controller
{
    function __construct()
    {
        parent:: __construct();
        // if ($this->session->userdata('username') == '') {
		// 	# code...
		// 	redirect(base_url('auth'));
		// }
    }
    function index()
    {
		$data = array(
			'title' => 'Bismillah Siakad UPY New version'
			 );
		
		$this->load->view('template/app',$data);
        // $this->load->view('template/sidemenu',$data);
        $this->load->view('dashboard_view',$data);
        // $this->load->view('template/footer',$data);
    }
    
}