<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran extends CI_Controller {

	public function index()
	{
		$data['title'] = "Pendaftaran";	
		$data['provinsi'] = $this->db->get('provinces');
		$this->load->view('homepage/pendaftaran', $data);
	}
	function pilih_kota($id){
		$result = $this->db->where("province_id",$id)->get("regencies")->result();
		echo json_encode($result);
	}
	function pilih_kecamatan($id){
		$result = $this->db->where("regency_id",$id)->get("districts")->result();
		echo json_encode($result);
	}
	function pilih_desa($id){
		$result = $this->db->where("district_id",$id)->get("villages")->result();
		echo json_encode($result);
	}
	function input_mts_data(){

		$nisn_mts = $this->input->post("nisn_mts");
		$nomor_kk_mts = $this->input->post("nomor_kk_mts");
		$nik_mts = $this->input->post("nik_mts");
		$nama_mts = $this->input->post("nama_mts");
		$jenis_kelamin_mts = $this->input->post("jenis_kelamin_mts");
		$tanggal_lahir_mts = $this->input->post("tanggal_lahir_mts");
		$provinsi =$this->input->post("provinsi");
		$kabupaten =$this->input->post("kabupaten");
		$kecamatan =$this->input->post("kecamatan");
		$desa =$this->input->post("desa");
		$alamat_mts = $this->input->post("alamat_mts");
		$anak_ke_mts = $this->input->post("anak_ke_mts");
		$jumlah_saudara_mts = $this->input->post("jumlah_saudara_mts");
		$hobi_mts = $this->input->post("hobi_mts");
		$cita_cita_mts = $this->input->post("cita_cita_mts");
		$foto_mts = $this->input->post("foto_mts");
		$nik_ayah_mts = $this->input->post("nik_ayah_mts");
		$nama_ayah_mts = $this->input->post("nama_ayah_mts");
		$pendidikan_ayah_mts = $this->input->post("pendidikan_ayah_mts");
		$pekerjaan_ayah_mts = $this->input->post("pekerjaan_ayah_mts");
		$penghasilan_ayah_mts = $this->input->post("penghasilan_ayah_mts");
		$no_telepon_ayah_mts = $this->input->post("no_telepon_ayah_mts");
		$nik_ibu_mts = $this->input->post("nik_ibu_mts");
		$nama_ibu_mts = $this->input->post("nama_ibu_mts");
		$pendidikan_ibu_mts = $this->input->post("pendidikan_ibu_mts");
		$pekerjaan_ibu_mts = $this->input->post("pekerjaan_ibu_mts");
		$penghasilan_ibu_mts = $this->input->post("penghasilan_ibu_mts");
		$no_telepon_ibu_mts = $this->input->post("no_telepon_ibu_mts");
		$nik_wali_mts = $this->input->post("nik_wali_mts");
		$nama_wali_mts = $this->input->post("nama_wali_mts");
		$pendidikan_wali_mts = $this->input->post("pendidikan_wali_mts");
		$pekerjaan_wali_mts = $this->input->post("pekerjaan_wali_mts");
		$penghasilan_wali_mts = $this->input->post("penghasilan_wali_mts");
		$no_telepon_wali_mts = $this->input->post("no_telepon_wali_mts");
		$npsn_sekolah_asal_mts = $this->input->post("npsn_sekolah_asal_mts");
		$asal_sekolah_mts = $this->input->post("asal_sekolah_mts");
		$alamat_sekolah_asal_mts = $this->input->post("alamat_sekolah_asal_mts");
		$no_seri_skhun_mts = $this->input->post("no_seri_skhun_mts");
		$rencana_domisili_mts = $this->input->post("rencana_domisili_mts");


		$object_data_mts = array(
			'pendaftaran' => 1,
			'nisn' => $nisn_mts,
			'nomor_kk' => $nomor_kk_mts,
			'nik' => $nik_mts,
			'nama' => $nama_mts,
			'jenis_kelamin' => $jenis_kelamin_mts,
			'tanggal_lahir' => $tanggal_lahir_mts,
			'provinsi' => $provinsi,
			'kabupaten' => $kabupaten,
			'kecamatan' => $kecamatan,
			'desa' => $desa,
			'alamat' => $alamat_mts,
			'anak_ke' => $anak_ke_mts,
			'jumlah_saudara' => $jumlah_saudara_mts,
			'hobi' => $hobi_mts,
			'cita_cita' => $cita_cita_mts,
			'foto' => $foto_mts,
			'nik_ayah' => $nik_ayah_mts,
			'nama_ayah' => $nama_ayah_mts,
			'pendidikan_ayah' => $pendidikan_ayah_mts,
			'pekerjaan_ayah' => $pekerjaan_ayah_mts,
			'penghasilan_ayah' => $penghasilan_ayah_mts,
			'no_telepon_ayah' => $no_telepon_ayah_mts,
			'nik_ibu' => $nik_ibu_mts,
			'nama_ibu' => $nama_ibu_mts,
			'pendidikan_ibu' => $pendidikan_ibu_mts,
			'pekerjaan_ibu' => $pekerjaan_ibu_mts,
			'penghasilan_ibu' => $penghasilan_ibu_mts,
			'no_telepon_ibu' => $no_telepon_ibu_mts,
			'nik_wali' => $nik_wali_mts,
			'nama_wali' => $nama_wali_mts,
			'pendidikan_wali' => $pendidikan_wali_mts,
			'pekerjaan_wali' => $pekerjaan_wali_mts,
			'penghasilan_wali' => $penghasilan_wali_mts,
			'no_telepon_wali' => $no_telepon_wali_mts,
			'npsn_sekolah_asal' => $npsn_sekolah_asal_mts,
			'asal_sekolah' => $asal_sekolah_mts,
			'alamat_sekolah_asal' => $alamat_sekolah_asal_mts,
			'no_seri_skhun' => $no_seri_skhun_mts,
			'rencana_domisili' => $rencana_domisili_mts
		);
		$query = $this->db->insert('pendaftaran', $object_data_mts);
		echo json_encode($query);
	}

	function random_string($length) {
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}

		return $randomString;
	}

	function kirim_email($email_kepada){
		$config = array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => 'suluharwani007@gmail.com',
			'smtp_pass' => 'suluhmaulia',
			'mailtype' => 'html',
			'charset' => 'iso-8859-1',
			'starttls'  => true,
			'newline'   => "\r\n"
		);
		$this->load->library('email', $config);
		
		$this->email->from('suluharwani007@gmail.com', 'No Reply YPI');
		$this->email->to($email_kepada);
		$this->email->cc('another@example.com');
		$this->email->bcc('and@another.com');
		
		$this->email->subject('subject');
		$this->email->message('<html><head>
<title>Your email at the time</title>
</head>
<body>
ini adalah gambar
'.base_url("assets/a.pdf").'
<img src="http://cdn2.tstatic.net/tribunnews/foto/bank/images/ilustrasi-ilusi-optik-yang-sedang-viral.jpg">
</body>');
		
		$this->email->send();
		
		echo $this->email->print_debugger();
	}
	function test(){
		$this->kirim_email('suluh007@gmail.com');
	}

}

/* End of file Pendaftaran.php */
/* Location: ./application/controllers/Pendaftaran.php */