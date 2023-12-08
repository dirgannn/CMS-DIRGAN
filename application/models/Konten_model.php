<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Konten_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function create_konten($data)
    {
        $this->db->insert('konten', $data);
    }
    public function is_konten_exists($judul)
    {
        $this->db->where('judul', $judul);
        $query = $this->db->get('konten');
        return ($query->num_rows() > 0);
    }
    public function get_item_by_id($id)
    {
        $this->db->where('id_konten', $id);
        $query = $this->db->get('konten');

        return $query->row_array();
    }
    public function update_konten($id, $data)
    {
        $this->db->where('id_konten', $id);
        $this->db->update('konten', $data);
    }
    public function delete_data($id)
    {
        $filename = FCPATH . '/assets/upload/konten/' . $id;
        if (file_exists($filename)) {
            unlink("./assets/upload/konten/" . $id);
        }
        $where = array(
            'foto' => $id
        );
        $this->db->delete('konten', $where);
    }
}