<?php

class Fakultas_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function rules()
    {
        return [
            [
                'field' => 'kode_fak',
                'label' => 'Kode Fakultas',
                'rules' => 'required'
            ],
            [
                'field' => 'nama_fak',
                'label' => 'Nama Fakultas',
                'rules' => 'required'
            ],
        ];
    }

    public function Index()
    {
        $this->db->select('*')->from('tb_fakultas')->order_by('nama_fak', 'DESC');
        $query = $this->db->get();
        return $query;
    }

    public function Get_Kode_PT()
    {
        $this->db->select('*')->from('tb_pt');
        $query = $this->db->get();
        return $query->row();
    }

    public function Insert($tb, $data)
    {
        return $this->db->insert($tb, $data);
    }

    public function Update($tb, $data, $id)
    {
        return $this->db->update($tb, $data, $id);
    }
    public function Get_Id_Users($nama)
    {
        $this->db->select('id_users')->from('tb_users')->where('nama_users', $nama);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->row()->id_users;
        }
        return false;
    }

    public function Get_Id_Del()
    {
        $query = $this->db->query("SELECT tb_users.id_users FROM tb_users JOIN tb_fakultas  where tb_users.nama_users = tb_fakultas.nama_fak ");
        if ($query->num_rows() > 0) {
            return $query->row()->id_users;
        }
        return false;
    }

    public function Delete($id)
    {
        return $this->db->delete('tb_fakultas', ['id' => $id]);
    }
    public function Deleteuser($ids)
    {
        return $this->db->delete('tb_users', ['id_users' => $ids]);
    }
}
