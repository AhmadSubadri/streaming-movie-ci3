<?php
class Data_camaba extends MY_controller
{
    var $API = "";
    function __construct()
    {
        parent::__construct();
        $this->API = "http://upy_frontend.test/api/Api_camaba";
    }

    public function Index()
    {
        $url = $this->API . '/index_get';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $semua_data = curl_exec($ch);
        curl_close($ch);
        $result = json_decode($semua_data, true);
        $item = $result['biodata'];

        $data = array(
            'title' => 'Data Camaba Lulus',
            'data' => $item,
            // 'detail' => $item2,
        );
        $this->load->view('template/header', $data);
        $this->load->view('template/sidemenu', $data);
        $this->load->view('index', $data);
        $this->load->view('template/footer', $data);
    }

    public function update()
    {
        $url = $this->API . '/index_put';
        $data = [
            'id_camaba' => $this->input->post('id'),
            'npm' => $this->input->post('npm_mahasiswa')
        ];
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_exec($ch);
        curl_close($ch);
        $this->session->set_flashdata('msg', "Update Data Student Success!");
        redirect(site_url('administrator/data-camaba'));
    }

    public function detail()
    {
        $url = $this->API . '/index_get';
        $data = [
            'id' => $this->input->post('id'),
        ];
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        $result = curl_exec($ch);
        curl_close($ch);
        return json_decode($result, true);
        // echo $result;

        // $this->session->set_flashdata('msg', "Update Data Student Success!");
        // redirect(site_url('data-mahasiswa'));
    }
}
