<?php

class Dashboard_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function Biodata_Mhs()
    {
        $npm = $this->session->userdata('username');
        $this->db->select('*')->from('tb_mahasiswa')->where('tb_mahasiswa.npm_mahasiswa', $npm)
            ->join('tb_alamat_mahasiswa', 'tb_alamat_mahasiswa.npm_mahasiswa = tb_mahasiswa.npm_mahasiswa')
            ->join('riwayat_pendidikan_mahasiswa', 'riwayat_pendidikan_mahasiswa.npm_mahasiswa = tb_mahasiswa.npm_mahasiswa')
            ->join('tb_prodi', 'tb_prodi.kode_prodi = tb_mahasiswa.kode_prodi')
            ->join('tb_fakultas', 'tb_fakultas.kode_fak = tb_prodi.kode_fak');
        $query = $this->db->get();
        return $query->row();
    }
}
