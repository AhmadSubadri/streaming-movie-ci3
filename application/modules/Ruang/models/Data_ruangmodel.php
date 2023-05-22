<?php

class Data_ruangmodel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function get_ruang()
    {
        $this->db->select('*')->from('tb_ruangan');
        $query = $this->db->get();
        return $query;
    }

    public function insert($data)
    {
        return $this->db->insert('tb_ruangan', $data);
    }

    public function update($data, $id)
    {
        return $this->db->update('tb_ruangan', $data, ['id' => $id]);
    }

    public function Delete($id)
    {
        return $this->db->delete('tb_ruangan', ['id' => $id]);
    }
}
