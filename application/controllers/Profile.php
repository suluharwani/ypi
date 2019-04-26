<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
    function __construct() {
        parent::__construct();
        
    }

    public function alumni()
    {
      $this->load->library('session');
      $data['status_user'] = $this->_make_sure_is_alumni();
      $this->load->model('mdl_alumni');
      $nisn = $this->uri->segment(3);
      $this->db->select('* , alumni.id as id_al, alumni_tentang.id as id_tentang');
      $this->db->from('alumni');
      $this->db->where('alumni.nisn', $nisn); 
      $this->db->join('alumni_tentang', 'alumni.id = alumni_tentang.id_alumni', 'left');
      $alumni = $this->db->get(); 
      foreach ($alumni->result() as $row) {
        $id = $row->id_al;
        $nama = $row->nama;
        $nama_belakang = $row->nama_belakang;
        $alamat = $row->alamat;
        $email = $row->email;
        $no_hp = $row->no_hp;
        $pekerjaan = $row->pekerjaan;
        $keahlian = $row->keahlian;
        $foto = $row->foto;
        // `tentang`, `link_fb`, `link_tw`, `link_in`, `link_ig`, `link_wa
        $tentang_saya = $row->tentang;
        $link_fb = $row->link_fb;
        $link_tw = $row->link_tw;
        $link_in = $row->link_in;
        $link_ig = $row->link_ig;
        $link_wa = $row->link_wa;
        $link_git = $row->link_git;
    }
    if ($foto == null) {
        $foto_profile = "logo_def.png";
    }else {
        $foto_profile = "$foto";
    }
    $data['judul'] = 'Profil '.$nama;
    $data['nama_depan'] = $nama;
    $data['nama_belakang'] = $nama_belakang;
    $data['alamat'] = $alamat;
    $data['email'] = $email;
    $data['no_hp'] = $no_hp;
    $data['pekerjaan'] = $pekerjaan;
    $data['keahlian'] = $keahlian;
    $data['nisn'] = $nisn;
    $data['foto'] = $foto_profile;
    $data['tentang_saya'] = $tentang_saya;
    $data['link_fb'] = $link_fb;
    $data['link_tw'] = $link_tw;
    $data['link_in'] = $link_in;
    $data['link_ig'] = $link_ig;
    $data['link_wa'] = $link_wa;
    $data['link_git'] = $link_git;

    $submit = $this->input->post('submit');
    $ketertarikan = $this->db->get_where('interest_alumni', array('id_alumni'=>$id));
    if ( $ketertarikan->num_rows() == 0) {
     $data['interest_value'] = "Belum ada";
 }else{
    foreach ($ketertarikan->result() as $value_ketertarikan) {

        $data['interest_value'] = $value_ketertarikan->interest;
    }
}
if ($submit=="simpan_tentang_saya") {
    $object_alumni = array(
        'nisn' => $this->input->post('edit_nisn'),
        'nama' => $this->input->post('edit_nama_depan'),
        'nama_belakang' => $this->input->post('edit_nama_belakang'),
        'email' => $this->input->post('edit_email')
    );
    $object_tentang_saya= array(
        'tentang' => $this->input->post('edit_tentang_saya')
    );
    $this->db->where('id', $id);
    $this->db->update('alumni', $object_alumni);
    $this->db->where('id_alumni', $id);
    $this->db->update('alumni_tentang', $object_tentang_saya);
    redirect("profile/alumni/$nisn",'refresh');
}
if ($submit=="simpan_sosmed") {
   $object_sosmed = array(
    'link_fb' => $this->input->post('edit_facebook'),
    'link_tw' => $this->input->post('edit_twitter'),
    'link_in' => $this->input->post('edit_in'),
    'link_ig' => $this->input->post('edit_ig'),
    'link_wa' => $this->input->post('edit_wa'),
    'link_git' => $this->input->post('edit_git')

);
   $this->db->where('id_alumni', $id);
         // $check_sosmed = $this->db->get('alumni_tentang')->num_rows();
         // if ($check_sosmed==0) {
         //    $this->db->insert('alumni_tentang', $object_sosmed);
         // }
   $this->db->where('id_alumni', $id);
   $this->db->update('alumni_tentang', $object_sosmed);
   redirect("profile/alumni/$nisn",'refresh');
}

if ($submit=="simpan_pengalaman") {
    $sampai = $this->input->post('sampai');
    if (isset($sampai)) {
       $sampai_tgl =  $sampai;
   }else{
    $sampai_tgl = "Sekarang";
}


$object_pengalaman = array(
    'id_alumni' => $id,
    'pengalaman' => $this->input->post('pengalaman'),
    'instansi' => $this->input->post('instansi'),
    'mulai_masuk' => $this->input->post('mulai_masuk'),
    'sampai' => $sampai_tgl,
    'keterangan' => $this->input->post('keterangan_pengalaman')

);
$this->db->insert('pengalaman_alumni', $object_pengalaman);
redirect("profile/alumni/$nisn",'refresh');
}
if ($submit=="simpan_pendidikan") {
   $object_sekolah = array(
    'id_alumni' => $id,
    'sekolah' => $this->input->post('sekolah'),
    'jurusan' => $this->input->post('jurusan'),
    'lulus' => $this->input->post('lulus')
);
   $this->db->insert('pendidikan_alumni', $object_sekolah);
   redirect("profile/alumni/$nisn",'refresh');
}
if ($submit=="simpan_keahlian") {
   $object_keahlian = array(
    'id_alumni' => $id,
    'keahlian' => $this->input->post('keahlian')
);
   $this->db->insert('skill', $object_keahlian);
   redirect("profile/alumni/$nisn",'refresh');
}
if ($submit=="simpan_tertarik") {
   $object_tertarik = array(
    'id_alumni' => $id,
    'interest' => $this->input->post('interest')
);
   if ($ketertarikan->num_rows() < 1) {
    $this->db->insert('interest_alumni', $object_tertarik);
}else{
   $this->db->where('id_alumni', $id);
   $this->db->update('interest_alumni', $object_tertarik);
}
redirect("profile/alumni/$nisn",'refresh');
}
if ($submit=="simpan_penghargaan") {
    $object_penghargaan = array(
        'id_alumni' => $id,
        'penghargaan' => $this->input->post('penghargaan'),
        'juara' => $this->input->post('juara')
    );
    $this->db->insert('penghargaan_alumni', $object_penghargaan);
    redirect("profile/alumni/$nisn",'refresh');
}
if ($submit=="simpan_foto") {
    $this->load->library('upload');
    $config['upload_path']          = './assets/gambar/profile/';
    $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
    $config['max_size']             = 100000;
    $config['max_width']            = 20000;
    $config['max_height']           = 20000;
    $this->load->library('upload', $config);
    $this->upload->initialize($config);
             if (!$this->upload->do_upload('gambar')) { //jika gagal upload
               $error = array('error' => $this->upload->display_errors()); //tampilkan error
               // $this->session->set_flashdata('berhasil', $this->notif_gagal);
               // redirect("adminru/$url",'refresh');
             } else { //jika berhasil upload
              $file = $this->upload->data();
          }
          $object_foto = array(
            'foto' => $file['file_name']
        );
          if ($foto_profile !== "logo_def.png" || $foto_profile !== ""  ) {
             $gambar_path = './assets/gambar/profile/'.$foto_profile;
             if (file_exists($gambar_path)) {
              unlink($gambar_path);
          }
      }
          $this->db->where('id', $id);
          $this->db->update('alumni', $object_foto);    

          redirect("profile/alumni/$nisn",'refresh');
      }
      $data['skill'] = $this->db->get_where('skill', array('id_alumni'=>$id));
      $data['juara'] = $this->db->get_where('penghargaan_alumni', array('id_alumni'=>$id));
      $this->db->order_by('lulus', 'asc');
      $data['pendidikan_alumni'] = $this->db->get_where('pendidikan_alumni', array('id_alumni'=>$id));
      $this->db->order_by('mulai_masuk', 'asc');
      $data['pengalaman_alumni'] = $this->db->get_where('pengalaman_alumni', array('id_alumni'=>$id));
      $data['controller'] = $this;
      $this->load->view('profil', $data);
  }
  function logout(){
      $this->session->sess_destroy();
      redirect('home','refresh');
  }
  function edit()
  {
    $this->load->library('session');
    $this->_make_sure_is_alumni();
    $this->load->model('mdl_alumni');
    $nomor_induk = $this->session->userdata('status_login');
    echo $nomor_induk;
}

