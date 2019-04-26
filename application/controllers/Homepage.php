<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {
    private $filename = "import_data";
    function __construct() {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
        $this->load->model('mdl_alumni','alumni');
        $this->load->model('mdl_import');
        $this->load->model('mdl_admin');   
        $this->load->model('mdl_berita');
    }
    public function index(){
    $data['title'] = "YPI KLAMBU";
    $data['judul_web'] = "YPI KLAMBU";
    $data['motto'] = $this->db->get('web_motto')->result();
    // $data['nama'] = "Suluh";
    $data['slider'] = $this->db->get('web_slider');
    $this->db->select_min('id');
    $min_id = $this->db->get('web_slider')->result();
    foreach ($min_id as $value) {
         $data['min_id_slider'] = $value->id;
    }
    $this->db->order_by('id', 'desc');
    $web_quotes = $this->db->get('web_quotes', 1);
    foreach ($web_quotes->result() as $q) {
        $data['quote_auth'] = $q->nama_auth;
        $data['quote_isi'] = $q->isi_quote;
    }
   	$this->load->view('homepage/home', $data);
    }
}