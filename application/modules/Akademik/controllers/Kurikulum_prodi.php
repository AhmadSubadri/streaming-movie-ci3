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

    public function get_autocomplete_mk()
    {
        $query = $this->input->post('id');
        $data = $this->m_Kurikulumprodi->search_data($query);
        header('Content-Type: application/json');
        echo json_encode($data);
    }

    public function insert()
    {
        // Aturan validasi untuk setiap field pada form
        $this->form_validation->set_rules('kode_prodi', 'Kode Prodi', 'required');
        $this->form_validation->set_rules('kode_kurikulum', 'Kode Kurikulum', 'required');
        $this->form_validation->set_rules('semester[]', 'Semester', 'required');
        $this->form_validation->set_rules('matakuliah[][]', 'Matakuliah', 'required');

        if ($this->form_validation->run() == false) {
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
        } else {
            $kode_prodi = $this->input->post('kode_prodi');
            $kode_kurikulum = $this->input->post('kode_kurikulum');
            $semester = $this->input->post('semester');
            $matakuliah = $this->input->post('matakuliah');
            $is_wajib = $this->input->post('is_wajib');
            $is_paket = $this->input->post('is_paket');

            $data = array();

            foreach ($semester as $semesterIndex => $sem) {
                if (isset($matakuliah[$semesterIndex])) {
                    foreach ($matakuliah[$semesterIndex] as $index => $mk) {
                        $isWajib = isset($is_wajib[$semesterIndex][$index]) ? $is_wajib[$semesterIndex][$index] : 0;
                        $isPaket = isset($is_paket[$semesterIndex][$index]) ? $is_paket[$semesterIndex][$index] : 0;

                        $data[] = array(
                            'kode_prodi' => $kode_prodi,
                            'kode_kurikulum' => $kode_kurikulum,
                            'semester' => $sem,
                            'kode_matakuliah' => $mk,
                            'is_wajib' => $isWajib,
                            'is_paket' => $isPaket
                        );
                    }
                }
            }
            $this->m_Kurikulumprodi->insertMatakuliah($data);
            // var_dump($data);
            $this->session->set_flashdata('msg', "Simpan data persebaran Success!");
            redirect('administrator/kurikulum-prodi');
        }
    }
}
