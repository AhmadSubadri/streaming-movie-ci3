<?php
class Perguruantinggi_master extends MY_controller
{
    function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Perguruantinggi_model', 'm_pt');
    }

    function index()
    {
        $data = array(
            'title' => 'Data Perguruan Tinggi',
            'data' => $this->m_pt->Index(),
        );

        $this->load->view('template/header', $data);
        $this->load->view('template/sidemenu', $data);
        $this->load->view('perguruan_tinggi/data_perguruan_tinggi', $data);
        $this->load->view('template/footer', $data);
    }

    public function Insert()
    {
        $file_name = uniqid('file_banner');
        $config['upload_path'] = './uploads';
        $config['allowed_types']        = 'jpg|jpeg|png|JPG|JPEG|PNG';
        $config['file_name']    = "$file_name-" . date("Ydm");
        $config['overwrite'] = true;
        $config['max_size'] = 5048;
        $config['ecncrypt_name'] = true;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        $id = $this->input->post('id_pt');
        $check_data = $this->m_pt->Get_Data_Perguruan_tinggi_ByID($id);
        $rules = $this->m_pt->rules();
        $this->form_validation->set_rules($rules);
        if ($this->form_validation->run() === FALSE) {
            $data = array(
                'title' => 'Data Perguruan Tinggi',
                'data' => $this->m_pt->Index(),
            );

            $this->load->view('template/header', $data);
            $this->load->view('template/sidemenu', $data);
            $this->load->view('perguruan_tinggi/data_perguruan_tinggi', $data);
            $this->load->view('template/footer', $data);
        } else {
            if (!$check_data) {
                if (!$this->upload->do_upload('logo_pt')) {
                    $data = [
                        'kode_pt' => $this->input->post('kode_pt'),
                        'email_pt' => $this->input->post('email_pt'),
                        'nama_pt' => $this->input->post('nama_pt'),
                        'awal_berdiri_pt' => $this->input->post('awal_berdiri_pt'),
                        'website_pt' => $this->input->post('website_pt'),
                        'no_telepon_pt' => $this->input->post('no_telepon_pt'),
                        'fax_pt' => $this->input->post('fax_pt'),
                        'alamat_pt' => $this->input->post('alamat_pt'),
                        'kode_pos_pt' => $this->input->post('kode_pos_pt'),
                    ];
                    $this->m_pt->insert($data);
                    $this->session->set_flashdata('msg', "Insert Data Perguruan Tinggi no pictures Success!");
                    redirect(site_url('administrator/data-perguruan-tinggi'));
                } else {
                    $logo = $this->upload->data();
                    $data = [
                        'kode_pt' => $this->input->post('kode_pt'),
                        'email_pt' => $this->input->post('email_pt'),
                        'nama_pt' => $this->input->post('nama_pt'),
                        'awal_berdiri_pt' => $this->input->post('awal_berdiri_pt'),
                        'website_pt' => $this->input->post('website_pt'),
                        'no_telepon_pt' => $this->input->post('no_telepon_pt'),
                        'fax_pt' => $this->input->post('fax_pt'),
                        'alamat_pt' => $this->input->post('alamat_pt'),
                        'kode_pos_pt' => $this->input->post('kode_pos_pt'),
                        'logo_pt' => $logo['file_name'],
                    ];
                    $this->m_pt->insert($data);
                    $this->session->set_flashdata('msg', "Insert Data Perguruan Tinggi with pictures Success!");
                    redirect(site_url('administrator/data-perguruan-tinggi'));
                }
            } else {
                if (!$this->upload->do_upload('logo_pt')) {
                    $data = [
                        'kode_pt' => $this->input->post('kode_pt'),
                        'email_pt' => $this->input->post('email_pt'),
                        'nama_pt' => $this->input->post('nama_pt'),
                        'awal_berdiri_pt' => $this->input->post('awal_berdiri_pt'),
                        'website_pt' => $this->input->post('website_pt'),
                        'no_telepon_pt' => $this->input->post('no_telepon_pt'),
                        'fax_pt' => $this->input->post('fax_pt'),
                        'alamat_pt' => $this->input->post('alamat_pt'),
                        'kode_pos_pt' => $this->input->post('kode_pos_pt'),
                    ];
                    $this->m_pt->update($data, $id);
                    $this->session->set_flashdata('msg', "Update Data Perguruan Tinggi no pictures Success!");
                    redirect(site_url('administrator/data-perguruan-tinggi'));
                } else {
                    $logo = $this->upload->data();
                    if (!$check_data->logo_pt) {
                        $logo_pt = $logo['file_name'];
                    } else {
                        $path = './uploads/' . $check_data->logo_pt;
                        chmod($path, 0777);
                        unlink($path);
                        $logo_pt = $logo['file_name'];
                    }
                    $data = [
                        'kode_pt' => $this->input->post('kode_pt'),
                        'email_pt' => $this->input->post('email_pt'),
                        'nama_pt' => $this->input->post('nama_pt'),
                        'awal_berdiri_pt' => $this->input->post('awal_berdiri_pt'),
                        'website_pt' => $this->input->post('website_pt'),
                        'no_telepon_pt' => $this->input->post('no_telepon_pt'),
                        'fax_pt' => $this->input->post('fax_pt'),
                        'alamat_pt' => $this->input->post('alamat_pt'),
                        'kode_pos_pt' => $this->input->post('kode_pos_pt'),
                        'logo_pt' => $logo_pt,
                    ];
                    $this->m_pt->update($data, $id);
                    $this->session->set_flashdata('msg', "Update Data Perguruan Tinggi with pictures Success!");
                    redirect(site_url('administrator/data-perguruan-tinggi'));
                }
            }
        }
    }
}
