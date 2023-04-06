<?php

class Users_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function rules()
    {
        return [
            [
                'field' => 'nama_users',
                'label' => 'User Name',
                'rules' => 'required',
            ],
            [
                'field' => 'username',
                'label' => 'Username',
                'rules' => 'required|is_unique[tb_users.username]'
            ],
            [
                'field' => 'email_users',
                'label' => 'Email',
                'rules' => 'required|is_unique[tb_users.email_users]'
            ],
            [
                'field' => 'level',
                'label' => 'level',
                'rules' => 'required'
            ],
            [
                'field' => 'pass_users',
                'label' => 'Password',
                'rules' => 'required|min_length[8]'
            ],
            [
                'field' => 'Conf_pass',
                'label' => 'Match Password',
                'rules' => 'required|matches[pass_users]|min_length[8]'
            ],
        ];
    }

    public function Index()
    {
        $this->db->select('*')->from('tb_users')
        ->order_by('tb_users.id_users', 'DESC');
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

    public function Insert($tb, $data)
    {
        return $this->db->insert($tb, $data);
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
