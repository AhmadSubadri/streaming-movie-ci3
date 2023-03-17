<?php

class Tahun_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function Index()
    {
        $this->db->select('*')->from('tb_tahun_akademik')->order_by('kode_tahun_akademik', 'DESC');
        $query = $this->db->get();
        return $query;
    }

    public function Insert($data)
    {
        return $this->db->insert('tb_tahun_akademik', $data);
    }

    public function Update($data, $id)
    {
        return $this->db->update('tb_tahun_akademik', $data, ['id_tahun' => $id]);
    }

    public function Delete($id)
	{
		$this->db->where('id_tahun', $id);
		$this->db->delete('tb_tahun_akademik');
	}
}