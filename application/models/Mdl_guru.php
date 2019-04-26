<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_guru extends CI_Model {

function all_guru(){
	$this->db->select('*');
	$this->db->from('guru');
	$this->db->join('jabatan_guru', 'guru.id = jabatan_guru.id_guru', 'left');
	$this->db->join('pendidikan_guru', 'guru.id = pendidikan_guru.id_guru', 'left');
	$this->db->join('profil_guru', 'guru.id = profil_guru.id_guru', 'left');
	$this->db->join('riwayat_mengajar_guru', 'guru.id = riwayat_mengajar_guru.id_guru', 'left');
	$query = $this->db->get();
	return $query;
}
function jumlah_guru(){
	$query = $this->db->get('guru');
	return $query->num_rows();
}
function guru_aktif(){
	$this->db->select('*');
	$this->db->from('guru');
	$this->db->join('profil_guru', 'guru.id = profil_guru.id_guru', 'left');
	$this->db->where('status', 1);
	$query = $this->db->get();
	return $query->num_rows();
}
function guru_tidak_aktif(){
	$this->db->select('*');
	$this->db->from('guru');
	$this->db->join('profil_guru', 'guru.id = profil_guru.id_guru', 'left');
	$this->db->where('status', 0);
	$query = $this->db->get();
	return $query->num_rows();
}
function guru_cuti(){
	$this->db->select('*');
	$this->db->from('guru');
	$this->db->join('profil_guru', 'guru.id = profil_guru.id_guru', 'left');
	$this->db->where('status', 2);
	$query = $this->db->get();
	return $query->num_rows();
}
function data_guru_by_id($id_guru){
	$this->db->select('*');
	$this->db->from('guru');
	$this->db->join('jabatan_guru', 'guru.id = jabatan_guru.id_guru', 'left');
	$this->db->join('pendidikan_guru', 'guru.id = pendidikan_guru.id_guru', 'left');
	$this->db->join('profil_guru', 'guru.id = profil_guru.id_guru', 'left');
	$this->db->join('riwayat_mengajar_guru', 'guru.id = riwayat_mengajar_guru.id_guru', 'left');
	$this->db->where('guru.id', $id_guru);
	$query = $this->db->get();
	return $query;
}


	

}

/* End of file Mdl_guru.php */
/* Location: ./application/models/Mdl_guru.php */