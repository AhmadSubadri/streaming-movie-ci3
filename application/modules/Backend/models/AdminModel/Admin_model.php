<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function rules()
    {
        return [
            [
                'field' => 'nama',
                'label' => 'Name',
                'rules' => 'required'
            ],
            [
                'field' => 'username',
                'label' => 'username',
                'rules' => 'required'
            ],
            [
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required'
            ],
            [
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required'
            ],
        ];
    }

    public function getAdmins()
    {
        $query = $this->db->get('tb_admin');
        return $query->result();
    }

    public function createAdmin($data)
    {
        return $this->db->insert('tb_admin', $data);
    }

    public function getAdminById($id)
    {
        // Mendapatkan informasi admin berdasarkan ID
        $query = $this->db->get_where('tb_admin', array('id' => $id));
        return $query->row();
    }

    public function updateAdmin($id, $data)
    {
        // Mengupdate admin berdasarkan ID
        $this->db->where('id', $id);
        $this->db->update('tb_admin', $data);
    }

    public function deleteAdmin($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_admin');
    }
}
