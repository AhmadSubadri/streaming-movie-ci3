<?php

class Kurikulum_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function Index()
    {
        $this->db->select('*')->from('tb_kurikulum')->order_by('id', 'DESC');
        $query = $this->db->get();
        return $query;
    }

    public function Insert($data)
    {
        return $this->db->insert('tb_kurikulum', $data);
    }
    
    public function Update($data, $id)
    {
        return $this->db->update('tb_kurikulum', $data, ['id' => $id]);
    }
    
    public function Delete($id)
    {
        # code...
        return $this->db->delete('tb_kurikulum', ['id' => $id]);
    }
}