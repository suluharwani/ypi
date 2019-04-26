<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adm extends CI_Controller {
  private $filename = "import_data";
  function __construct() {
    parent::__construct();
    date_default_timezone_set('Asia/Jakarta');
    $this->load->model('mdl_alumni','alumni');
    $this->load->model('mdl_import');
    $this->load->model('mdl_admin');   
    $this->load->model('mdl_berita');
  }
  public $folder_admin = "adm"; 
  public $alert_success='<div class="alert alert-success alert-dismissible fade in" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
  </button>
  <strong>Success!</strong>
  </div>';
  public $alert_gagal = ' <div class="alert alert-danger alert-dismissible fade in" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
  </button>
  <strong>Gagal!</strong> Mohon check lagi.
  </div>';

  public function test($a,$b){


  }

  public function index(){
    $this->load->library('session');
    $this->_make_sure_is_admin();
    $this->load->model('mdl_alumni');

    $total_alumni = $this->mdl_alumni->count_all();
    $query =  $this->db->query("select distinct angkatan from alumni;");
    $total_angkatan = $query->num_rows();

    $data ['judul'] = "YPI KLAMBU";
    $data ['title'] = "YPI KLAMBU";
    $data ['tanggal'] = date('l, d-m-Y h:i:sa');
    $data ['total_alumni'] = $total_alumni;
    $data ['total_angkatan'] = $total_angkatan;
    $data ['tahun_angkatan_option'] = $this->mdl_alumni->tahun_angkatan();

    $data_admin = $this->session->userdata('masuk_pak_eko');
    foreach ($data_admin as $admin_data) {
      $data['nama_admin'] = $admin_data->nama;
    }
        //STATISTIK
        // $alumni_semua = $this->db->query("select * from alumni;");
        // $total_alumni = $alumni_semua->num_rows();

        //kerja
    if ($total_alumni>0) {


      $kerja = $this->db->query("select * from alumni where status_kerja=1;");
      $total_kerja = $kerja->num_rows();
      $data ['total_kerja'] = $total_kerja;


        //kuliah

      $kuliah = $this->db->query("select * from alumni where status_kuliah=1;");
      $total_kuliah = $kuliah->num_rows();
      $data ['total_kuliah'] = $total_kuliah;
      $data ['persentase_kuliah'] = $total_kuliah / $total_alumni * 100;
        //kerja sambil kuliah
      $kerja_kuliah = $this->db->query("select * from alumni where status_kerja=1 and status_kuliah=1;");
      $total_kerja_kuliah = $kerja_kuliah->num_rows();
      $data ['total_kerja_kuliah'] = $total_kerja_kuliah;
      $data ['persentase_kerja_kuliah'] = $total_kerja_kuliah / $total_alumni * 100;
      $data ['persentase_kerja'] = $total_kerja / $total_alumni * 100;
        //belum kerja
      $belum_kerja = $this->db->query("select * from alumni where status_belum_kerja=1;");
      $total_belum_kerja = $belum_kerja->num_rows();
      $data ['total_belum_kerja'] = $total_belum_kerja;
      $data ['persentase_belum_kerja'] = $total_belum_kerja / $total_alumni * 100;
    }else{
      $data ['total_kerja'] = 0;
      $data ['total_kuliah'] = 0;
      $data ['persentase_kuliah'] = 0;
      $data ['persentase_kerja'] = 0;
      $data ['total_kerja_kuliah'] = 0;
      $data ['persentase_kerja_kuliah'] = 0;
      $data ['total_belum_kerja'] = 0;
      $data ['persentase_belum_kerja'] = 0;
    }
    $data ['orang_baru_belum_dikonfirmasi'] = $this->db->get_where('alumni', array('status !=' => '1'))->num_rows();
    $data ['orang_sudah_dikonfirmasi'] = $this->db->get_where('alumni', array('status' => '1'))->num_rows();
    $data ['total_Admin'] = $this->db->get('admin')->num_rows();
    // $this->load->view('admin', $data, FALSE);
    $data['konten'] = $this->load->view("$this->folder_admin/konten/dashboard",$data,true);
    $this->load->view("$this->folder_admin/dashboard", $data); 

  }
  public function web_profile(){
    $this->_make_sure_is_admin();
    $data_admin = $this->session->userdata('masuk_pak_eko');
    foreach ($data_admin as $admin_data) {
      $data['nama_admin'] = $admin_data->nama;
      $data['id_admin'] = $admin_data->id;
    }
    

    $data['title'] = 'Web Profile';
    $data['konten'] = $this->load->view("$this->folder_admin/konten/web_profile",$data,true);
    $this->load->view("$this->folder_admin/dashboard", $data);
  }
  function quotes(){
    $query = $this->db->get('web_quotes')->result();
    echo json_encode($query);
  }
  function update_quote(){
    $quote_isi = $this->input->post('quote_isi');
    $quotes_auth = $this->input->post('quotes_auth');
    $check = $this->db->get('web_quotes');
    if ($check->num_rows()==0) {
      $query = $this->db->insert('web_quotes', array(
                'nama_auth'=>$quotes_auth,
                'isi_quote'=>$quote_isi

    ));
    }else{
      $this->db->select('id');
      $this->db->from('web_quotes');
      $last = $this->db->get();
      foreach ($last->result() as $value) {
        $id = $value->id;
      }
      $this->db->where('id', $id);
      $query = $this->db->update('web_quotes', array(
                'nama_auth'=>$quotes_auth,
                'isi_quote'=>$quote_isi
              ));

    }
    echo json_encode($query);
  }
  function motto_list(){
    $this->db->select('web_motto.id as id_motto, web_motto.tanggal as tanggal, web_motto.isi as isi, admin.id as id_admin, admin.nama as nama_admin');
    $this->db->from('web_motto');
    $this->db->join('admin', 'admin.id = web_motto.id_admin', 'left');
    $motto = $this->db->get();
    echo json_encode($motto->result());
  }
  public function do_upload_slider(){
    $data_admin = $this->session->userdata('masuk_pak_eko');
    foreach ($data_admin as $admin_data) {
      $id_admin = $admin_data->id;
    }
    $this->load->library('upload');
    $config['upload_path']          = './assets/slider/asli/';
    $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
    $config['max_size']             = 100000;
    $config['max_width']            = 20000;
    $config['max_height']           = 20000;
    $config['file_name']            = $this->input->post('title');
    $this->load->library('upload', $config);
    $this->upload->initialize($config);
    if (!$this->upload->do_upload('gambar_slider')) { 
     $error = array('error' => $this->upload->display_errors()); 
   } else { 
    $file = $this->upload->data();

    $path =  "./assets/slider/asli/".$file['file_name']."";
    $new_path =  "./assets/slider/thumb/";
    $new_path_view =  "./assets/slider/fix/";
    $width = 150;
    $height = 100;
    $width_fix = 1366;
              // $height_fix = 1200;
    $this->load->library('image_lib');

    $this->image_lib->initialize(array(
      'image_library' => 'gd2',
      'source_image' => $path,
      'new_image' => $new_path,
      'maintain_ratio' => true,
      'master_dim' => 'width',
      'width' => $width,
      'height' => $height
    ));

    $this->image_lib->resize();

    $this->image_lib->initialize(array(
      'image_library' => 'gd2',
      'quality' =>'50%',
      'source_image' => $path,
      'new_image' => $new_path_view,
      'maintain_ratio' => true,
      'master_dim' => 'width',
      'width' => $width_fix,
      'height' => $width_fix*0.6
    ));

    $this->image_lib->resize();
  }
  $object_foto = array(
    'gambar' => $file['file_name'],
    'thumb' =>  $file['file_name'],
    'nama' => $this->input->post('title'),
    'keterangan' => $this->input->post('keterangan'),
    'tanggal' => date("Y-m-d"),
    'id_admin' => $id_admin
  );  
  $query = $this->db->insert("web_slider", $object_foto);
  echo json_encode($query);
}
function slider_list(){
  $query = $this->db->get('web_slider')->result();
  echo json_encode($query);
}
function tambah_motto(){
  $motto = $this->input->post('motto');
  $id_admin = $this->input->post('id_admin');
  $object = array(
    'isi' => $motto,
    'id_admin' => $id_admin,
    'tanggal' => date("Y-m-d")
  );
  $query = $this->db->insert('web_motto', $object);
  echo json_encode($query);
}
function hapus_motto(){
  $id_motto = $this->input->post('id_motto');
  $this->db->where('id', $id_motto);
  $query = $this->db->delete('web_motto');
  echo json_encode($query);
}
function hapus_slider(){
  $id_slider = $this->input->post('id_slider');
  $data_slider = $this->db->get_where('web_slider', array('id'=>$id_slider));
  foreach ($data_slider->result() as $value) {
    $gambar = $value->gambar;
    $thumb = $value->thumb;
  }
  $path_gambar = "./assets/slider/fix/".$gambar."";
  $path_gambar_asli = "./assets/slider/asli/".$gambar."";
  $path_thumb = "./assets/slider/thumb/".$thumb."";
  if (file_exists($path_gambar)) {
    unlink($path_gambar);
  }
  if (file_exists($path_gambar_asli)) {
    unlink($path_gambar_asli);
  }
  if (file_exists($path_thumb)) {
    unlink($path_thumb);
  }
  $this->db->where('id', $id_slider);
  $query = $this->db->delete('web_slider');
  echo json_encode($query);
}
function edit_motto(){
  $motto = $this->input->post('motto');
  $id_admin = $this->input->post('id_admin');
  $id_motto = $this->input->post('id_motto');
  $object = array(
    'isi' => $motto,
    'id_admin' => $id_admin,
    'tanggal' => date("Y-m-d")
  );
  $this->db->where('id', $id_motto);
  $query = $this->db->update('web_motto', $object);
  echo json_encode($query);
}

public function backup_database(){
  $this->_make_sure_is_admin();
  $this->load->dbutil();

  $prefs = array(     
    'format'      => 'zip',             
    'filename'    => 'my_db_backup.sql',
  );


  $backup =& $this->dbutil->backup($prefs); 

  $db_name = 'backup-on-'. date("Y-m-d-H-i-s") .'.zip';
  $save = 'backup/'.$db_name;

  $this->load->helper('file');
  write_file($save, $backup); 


  $this->load->helper('download');
  force_download($db_name, $backup);
  return 0;
}

public function manage_alumni()
{
  $this->load->library('session');
  $this->_make_sure_is_admin();
  $this->load->model('mdl_alumni');

  $total_alumni = $this->mdl_alumni->count_all();
  $query =  $this->db->query("select distinct angkatan from alumni;");
  $total_angkatan = $query->num_rows();

  $data ['judul'] = "YPI KLAMBU";
  $data ['title'] = "YPI KLAMBU";
  $data ['tanggal'] = date('l, d-m-Y h:i:sa');
  $data ['total_alumni'] = $total_alumni;
  $data ['total_angkatan'] = $total_angkatan;
  $data ['tahun_angkatan_option'] = $this->mdl_alumni->tahun_angkatan();

  $data_admin = $this->session->userdata('masuk_pak_eko');
  foreach ($data_admin as $admin_data) {
    $data['nama_admin'] = $admin_data->nama;
  }
        //STATISTIK
        // $alumni_semua = $this->db->query("select * from alumni;");
        // $total_alumni = $alumni_semua->num_rows();

        //kerja
  if ($total_alumni>0) {


    $kerja = $this->db->query("select * from alumni where status_kerja=1;");
    $total_kerja = $kerja->num_rows();
    $data ['total_kerja'] = $total_kerja;


        //kuliah

    $kuliah = $this->db->query("select * from alumni where status_kuliah=1;");
    $total_kuliah = $kuliah->num_rows();
    $data ['total_kuliah'] = $total_kuliah;
    $data ['persentase_kuliah'] = $total_kuliah / $total_alumni * 100;
        //kerja sambil kuliah
    $kerja_kuliah = $this->db->query("select * from alumni where status_kerja=1 and status_kuliah=1;");
    $total_kerja_kuliah = $kerja_kuliah->num_rows();
    $data ['total_kerja_kuliah'] = $total_kerja_kuliah;
    $data ['persentase_kerja_kuliah'] = $total_kerja_kuliah / $total_alumni * 100;
    $data ['persentase_kerja'] = $total_kerja / $total_alumni * 100;
        //belum kerja
    $belum_kerja = $this->db->query("select * from alumni where status_belum_kerja=1;");
    $total_belum_kerja = $belum_kerja->num_rows();
    $data ['total_belum_kerja'] = $total_belum_kerja;
    $data ['persentase_belum_kerja'] = $total_belum_kerja / $total_alumni * 100;
  }else{
    $data ['total_kerja'] = 0;
    $data ['total_kuliah'] = 0;
    $data ['persentase_kuliah'] = 0;
    $data ['persentase_kerja'] = 0;
    $data ['total_kerja_kuliah'] = 0;
    $data ['persentase_kerja_kuliah'] = 0;
    $data ['total_belum_kerja'] = 0;
    $data ['persentase_belum_kerja'] = 0;
  }
  $data ['orang_baru_belum_dikonfirmasi'] = $this->db->get_where('alumni', array('status !=' => '1'))->num_rows();
  $data ['orang_sudah_dikonfirmasi'] = $this->db->get_where('alumni', array('status' => '1'))->num_rows();
  $data ['total_Admin'] = $this->db->get('admin')->num_rows();
    // $this->load->view('admin', $data, FALSE);
  $data['konten'] = $this->load->view("$this->folder_admin/konten/dashboard",$data,true);
  $this->load->view("$this->folder_admin/dashboard", $data);  

}
public function laporan()
{
  $this->load->library('session');
  $this->_make_sure_is_admin();
  $this->load->model('mdl_alumni');

  $total_alumni = $this->mdl_alumni->count_all();
  $query =  $this->db->query("select distinct angkatan from alumni;");
  $total_angkatan = $query->num_rows();

  $data ['judul'] = "YPI KLAMBU";
  $data ['title'] = "YPI KLAMBU";
  $data ['tanggal'] = date('l, d-m-Y h:i:sa');
  $data ['total_alumni'] = $total_alumni;
  $data ['total_angkatan'] = $total_angkatan;
  $data ['tahun_angkatan_option'] = $this->mdl_alumni->tahun_angkatan();

  $data_admin = $this->session->userdata('masuk_pak_eko');
  foreach ($data_admin as $admin_data) {
    $data['nama_admin'] = $admin_data->nama;
  }
        //STATISTIK
        // $alumni_semua = $this->db->query("select * from alumni;");
        // $total_alumni = $alumni_semua->num_rows();

        //kerja
      // $kerja = $this->db->query("select * from alumni where status_kerja=1;");
      // $total_kerja = $kerja->num_rows();
      // $data ['total_kerja'] = $total_kerja;
      // $data ['persentase_kerja'] = $total_kerja / $total_alumni * 100;
      //   //kuliah
      // $kuliah = $this->db->query("select * from alumni where status_kuliah=1;");
      // $total_kuliah = $kuliah->num_rows();
      // $data ['total_kuliah'] = $total_kuliah;
      // $data ['persentase_kuliah'] = $total_kuliah / $total_alumni * 100;
      //   //kerja sambil kuliah
      // $kerja_kuliah = $this->db->query("select * from alumni where status_kerja=1 and status_kuliah=1;");
      // $total_kerja_kuliah = $kerja_kuliah->num_rows();
      // $data ['total_kerja_kuliah'] = $total_kerja_kuliah;
      // $data ['persentase_kerja_kuliah'] = $total_kerja_kuliah / $total_alumni * 100;
      //   //belum kerja
      // $belum_kerja = $this->db->query("select * from alumni where status_belum_kerja=1;");
      // $total_belum_kerja = $belum_kerja->num_rows();
      // $data ['total_belum_kerja'] = $total_belum_kerja;
      // $data ['persentase_belum_kerja'] = $total_belum_kerja / $total_alumni * 100;
      // $data ['orang_baru_belum_dikonfirmasi'] = $this->db->get_where('alumni', array('status !=' => '1'))->num_rows();
      // $data ['orang_sudah_dikonfirmasi'] = $this->db->get_where('alumni', array('status' => '1'))->num_rows();
      // $data ['total_Admin'] = $this->db->get('admin')->num_rows();
  $this->load->view('laporan_alumni', $data, FALSE);

}

function konfirmasi_alumni($id){
  $object = [
    'status' => 1 
  ];
  $this->db->where('id', $id);
  $this->db->update('alumni', $object);
  redirect('adm','refresh');
}
function reset_password($id){
  $alumni = $this->db->get_where('alumni', array('id' => $id));
  foreach ($alumni->result() as $value) {
    $nisn = $value->nisn;
  }
  $object = [
    'password' => $this->bcrypt->hash_password($nisn)
  ];
  $this->db->where('id', $id);
  $this->db->update('alumni', $object);
  redirect('adm','refresh');
}

function batal_konfirmasi_alumni($id){
  $object = [
    'status' => 0 
  ];
  $this->db->where('id', $id);
  $this->db->update('alumni', $object);
  redirect('adm','refresh');
}


public function upload_tinymce() {
  $setting = array('upload_path'   => './assets/gambar/berita/',
   'allowed_types' => 'jpg|jpeg|png',
   'max_size'      => 100000);
  $this->load->library('upload', $setting);
  if (!$this->upload->do_upload('file')) {
    $this->output->set_header('HTTP/1.0 500 Server Error');
    exit;
  } else {
    $file = $this->upload->data();
    $this->output
    ->set_content_type('application/json', 'utf-8')
    ->set_output(json_encode(['location' => base_url().'assets/gambar/berita/'.$file['file_name']]))
    ->_display();
    exit;
  }
}

public function ajax_list_admin()
{
  $this->_make_sure_is_admin();
  $list = $this->mdl_admin->get_datatables();
  $data = array();
  $no = $_POST['start'];
  foreach ($list as $admin) {
    $no++;
    $row = array();
    $row[] = $no;
    $row[] = $admin->nama;
    $row[] = $admin->username;
    $row[] = $admin->no_hp;
    $row[] = $admin->level;
    $row[] = $admin->id;

    $data[] = $row;
  }

  $output = array(
    "draw" => $_POST['draw'],
    "recordsTotal" => $this->mdl_admin->count_all_datatable(),
    "recordsFiltered" => $this->mdl_admin->count_filtered(),
    "data" => $data,
  );
        //output to json format
  echo json_encode($output);
}
public function ajax_list_berita()
{
  $this->_make_sure_is_admin();
  $list = $this->mdl_berita->get_datatables();
  $data = array();
  $no = $_POST['start'];
  foreach ($list as $berita) {
    $no++;
    $row = array();
    $row[] = $no;
    $row[] = $berita->judul;
    $row[] = $berita->gambar;
    $row[] = $berita->tanggal_berita;
    $row[] = $berita->status;
    $row[] = $berita->penulis;
    $row[] = $berita->id_berita;


    $data[] = $row;
  }

  $output = array(
    "draw" => $_POST['draw'],
    "recordsTotal" => $this->mdl_berita->count_all_datatable(),
    "recordsFiltered" => $this->mdl_berita->count_filtered(),
    "data" => $data,
  );
        //output to json format
  echo json_encode($output);
}
public function ajax_delete_admin($id)
{
  $this->_make_sure_is_admin();
  $this->mdl_admin->delete_by_id($id);
  redirect('adm/admin');    
}

public function berita(){
  $this->_make_sure_is_admin();
  $data ['judul'] = "YPI KLAMBU";
  $data ['title'] = "YPI KLAMBU";
  $data ['tanggal'] = date('l, d-m-Y h:i:sa');

  $id_admin = $this->session->userdata('id_admin_login');
  $data ['id_admin'] = $id_admin;

  $submit      = $this->input->post('submit'); 
  if ($submit == "submit") {
    $this->_insert_berita();
    redirect('adm/berita','refresh');
  }

  $this->load->view('view_data_berita', $data);
}
public function _insert_berita(){
  $judul = $this->input->post('judul');
  $isi = $this->input->post('isi');
  $tanggal_berita = date('Y-m-d H:i:s');;
  $id_pengguna = $this->session->userdata('id_admin_login');
  $status = 0;
  $data_admin = $this->session->userdata('masuk_pak_eko');
  foreach ($data_admin as $admin_data) {
    $nama_admin = $admin_data->nama;
  }
  $this->load->library('upload');
  $config['upload_path']          = './assets/gambar/berita/';
  $config['allowed_types']        = 'gif|jpg|png|jpeg';
  $config['max_size']             = 100000;
  $config['max_width']            = 20000;
  $config['max_height']           = 20000;
  $this->load->library('upload', $config);
  $this->upload->initialize($config);
      if (!$this->upload->do_upload('gambar')) { //jika gagal upload
        $error = array('error' => $this->upload->display_errors()); //tampilkan error
        $this->session->set_flashdata('berhasil', '<b>Gambar gagal</b> diupload');
        redirect("adm/berita",'refresh');
      } else { //jika berhasil upload
        $file = $this->upload->data();
        $data = [
          'gambar' => $file['file_name'],
          'judul' => $judul,
          'isi' => $isi,
          'tanggal_berita' => $tanggal_berita,
          'id_pengguna' => $id_pengguna,
          'status' => $status,
          'penulis' => $nama_admin,
          'url' => url_title($judul, '_', TRUE)

        ];
        $this->db->insert('data_berita', $data);
        $this->session->set_flashdata('berhasil', '<b>Berita berhasil</b> ditambah');
      }
    }

    public function admin(){
      $this->_make_sure_is_admin();
      $data ['judul'] = "YPI KLAMBU";
      $data ['title'] = "YPI KLAMBU";
      $data ['tanggal'] = date('l, d-m-Y h:i:sa');
      $input_admin = [
        'nama'       => $this->input->post('nama'),
        'username'   => $this->input->post('username'),
        'password'   => $this->bcrypt->hash_password($this->input->post('password')),
        'no_hp'      => $this->input->post('no_hp'),
        'level'      => $this->input->post('level')
      ];
      $submit      = $this->input->post('submit'); 
      if ($submit == "submit") {
        $this->db->insert('admin', $input_admin);
        redirect('adm/admin','refresh');
      }
      $this->load->view('view_data_admin', $data, FALSE); 
    }



// php excel

    public function upload(){
        // Load plugin PHPExcel nya
      $upload = $this->mdl_import->upload_file($this->filename);
      include APPPATH.'third_party/PHPExcel/PHPExcel.php';

      $excelreader = new PHPExcel_Reader_Excel2007();
        $loadexcel = $excelreader->load('excel/'.$this->filename.'.xlsx'); // Load file yang telah diupload ke folder excel
        $sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);
        
        // Buat sebuah variabel array untuk menampung array data yg akan kita insert ke database
        $data = array();
        
        $numrow = 1;
        foreach($sheet as $row){
            // Cek $numrow apakah lebih dari 1
            // Artinya karena baris pertama adalah nama-nama kolom
            // Jadi dilewat saja, tidak usah diimport
          if($numrow > 1){
                // Kita push (add) array data ke variabel data
            array_push($data, array(
                    'nisn'=>$row['A'], // Insert data nis dari kolom A di excel
                    'password'=>$this->bcrypt->hash_password($row['A']), // Insert data nis dari kolom A di excel
                    'nama'=>$row['B'], // Insert data nama dari kolom B di excel
                    'nama_belakang'=>$row['C'], // Insert data jenis kelamin dari kolom C di excel
                    'jenis_kelamin'=>$row['D'], // Insert data jenis kelamin dari kolom D di excel
                    'alamat'=>$row['E'], // Insert data alamat dari kolom E di excel
                    'angkatan'=>$row['F'], // Insert data alamat dari kolom F di excel
                    'no_hp'=>$row['G'], // Insert data alamat dari kolom G di excel
                    'email'=>$row['H'], // Insert data alamat dari kolom H di excel
                    'status'=>1, // Insert data alamat dari kolom H di excel
                  ));
          }

            $numrow++; // Tambah 1 setiap kali looping
          }

        // Panggil fungsi insert_multiple yg telah kita buat sebelumnya di model
          $this->mdl_import->insert_multiple($data);

        redirect("adm"); // Redirect ke halaman awal (ke controller siswa fungsi index)
      }

