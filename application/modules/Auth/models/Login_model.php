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
