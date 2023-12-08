<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function index()
    {
        $this->load->view('admin/login');
    }

    public function login()
    {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $this->db->from('user');
        $this->db->where('username', $username)->where('password', $password);
        $data = $this->db->get()->row();

        if ($data == NULL) {
            $this->session->set_flashdata('pwsalah', 'Username atau password salah');
            redirect('admin/auth');
        } else {
            // Update kolom "recent_login" dengan waktu saat ini
            $this->db->where('id_user', $data->id_user);
            $this->db->update('user', array('recent_login' => date('Y-m-d H:i:s')));

            $userdata = array(
                'is_login' => true,
                'id_user' => $data->id_user,
                'username' => $data->username,
                'password' => $data->password,
                'level' => $data->level,
                'nama' => $data->nama,
            );
            $this->session->set_userdata($userdata);
            redirect('admin/home');
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('admin/auth');
    }
}
