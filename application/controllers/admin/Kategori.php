<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
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
        $this->load->model('kategori_model');
        $this->load->library('form_validation');
        $this->load->library('session');
    }
    public function index()
    {
        $this->db->from('kategori');
        $this->db->order_by('nama_kategori', 'ASC');
        $kategori = $this->db->get()->result_array();
        $data = array(
            'judul' => 'KATEGORI KONTEN',
            'kategori' => $kategori
        );
        $this->load->view('admin2/kategori_index', $data);
    }

    public function simpan()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nama_kategori', 'nama_kategori', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('kategori_index');
        } else {
            $nama_kategori = $this->input->post('nama_kategori');
            $this->load->model('User_model');
            if ($this->kategori_model->is_kategori_exists($nama_kategori)) {
                $this->session->set_flashdata('tidaksama', '<div class="alert alert-danger" role="alert">
                Kategori konten sudah digunakan.
                </div>');
                redirect('admin/kategori');
            }
            $data = array(
                'nama_kategori' => $nama_kategori,
            );
            $this->kategori_model->create_kategori($data);
            $this->session->set_flashdata('success_user', '<div class="alert alert-success" role="alert">
            Kategori berhasil ditambahkan!!
          </div>');
            redirect('admin/kategori');
        }
    }

    public function edit($id)
    {
        $data['kategori'] = $this->kategori_model->get_item_by_id($id);
        $this->load->view('admin/edit_kategori', $data);
    }

    public function update($id_kategori)
    {
        $data = array(
            'nama_kategori' => $this->input->post('nama_kategori')
        );

        $this->db->where('id_kategori', $id_kategori);
        $this->db->update('kategori', $data);

        $this->session->set_flashdata('edit_sucess', '<div class="alert alert-info" role="alert">
            Yey,, Data berhasil di ganti
        </div>');

        redirect('admin/kategori');
    }





    public function delete_data($id)
    {
        $this->kategori_model->delete_data($id);
        redirect('admin/kategori');
    }
}
