<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
  function __construct(){
		parent::__construct();		
		$this->load->model('Mlogin');
	}

	public function index(){
		$this->load->view('login');
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$where = array(
			'username' => $username,
			'password' => $password
			);
		$cek = $this->Mlogin->cek_login("admin",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
			
			$this->session->set_userdata($data_session);

			redirect("beranda");
 
		}else{
			redirect("login?pesan=gagal");
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}

}



