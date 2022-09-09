<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Ticket extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function List_ticket()
    {
        $this->db->select('*');
        $this->db->join('layanan', 'ticket.id_layanan=layanan.id_layanan');
        $query = $this->db->get('ticket');
        return $query->result_array();
    }


    public function insert_ticket($data)
    {
        $this->db->insert('ticket', $data);
        // return $this->db->insert_id();
    }
    public function updateHavesentmessage($data, $idticket)
    {
        $this->db->where('kode_ticket', $idticket);
        $this->db->update('ticket', $data);
    }

    public function search_layanan($jenis_layanan)
    {
        $this->db->like('jenis_layanan', $jenis_layanan, 'both');
        $this->db->order_by('jenis_layanan', 'ASC');
        $this->db->limit(10);
        $this->db->join('bidang', 'layanan.id_bidang=bidang.id');
        return $this->db->get('layanan')->result();
    }
    public function load_pesan()
    {
        return $this->db->get('pesan_ticket')->result_array();
    }
    public function load_ticket($kodeticket)
    {
        $this->db->where('kode_ticket', $kodeticket);
        return $this->db->get('ticket')->result_array();
    }
}