// php excel
      function _make_sure_is_admin(){
        $is_user = $this->session->userdata('status_login');
        if ($is_user == "admin_login") {

        }else {
          redirect('login_adm','refresh');
        }
      }

      public function ajax_list()
      {
        $this->_make_sure_is_admin();
        $list = $this->alumni->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $alumni) {
          $no++;
          $row = array();
          $row[] = $no;
          $row[] = $alumni->nama;
          $row[] = $alumni->nama_belakang;
          $row[] = $alumni->nisn;
          $row[] = $alumni->angkatan;
          $row[] = $alumni->no_hp;
          $row[] = $alumni->email;
          $row[] = $alumni->id;
          $row[] = $alumni->status;
          $row[] = $alumni->jenis_kelamin;
          $row[] = $alumni->alamat;

          $data[] = $row;
        }
        
        $output = array(
          "draw" => $_POST['draw'],
          "recordsTotal" => $this->alumni->count_all_datatable(),
          "recordsFiltered" => $this->alumni->count_filtered(),
          "data" => $data,
        );
        //output to json format
        echo json_encode($output);
      }
      public function ajax_delete()
      {
        $id = $this->input->post('id_alumni');
        $this->_make_sure_is_admin();
        $query = $this->alumni->delete_by_id($id);
        echo json_encode($query);
      }
      public function ajax_delete_berita($id)
      {
        $this->_make_sure_is_admin();
        $berita = $this->db->get_where('data_berita', array('id_berita' => $id));
        foreach ($berita->result() as $value) {
          $gambar = $value->gambar;
        }
        $gambar_path = './assets/gambar/berita/'.$gambar;
        if (file_exists($gambar_path)) {
          unlink($gambar_path);
          $this->mdl_berita->delete_by_id($id);
          $this->session->set_flashdata('berhasil', $this->alert_success);
        }
        redirect('adm/berita');    
      }
      public function ajax_batal_berita($id)
      {
        $this->_make_sure_is_admin();

        $this->db->where('id_berita', $id);
        $this->db->update('data_berita', array('status'=> 0));
        redirect('adm/berita');    
      }
      public function ajax_confirm_berita($id)
      {
        $this->_make_sure_is_admin();

        $this->db->where('id_berita', $id);
        $this->db->update('data_berita', array('status'=> 1));
        redirect('adm/berita');    
      }

      function alumni(){
        $this->_make_sure_is_admin();
        $this->load->library('Datatables');
        $this->datatables->select('*')->from('alumni');
        echo $this->datatables->generate();
      }
      function edit_alumni(){
        $this->_make_sure_is_admin();
        $update_id = $this->uri->segment(3);
        $data['title'] = "Edit data alumni";



        $this->load->view('edit_alumni', $data);
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
      function logout(){
        $this->session->sess_destroy();
        redirect('adm','refresh');
      }



    }

    /* End of file Adm.php */
/* Location: ./application/controllers/Adm.php */