<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Konten extends CI_Controller
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
        $this->load->model('konten_model');
        $this->load->library('form_validation');
        $this->load->library('session');
    }
    public function index()
    {
        $this->db->from('kategori');
        $this->db->order_by('nama_kategori', 'ASC');
        $kategori = $this->db->get()->result_array();

        $this->db->from('konten a');
        $this->db->join('kategori b', 'a.id_kategori=b.id_kategori', 'left');
        $this->db->order_by('tanggal', 'DESC');
        $konten = $this->db->get()->result_array();
        $data = array(
            'judul' => 'KONTEN',
            'kategori' => $kategori,
            'konten' => $konten
        );
        $this->load->view('admin2/konten_index', $data);
    }

    public function simpan()
    {
        $namafoto = date('YmdHis') . '.jpg';
        $config['upload_path'] = './assets/upload/konten';
        $config['max_size'] = 500 * 1024;
        $config['file_name'] = $namafoto;
        $config['allowed_types'] = '*';


        $this->load->library('upload', $config);
        if ($_FILES['foto']['size'] >= 500 * 1024) {
            $this->session->set_flashdata('alertt', '<div class="alert alert-danger alert dismissible" role="alert"> Ukuran foto terlalu besar, upload ulang foto dengan ukuran yang kurang dari 500kb.<button type"button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
            redirect('admin/konten');
        } elseif (!$this->upload->do_upload('foto')) {
            $error = array('error' => $this->upload->display_errors());
        } else {
            $data = array('upload_data' => $this->upload->data);
        }
        $this->load->library('form_validation');
        $this->form_validation->set_rules('judul', 'judul', 'trim|required');

        // ...
        if ($this->form_validation->run() == false) {
            $this->load->view('konten_index');
        } else {
            $judul = $this->input->post('judul');
            $this->load->model('konten_model');
            if ($this->konten_model->is_konten_exists($judul)) {
                $this->session->set_flashdata('tidaksama', 'Konten sudah ada.');
                redirect('admin/konten');
            }
            $data = array(
                'judul' => $judul,
                'username' => $this->session->userdata('username'),
                'id_kategori' => $this->input->post('id_kategori'),
                'penjelasan' => $this->input->post('penjelasan'),
                'keterangan' => $this->input->post('keterangan'),
                'tanggal' => date('Y-m-d'),
                'foto' => $namafoto,
                'slug' => str_replace('', '-', $this->input->post('judul'))
            );
            $this->konten_model->create_konten($data);
            $this->session->set_flashdata('success_user', '<div class="alert alert-success" role="alert">
        Konten berhasil ditambahkan!!
    </div>');
            redirect('admin/konten');
        }
        // ...
    }



    public function update()
    {
        $namafoto = $this->input->post('nama_foto');
        $config['upload_path'] = './assets/upload/konten';
        $config['max_size'] = 500 * 1024;
        $config['file_name'] = $namafoto;
        $config['overwrite'] = true;
        $config['allowed_types'] = '*';


        $this->load->library('upload', $config);
        if ($_FILES['foto']['size'] >= 500 * 1024) {
            $this->session->set_flashdata('alertt', '<div class="alert alert-danger alert dismissible" role="alert"> Ukuran foto terlalu besar, upload ulang foto dengan ukuran yang kurang dari 500kb.<button type"button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
            redirect('admin/konten');
        } elseif (!$this->upload->do_upload('foto')) {
            $error = array('error' => $this->upload->display_errors());
        } else {
            $data = array('upload_data' => $this->upload->data);
        }
        $data = array(
            'judul' =>  $this->input->post('judul'),
            'id_kategori' => $this->input->post('id_kategori'),
            'penjelasan' => $this->input->post('penjelasan'),
            'keterangan' => $this->input->post('keterangan'),
            'slug' => str_replace('', '-', $this->input->post('judul'))
        );

        $where = array(
            'foto' => $this->input->post('nama_foto')
        );

        $this->db->update('konten', $data, $where);
        $this->session->set_flashdata('edit_sucess', '<div class="alert alert-info" role="alert">
        Yey,, Data berhasil di ganti
      </div>');
        redirect('admin/konten');
    }


    public function delete_data($id)
    {
        $this->konten_model->delete_data($id);
        redirect('admin/konten');
    }
}