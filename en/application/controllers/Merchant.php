<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Merchant extends CI_Controller {


function do_upload($update_id)
{   
    $this->load->library('session');
    $this->_make_sure_is_admin();
    $update_id = $this->uri->segment(3);
    $this->load->model('mdl_merchant');
    $data['merchant'] = $this->mdl_merchant->merchant()->result();
    $submit=$this->input->post('submit', TRUE);
    if ($submit=="Cancel") {
       redirect('adminccm/merchant/'.$update_id,'refresh');
    }


    $config['upload_path']          = '.././assets/upload/merchant/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['max_size']             = 10000;
    $config['max_width']            = 2000;
    $config['max_height']           = 2000;

    $this->load->library('upload', $config);

    if (!$this->upload->do_upload('userfile'))
    {
         $data['error'] = array('error' => $this->upload->display_errors("<p style='color:red;'>", "</p>"));
         // foreach ($error as $key => $value) {
         //     echo $value."<br>";
         // }
         // $this->load->view('upload_form', $error);
    $data['headline'] = "<div class='alert alert-danger' role='lert'>Upload bukti transfer <strong>gagal</strong>. Kemungkinan ukuran gambar yang terlalu besar. Mohon coba lagi.</div>";
    $data['update_id'] = $update_id;
    $data['flash'] = $this->session->flashdata('item');
    $this->load->view('upload_merchant', $data);
    }
    else
    {
        //upload berhasil
    $data = array('upload_data' => $this->upload->data());
    
    $upload_data = $data['upload_data'];
    $file_name = $upload_data['file_name'];
    // $this->_generate_thumbnail($file_name);
    //update database
    $update_data['gambar'] =  $file_name;
    $this->_update_merchant($update_id, $update_data);

    $data['headline'] = "<div class='alert alert-success' role='lert'>Upload bukti transfer <strong>berhasil</strong>. Terima kasih.</div>";
    $data['update_id'] = $update_id;
    $data['flash'] = $this->session->flashdata('item');
    $this->load->view('upload_merchant', $data);

         

         // $this->load->view('upload_success', $data);
    }
}

function get_merchant($order_by) {
$this->load->model('mdl_merchant');
$query = $this->mdl_merchant->get($order_by);
return $query;
}

function get_with_limit_merchant($limit, $offset, $order_by) {
$this->load->model('mdl_merchant');
$query = $this->mdl_merchant->get_with_limit($limit, $offset, $order_by);
return $query;
}

function get_where_merchant($id) {
$this->load->model('mdl_merchant');
$query = $this->mdl_merchant->get_where($id);
return $query;
}

function get_where_custom_merchant($col, $value) {
$this->load->model('mdl_merchant');
$query = $this->mdl_merchant->get_where_custom($col, $value);
return $query;
}

function _insert_merchant($data) {
$this->load->model('mdl_merchant');
$this->mdl_merchant->_insert($data);
}

function _update_merchant($id, $data) {
$this->load->model('mdl_merchant');
$this->mdl_merchant->_update($id, $data);
}

function _delete_merchant($id) {
$this->load->model('mdl_merchant');
$this->mdl_merchant->_delete($id);
}

function count_where_merchant($column, $value) {
$this->load->model('mdl_merchant');
$count = $this->mdl_merchant->count_where($column, $value);
return $count;
}

function get_max_merchant() {
$this->load->model('mdl_merchant');
$max_id = $this->mdl_merchant->get_max();
return $max_id;
}

function _custom_query_merchant($mysql_query) {
$this->load->model('mdl_merchant');
$query = $this->mdl_merchant->_custom_query($mysql_query);
return $query;
}
function _make_sure_is_admin(){

	$is_admin = $this->session->userdata('status_login');
	if ($is_admin=='oke') {

		}else {
            redirect('login','refresh');
        }
}
}

/* End of file Merchant.php */
/* Location: ./application/controllers/Merchant.php */



