<?php

class Nilaibobot_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function Index()
    {
        $this->db->select('*')->from('tb_bobot_nilai')->order_by('id', 'DESC');
        $query = $this->db->get();
        return $query;
    }

    public function Insert($data)
    {
        return $this->db->insert('tb_bobot_nilai', $data);
    }

    public function Update($data, $id)
    {
        return $this->db->update('tb_bobot_nilai', $data, ['id' => $id]);
    }

    public function Delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_bobot_nilai');
    }
}
