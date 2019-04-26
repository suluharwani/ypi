<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_login extends CI_Model {

function login($username,$password){
	$check = $this->db->get_where('admin',array('username' => $username,'password' => md5($password)));
 	if ($check->num_rows()>0) {
 		return 1;
 	}
 	else{
 		return 0;
 	}
 }
}

/* End of file mdl_login.php */
/* Location: ./application/models/mdl_login.php */