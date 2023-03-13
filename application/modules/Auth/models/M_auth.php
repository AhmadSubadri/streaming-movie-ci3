<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_auth extends CI_Model {

	public function cek_user($username,$password)
	{
		$query = $this->db->query("select * from users where username = '$username' and pass_users = '$password' ");

		return $query;
	}

	

}