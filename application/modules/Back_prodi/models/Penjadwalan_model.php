<?php

class Penjadwalan_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function Get_Jadwal_Prodi($idprodi)
    {
        $this->db->select('*, tb_prodi_jadwal_kuliah.id as idjadwalprodi')->from('tb_prodi_jadwal_kuliah')
            ->join('tb_matakuliah', 'tb_matakuliah.kode_mk = tb_prodi_jadwal_kuliah.kode_mk')
            ->join('tb_ruangan', 'tb_ruangan.kode_ruang = tb_prodi_jadwal_kuliah.kode_ruang')
            ->where('tb_prodi_jadwal_kuliah.kode_prodi', $idprodi);
        $query = $this->db->get();
        return $query;
    }

    public function Get_prodi_row()
    {
        $nama_prodi = $_SESSION['nama_users'];
        $this->db->select('*')->from('tb_prodi')
            ->where('nama_prodi', $nama_prodi);
        $query = $this->db->get();
        return $query->row();
    }
}
