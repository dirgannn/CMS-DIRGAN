<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Caraousel_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function delete_data($id)
    {
        $filename = FCPATH . '/assets/upload/caraousel/' . $id;
        if (file_exists($filename)) {
            unlink("./assets/upload/caraousel/" . $id);
        }
        $where = array(
            'foto' => $id
        );
        $this->db->delete('caraousel', $where);
    }
}