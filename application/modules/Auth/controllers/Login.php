<?php
class Login extends MY_controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = [
            'title' => "Login"
        ];
        $this->load->view('template/head', $data);
        $this->load->view('google_login', $data);
        $this->load->view('template/footer', $data);
    }
}
