<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (($this->session->userdata('level') == NULL)) {
            redirect('admin/auth');
        }
    }
    public function index()
    {
        $data = array(
            'judul' => 'DASHBOARD ADMIN',
        );
        $this->load->view('admin2/dashboard', $data);
    }
}
