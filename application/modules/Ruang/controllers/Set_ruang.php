<?php
class Set_ruang extends MY_controller
{
    function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Data_setruangmodel', 'm_setruang');
        $this->load->model('Data_ruangmodel', 'm_ruang');
    }

    public function index()
    {
        $kode_prodi = $this->input->get('kode_prodi');
        if ($kode_prodi != null) {
            $data = [
                'title' => 'Set Data Ruang',
                'data' => $this->m_setruang->Filter_Prodi($kode_prodi),
                'unit' => $this->m_ruang->get_unit(),
                'prodi' => $this->m_setruang->get_data_prodi(),
            ];
        } else {
            $data = [
                'title' => 'Set Data Ruang',
                'data' => $this->m_setruang->get_setruang(),
                'unit' => $this->m_ruang->get_unit(),
                'prodi' => $this->m_setruang->get_data_prodi(),
            ];
        }

        $this->load->view('template/header', $data);
        $this->load->view('template/sidemenu', $data);
        $this->load->view('ruang/set_ruang', $data);
        $this->load->view('template/footer', $data);
    }

    public function insert()
    {
        $ruang = $this->input->post('ruangansave');
        foreach ($ruang as $rg) {
            $data = [
                'kode_prodi' => $this->input->post('kode_prodi'),
                'id_ruang' => $rg,
            ];
            $this->m_setruang->insert($data);
        }
        $this->session->set_flashdata('msg', "Insert Set Room Success!");
        redirect(site_url('administrator/set-data-ruang'));
    }

    public function delete($id)
    {
        $this->m_setruang->Delete($id);
        $this->session->set_flashdata('msg', 'Data Succes Delete');
        redirect(base_url('administrator/set-data-ruang'));
    }
}
