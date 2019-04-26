<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
  function __construct() {
    parent::__construct();

  }
  public $notif_sukses = '<div class="alert alert-success">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong>Well done!</strong> Success
  </div>';
  public $notif_gagal = '<div class="alert alert-error">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong>Oh snap!</strong> Change a few things up and try submitting again.
  </div>';
  public function index()
  {
    $this->load->model('mdl_login');
    $data['title'] = "YPI KLAMBU";

    $submit = $this->input->post('submit',TRUE);
    if ($submit=="submit") {
            //proses login
      $nisn = $this->input->post('nisn');
      $password_alumni = $this->input->post('password');
      $hasil = $this->mdl_login->login($nisn,$password_alumni);
      $check_nisn = $this->mdl_login->check_nisn($nisn);
      if ($check_nisn==1) {
       if ($hasil==1) {
        $this->session->set_userdata(array('status_login' => $nisn));
        redirect('profile/alumni/'.$nisn);
      }else{
        echo "<script type='text/javascript'>alert('Password Salah!')</script>";
      }
    }else{
     echo "<script type='text/javascript'>alert('NISN tidak terdaftar, silakan daftarkan diri!')</script>";
   }
 }
 if ($submit=="Register") {
  $this->daftar_akun();
}
$this->db->select('*');
$this->db->order_by('id_berita', 'desc');
$this->db->where('status', 1);
$data['informasi'] =  $this->db->get('data_berita');


$is_user = $this->session->userdata('status_login');
if (isset($is_user)) {
  $data['ada_login'] = 1;
}
else {
  $data['ada_login'] = 0;
}
$this->db->select('id, nama, nisn, jenis_kelamin, email, no_hp, pekerjaan, alamat, angkatan, keahlian, nama_belakang, status_kuliah, status_kerja, status_belum_kerja, tempat_lahir, foto, tanggal_lahir, status');
$this->db->where('status', 1);
$this->db->order_by('nama', 'asc');
$data['alumni'] = $this->db->get('alumni');
$this->load->view('home', $data);

}

public function berita(){
  $data['judul'] = "berita";
  $url = $this->uri->segment(3);
  if (isset($url)) {
    $informasi = $this->db->get_where('data_berita', array('status' => 1, 'url'=>$url));
    if ($informasi->num_rows() == 0) {
      redirect('home/berita','refresh');
    }else{
      $this->db->order_by('id_berita', 'desc');
      $data['informasi'] = $this->db->get_where('data_berita', array('status' => 1));
      foreach ($informasi->result() as $info) {
        $data['tanggal_berita'] = $info->tanggal_berita;
        $data['judul_berita'] = $info->judul;
        $data['isi'] = $info->isi;
        $data['status'] = $info->status;
        $data['gambar'] = $info->gambar;
        $data['penulis'] = $info->penulis;
        $data['url'] = $info->url;
      }
    }
  }else{
    $this->db->order_by('id_berita', 'desc');
    $informasi = $this->db->get_where('data_berita', array('status' => 1), 1);
    $data['informasi'] = $this->db->get_where('data_berita', array('status' => 1));
    foreach ($informasi->result() as $info) {
      $data['tanggal_berita'] = $info->tanggal_berita;
      $data['judul_berita'] = $info->judul;
      $data['isi'] = $info->isi;
      $data['status'] = $info->status;
      $data['gambar'] = $info->gambar;
      $data['penulis'] = $info->penulis;
      $data['url'] = $info->url;
    }
  }

  $this->load->view('berita', $data);
}

function daftar_akun(){
  $_nisn = $this->input->post('_nisn');
  $_nama = $this->input->post('_nama');
  $_email = $this->input->post('_email');
  $_angkatan = $this->input->post('_angkatan');
  $_tempat_lahir = $this->input->post('_tempat_lahir');
  $_password = $this->bcrypt->hash_password($this->input->post('_nisn'));
  $_tanggal_lahir = $this->input->post('_tanggal_lahir');


  $this->load->library('upload');
  $config['upload_path']          = './assets/gambar/profile/';
  $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
  $config['max_size']             = 100000;
  $config['max_width']            = 20000;
  $config['max_height']           = 20000;
  $config['file_name']      = $_nisn;
  $this->load->library('upload', $config);
  $this->upload->initialize($config);
             if (!$this->upload->do_upload('_gambar')) { //jika gagal upload
               $error = array('error' => $this->upload->display_errors()); //tampilkan error
               $this->session->set_flashdata('berhasil', $this->notif_gagal);
               // redirect("adminru/$url",'refresh');
             } else { //jika berhasil upload
              $file = $this->upload->data();
            }
            $data_register = [
              'nisn' => $_nisn,
              'nama' => $_nama,
              'angkatan' => $_angkatan,
              'email' => $_email,
              'tempat_lahir' => $_tempat_lahir,
              'tanggal_lahir' => $_tanggal_lahir,
              'password' => $_password,
              'foto' => $file['file_name']
            ];

            $this->db->insert('alumni', $data_register);
            $this->session->set_flashdata('berhasil', $this->notif_sukses);
            redirect('home','refresh');

          }



        }

        /* End of file Home.php */
/* Location: ./application/controllers/Home.php */