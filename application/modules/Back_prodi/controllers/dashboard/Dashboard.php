<?php
class Dashboard extends MY_controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Globalprodi_model', 'mp_global');
        is_logged_in();
    }

    public function index()
    {
        $data = array(
            'title' => 'Dashboard',
            'name_profile' => 'Profile ' . $this->session->userdata('nama_users'),
            'data' => $this->mp_global->Get_Detail_Prodi(),
            'prodikode' => $this->mp_global->get_prodi_kode($_SESSION['nama_users']),
            'dosen' => $this->mp_global->get_Dosen_ByProdi($_SESSION['nama_users'])
        );
        $this->load->view('template/header', $data);
        $this->load->view('template/sidemenu_prodi', $data);
        $this->load->view('Back_prodi/dashboard_view', $data);
        $this->load->view('template/footer', $data);
    }

    public function Save_Profile()
    {
        $kode_prodi = $this->input->post('kode_prodi');
        $data_detail = [
            'kode_prodi' => $kode_prodi,
            'kaprodi_kodedosen' => $this->input->post('kaprodi_kodedosen'),
            'visi' => $this->input->post('visi'),
            'misi' => $this->input->post('misi'),
            'akreditasi' => $this->input->post('akreditasi'),
            'no_sk_akreditasi' => $this->input->post('no_sk_akreditasi'),
            'website' => $this->input->post('website'),
            'email' => $this->input->post('email'),
            'telp' => $this->input->post('telp'),
        ];
        $check2 = $this->mp_global->check_users($_SESSION['nama_users']);
        $pass_users = $this->input->post('password');
        if ($pass_users == NULL) {
            $data_users = [
                'email_users' => $this->input->post('email'),
                'pass_users' => $check2->pass_users
            ];
        } else {
            $data_users = [
                'email_users' => $this->input->post('email'),
                'pass_users' => md5($pass_users)
            ];
        }

        $check = $this->mp_global->check_detail_prodi($kode_prodi);
        if ($check < 1) {
            $this->db->insert('tb_prodi_detail', $data_detail);
            $this->db->update('tb_users', $data_users, ['nama_users' => $_SESSION['nama_users']]);
            $this->session->set_flashdata('msg', "Insert Data Detail Program Studi Success!");
            redirect(site_url('prodi'));
        } else {
            $this->db->update('tb_prodi_detail', $data_detail, ['kode_prodi' => $kode_prodi]);
            $this->db->update('tb_users', $data_users, ['nama_users' => $_SESSION['nama_users']]);
            $this->session->set_flashdata('msg', "Insert Data Detail Program Studi Success!");
            redirect(site_url('prodi'));
        }
    }
}
