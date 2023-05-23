<?php

class Data_setruangmodel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function get_setruang()
    {
        $this->db->select('*')->from('tb_setruangan');
        $query = $this->db->get();
        return $query;
    }

    public function get_Ruang()
    {
        $this->db->select('*')->from('tb_ruangan');
        $query = $this->db->get();
        return $query;
    }

    public function get_data_prodi()
    {
        $this->db->select('*')->from('tb_prodi');
        $query = $this->db->get();
        return $query;
    }

    public function insert($data)
    {
        return $this->db->insert('tb_setruangan', $data);
    }

    public function update($data, $id)
    {
        return $this->db->update('tb_setruangan', $data, ['id' => $id]);
    }

    public function Delete($id)
    {
        return $this->db->delete('tb_setruangan', ['id' => $id]);
    }
}
