<?php

class Users_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function Index()
    {
        $this->db->select('*')->from('tb_users')->join('tb_users_levels', 'tb_users.id_users = tb_users_levels.id_users')->order_by('tb_users.id_users', 'DESC');
        $query = $this->db->get();
        return $query;
    }

    public function Get_Users_Level()
    {
        $this->db->select('*')->from('tb_users_level');
        $query = $this->db->get();
        return $query;
    }

    public function Get_Name_Level()
    {
        $this->db->select('*')->from('tb_users_level');
        $query = $this->db->get();
        return $query;
    }

    public function Insert($data)
    {
        return $this->db->insert('tb_users', $data);
    }

    public function Update($data, $id)
    {
        return $this->db->update('tb_users', $data, ['id_users' => $id]);
    }

    public function Delete($id)
    {
        $this->db->where('id_users', $id);
        $this->db->delete('tb_users');
    }
}
