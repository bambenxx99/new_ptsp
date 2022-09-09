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
        // var_dump($query);
        // die;
        // $this->db->get('user');
        // if ($query->num_rows() != 0) {
        //     return $query->result_array();
        // } else {
        //     return 0;
        // }
        // $this->db->get_where('user', ['is_active' => 1]);
    }
}
