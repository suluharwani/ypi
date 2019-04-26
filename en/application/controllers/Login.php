<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct() {
	parent::__construct();
	$this->load->model('mdl_login');
	}
	public function index()
	{
		
		$submit = $this->input->post('submit',TRUE);
		if ($submit=="submit") {
			//proses login
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$hasil = $this->mdl_login->login($username,$password);

			if ($hasil==1) {
				$this->session->set_userdata(array('status_login' => 'oke'));
				redirect('/adminccm');
			}else{
				$data['salah'] = "Username atau password tidak ada";
				$this->load->view('production/login', $data);
			}
			
		}
		$this->load->view('production/login');

	}
	function logout(){
		$this->session->sess_destroy();
		redirect('login','refresh');
	}

}

/* End of file auth.php */
/* Location: ./application/controllers/auth.php */