<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Admin extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function List_pegawai()
    {
        $this->db->where('is_active', '1');
        $query = $this->db->get('user');
        return $query->result_array();
    }
    public function addAccount($data)
    {
        $this->db->insert('user', $data);
    }
    public function deleteAccount($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user');
    }


    public function add_layanan($data)
    {
        $this->db->insert('layanan', $data);
    }
    public function add_syarat($data)
    {
        $this->db->insert('layanan_syarat', $data);
    }

    public function deleteLayanan($id)
    {
        $this->db->where('id_layanan', $id);
        $this->db->delete('layanan');

    }
    
    public function deleteSyaratlayanan($id)
    {
        
        $this->db->where('id_layanan', $id);
        $this->db->delete('layanan_syarat');
    }
     public function deleteSyaratfromdetail($id)
    {
        $this->db->where('id_syarat', $id);
        $this->db->delete('layanan_syarat');
    }

}