function get($order_by)
{
    $this->load->model('mdl_alumni');
    $query = $this->mdl_alumni->get($order_by);
    return $query;
}

function get_with_limit($limit, $offset, $order_by) 
{
    if ((!is_numeric($limit)) || (!is_numeric($offset))) {
        die('Non-numeric variable!');
    }

    $this->load->model('mdl_alumni');
    $query = $this->mdl_alumni->get_with_limit($limit, $offset, $order_by);
    return $query;
}

function get_where($id)
{
    if (!is_numeric($id)) {
        die('Non-numeric variable!');
    }

    $this->load->model('mdl_alumni');
    $query = $this->mdl_alumni->get_where($id);
    return $query;
}

function get_where_custom($col, $value) 
{
    $this->load->model('mdl_alumni');
    $query = $this->mdl_alumni->get_where_custom($col, $value);
    return $query;
}

function _insert($data)
{
    $this->load->model('mdl_alumni');
    $this->mdl_alumni->_insert($data);
}

function _update($id, $data)
{
    if (!is_numeric($id)) {
        die('Non-numeric variable!');
    }

    $this->load->model('mdl_alumni');
    $this->mdl_alumni->_update($id, $data);
}

function _delete($id)
{
    if (!is_numeric($id)) {
        die('Non-numeric variable!');
    }

    $this->load->model('mdl_alumni');
    $this->mdl_alumni->_delete($id);
}

