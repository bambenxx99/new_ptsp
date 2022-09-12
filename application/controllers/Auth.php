<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function index()
	{

		if ($this->session->userdata('username')) {
			redirect('ticket');
		} else {
			$this->form_validation->set_rules('username', 'username', 'trim|required');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');
			if ($this->form_validation->run() === false) {
				$data['title'] = 'Login Page';
				$this->load->view('templates/auth_header', $data);
				$this->load->view('auth/login');
				$this->load->view('templates/auth_footer');
			} else {
				$this->login();
			}
		}
	}

	private function login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$user = $this->db->get_where('user', ['username' => $username])->row_array();

		if ($user) {
			if ($user['is_active'] == 1) {

				if (password_verify($password, $user['password'])) {
					$Data = [
						'username' => $user['username'],
						'role_id' => $user['role_id']
					];
					$this->session->set_userdata($Data);
					redirect('ticket');
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> 
					Username/Password is wrong! </div>');
					redirect('auth');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> 
				your account has not been active</div>');
				redirect('auth');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> 
			This Account has not registered! </div>');
			redirect('auth');
		}
	}


	// public function registration()
	// {

	// 	if ($this->session->userdata('username')) {
	// 		redirect('user');
	// 	}
	// 	$this->form_validation->set_rules('name', 'Name', 'trim|required');
	// 	$this->form_validation->set_rules('username', 'username', 'trim|required|is_unique[user.username]', [
	// 		'is_unique' => 'Your username Number was registered!'
	// 	]);
	// 	$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[user.email]', [
	// 		'is_unique' => 'Your E-Mail was registered!'
	// 	]);
	// 	$this->form_validation->set_rules('password1', 'Password', 'trim|required|min_length[6]|matches[password2]', [
	// 		'matches' => 'Password not match!',
	// 		'min_length' => 'Password too short!'
	// 	]);

	// 	$this->form_validation->set_rules('password2', 'Password', 'trim|matches[password1]');


	// 	if ($this->form_validation->run() === false) {
	// 		$data['title'] = 'Registration Page';
	// 		$this->load->view('templates/auth_header', $data);
	// 		$this->load->view('auth/registration');
	// 		$this->load->view('templates/auth_footer');
	// 	} else {
	// 		$data = [
	// 			'name' => htmlspecialchars($this->input->post('name')),
	// 			'username' => htmlspecialchars($this->input->post('username')),
	// 			'email' => $this->input->post('email'),
	// 			'image' => 'default.jpg',
	// 			'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
	// 			'role_id' => '2',
	// 			'is_active' => '0',
	// 			'id_cuti' => '1'
	// 		];

	// 		$this->db->insert('user', $data);
	// 		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> 
	// 		Account has been registered! Need activation by Administrator</div>');
	// 		redirect('auth');
	// 	}
	// }
	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('role_id');
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> 
		You Have Been Logged Out!! </div>');
		redirect('auth');
	}
}
