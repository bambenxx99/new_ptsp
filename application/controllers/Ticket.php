<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ticket extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('M_Ticket');
    }
    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();


        $data['jumlahTicket'] = $this->M_Ticket->hitungTicket();
        $data['ticketHariini'] = $this->M_Ticket->hitungTickethariIni();
        $data['ticketBulanIni'] = $this->M_Ticket->hitungTicketbulanini();
        $data['jumlahLayanan'] = $this->M_Ticket->hitungLayanan();
        $data['listtickethariini'] = $this->M_Ticket->listtickettoday();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('ticket/index', $data);
    }


    public function input()
    {
        $data['title'] = 'Input Ticket';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        // $data['semuaticket'] = $this->M_Ticket->List_ticket();

        $data['unix'] = time();
        $data['tanggal'] = date('d-m-Y', now());

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('ticket/input', $data);
    }



    function get_autocomplete()
    {
        if (isset($_GET['term'])) {
            $result = $this->M_Ticket->search_layanan($_GET['term']);
            if (count($result) > 0) {
                foreach ($result as $row)
                    $arr_result[] = array(
                        'label'            => $row->jenis_layanan,
                        'id'               => $row->id_layanan,
                        'bidang'           => $row->nama_bidang,
                        'waktu'           => $row->lama_waktu,
                    );
                echo json_encode($arr_result);
            }
        }
    }
    function get_autosyarat()
    {
        $idlayanan = $this->input->post('id');
        $data = $this->M_Ticket->search_syarat($idlayanan);
        echo json_encode($data);
    }

    public function proses_input_ticket()
    {
        $id_admin = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $date = date('y-m-d', now());
        $this->validasi_ticket();
        $data = array(
            'kode_ticket' => $this->input->post('no_ticket'),
            'nama' => $this->input->post('nama_pemohon'),
            'tanggal' => $date,
            'jabatan_pemohon' => $this->input->post('jabatan_pemohon'),
            'nomorhp' => $this->input->post('no_hp'),
            'id_layanan' => $this->input->post('id_layanan'),
            'detail_ticket' => $this->input->post('detail_ticket'),
            'kirimPesan' => '0',
            'id_admin' => $id_admin['id']
        );
        $this->M_Ticket->insert_ticket($data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> 
        Data has been inserted </div>', 'refresh');
        redirect('Ticket/list_ticket');
    }

    public function edit($idticketedit)
    {
        $data['title'] = 'Edit Ticket';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['dataedit'] = $this->M_Ticket->load_edit_ticket($idticketedit);


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('ticket/edit', $data);
    }

    public function proses_edit_ticket()
    {
        $id_admin = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $kodeticket = $this->input->post('no_ticket');
        // var_dump($kodeticket);
        // die;    
        $this->validasi_ticket();
        $data = array(
            'nama' => $this->input->post('nama_pemohon'),
            'jabatan_pemohon' => $this->input->post('jabatan_pemohon'),
            'nomorhp' => $this->input->post('no_hp'),
            'id_layanan' => $this->input->post('id_layanan'),
            'detail_ticket' => $this->input->post('detail_ticket'),
            'id_admin' => $id_admin['id']
        );


        $this->M_Ticket->edit_ticket($kodeticket, $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> 
        Data has been Update </div>', 'refresh');
        redirect('Ticket/list_ticket');
    }

    private function validasi_ticket()
    {
        $data = array();
        $data['error_string'] = array();
        $data['inputerror'] = array();
        $data['status'] = TRUE;

        if ($this->input->post('nama_pemohon') == '') {
            $data['inputerror'][] = 'nama_pemohon';
            $data['error_string'][] = 'Tidak boleh kosong';
            $data['status'] = FALSE;
        }
        if ($this->input->post('jabatan_pemohon') == '') {
            $data['inputerror'][] = 'jabatan_pemohon';
            $data['error_string'][] = 'Tidak boleh kosong';
            $data['status'] = FALSE;
        }

        if ($this->input->post('no_hp') == '') {
            $data['inputerror'][] = 'no_hp';
            $data['error_string'][] = 'Tidak boleh kosong';
            $data['status'] = FALSE;
        }

        if ($this->input->post('jenis_layanan') == '') {
            $data['inputerror'][] = 'jenis_layanan';
            $data['error_string'][] = 'Tidak boleh kosong';
            $data['status'] = FALSE;
        }
        if ($this->input->post('detail_ticket') == '') {
            $data['inputerror'][] = 'detail_ticket';
            $data['error_string'][] = 'Tidak boleh kosong';
            $data['status'] = FALSE;
        }
        if ($this->input->post('no_ticket') == '') {
            $data['inputerror'][] = 'no_ticket';
            $data['error_string'][] = 'Tidak boleh kosong';
            $data['status'] = FALSE;
        }

        if ($data['status'] === FALSE) {
            echo json_encode($data);
            exit();
        }
    }



    public function list_ticket()
    {
        $data['title'] = 'Daftar Ticket';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['semuaticket'] = $this->M_Ticket->List_ticket();
        $data['pesan_ticket'] = $this->M_Ticket->load_pesan();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('ticket/list_ticket', $data);
    }


    public function delete_ticket()
    {
        $id = $this->input->post('to_delete');
        $this->M_Ticket->delete_ticket($id);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> 
        Data has been Deleted! </div>', 'refresh');
        redirect('Ticket/list_ticket');
    }
    public function sendMessage()
    {
        $idticket = $this->input->post('id_tomessage');
        $ticket = $this->db->get_where('ticket', ['kode_ticket' => $idticket])->row_array();
        $isipesan = $this->db->get('pesan_ticket')->row_array();

        $data = array(
            'kirimPesan' => '1',
        );
        $message = $isipesan['pesan'];
        $nomorwa = $ticket['nomorhp'];
        $name = $ticket['nama'];
        $message_sent = "Salam bapak/ibu " . $name . " <br>" . $message;
        // var_dump($message);
        // die;
        $this->kirimWablas($nomorwa, $message_sent);
        $this->M_Ticket->updateHavesentmessage($data, $idticket);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> 
        Message has been sent ! </div>', 'refresh');
        redirect('Ticket/list_ticket');
    }

    private function kirimWablas($phone, $message)
    {
        $curl = curl_init();
        $token = "fY3R48uL8XTJrHIxZLej65cnynr0ZNsBEN2GOH5Ghcra1A2mjQOvbkohDkduJYyi";
        $link  =  "https://jogja.wablas.com/api/send-message";

        $data = [
            'phone' => $phone,
            'message' => $message,
        ];
        curl_setopt(
            $curl,
            CURLOPT_HTTPHEADER,
            array(
                "Authorization: $token",
            )
        );
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($curl, CURLOPT_URL, $link);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
        $result = curl_exec($curl);
        curl_close($curl);
        echo "<pre>";
        print_r($result);


        ////////RUANG WA
        // $token = "WDK2n8KAVuNw7r21pmrZCVqyfpDXUHypHCPcChUvCa1a15y2vt";

        // $curl = curl_init();
        // curl_setopt_array($curl, array(
        //     CURLOPT_URL => 'https://app.ruangwa.id/api/send_message',
        //     CURLOPT_RETURNTRANSFER => true,
        //     CURLOPT_ENCODING => '',
        //     CURLOPT_MAXREDIRS => 10,
        //     CURLOPT_TIMEOUT => 0,
        //     CURLOPT_FOLLOWLOCATION => true,
        //     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        //     CURLOPT_CUSTOMREQUEST => 'POST',
        //     CURLOPT_POSTFIELDS => 'token=' . $token . '&number=' . $phone . '&message=' . $message,
        // ));
        // $response = curl_exec($curl);
        // curl_close($curl);
        // echo $response;
    }



    public function laporan_pdf($kodeticket)
    {
        $this->load->library('pdf');
        $data['dataku'] = $this->M_Ticket->load_ticket($kodeticket);
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->pdf->setPaper(array(0, 0, 609.4488, 935.433), 'potrait');
        $this->pdf->filename = "Ticket.pdf";
        $this->pdf->load_view('pdf/pdfticket', $data);
    }


    public function update_pesan()
    {
        $pesan = $this->input->post('pesan_ticket');

        $data = array(
            'pesan' => $pesan
        );

        $this->M_Ticket->update_pesan($data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> 
        Pesan sudah diperbaharui </div>', 'refresh');
        redirect('Ticket/list_ticket');
    }
}
