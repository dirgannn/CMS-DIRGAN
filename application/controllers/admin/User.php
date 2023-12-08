<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (($this->session->userdata('level') == NULL)) {
            redirect('admin/auth');
        } // if (($this->session->userdata('level') != "Admin")) {
        //     redirect('home');
        // }
        $this->load->model('user_model');
        $this->load->library('form_validation');
        $this->load->library('session');
    }
    public function index()
    {
        $this->db->from('user');
        $this->db->order_by('id_user', 'ASC');
        $user = $this->db->get()->result_array();
        $data = array(
            'judul' => 'Data Pengguna',
            'user' => $user
        );
        $this->load->view('admin2/user_index', $data);
    }

    public function simpan()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('user_index');
        } else {
            $username = $this->input->post('username');
            $this->load->model('User_model');
            if ($this->User_model->is_username_exists($username)) {
                $this->session->set_flashdata('tidaksama', 'Username sudah tersedia.');
                redirect('user');
            }
            $data = array(
                'username' => $username,
                'password' => md5($this->input->post('password')),
                'nama' => $this->input->post('nama'),
                'level' => $this->input->post('level'),
            );
            $this->User_model->create($data);
            $this->session->set_flashdata('success_user', '<div class="alert alert-success" role="alert">
            User berhasil ditambahkan!!
          </div>');
            redirect('admin/user');
        }
    }

    public function edit($id)
    {
        $data['user'] = $this->user_model->get_item_by_id($id);
        $this->load->view('admin/edit', $data);
    }

    public function update($id)
    {
        $data = array(
            'username' => $this->input->post('username'),
            'nama' => $this->input->post('nama'),
            'password' => md5($this->input->post('password')),
            'level' => $this->input->post('level'),
        );

        $this->user_model->update_user($id, $data);
        $this->session->set_flashdata('edit_sucess', '<div class="alert alert-info" role="alert">
        Yey,, Data berhasil di ganti
      </div>');
        redirect('admin/user');
    }


    public function delete_data($id)
    {
        $this->load->model('User_model');
        $this->user_model->delete_data($id);
        redirect('admin/user');
    }
    public function updateLastLogin($user_id)
    {
        $data = array(
            'last_login' => date('Y-m-d H:i:s'),
        );
        $this->db->where('id', $user_id);
        $this->db->update('user', $data);
    }
}
