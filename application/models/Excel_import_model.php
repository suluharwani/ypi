<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Excel_import_model extends CI_Model {

	function select(){
		$this->db->order_by('id', 'desc');
		$query = $this->db->get('alumni');
		return $query;
	}
	
	function insert(){
		$this->db->insert_batch('alumni', $data);
	}
 
}

/* End of file Excel_import_model.php */
/* Location: ./application/models/Excel_import_model.php */