<?php
class Fakultas_master extends MY_controller
{
    function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Fakultas_model', 'm_fakultas');
    }

    function index()
    {
        $data = array(
            'title' => 'Data Fakultas',
            'data' => $this->m_fakultas->Index(),
            'kodePT' => $this->m_fakultas->Get_Kode_PT(),
            'idd' => $this->m_fakultas->Get_Id_Del(),
        );

        $this->load->view('template/header', $data);
        $this->load->view('template/sidemenu', $data);
        $this->load->view('fakultas/data_fakultas', $data);
        $this->load->view('template/footer', $data);
    }

    public function Insert()
    {
        $data = [
            'kode_fak' => $this->input->post('kode_fak'),
            'nama_fak' => $this->input->post('nama_fak'),
            'kode_pt' => $this->input->post('kode_pt'),
        ];
        $this->m_fakultas->Insert('tb_fakultas', $data);
        $nama = $this->input->post('nama_fak');
        $arr = explode(' ', $nama);
        $singkatan = '';
        foreach ($arr as $kata) {
            $singkatan .= substr($kata, 0, 1);
        }
        $datausers = [
            'nama_users' => $this->input->post('nama_fak'),
            'username' => strtolower($singkatan) . "@upy.ac.id",
            'email_users' => strtolower($singkatan) . "@upy.ac.id",
            'pass_users' => md5("123"),
        ];
        $this->m_fakultas->Insert('tb_users', $datausers);
        $user_id = $this->db->insert_id();
        $datalevel = [
            'id_users' => $user_id,
            'id_level' => "3",
        ];
        $this->m_fakultas->Insert('tb_users_levels', $datalevel);
        $this->session->set_flashdata('msg', "Insert Data Fakultas Success!");
        redirect(site_url('administrator/data-fakultas'));
    }

    public function Update()
    {
        $id = $this->input->post('id');
        $data = [
            'kode_fak' => $this->input->post('kode_fak'),
            'nama_fak' => $this->input->post('nama_fak'),
        ];
        $this->m_fakultas->Update('tb_fakultas', $data, ['id' => $id]);
        $nama = $this->input->post('namefak');
        $namafak = $this->input->post('nama_fak');
        $arr = explode(' ', $namafak);
        $singkatan = '';
        foreach ($arr as $kata) {
            $singkatan .= substr($kata, 0, 1);
        }
        $id_users = $this->m_fakultas->Get_Id_Users($nama);
        $datauser = [
            'nama_users' => $this->input->post('nama_fak'),
            'username' => strtolower($singkatan) . "@upy.ac.id",
            'email_users' => strtolower($singkatan) . "@upy.ac.id",
        ];
        $this->m_fakultas->Update('tb_users', $datauser, ['id_users' => $id_users]);
        $this->session->set_flashdata('msg', "Update data Fakultas Success!");

        redirect(site_url('administrator/data-fakultas'));
    }

    public function Delete()
    {
        $id = $this->input->post('id');
        $ids = $this->m_fakultas->Get_Id_Del();
        $this->session->set_flashdata('msg', "Delete data Fakultas Success!");
        $this->m_fakultas->Delete($id);
        $this->m_fakultas->Deleteuser($ids);
        redirect(site_url('administrator/data-fakultas'));
    }
}
