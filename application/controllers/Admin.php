<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('M_Admin');
        $this->load->model('M_Ticket');
    }

    public function index()
    {
        $data['title'] = 'Dashboard Admin';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
    }
    public function input_data()
    {
        $data['title'] = 'Input Data';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/input_data', $data);
    }

    public function userlist()
    {
        $data['title'] = 'Data User';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['semuadata'] = $this->M_Admin->List_pegawai();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/userlist', $data);
    }


    public function addAccount()
    {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|is_unique[user.username]', [
            'is_unique' => 'Your usename was registered!'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[user.email]', [
            'is_unique' => 'Your E-Mail was registered!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'trim|required|min_length[6]|matches[password2]', [
            'matches' => 'Password not match!',
            'min_length' => 'Password too short!'
        ]);

        $this->form_validation->set_rules('password2', 'Password', 'trim|matches[password1]');


        if ($this->form_validation->run() === false) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> 
			Terdapat Kesalahan Data!</div>');
        } else {
            $data = [
                'name' => htmlspecialchars($this->input->post('name')),
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => '2',
                'is_active' => '1'
            ];

            $this->M_Admin->addAccount($data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> 
			Account has been added</div>');
            redirect('admin/userlist');
        }
    }

    public function delete_account()
    {
        $id = $this->input->post('to_delete');
        $this->M_Admin->deleteAccount($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> 
        Account has been Deleted! </div>', 5);
        redirect('admin/userlist');
    }



    public function addlayanan()
    {
        $this->form_validation->set_rules('nama_layanan', 'Nama layanan', 'required');
        $this->form_validation->set_rules('lama_waktu', 'Lama Waktu', 'required');

        if ($this->form_validation->run() === false) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> 
			Terdapat Kesalahan Data!</div>');
            redirect('admin/input_data');
        } else {
            $data = [
                'jenis_layanan' => $this->input->post('nama_layanan'),
                'lama_waktu' => $this->input->post('lama_waktu'),
                'id_bidang' => $this->input->post('bidang')

            ];

            $this->M_Admin->add_layanan($data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> 
			Layanan telah ditambahkan</div>');
            redirect('admin/input_data');
        }
    }
    public function addSyarat()
    {

        $this->form_validation->set_rules('syarat_layanan', 'Syarat Layanan', 'required');

        if ($this->form_validation->run() === false) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> 
        	Terdapat Kesalahan Data!</div>');
            redirect('admin/input_data');
        } else {
            $data = [
                'id_layanan' => $this->input->post('id_layanan'),
                'syarat_layanan' => $this->input->post('syarat_layanan')
            ];


            $this->M_Admin->add_syarat($data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> 
			Syarat Layanan telah ditambahkan</div>');
            redirect('admin/input_data');
        }
    }

    public function listlayanan(){
        $data['title'] = 'List Layanan';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['layanan']= $this->M_Ticket->list_layanan();
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/listlayanan', $data);
    }
    public function detail_layanan(){
        $data['title'] = 'List Layanan';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $id_layanan=$this->input->get('layanan');
        $data['syarat']= $this->M_Ticket->list_syarat($id_layanan);
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/detail_layanan', $data);
    }
}
