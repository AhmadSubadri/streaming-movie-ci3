<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_auth extends CI_Model
{

	public function cek_user($username, $password)
	{
		$query = $this->db->query("SELECT * FROM tb_users JOIN tb_users_levels ON tb_users.id_users = tb_users_levels.id_users JOIN tb_users_level ON tb_users_level.id_level = tb_users_levels.id_level where username = '$username' and pass_users = '$password' ");
		return $query;
	}

	public function cek_mhs($username, $password)
	{
		# code...
		$mahasiswa = $this->db->query("SELECT * FROM tb_mahasiswa WHERE npm_mahasiswa = '$username' AND pass_mhs= '$password'");
		return $mahasiswa;
	}
}
