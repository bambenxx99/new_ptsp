<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('M_Admin');
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
    }
    public function userlist()
    {
        $data['title'] = 'Data Pegawai';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['semuadata'] = $this->M_Admin->List_pegawai();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/userlist', $data);
        // var_dump($data);
        // die;

        // $this->form_validation->set_rules('AccessRole', 'AccessRole', 'required');

        // if ($this->form_validation->run() === false) {
        //     $this->load->view('templates/header', $data);
        //     $this->load->view('templates/sidebar', $data);
        //     $this->load->view('templates/topbar', $data);
        //     $this->load->view('admin/userlist', $data);
        // } else {
        //     $AccessRole = $this->input->post('AccessRole');

        // if ($AccessRole === 'Administrator') {
        // $role =
        // $data['change_role'] = $this->M_Admin->change_role();

        // ['role_id' => '1'];
        // }
        //  else {
        //     $role =
        //         ['role_id' => '2'];
        // }

        //     $this->db->update('user', $role);
        //     $this->session->set_tempdata('message', '<div class="alert alert-success" role="alert"> 
        //         Account has been Updated! </div>', 5);
        //     redirect('user');
        // }
    }
}
