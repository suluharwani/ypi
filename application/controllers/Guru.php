<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller {
	function __construct() {
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('mdl_guru');
		$this->load->model('mdl_login');
	}
	public $folder_admin = "guru"; 
	public function index()
	{
		$this->_make_sure_is_guru();
		$data['title'] = 'guru';	
	// code
		$data['tanggal'] = date('l, d-m-Y h:i:sa');
		$data['jumlah_guru'] = $this->mdl_guru->jumlah_guru();
		$data['guru_aktif'] = $this->mdl_guru->guru_aktif();
		$data['guru_tidak_aktif'] = $this->mdl_guru->guru_tidak_aktif();
		$data['guru_cuti'] = $this->mdl_guru->guru_cuti();
		$data['ip_login'] = $this->input->ip_address();

		//data guru
		$g = $this->_data_guru();
		$data['nama_guru'] = $g['nama'];
		$data['id_guru'] = $this->session->userdata('masuk_login_guru');
		//data guru
		$data['jurusan'] = $this->db->get('jurusan')->result();

	// code
		$data['konten'] = $this->load->view("$this->folder_admin/konten/dashboard",$data,true);
		$this->load->view("$this->folder_admin/dashboard", $data);  

	}
	function pilih_mata_pelajaran($id_jurusan){
		$result = $this->db->where("id_jurusan",$id_jurusan)->get("mata_pelajaran")->result();
         	echo json_encode($result);
	}
	public function do_upload(){
    $nama_materi = $this->input->post('nama_materi');
    $id_mata_pelajaran = $this->input->post('mata_pelajaran');
    $id_jurusan = $this->input->post('jurusan');
    $keterangan_materi = $this->input->post('keterangan_materi');
    $this->load->library('upload');
    $config['upload_path']          = './assets/materi/';
    $config['allowed_types']        = '*';
    $config['max_size']             = 100000;
    $config['max_width']            = 20000;
    $config['max_height']           = 20000;
    $this->load->library('upload', $config);
    $this->upload->initialize($config);
    if (!$this->upload->do_upload('file_materi')) { 
     $error = array('error' => $this->upload->display_errors()); 
   } else { 
    $file = $this->upload->data();
    // $path =  "./assets/gambar/produk/".$file['file_name']."";
    // $new_path =  "./assets/gambar/thumb/";
    // $width = 300;
    // $height = 300;
    // $this->load->library('image_lib');

    // $this->image_lib->initialize(array(
    //   'image_library' => 'gd2',
    //   'source_image' => $path,
    //   'new_image' => $new_path,
    //   'maintain_ratio' => true,
    //   'master_dim' => 'width',
    //   'width' => $width,
    //   'height' => $height
    // ));
    // $this->image_lib->resize();
  }
  $object_file = array(
  	'id_guru' => $this->session->userdata('masuk_login_guru'),
  	'id_mata_pelajaran' => $id_mata_pelajaran,
  	'id_jurusan' => $id_jurusan,
    'nama_materi' => $nama_materi,
    'file' =>  $file['file_name'],
    'tanggal_buat' =>  date('Y/m/d H:i:s'),
    'keterangan' => $keterangan_materi
  );
  
  // $this->db->where('kode_produk', $id_barang);   
  $query = $this->db->insert('materi_guru', $object_file);
  echo json_encode($query);
}
	function materi(){
	$id_guru = $this->input->post('id_guru');
	$this->db->select('*');
	$this->db->from('materi_guru');
	$this->db->join('mata_pelajaran', 'materi_guru.id_mata_pelajaran = mata_pelajaran.id', 'left');
	$this->db->join('jurusan', 'materi_guru.id_jurusan = jurusan.id', 'left');
	$this->db->where('materi_guru.id_guru', $id_guru);
	$query = $this->db->get();
	echo json_encode($query->result());
	}
	function informasi_pengajaran(){
		$id_guru = $this->input->post('id_guru');
		$query = $this->db->get_where('informasi_pengajaran', array('id_guru' =>$id_guru ));
		echo json_encode($query->result());
	}

	public function login(){
		$data['title'] = 'Login Guru';
		$data['ip_login'] = $this->input->ip_address();
		$this->load->view("$this->folder_admin/login", $data);  
	}
	public function proses_login(){
		$id_guru = $this->input->post('id_guru');
		$password = $this->input->post('password');
		$hasil = $this->mdl_login->login_guru($id_guru,$password);
		if ($hasil==1) {
			$guru = $this->mdl_login->guru($id_guru);
			foreach ($guru->result() as $value) {
				$id_admin = $value->id;
			}
			$this->session->set_userdata(array('status_login_guru' => 'guru_login', 'id_guru_login' => $id_admin));
			echo json_encode($guru);
		}
		else{

		}
	}
	function _make_sure_is_guru(){
        $is_user = $this->session->userdata('status_login_guru');
        if ($is_user == "guru_login") {

        }else {
          redirect('guru/login','refresh');
        }
      }
    function _data_guru(){
    	$this->_make_sure_is_guru();
    	$id_guru = $this->session->userdata('masuk_login_guru');
    	$data_guru = $this->mdl_guru->data_guru_by_id($id_guru);
    	foreach ($data_guru->result() as $guru) {
    		 $g['nama'] = $guru->nama;
    		 $g['id'] = $guru->id; 
    		 $g['nama'] = $guru->nama;  
    		 $g['username'] = $guru->username; 
    		 $g['password'] = $guru->password; 
    		 $g['id_guru'] = $guru->id_guru; 
    		 $g['jabatan'] = $guru->jabatan;
    		 $g['nama_sekolah'] = $guru->nama_sekolah; 
    		 $g['tahun_lulus'] = $guru->tahun_lulus; 
    		 $g['gelar'] = $guru->gelar; 
    		 $g['jurusan'] = $guru->jurusan; 
    		 $g['alamat'] = $guru->alamat; 
    		 $g['tempat_lahir'] = $guru->tempat_lahir; 
    		 $g['foto'] = $guru->foto; 
    		 $g['no_hp'] = $guru->no_hp; 
    		 $g['email'] = $guru->email; 
    		 $g['jenis_kelamin'] = $guru->jenis_kelamin; 
    		 $g['status'] = $guru->status; 
    		 $g['tahun_akademik_awal'] = $guru->tahun_akademik_awal;
    		 $g['tahun_akademik_akhir'] = $guru->tahun_akademik_akhir; 
    		 $g['semester'] = $guru->semester; 
    		 $g['id_mata_pelajaran'] = $guru->id_mata_pelajaran; 
    		 $g['id_jurusan'] = $guru->id_jurusan; 
    	}
    	return $g;
    }

}

/* End of file Guru.php */
/* Location: ./application/controllers/Guru.php */