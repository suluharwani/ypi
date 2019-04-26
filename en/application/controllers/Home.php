<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct() {
        parent::__construct();
        $this->db->query("SET time_zone='+8:00'");
        
	}
public function gallery(){
    $this->load->view('gallery');
}

public function contact(){
    $this->load->view('contact');
}

public function faq(){
    $this->load->view('faq');
}

public function pariwisata_konten($url_item){
    $url_item=$this->uri->segment(3);
    $item_id = $this->_get_item_id_from_item_url_pariwisata($url_item);
    $data = $this->fetch_data_from_db($item_id);



    $this->load->view('page_pariwisata', $data);


}
public function merchant_konten($url_item){
    $url_item=$this->uri->segment(3);
    $item_id = $this->_get_item_id_from_item_url_merchant($url_item);
    $data = $this->fetch_data_from_db_merchant($item_id);



    $this->load->view('page_merchant', $data);

    
}
function _get_item_id_from_item_url_pariwisata($url_item){
    $query = $this->get_where_custom_p('url_item', $url_item);
    foreach ($query->result() as $row) {
        $item_id = $row->id;
    }
    if (!isset($item_id)) {
        $item_id = 0;
    }
    return $item_id;
}
function _get_item_id_from_item_url_merchant($url_item){
    $query = $this->get_where_custom_m('url_item', $url_item);
    foreach ($query->result() as $row) {
        $item_id = $row->id;
    }
    if (!isset($item_id)) {
        $item_id = 0;
    }
    return $item_id;
}
function get_where_custom_p($col, $value) {
$this->load->model('mdl_blog');
$query = $this->mdl_blog->get_where_custom($col, $value);
return $query;
}
function get_where_custom_m($col, $value) {
$this->load->model('mdl_merchant');
$query = $this->mdl_merchant->get_where_custom($col, $value);
return $query;
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

function get_where($id) {
$this->load->model('mdl_blog');
$query = $this->mdl_blog->get_where($id);
return $query;
}
function get_where_merchant($id) {
$this->load->model('mdl_merchant');
$query = $this->mdl_merchant->get_where($id);
return $query;
}





public function pariwisata(){

    $data['query_pariwisata'] = $this->get_pariwisata('judul');

    $this->load->view('pariwisata',$data);
}


public function merchant(){

    $data['query'] = $this->get_merchant('judul');

    $this->load->view('merchant', $data);

}

function get_merchant($order_by) {
$this->load->model('mdl_merchant');
//bahasa indonesia =1 bahasa inggris =2
$query = $this->mdl_merchant->get_where_custom('kategori', 2);
return $query;
}
function get_pariwisata($order_by) {
$this->load->model('mdl_blog');

//bahasa indonesia =1 bahasa inggris =2
$query = $this->mdl_blog->get_where_custom('kategori', 2);
return $query;
}


public function index()
	{

		// sisa kuota
	$this->load->model('mdl_peserta');
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


 




		$this->load->library('form_validation');
		// $this->load->library('session');
 		
		$submit = $this->input->post('submit',TRUE);
		if ($submit=="submit") {
			// if($this->input->post('ktp') != $original_value) {
   // 				$is_unique =  '|is_unique[peserta.ktp]';
			// } else {
   // 			$is_unique =  '';
			// }

			// $this->form_validation->set_rules('ktp', 'KTP', 'callback_item_check');
			$this->form_validation->set_rules('kategori_lomba', 'Nama kategori lomba', 'required|is_natural');
			// $this->form_validation->set_rules('tipe_bayar', 'Pembayaran', 'required|is_natural');
			// $this->form_validation->set_rules('jenis_kelamin', 'Jenis kelamin', 'required');
			
				if ($this->form_validation->run() == FALSE)
				{

				echo "<script type='text/javascript'>alert('Data anda belum lengkap atau nomor KTP sudah ada tolong lengkapi data anda!')</script>";
				 }
				 else
				 {
				$data = $this->fetch_data_from_post();
				$update_id = $this->get_max();
				redirect('home/peserta/'.$update_id);
				 }		
		}

// 		if ($submit=="check") {
//             $daftar = "";
// 			$daftar = $this->input->post('daftar');
// 			$this->load->model('mdl_peserta');
// 			$id_peserta = $this->mdl_peserta->check_d($daftar);
// 			foreach ($id_peserta as $row)
// 			{
// 			         $id_p=$row->id;
// 			}

// 			redirect('home/bayar/'.$id_p);
//              }   
             
             	if ($submit=="check") {
            $daftar = "";
            $id_p="";
			$daftar = $this->input->post('daftar');
			$this->load->model('mdl_peserta');
			$id_peserta =  $this->db->query("SELECT id FROM peserta where no_daftar=$daftar");

           if($id_peserta->num_rows() >0)
             {

			foreach ($id_peserta->result() as $row)
			{

                    $data['id_p']=$row->id;
			        
			}
             redirect('home/bayar/'.$data['id_p']);
          }else{
            // 
          }
			redirect('home/bayar/a');

        }      
		$this->load->view('home', $data);
	}


function delete_image($update_id)
{	
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
	$this->_update($update_id, $data);
	$flash_msg="Gambar berhasil dihapus.";
	$value = '<div class="alert alert-success" role="alert">'.$flash_msg.'</div>';
	$this->session->set_flashdata('item', $value);
	redirect('home/bayar/'.$update_id);
}




function _generate_thumbnail($file_name){
$config['image_library'] = 'gd2';
$config['source_image'] = '.././assets/big_pic/'.$file_name;
$config['new_image'] = '.././assets/small_pic/'.$file_name;
// $config['create_thumb'] = TRUE;
$config['maintain_ratio'] = TRUE;
$config['width']         = 200;
$config['height']       = 200;

$this->load->library('image_lib', $config);

$this->image_lib->resize();
}



function do_upload($update_id)
{	
	$update_id = $this->uri->segment(3);
	$this->load->model('mdl_peserta');
	$data['peserta'] = $this->mdl_peserta->peserta()->result();

	$submit=$this->input->post('submit', TRUE);
	if ($submit=="Cancel") {
		redirect('home/bayar/'.$update_id,'refresh');
	}


    $config['upload_path']          = '.././assets/upload/bukti/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['max_size']             = 10000;
    $config['max_width']            = 2000;
    $config['max_height']           = 2000;

    $this->load->library('upload', $config);

    if (!$this->upload->do_upload('userfile'))
    {
     	 $data['error'] = array('error' => $this->upload->display_errors("<p style='color:red;'>", "</p>"));
     	 // foreach ($error as $key => $value) {
     	 // 	echo $value."<br>";
     	 // }
     	 // $this->load->view('upload_form', $error);
    $data['headline'] = "<div class='alert alert-danger' role='lert'>Upload bukti transfer <strong>gagal</strong>. Kemungkinan ukuran gambar yang terlalu besar. Mohon coba lagi.</div>";
	$data['update_id'] = $update_id;
	$data['flash'] = $this->session->flashdata('item');
	$this->load->view('upload_gambar', $data);
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
	$this->load->view('upload_gambar', $data);

     	 

    	 // $this->load->view('upload_success', $data);
    }
}

function upload_gambar($update_id){

	$update_id = $this->uri->segment(3);
	$this->load->model('mdl_peserta');
	$data['peserta'] = $this->mdl_peserta->peserta()->result();

	$data['headline'] = "<div class='alert alert-warning' role='lert'>Silahkan klik tombol <strong>choose file</strong> untuk upload gambar bukti atau tarik gambar ke dalam kotak untuk pengguna PC/Laptop. <strong>Maksimal ukuran gambar 1 MB</strong>, bila melebihi silahkan gambar di <strong>Screenshoot</strong> terlebih dahulu. Terima kasih.</div>";
	$data['update_id'] = $update_id;
	// $data['flash'] = $this->session->flashdata('item');
	$this->load->view('upload_gambar', $data);
		

}
	public function check_lagi(){
		$this->load->view('index');
	}

	public function bayar($id){
		$update_id = $this->uri->segment(3);
		if (!is_numeric($update_id)) {
		  redirect('home/check_lagi','refresh');
		}

		//data peserta
		$this->load->model('mdl_peserta');
		$data['peserta'] = $this->mdl_peserta->peserta()->result();
		

		$submit = $this->input->post('submit',TRUE);


        $bank_asal = $this->input->post('bank_asal');
		$namarek = $this->input->post('namarek');
		$keterangan = $this->input->post('keterangan');
		$jumlah_bayar = $this->input->post('jumlah_bayar');
        $ada_bukti = $this->input->post('ada_bukti');
		$object = array(
			'jumlah_bayar' => $jumlah_bayar,
			'keterangan' => $keterangan,
            'namarek' => $namarek,
            'bank_asal' => $bank_asal,
			'ada_bukti' => $ada_bukti

			); 
		
		if ($submit=="submit") {

				$this->db->where('id', $id);
       			$this->db->update('peserta', array('jumlah_bayar' => $jumlah_bayar, 'keterangan' => $keterangan, 'namarek' => $namarek, 'bank_asal' => $bank_asal,'ada_bukti' => $ada_bukti ));
				redirect('home/bayar/'.$update_id);
		 }	




		$this->load->view('invoice',$data);
	}
	public function peserta($id){
        $update_id = $this->uri->segment(3);
        if (!is_numeric($update_id)) {
          redirect('home/','refresh');
        }

	$update_id = $this->uri->segment(3);
	
	$this->load->model('mdl_peserta');
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




// 		$data['peserta'] = $this->mdl_peserta->peserta()->result();
// 		$submit = $this->input->post('submit',TRUE);


// 		$tipe_bayar = $this->input->post('tipe_bayar');
// 		$jersey = $this->input->post('jersey');
// 		$object = array(
// 			'tipe_bayar' => $tipe_bayar,
// 			'jersey' => $jersey
// 			); 
		
// 		if ($submit=="submit") {

// 				$this->db->where('id', $id);
//       			$this->db->update('peserta', array('tipe_bayar' => $tipe_bayar , 'jersey' => $jersey));
// 				redirect('home/bayar/'.$update_id);
// 		 }	

// 		$this->load->view('peserta',$data);

		$data['peserta'] = $this->mdl_peserta->peserta()->result();
		$submit = $this->input->post('submit',TRUE);


		$tipe_bayar = $this->input->post('tipe_bayar');
        $jersey = $this->input->post('jersey');
		$kode_unik = $this->input->post('kode_unik');
		$object = array(
            'tipe_bayar' => $tipe_bayar,
			'kode_unik' => $kode_unik,
			'jersey' => $jersey
			); 
		
		if ($submit=="submit") {

				$this->db->where('id', $id);
       			$this->db->update('peserta', array('tipe_bayar' => $tipe_bayar ,'kode_unik' => $kode_unik, 'jersey' => $jersey));
				redirect('home/bayar/'.$update_id);
		 }	

		$this->load->view('peserta',$data);

	} 



function fetch_data_from_post(){
		$id = $this->db->insert_id();
		$ktp = $this->input->post('ktp');
		$nama = $this->input->post('nama');
		$gender = $this->input->post('gender');
		$darah = $this->input->post('darah');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$ttl = $this->input->post('ttl');
		$alamat = $this->input->post('alamat');
		$kota = $this->input->post('kota');
		$provinsi = $this->input->post('provinsi');
		$kategori_lomba = $this->input->post('kategori_lomba');
		$hp = $this->input->post('hp');
		$komunitas = $this->input->post('komunitas');
		$tgl = date('Y-m-d H:i:s');
		$no_daftar = $this->input->post('no_daftar');
		$darurat = $this->input->post('darurat');
		$tipe_bayar = $this->input->post('tipe_bayar');
		$jersey = $this->input->post('jersey');
		$email = $this->input->post('email');
		$riwayat_penyakit = $this->input->post('riwayat_penyakit');
		// $status = $this->input->post('status');
		$object = array(
			'ktp' => $ktp, 
			'nama' => $nama, 
			'gender' => $gender, 
			'darah' => $darah, 
			'ttl' => $ttl,
			'tempat_lahir'=> $tempat_lahir, 
			'alamat' => $alamat, 
			'kota' => $kota, 
			'provinsi' => $provinsi, 
			'kategori_lomba' => $kategori_lomba, 
			'hp' => $hp, 
			'komunitas' => $komunitas,
			'tgl' => $tgl,
			'no_daftar' => $this->generate_random_string(10),
			'darurat' => $darurat,
			'jersey' => $jersey, 
			'email' => $email, 
			'riwayat_penyakit' => $riwayat_penyakit, 
			'tipe_bayar' => $tipe_bayar 
			// 'status' =>$status
		);
		$this->db->insert('peserta', $object);
		return $id;
}
function generate_random_string($length){
	$characters = '0123456789';
	$randomString = '';
	for ($i=0; $i <$length ; $i++) { 
		$randomString.=$characters[rand(0, strlen($characters)-1)];
	}
	return $randomString;
}

function _update($id, $data) {
		$this->load->model('mdl_peserta');
		$this->mdl_peserta->_update($id, $data);
}

function get_max() {
$this->load->model('mdl_peserta');
$max_id = $this->mdl_peserta->get_max();
return $max_id;
}


}