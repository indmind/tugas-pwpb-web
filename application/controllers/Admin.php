<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function index()
	{
		$data['navbar'] = $this->load->view('admin/navbar', NULL, TRUE);
		$data['userdata'] = $this->session->get_userdata();

		$this->load->view('templates/header');
		$this->load->view('admin/main', $data);
    $this->load->view('templates/footer');
	}

	public function accountSetting() {
		$data['navbar'] = $this->load->view('admin/navbar', NULL, TRUE);

		$this->load->model('User_model');

		$data['userdata'] = $this->User_model->get_users();

		$this->load->view('templates/header');
		$this->load->view('admin/account_setting', $data);
    $this->load->view('templates/footer');
	}

	public function addUser() {
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$user = array(
			'username' => $username,
			'password' => sha1($password),
			'status' => 1
		);

		$this->load->model('User_model');

		$this->User_model->add_user($user);
		
		redirect('admin/accountSetting');
	}

	public function login() {
		$this->load->view('templates/header');
		$this->load->view('admin/login');
    $this->load->view('templates/footer');
	}

	public function loginProcess() {
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$user = array(
			'username' => $username,
			'password' => sha1($password)
		);

		$this->load->model('User_model');

		$check = $this->User_model->check_user($user);

		if($check) {
			$session_data = array(
				'username'  => $username,
				'status' => 'login'
			);

			$this->session->set_userdata($session_data);

			redirect('admin');
		} else {
			echo "Username dan password salah";
		}
	}

	function logout() {
		$this->session->sess_destroy();
		redirect('landingpage');
	}
}
