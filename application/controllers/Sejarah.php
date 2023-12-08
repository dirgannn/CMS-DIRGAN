<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sejarah extends CI_Controller
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
        $this->load->view('sejarah');
    }
}
