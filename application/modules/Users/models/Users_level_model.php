<?php

class Users_level_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function Index()
    {
        $this->db->select('*')->from('tb_users_level')->order_by('id_level', 'DESC');
        $query = $this->db->get();
        return $query;
    }

    public function Insert($data)
    {
        return $this->db->insert('tb_users_level', $data);
    }

    public function Update($data, $id)
    {
        return $this->db->update('tb_users_level', $data, ['id_level' => $id]);
    }

    public function Delete($id)
    {
        $this->db->where('id_level', $id);
        $this->db->delete('tb_users_level');
    }
}
