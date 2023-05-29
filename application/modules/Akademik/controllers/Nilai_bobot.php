<?php
class Nilai_bobot extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Nilaibobot_model', 'm_bobot');
    }

    function index()
    {
        $data = array(
            'title' => 'Data Bobot Nilai',
            'data' => $this->m_bobot->Index(),
        );
        $this->load->view('template/header', $data);
        $this->load->view('template/sidemenu', $data);
        $this->load->view('nilai_bobot/data_nilai_bobot', $data);
        $this->load->view('template/footer', $data);
    }
    public function Insert()
    {
        $data = [
            'id' => $this->input->post('id'),
            'nilai_min' => $this->input->post('nilai_min'),
            'nilai_max' => $this->input->post('nilai_max'),
            'nilai_huruf' => $this->input->post('nilai_huruf'),
            'nilai_bobot' => $this->input->post('nilai_bobot'),
            'predikat' => $this->input->post('predikat'),
        ];
        $this->session->set_flashdata('msg', "Insert Bobot Nilai Success!");
        $this->m_bobot->Insert($data);
        redirect(site_url('administrator/bobot-nilai'));
    }

    public function Update()
    {
        $id = $this->input->post('id');
        $data = [
            'nilai_min' => $this->input->post('nilai_min'),
            'nilai_max' => $this->input->post('nilai_max'),
            'nilai_huruf' => $this->input->post('nilai_huruf'),
            'nilai_bobot' => $this->input->post('nilai_bobot'),
            'predikat' => $this->input->post('predikat'),
        ];

        $this->session->set_flashdata('msg', "Update Bobot Nilai Success!");
        $this->m_bobot->Update($data, $id);
        redirect(site_url('administrator/bobot-nilai'));
    }

    function Delete($id)
    {
        $this->m_bobot->Delete($id);
        $this->session->set_flashdata('msg', 'Data Succes Delete');
        redirect(base_url('administrator/bobot-nilai'));
    }
}
