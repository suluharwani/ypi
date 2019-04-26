<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminccm extends CI_Controller {
function __construct() {
parent::__construct();
$this->load->model('mdl_peserta');
$this->load->model('mdl_peserta', 'peserta');
$this->load->library('form_validation');
$this->form_validation->set_error_delimiters("<span class='incorrect'>", "</span>");
}

function manage2(){    //halaman merchant
    $this->load->library('session');
    $this->_make_sure_is_admin();
    $data['query_merchant'] = $this->get_merchant('judul');
    $data['nama_halaman'] = "Halaman Merchant";
    $data['title'] = "Manage";
    $this->load->view('admin_manage2', $data);
}



function manage(){
    $this->load->library('session');
    $this->_make_sure_is_admin();
    $data['query_pariwisata'] = $this->get('judul');
    $data['nama_halaman'] = "Halaman Pariwisata";
    $data['title'] = "Manage";
    $this->load->view('admin_manage', $data);
}
function hapus_pariwisata($update_id){
//untuk menghapus gambar
    $data = $this->fetch_data_from_db($update_id);
    $gambar = $data['gambar'];


    $gambar_path = '.././assets/upload/pariwisata/'.$gambar;

    //hapus data gambar

    if (file_exists($gambar_path)) {
        unlink($gambar_path);
    }
//untuk menghapus item
    $this->_delete_p($update_id);
    redirect('adminccm/manage');
}
function hapus_merchant($update_id){

//untuk menghapus gambar
    $data = $this->fetch_data_from_db_merchant($update_id);
    $gambar = $data['gambar'];


    $gambar_path = '.././assets/upload/merchant/'.$gambar;

    //hapus data gambar

    if (file_exists($gambar_path)) {
        unlink($gambar_path);
    }
//untuk menghapus item
    $this->_delete_m($update_id);
    redirect('adminccm/manage2');
}

function _delete_p($id) {
$this->load->model('mdl_blog');
$this->mdl_blog->_delete($id);
}
function _delete_m($id) {
$this->load->model('mdl_merchant');
$this->mdl_merchant->_delete($id);
}







function merchant(){
 $this->load->library('session');
   $this->_make_sure_is_admin();

    $update_id = $this->uri->segment(3);
    $submit = $this->input->post('submit',TRUE);
    
    if ($submit=="cancel") {
        redirect('adminccm/merchant','refresh');
    }


    if ($submit=="submit") {

   //     if ($this->form_validation->run()== TRUE) {
            //ambil variable

            $data = $this->fetch_data_from_post_merchant();
            $data['url_item'] = url_title($data['judul']);
            if (is_numeric($update_id)) {
                //update datail item
                $this->_update_merchant($update_id, $data);
                $flash_msg="Item telah berhasil diupdate.";
                $value = '<div class="alert alert-success" role="alert">'.$flash_msg.'</div>';
                $this->session->set_flashdata('item', $value);
                redirect('adminccm/merchant/'.$update_id);
            }else{

                $this->_insert_merchant($data);
                $update_id = $this->get_max_merchant();
                //mendapakan id item baru
                $flash_msg="Item telah berhasil ditambahkan.";
                $value = '<div class="alert alert-success" role="alert">'.$flash_msg.'</div>';
                $this->session->set_flashdata('item', $value);

                redirect('adminccm/merchant/'.$update_id);
            }
       // }
    }

    if((is_numeric($update_id)) && ($submit!="Submit")){
        $data = $this->fetch_data_from_db_merchant($update_id);
    }
    else{
        $data = $this->fetch_data_from_post_merchant();
        $data['gambar'] = "";
    }
    if (!is_numeric($update_id)) {
        $data['headline']="Tambah";
    }else {
        $data['headline']="Update ";
    }


  //  $this->fetch_data_from_db($update_id);

    $data['update_id'] = $update_id;
    $data['nama_halaman'] = "Halaman merchant";
    $data['title'] = "Manage merchant";
    $data['title_create'] = "Create merchant";
    $data['title_update'] = "Update merchant";
    $this->load->view('admin_merchant', $data);
}

 


function hapus_gambar_merchant($update_id)
{   
    $this->_make_sure_is_admin();
    $update_id = $this->uri->segment(3);
    $this->load->model('mdl_merchant');
    $nama_gambar = $this->mdl_merchant->gambar($update_id);
            foreach ($nama_gambar as $row)
            {
                     $data['gambar']=$row->gambar;
            }
    $gambar = $data['gambar'];
    $gambar_path = '.././assets/upload/merchant/'.$gambar;
    //hapus data gambar
    if (file_exists($gambar_path)) {
        unlink($gambar_path);
    }
    //update database
    unset($data);
    $data['gambar'] = "";
    $this->_update_merchant($update_id, $data);
    $flash_msg="Gambar berhasil dihapus.";
    $value = '<div class="alert alert-success" role="alert">'.$flash_msg.'</div>';
    $this->session->set_flashdata('item', $value);
    redirect('adminccm/merchant/'.$update_id);
}

 

function upload_image_merchant($update_id){

    if (!is_numeric($update_id)) {
        redirect('site_security/not_allowed');
    }
    $this->load->library('session');
    $this->_make_sure_is_admin();

    $data['headline'] = "upload image";
    $data['update_id'] = $update_id;
    $data['flash'] = $this->session->flashdata('item');
    $this->load->view('upload_merchant', $data);
}

function fetch_data_from_post_merchant(){
        $data['judul'] = $this->input->post('judul');
        $data['isi'] = $this->input->post('isi');
        $data['penulis'] = $this->input->post('penulis');
        $data['tanggal'] = $this->input->post('tanggal');
        $data['kategori'] = $this->input->post('kategori');
        $data['twitter'] = $this->input->post('twitter');
        $data['facebook'] = $this->input->post('facebook');
        $data['instagram'] = $this->input->post('instagram');
        $data['telepon'] = $this->input->post('telepon');
    return $data;
}


function fetch_data_from_db_merchant($update_id){
        if (!is_numeric($update_id)) {
        redirect('adminccm/check_lagi');
    }


    $query = $this->get_where_merchant($update_id);
    foreach ($query->result() as $row){
    $data['judul'] = $row->judul;
    $data['isi'] = $row->isi;
    $data['penulis'] = $row->penulis;
    $data['tanggal'] = $row->tanggal;
    $data['gambar'] = $row->gambar;
    $data['kategori'] = $row->kategori;
    $data['twitter'] = $row->twitter;
    $data['facebook'] = $row->facebook;
    $data['instagram'] = $row->instagram;
    $data['telepon'] = $row->telepon;

}
if (!isset($data)) {
    $data = "";
}
return $data;
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
















































////////////////////////////////////////////////////////////////////
function hapus_gambar_pariwisata($update_id)
{   
    $this->_make_sure_is_admin();
    $update_id = $this->uri->segment(3);
    $this->load->model('mdl_blog');
    $nama_gambar = $this->mdl_blog->gambar($update_id);
            foreach ($nama_gambar as $row)
            {
                     $data['gambar']=$row->gambar;
            }
    $gambar = $data['gambar'];
    $gambar_path = '.././assets/upload/pariwisata/'.$gambar;
    //hapus data gambar
    if (file_exists($gambar_path)) {
        unlink($gambar_path);
    }
    //update database
    unset($data);
    $data['gambar'] = "";
    $this->_update($update_id, $data);
    $flash_msg="Gambar berhasil dihapus.";
    $value = '<div class="alert alert-success" role="alert">'.$flash_msg.'</div>';
    $this->session->set_flashdata('item', $value);
    redirect('adminccm/pariwisata/'.$update_id);
}


function do_upload($update_id)
{   
    $this->load->library('session');
    $this->_make_sure_is_admin();
    $update_id = $this->uri->segment(3);
    $this->load->model('mdl_blog');
    $data['pariwisata'] = $this->mdl_blog->pariwisata()->result();
    $url2 = $this->uri->segment(2);
    $submit=$this->input->post('submit', TRUE);
    if ($submit=="Cancel") {
       redirect('adminccm/pariwisata/'.$update_id,'refresh');
    }


    $config['upload_path']          = '.././assets/upload/pariwisata/';
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
    $this->load->view('upload_pariwisata', $data);
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
    $this->_update($update_id, $update_data);

    $data['headline'] = "<div class='alert alert-success' role='lert'>Upload bukti transfer <strong>berhasil</strong>. Terima kasih.</div>";
    $data['update_id'] = $update_id;
    $data['flash'] = $this->session->flashdata('item');
    $this->load->view('upload_pariwisata', $data);

         

         // $this->load->view('upload_success', $data);
    }
}

function upload_image($update_id){

    if (!is_numeric($update_id)) {
        redirect('site_security/not_allowed');
    }
    $this->load->library('session');
    $this->_make_sure_is_admin();

    $data['headline'] = "upload image";
    $data['update_id'] = $update_id;
    $data['flash'] = $this->session->flashdata('item');
    $this->load->view('upload_pariwisata', $data);
}

function pariwisata(){
   $this->load->library('session');
   $this->_make_sure_is_admin();

    $update_id = $this->uri->segment(3);
    $submit = $this->input->post('submit',TRUE);
    
    if ($submit=="cancel") {
        redirect('adminccm/pariwisata','refresh');
    }


    if ($submit=="submit") {

   //     if ($this->form_validation->run()== TRUE) {
            //ambil variable

            $data = $this->fetch_data_from_post();
            $data['url_item'] = url_title($data['judul']);
            if (is_numeric($update_id)) {
                //update datail item
                $this->_update($update_id, $data);
                $flash_msg="Item telah berhasil diupdate.";
                $value = '<div class="alert alert-success" role="alert">'.$flash_msg.'</div>';
                $this->session->set_flashdata('item', $value);
                redirect('adminccm/pariwisata/'.$update_id);
            }else{

                $this->_insert($data);
                $update_id = $this->get_max();
                //mendapakan id item baru
                $flash_msg="Item telah berhasil ditambahkan.";
                $value = '<div class="alert alert-success" role="alert">'.$flash_msg.'</div>';
                $this->session->set_flashdata('item', $value);

                redirect('adminccm/pariwisata/'.$update_id);
            }
       // }
    }

    if((is_numeric($update_id)) && ($submit!="Submit")){
        $data = $this->fetch_data_from_db($update_id);
    }
    else{
        $data = $this->fetch_data_from_post();
        $data['gambar'] = "";
    }
    if (!is_numeric($update_id)) {
        $data['headline']="Add New Item";
    }else {
        $data['headline']="Update Item Detail";
    }


  //  $this->fetch_data_from_db($update_id);

    $data['update_id'] = $update_id;
    $data['nama_halaman'] = "Halaman Pariwisata";
    $data['title'] = "Manage Pariwisata";
    $data['title_create'] = "Create Pariwisata";
    $data['title_update'] = "Update Pariwisata";
    $this->load->view('admin_pariwisata', $data);
}

function fetch_data_from_post(){

        $data['judul'] = $this->input->post('judul');
        $data['isi'] = $this->input->post('isi');
        $data['penulis'] = $this->input->post('penulis');
        $data['tanggal'] = $this->input->post('tanggal');
        $data['kategori'] = $this->input->post('kategori');

    return $data;
}




function delete_image($update_id)
{   
    $this->_make_sure_is_admin();
    $update_id = $this->uri->segment(3);
    $this->load->model('mdl_peserta');
    $nama_gambar = $this->mdl_peserta->gambar($update_id);
            foreach ($nama_gambar as $row)
            {
                     $data['gambar']=$row->gambar;
            }
    $gambar = $data['gambar'];
    $gambar_path = '.././assets/upload/bukti/'.$gambar;
    //hapus data gambar
    if (file_exists($gambar_path)) {
        unlink($gambar_path);
    }
    //update database
    unset($data);
    $data['gambar'] = "";
    $this->_update_p($update_id, $data);
    $flash_msg="Gambar berhasil dihapus.";
    $value = '<div class="alert alert-success" role="alert">'.$flash_msg.'</div>';
    $this->session->set_flashdata('item', $value);
    redirect('adminccm/halaman_bukti/'.$update_id);
}
    
function _update_p($id, $data) {
        $this->load->model('mdl_peserta');
        $this->mdl_peserta->_update($id, $data);
}

public function laporan(){
    $this->_make_sure_is_admin();
    $data['title'] = "Tabel Laporan";
    $this->load->view('admin_laporan',$data);


}
  


public function kuota(){
    $this->_make_sure_is_admin();
    
    $this->load->model('mdl_peserta');

    $data['peserta'] = $this->mdl_peserta->kuota()->result();
        

        $submit = $this->input->post('submit',TRUE);


        $kuota42k = $this->input->post('kuota42k');
        $kuota21k = $this->input->post('kuota21k');
        $kuota10k = $this->input->post('kuota10k');
        $kuota5k = $this->input->post('kuota5k');
        

        $jersey5ks = $this->input->post('jersey5ks');
        $jersey5km = $this->input->post('jersey5km');
        $jersey5kl = $this->input->post('jersey5kl');
        $jersey5kxl = $this->input->post('jersey5kxl');

        $jersey10ks = $this->input->post('jersey10ks');
        $jersey10km = $this->input->post('jersey10km');
        $jersey10kl = $this->input->post('jersey10kl');
        $jersey10kxl = $this->input->post('jersey10kxl');

        $jersey21ks = $this->input->post('jersey21ks');
        $jersey21km = $this->input->post('jersey21km');
        $jersey21kl = $this->input->post('jersey21kl');
        $jersey21kxl = $this->input->post('jersey21kxl');

        $jersey42ks = $this->input->post('jersey42ks');
        $jersey42km = $this->input->post('jersey42km');
        $jersey42kl = $this->input->post('jersey42kl');
        $jersey42kxl = $this->input->post('jersey42kxl');

        $object = array(

        'kuota' => $kuota42k,
        'kuota' => $kuota21k,
        'kuota' => $kuota10k,
        'kuota' => $kuota5k,

        'jersey_s' => $jersey5ks,
        'jersey_m' => $jersey5km,
        'jersey_l' => $jersey5kl,
        'jersey_xl' => $jersey5kxl,

        'jersey10ks' => $jersey10ks,
        'jersey10km' => $jersey10km,
        'jersey10kl' => $jersey10kl,
        'jersey10kxl' => $jersey10kxl,

        'jersey21ks' => $jersey21ks,
        'jersey21km' => $jersey21km,
        'jersey21kl' => $jersey21kl,
        'jersey21kxl' => $jersey21kxl,

        'jersey42ks' => $jersey42ks,
        'jersey42km' => $jersey42km,
        'jersey42kl' => $jersey42kl,
        'jersey42kxl' => $jersey42kxl
            ); 
        
        if ($submit=="submit5k") {
        $id=1;
        $this->db->where('id', $id);
        $this->db->update('persediaan', array(

        'kuota' => $kuota5k,
        'jersey_s' => $jersey5ks,
        'jersey_m' => $jersey5km,
        'jersey_l' => $jersey5kl,
        'jersey_xl' => $jersey5kxl));
                redirect('adminccm/kuota');
         }  

        elseif ($submit=="submit10k") {

         $id=2;
        $this->db->where('id', $id);
        $this->db->update('persediaan', array(
        'kuota' => $kuota10k,
        'jersey_s' => $jersey10ks,
        'jersey_m' => $jersey10km,
        'jersey_l' => $jersey10kl,
        'jersey_xl' => $jersey10kxl,));
                redirect('adminccm/kuota');
         }  

        elseif ($submit=="submit21k") {

        $id=3;
        $this->db->where('id', $id);
        $this->db->update('persediaan', array(
        'kuota' => $kuota21k,
        'jersey_s' => $jersey21ks,
        'jersey_m' => $jersey21km,
        'jersey_l' => $jersey21kl,
        'jersey_xl' => $jersey21kxl,));
                redirect('adminccm/kuota');
         }  

          elseif ($submit=="submit42k") {

         $id=4;
        $this->db->where('id', $id);
        $this->db->update('persediaan', array( 
        'kuota' => $kuota42k,
        'jersey_s' => $jersey42ks,
        'jersey_m' => $jersey42km,
        'jersey_l' => $jersey42kl,
        'jersey_xl' => $jersey42kxl,));
                redirect('adminccm/kuota');
         }  


//jumlah ukuran terpakai berdasarkan kategori
    $data['jersey_5k_s'] = $this->mdl_peserta->jersey_5k_s();
    $data['jersey_5k_m'] = $this->mdl_peserta->jersey_5k_m();
    $data['jersey_5k_l'] = $this->mdl_peserta->jersey_5k_l();
    $data['jersey_5k_xl'] = $this->mdl_peserta->jersey_5k_xl();

    $data['jersey_10k_s'] = $this->mdl_peserta->jersey_10k_s();
    $data['jersey_10k_m'] = $this->mdl_peserta->jersey_10k_m();
    $data['jersey_10k_l'] = $this->mdl_peserta->jersey_10k_l();
    $data['jersey_10k_xl'] = $this->mdl_peserta->jersey_10k_xl();

    $data['jersey_21k_s'] = $this->mdl_peserta->jersey_21k_s();
    $data['jersey_21k_m'] = $this->mdl_peserta->jersey_21k_m();
    $data['jersey_21k_l'] = $this->mdl_peserta->jersey_21k_l();
    $data['jersey_21k_xl'] = $this->mdl_peserta->jersey_21k_xl();

    $data['jersey_42k_s'] = $this->mdl_peserta->jersey_42k_s();
    $data['jersey_42k_m'] = $this->mdl_peserta->jersey_42k_m();
    $data['jersey_42k_l'] = $this->mdl_peserta->jersey_42k_l();
    $data['jersey_42k_xl'] = $this->mdl_peserta->jersey_42k_xl();


//jumlah pendaftar
    $data['total5k']   = $this->mdl_peserta->jumlah_peserta_5k_bayar();
    $data['total10k']  = $this->mdl_peserta->jumlah_peserta_10k_bayar();
    $data['total21kn'] = $this->mdl_peserta->jumlah_peserta_21k_n_bayar();
    $data['total21ki'] = $this->mdl_peserta->jumlah_peserta_21k_i_bayar();
    $data['total42kn'] = $this->mdl_peserta->jumlah_peserta_42k_n_bayar();
    $data['total42ki'] = $this->mdl_peserta->jumlah_peserta_42k_i_bayar();
 
    $data['total21k']=$data['total21kn']+$data['total21ki'];
    $data['total42k']= $data['total42kn']+$data['total42ki'];
//jumlah tersedia jersey
    $data['kategori5k'] = 1;
    $data['kategori10k'] =2;
    $data['kategori21k'] = 3;
    $data['kategori42k'] =4;

 //kuota
    // $data['kuota5k'] = $this->mdl_peserta->jumlah_kuota_5k();
    // $data['kuota10k'] = $this->mdl_peserta->jumlah_kuota_10k();
    // $data['kuota21k'] = $this->mdl_peserta->jumlah_kuota_21k();
    // $data['kuota42k'] = $this->mdl_peserta->jumlah_kuota_42k();
    $kategori5k = 1;
    $kategori10k = 2;
    $kategori21k = 3;
    $kategori42k = 4;

    $jumlah5k = $this->mdl_peserta->jumlah_kuota($kategori5k);
            foreach ($jumlah5k as $row)
            {
                     $data['kuota5k']=$row->kuota;
            }
    $data['sisa5k'] =  $data['kuota5k']- $data['total5k'];

    $jumlah10k = $this->mdl_peserta->jumlah_kuota($kategori10k);
            foreach ($jumlah10k as $row)
            {
                     $data['kuota10k']=$row->kuota;
            }
    $data['sisa10k'] =  $data['kuota10k']- $data['total10k'];

    $jumlah21k = $this->mdl_peserta->jumlah_kuota($kategori21k);
            foreach ($jumlah21k as $row)
            {
                     $data['kuota21k']=$row->kuota;
            }
    $data['sisa21k'] =  $data['kuota21k']- $data['total21k'];

    $jumlah42k = $this->mdl_peserta->jumlah_kuota($kategori42k);
            foreach ($jumlah42k as $row)
            {
                     $data['kuota42k']=$row->kuota;
            }
    $data['sisa42k'] =  $data['kuota42k']- $data['total42k'];

    //jersey dari database

    $jersey5k = $this->mdl_peserta->jumlah_jersey($kategori5k);
            foreach ($jersey5k as $row)
            {
                     $data['jersey5k_s']=$row->jersey_s;
                     $data['jersey5k_m']=$row->jersey_m;
                     $data['jersey5k_l']=$row->jersey_l;
                     $data['jersey5k_xl']=$row->jersey_xl;
            }

    $jersey10k = $this->mdl_peserta->jumlah_jersey($kategori10k);
            foreach ($jersey10k as $row)
            {
                     $data['jersey10k_s']=$row->jersey_s;
                     $data['jersey10k_m']=$row->jersey_m;
                     $data['jersey10k_l']=$row->jersey_l;
                     $data['jersey10k_xl']=$row->jersey_xl;
            }

    $jersey21k = $this->mdl_peserta->jumlah_jersey($kategori21k);
            foreach ($jersey21k as $row)
            {
                     $data['jersey21k_s']=$row->jersey_s;
                     $data['jersey21k_m']=$row->jersey_m;
                     $data['jersey21k_l']=$row->jersey_l;
                     $data['jersey21k_xl']=$row->jersey_xl;
            }

    $jersey42k = $this->mdl_peserta->jumlah_jersey($kategori42k);
            foreach ($jersey42k as $row)
            {
                     $data['jersey42k_s']=$row->jersey_s;
                     $data['jersey42k_m']=$row->jersey_m;
                     $data['jersey42k_l']=$row->jersey_l;
                     $data['jersey42k_xl']=$row->jersey_xl;
            }

        //sisa                       persediaan             terpakai
    $data['sisa_jersey_5k_s'] =  $data['jersey5k_s']- $data['jersey_5k_s'];
    $data['sisa_jersey_5k_m'] =  $data['jersey5k_m']- $data['jersey_5k_m'];
    $data['sisa_jersey_5k_l'] =  $data['jersey5k_l']- $data['jersey_5k_l'];
    $data['sisa_jersey_5k_xl'] =  $data['jersey5k_xl']- $data['jersey_5k_xl'];

    $data['sisa_jersey_10k_s'] =  $data['jersey10k_s']- $data['jersey_10k_s'];
    $data['sisa_jersey_10k_m'] =  $data['jersey10k_m']- $data['jersey_10k_m'];
    $data['sisa_jersey_10k_l'] =  $data['jersey10k_l']- $data['jersey_10k_l'];
    $data['sisa_jersey_10k_xl'] =  $data['jersey10k_xl']- $data['jersey_10k_xl'];

    $data['sisa_jersey_21k_s'] =  $data['jersey21k_s']- $data['jersey_21k_s'];
    $data['sisa_jersey_21k_m'] =  $data['jersey21k_m']- $data['jersey_21k_m'];
    $data['sisa_jersey_21k_l'] =  $data['jersey21k_l']- $data['jersey_21k_l'];
    $data['sisa_jersey_21k_xl'] =  $data['jersey21k_xl']- $data['jersey_21k_xl'];

    $data['sisa_jersey_42k_s'] =  $data['jersey42k_s']- $data['jersey_42k_s'];
    $data['sisa_jersey_42k_m'] =  $data['jersey42k_m']- $data['jersey_42k_m'];
    $data['sisa_jersey_42k_l'] =  $data['jersey42k_l']- $data['jersey_42k_l'];
    $data['sisa_jersey_42k_xl'] =  $data['jersey42k_xl']- $data['jersey_42k_xl'];




    $this->load->view('admin_kuota',$data);
}


 
public function index()
	{
	$this->_make_sure_is_admin();
	$data['title'] = "Tabel Peserta";
	$this->load->view('admin',$data);

	}

public function halaman_bukti($id){
        $update_id = $this->uri->segment(3);
        if (!is_numeric($update_id)) {
          redirect('home/check_lagi','refresh');
        }
        $this->_make_sure_is_admin();

        //data peserta
        $this->load->model('mdl_peserta');
        $data['peserta'] = $this->mdl_peserta->peserta()->result();
    

    $this->load->view('bukti', $data, FALSE);
}
  public function ajax_list()
    {



        $list = $this->peserta->get_datatables();
        $data = array();
        $no = $_POST['start'];




        foreach ($list as $datapeserta) {
            $no++;
            $row = array();
            $row[] = $no;                               //0
            $row[] = $datapeserta->tgl;                              //1
            $row[] = $datapeserta->kategori_lomba;      //2
            $row[] = $datapeserta->jersey;              //3    
            $row[] = $datapeserta->gambar;              //4
            $row[] = $datapeserta->no_daftar;           //5
            $row[] = $datapeserta->nama;                //6
            $row[] = $datapeserta->ktp;                 //7
            $row[] = $datapeserta->id;                  //8
            $row[] = $datapeserta->status;              //9
            $row[] = $datapeserta->ada_bukti;           //10
           
                     //html  action
            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->peserta->count_all(),
            "recordsFiltered" => $this->peserta->count_filtered(),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }
     public function ajax_konfirmasi($id)
    {
        $this->peserta->konfirmasi($id);
        redirect('adminccm/');     
    }
    public function ajax_batal_konfirmasi($id)
    {
        $this->peserta->batal_konfirmasi($id);
        redirect('adminccm/');     
    }
    public function ajax_delete($id)
    {
        $this->peserta->delete_by_id($id);
        redirect('adminccm/');    
    }

    public function remove($id)
    {

        $this->peserta->delete($id);
        $this->session->set_flashdata('success_msg', lang('success_msg_del'));
        redirect('adminccm/');

    }




function peserta(){
	 $this->load->library('Datatables');
	$this->datatables->select('id,no_daftar,nama,ktp')->from('peserta');
	 echo $this->datatables->generate();
	}



function generate_random_string($length){
	$characters = '23456789abcdefghijklmnopqrstuvwxysABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$randomString = '';
	for ($i=0; $i <$length ; $i++) { 
		$randomString.=$characters[rand(0, strlen($characters)-1)];
	}
	return $randomString;
}

function _hash_string($str){
$hashed_string = password_hash($str, PASSWORD_BCRYPT,  array('cost' => 11 ));
return $hashed_string;
}
function _verify_hash($plain_text_str, $hashed_string){
	$result = password_verify($plain_text_str, $hashed_string);
	return $result;

}
function _make_sure_is_admin(){

	$is_admin = $this->session->userdata('status_login');
	if ($is_admin=='oke') {

		}else {
            redirect('login','refresh');
        }
}
function not_allowed(){
	include 'peringatan.php';
}

function fetch_data_from_db($update_id){
        if (!is_numeric($update_id)) {
        redirect('adminccm/check_lagi');
    }


    $query = $this->get_where($update_id);
    foreach ($query->result() as $row){
    $data['judul'] = $row->judul;
    $data['isi'] = $row->isi;
    $data['penulis'] = $row->penulis;
    $data['tanggal'] = $row->tanggal;
    $data['gambar'] = $row->gambar;
    $data['kategori'] = $row->kategori;

}
if (!isset($data)) {
    $data = "";
}
return $data;
}

function get($order_by) {
$this->load->model('mdl_blog');
$query = $this->mdl_blog->get($order_by);
return $query;
}

function get_with_limit($limit, $offset, $order_by) {
$this->load->model('mdl_blog');
$query = $this->mdl_blog->get_with_limit($limit, $offset, $order_by);
return $query;
}

function get_where($id) {
$this->load->model('mdl_blog');
$query = $this->mdl_blog->get_where($id);
return $query;
}

function get_where_custom($col, $value) {
$this->load->model('mdl_blog');
$query = $this->mdl_blog->get_where_custom($col, $value);
return $query;
}

function _insert($data) {
$this->load->model('mdl_blog');
$this->mdl_blog->_insert($data);
}

function _update($id, $data) {
$this->load->model('mdl_blog');
$this->mdl_blog->_update($id, $data);
}

function _delete($id) {
$this->load->model('mdl_blog');
$this->mdl_blog->_delete($id);
}

function count_where($column, $value) {
$this->load->model('mdl_blog');
$count = $this->mdl_blog->count_where($column, $value);
return $count;
}

function get_max() {
$this->load->model('mdl_blog');
$max_id = $this->mdl_blog->get_max();
return $max_id;
}

function _custom_query($mysql_query) {
$this->load->model('mdl_blog');
$query = $this->mdl_blog->_custom_query($mysql_query);
return $query;
}

function item_check($str)
        {   $url_item = url_title($str);
            $mysql_query = "select * from store_items where nama_item='$str' and url_item='$url_item'";
            $update_id = $this->uri->segment(3);
            if (is_numeric($update_id)) {
                $mysql_query.=" and id!=$update_id";
            }
            $query = $this->_custom_query($mysql_query);
            $num_rows = $query->num_rows();

                if ($num_rows>0)
                {
                        $this->form_validation->set_message('item_check', 'nama item tidak tersedia atau sudah ada');
                        return FALSE;
                }
                else
                {
                        return TRUE;
                }
        }



 public function check_lagi(){
        $this->load->view('index');
    }






}

/* End of file adminccm.php */
/* Location: ./application/controllers/adminccm.php */