function count_where($column, $value) 
{
    $this->load->model('mdl_alumni');
    $count = $this->mdl_alumni->count_where($column, $value);
    return $count;
}

function get_max() 
{
    $this->load->model('mdl_alumni');
    $max_id = $this->mdl_alumni->get_max();
    return $max_id;
}

function _custom_query($mysql_query) 
{
    $this->load->model('mdl_alumni');
    $query = $this->mdl_alumni->_custom_query($mysql_query);
    return $query;
}

function _make_sure_is_alumni(){

    $is_user = $this->session->userdata('status_login');
    $nisn = $this->uri->segment(3);
    if ($is_user == $nisn) {
        $status_user = "owner";
    }else {
        $status_user = "guest";
    }
    return $status_user;
}
function ordinal($number) {
    $ends = array('th','st','nd','rd','th','th','th','th','th','th');
    if ((($number % 100) >= 11) && (($number%100) <= 13))
        return $number. 'th';
    else
        return $number. $ends[$number % 10];
}
function hapus_pendidikan($id){
    $nisn = $this->session->userdata('status_login');
    $this->db->where('id', $id);
    $this->db->delete('pendidikan_alumni');
    redirect("profile/alumni/$nisn",'refresh');
}
function hapus_pengalaman($id){
    $nisn = $this->session->userdata('status_login');
    $this->db->where('id', $id);
    $this->db->delete('pengalaman_alumni');
    redirect("profile/alumni/$nisn",'refresh');
}
function hapus_penghargaan($id){
    $nisn = $this->session->userdata('status_login');
    $this->db->where('id', $id);
    $this->db->delete('penghargaan_alumni');
    redirect("profile/alumni/$nisn",'refresh');
}
function hapus_keahlian($id){
    $nisn = $this->session->userdata('status_login');
    $this->db->where('id', $id);
    $this->db->delete('skill');
    redirect("profile/alumni/$nisn",'refresh');
}

}

/* End of file Profile.php */
/* Location: ./application/controllers/Profile.php */