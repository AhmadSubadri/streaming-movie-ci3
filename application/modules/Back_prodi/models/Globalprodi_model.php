<?php

class Globalprodi_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function Get_Data_Mahasiswa_ByProdi()
    {
        $this->db->select('*')->from('tb_mahasiswa')->order_by('nama_mahasiswa', 'ASC')
            ->join('tb_prodi', 'tb_prodi.kode_prodi = tb_mahasiswa.kode_prodi')->where('tb_prodi.nama_prodi', $_SESSION['nama_users']);
        $query = $this->db->get();
        return $query;
    }

    public function Get_Data_Dosen_ByProdi()
    {
        $this->db->select('*, tb_dosen.id as kd_dosen, tb_dosen.kode_prodi as kd_prodi')->from('tb_dosen')->order_by('nama_dosen', 'ASC')
            ->join('tb_prodi', 'tb_prodi.kode_prodi = tb_dosen.kode_prodi')->where('tb_prodi.nama_prodi', $_SESSION['nama_users']);
        $query = $this->db->get();
        return $query;
    }

    public function get_prodi_kode($nama_prodi)
    {
        $this->db->select('*')
            ->from('tb_prodi')
            ->where('nama_prodi', $nama_prodi);
        $query = $this->db->get();
        return $query->row();
    }

    public function Get_Detail_Prodi()
    {
        $this->db->select('*, tb_dosen.image as imagedosen, tb_prodi.kode_prodi as kodeprodi, tb_prodi_detail.website as websiteprodi, tb_prodi_detail.email as emailprodi, tb_prodi_detail.telp as telpprodi,
        tb_dosen.nip as nipdosen, tb_dosen.nama_dosen as namadosen, tb_dosen.no_telepon_dosen as telpdosen, tb_dosen.email_dosen as emaildosen, tb_dosen.id as iddosen')
            ->from('tb_prodi')
            ->join('tb_prodi_detail', 'tb_prodi_detail.kode_prodi = tb_prodi.kode_prodi')
            ->join('tb_dosen', 'tb_dosen.id = tb_prodi_detail.kaprodi_kodedosen')
            ->where('tb_prodi.nama_prodi', $_SESSION['nama_users']);
        $query = $this->db->get();
        return $query->row();
    }

    public function get_Dosen_ByProdi($nama_prodi)
    {
        $this->db->select('*, tb_dosen.nama_dosen as namadosen, tb_dosen.id as iddosen, tb_dosen.nip as nip')->from('tb_dosen')
            ->join('tb_prodi', 'tb_prodi.kode_prodi = tb_dosen.kode_prodi')
            ->where('tb_prodi.nama_prodi', $nama_prodi);
        $query = $this->db->get();
        return $query->result();
    }

    public function check_detail_prodi($kode_prodi)
    {
        $this->db->select('*')->from('tb_prodi_detail')
            ->where('kode_prodi', $kode_prodi);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function check_users($nama_user)
    {
        $this->db->select('*')->from('tb_users')
            ->where('nama_users', $nama_user);
        $query = $this->db->get();
        return $query->row();
    }
}
