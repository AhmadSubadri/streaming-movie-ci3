<?php

function is_logged_in()
{
    $ci = get_instance();
    if (!$ci->session->userdata('username')) {
        redirect('auth');
    } else {
        $uname = $ci->session->userdata('username');
        $page = $ci->uri->segment(1);
        $ci->db->select('*')
            ->from('tb_users')
            ->JOIN('tb_users_levels', 'tb_users.id_users = tb_users_levels.id_users')
            ->JOIN('tb_users_level', 'tb_users_level.id_level = tb_users_levels.id_level')
            ->where('username', $uname)
            ->where('tb_users_level.users_level', $page);
        $queryuser = $ci->db->get();
        if ($queryuser->num_rows() < 1) {
            redirect('404');
        }
    }
}

function is_mahasiswa()
{
    $ci = get_instance();
    if (!$ci->session->userdata('npm_mahasiswa')) {
        redirect('auth');
    }
}
