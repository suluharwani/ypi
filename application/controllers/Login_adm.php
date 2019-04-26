<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_adm extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('mdl_login');
	}
	public function index()
	{
		$jumlah_admin = $this->db->get('admin')->num_rows();
		$submit = $this->input->post('submit',TRUE);
		if ($jumlah_admin<1) {
			if ($submit=="register") {
				$nama = $this->input->post('nama');
				$username = $this->input->post('username');
				$password = $this->bcrypt->hash_password($this->input->post('password'));
				$no_hp = $this->input->post('no_hp');
			$object = [
					'nama' => $nama,
					'username' => $username,
					'password' => $password,
					'no_hp' => $no_hp,
					'level' => '1',
			];
			$this->db->insert('admin', $object);
			redirect('adm','refresh');
			}

			$this->load->view('reg_adm');
		}else{

			if ($submit=="submit") {
			//proses login
				$username = $this->input->post('username');
				$password = $this->input->post('password');
				$hasil = $this->mdl_login->login_admin($username,$password);
				if ($hasil==1) {
					$adm = $this->mdl_login->adm($username);
					foreach ($adm->result() as $value) {
					$id_admin = $value->id;
				}
					$this->session->set_userdata(array('status_login' => 'admin_login', 'id_admin_login' => $id_admin));
					redirect('/adm');
				}else{
					$data['salah'] = "username atau password tidak ada";
					$this->load->view('login_adm', $data);
				}
			}
			$this->load->view('login_adm');
		}

	}
	function logout(){
		$this->session->sess_destroy();
		redirect('login','refresh');
	}

}

/* End of file auth.php */
/* Location: ./application/controllers/auth.php */