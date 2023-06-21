<?php

class Login_model extends CI_Model
{

    const SESSION_KEY = 'email';
    function __construct()
    {
        parent::__construct();
    }

    public function rules()
    {
        return [
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

    function LogVerify_Admin($email, $password)
    {
        $this->db->where('email', $email);
        $query = $this->db->get('tb_admin');
        $user = $query->row();
        if (!$user) {
            return FALSE;
        }

        if (!password_verify($password, $user->password)) {
            return FALSE;
        }

        $this->session->set_userdata([self::SESSION_KEY => $user->id]);
        $this->session->set_userdata('nama', $user->nama);
        $this->session->set_userdata('id', $user->id);
        $this->session->set_userdata('email', $user->email);
        $this->session->set_userdata('username', $user->username);
        $this->_insert_last_login_Admin($user->id);
        return $this->session->has_userdata(self::SESSION_KEY);
    }

    public function _insert_last_login_Admin($id)
    {
        date_default_timezone_set('Asia/Jakarta');
        $data = [
            'user_id' => $id,
            'timestamp' => date('Y-m-d H:i:s'),
            'ip_address' => $_SERVER['REMOTE_ADDR'],
            'user_agent' => $_SERVER['HTTP_USER_AGENT'],
        ];
        return $this->db->insert('tb_loginhistory', $data);
    }

    public function get_admin($data)
    {
        $this->db->select('*');
        $this->db->from('tb_admin')->where('email = ', $data['email'])->where('password = ', $data['password']);
        $query = $this->db->get();
        return $query;
    }

    public function CurrentUser()
    {
        if (!$this->session->has_userdata(self::SESSION_KEY)) {
            return null;
        }

        $user_id = $this->session->userdata(self::SESSION_KEY);
        $query = $this->db->get_where('tb_admin', ['email' => $user_id]);
        return $query->row();
    }

    public function logout()
    {
        $this->session->unset_userdata(self::SESSION_KEY);
        return !$this->session->has_userdata(self::SESSION_KEY);
    }
}
