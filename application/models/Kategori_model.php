<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function create_kategori($data)
    {
        $this->db->insert('kategori', $data);
    }
    public function is_kategori_exists($nama_kategori)
    {
        $this->db->where('nama_kategori', $nama_kategori);
        $query = $this->db->get('kategori');
        return ($query->num_rows() > 0);
    }
    public function get_item_by_id($id)
    {
        $this->db->where('id_kategori', $id);
        $query = $this->db->get('kategori');

        return $query->row_array();
    }
    public function update_kategori($id, $data)
    {
        $this->db->where('id_kategori', $id);
        $this->db->update('kategori', $data);
    }
    public function delete_data($id)
    {
        $this->db->where('id_kategori', $id);
        $this->db->delete('kategori');
    }
}
