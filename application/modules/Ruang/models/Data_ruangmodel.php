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

    public function search_data($query)
    {
        $this->db->select('*');
        $this->db->from('tb_unit')
            ->where('nama_unit', $query);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_unit()
    {
        $this->db->select('MIN(id) AS id, nama_unit AS unit, MIN(nama_gedung) AS gedung');
        $this->db->from('tb_unit');
        $this->db->group_by('unit');
        $this->db->order_by('unit', 'asc');

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
