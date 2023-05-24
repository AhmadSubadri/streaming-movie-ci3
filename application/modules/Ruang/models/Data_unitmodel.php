<?php

class Data_unitmodel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function get_unit()
    {
        $this->db->select('*')->from('tb_unit');
        $query = $this->db->get();
        return $query;
    }

    public function insert($data)
    {
        return $this->db->insert('tb_unit', $data);
    }

    public function update($data, $id)
    {
        return $this->db->update('tb_unit', $data, ['id' => $id]);
    }

    public function Delete($id)
    {
        return $this->db->delete('tb_unit', ['id' => $id]);
    }
}
