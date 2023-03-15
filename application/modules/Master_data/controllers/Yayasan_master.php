<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Yayasan_master extends MY_controller
{
    function __construct()
    {
        parent:: __construct();
        $this->load->model('Yayasan_model', 'm_yayasan');
    }

    public function index()
    {
		$data = array(
			'title' => 'Data Yayasan',
			'data' => $this->m_yayasan->Index(),
		);
		
		$this->load->view('template/header',$data);
        $this->load->view('template/sidemenu',$data);
        $this->load->view('yayasan/data_yayasan',$data);
        $this->load->view('template/footer',$data);
    }
    
    public function Insert()
    {
        $id = $this->input->post('id');
        $check_data = $this->m_yayasan->Get_Data_Yayasan_ByID($id);
        $rules = $this->m_yayasan->rules();
		$this->form_validation->set_rules($rules);
        if ($this->form_validation->run() === FALSE) {
            $data = array(
                'title' => 'Data Yayasan',
                'data' => $this->m_yayasan->Index(),
            );
            
            $this->load->view('template/header',$data);
            $this->load->view('template/sidemenu',$data);
            $this->load->view('yayasan/data_yayasan',$data);
            $this->load->view('template/footer',$data);
        }else{
            $data = [
                'kode_badan_hukum' => $this->input->post('kode_badan_hukum'),
                'nama_badan_hukum' => $this->input->post('nama_badan_hukum'),
                'telepon_yayasan' => $this->input->post('telepon_yayasan'),
                'fax_yayasan' => $this->input->post('fax_yayasan'),
                'alamat_yayasan' => $this->input->post('alamat_yayasan'),
                'email_yayasan' => $this->input->post('email_yayasan'),
                'website_yayasan' => $this->input->post('website_yayasan'),
                'kota_yayasan' => $this->input->post('kota_yayasan'),
                'pos_yayasan' => $this->input->post('pos_yayasan'),
                'awal_berdiri' => $this->input->post('awal_berdiri'),
            ];

            if(!$check_data){
                $this->m_yayasan->insert($data);
                $this->session->set_flashdata('msg', "Insert Data Yayasan Success!");
                // $this->session->set_flashdata('msg_class', 'alert-success');
                redirect(site_url('data-yayasan'));
            }else{
                $this->m_yayasan->update($data, $id);
                $this->session->set_flashdata('msg', "Update Data Yayasan Success!");
                // $this->session->set_flashdata('msg_class', 'alert-success');
                redirect(site_url('data-yayasan'));
            }
        }
    }
}