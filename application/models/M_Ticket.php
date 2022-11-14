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
    public function delete_ticket($id)
    {
        $this->db->where('kode_ticket', $id);
        return $this->db->delete('ticket');
    }
    public function load_edit_ticket($idticketedit)
    {
        $this->db->where('kode_ticket', $idticketedit);
        $this->db->join('layanan', 'ticket.id_layanan=layanan.id_layanan');
        $query = $this->db->get('ticket');
        return $query->result_array();
    }


    
    public function edit_ticket($kodeticket, $data)
    {
        $this->db->where('kode_ticket', $kodeticket);
        $this->db->update('ticket', $data);
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


    public function search_syarat($idlayanan)
    {
        $this->db->where('id_layanan', $idlayanan);
        return $this->db->get('layanan_syarat')->result();;
    }


    public function load_pesan()
    {
        return $this->db->get('pesan_ticket')->result_array();
    }

    public function update_pesan($data)
    {
        return $this->db->update('pesan_ticket', $data);
    }
    public function load_ticket($kodeticket)
    {
        $this->db->where('kode_ticket', $kodeticket);
        $this->db->join('layanan', 'ticket.id_layanan=layanan.id_layanan');
        $this->db->join('bidang', 'layanan.id_bidang=bidang.id');
        $this->db->join('user', 'ticket.id_admin=user.id');

        return $this->db->get('ticket')->result_array();
    }

    public function list_layanan()
    {
        $this->db->join('bidang', 'layanan.id_bidang=bidang.id');
        return $this->db->get('layanan')->result_array();
    }
    public function list_syarat($id_toload)
    {
        $this->db->where('id_layanan', $id_toload);
        return $this->db->get('layanan_syarat')->result_array();
    }

    public function hitungTicket()
    {
        $query = $this->db->get('ticket');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
    public function hitungTickethariIni()
    {
        $this->db->select('*');
        $this->db->from('ticket');
        $this->db->where('DAY(tanggal)', date('d'));
        $this->db->where('MONTH(tanggal)', date('m'));
        $this->db->where('YEAR(tanggal)', date('Y'));
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
    public function listtickettoday()
    {
        $this->db->select('*');
        $this->db->from('ticket');
        $this->db->where('DAY(tanggal)', date('d'));
        $this->db->where('MONTH(tanggal)', date('m'));
        $this->db->where('YEAR(tanggal)', date('Y'));
        $query = $this->db->get();
        if ($query->result_array() > 0) {
            return $query->result_array();
        } else {
            return 0;
        }
    }
    public function hitungTicketbulanini()
    {
        $this->db->select('*');
        $this->db->from('ticket');
        $this->db->where('MONTH(tanggal)', date('m'));
        $this->db->where('YEAR(tanggal)', date('Y'));
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
    public function hitungLayanan()
    {
        $query = $this->db->get('layanan');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
}
