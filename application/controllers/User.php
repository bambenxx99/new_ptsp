<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }
    public function index()
    {
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/index', $data);
    }
    public function editPass()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->form_validation->set_rules('newPassword1', 'Password', 'trim|required|min_length[6]|matches[newPassword2]');
        $this->form_validation->set_rules('newPassword2', 'Password', 'trim|matches[newPassword1]');
        if ($this->form_validation->run() === false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> 
        	Password gagal dirubah</div>');
            redirect('user');
        } else {
            $newpass = [
                'password' => password_hash($this->input->post('newPassword1'), PASSWORD_DEFAULT),
            ];
            $this->db->where('nip', $this->session->userdata('nomornip'));
            $this->db->update('user', $newpass);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> 
			Password telah dirubah</div>');
            redirect('ticket');
        }
    }
}
