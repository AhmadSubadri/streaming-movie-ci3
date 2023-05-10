<?php
class Kurikulum_prodi extends MY_controller
{
    function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Kurikulumprodi_model', 'm_Kurikulumprodi');
    }

    function index()
    {
        $data = array(
            'title' => 'Data Kurikulum Prodi',
            'data' => $this->m_Kurikulumprodi->Index(),
            'prodi' => $this->m_Kurikulumprodi->get_prodi(),
            'kurikulum' => $this->m_Kurikulumprodi->get_kurikulum(),
        );

        $this->load->view('template/header', $data);
        $this->load->view('template/sidemenu', $data);
        $this->load->view('kurikulum_prodi/index', $data);
        $this->load->view('template/footer', $data);
    }

    // public function Get_MK_ByProdi_Kode()
    // {
    //     $kode_prodi = $this->input->post('id');
    //     $data = $this->m_Kurikulumprodi->Get_Matakuliah_ByProdi($kode_prodi);
    // 	echo json_encode($data);
    // }

    public function get_autocomplete_mk()
    {
        $query = $this->input->get('query');
        $data = $this->m_Kurikulumprodi->search_data($query);
        echo json_encode($data);
    }
}
