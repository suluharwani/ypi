<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_Peserta extends CI_Model {

public $_table = 'peserta';
    var $column_order = array('id','id','kategori_lomba','jersey','ada_bukti','no_daftar','nama','ktp','status','id','id'); //set column field database for datatable orderable
    var $column_search = array('no_daftar','nama','ktp'); //set column field database for datatable searchable
    var $order = array('id' => 'desc'); // default order

    function __construct() {
        parent::__construct();
    }



    //// data tables query //////
    private function _get_datatables_query()
    {

        $this->db->from($this->_table);

        $i = 0;

        foreach ($this->column_search as $item) // loop column
        {
            if($_POST['search']['value']) // if datatable send POST for search
            {

                if($i===0) // first loop
                {
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if(count($this->column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }

        if(isset($_POST['order'])) // here order processing
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        }
        else if(isset($this->order))
        {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
    function gambar($update_id){
        $query = $this->db->query("SELECT gambar FROM peserta where id=$update_id");
        return $query->result();
    }

    function count_filtered()
    {
        $this->_get_datatables_query();
        $this->_get_custom_field();
        $query = $this->db->get();
        return $query->num_rows();
    }

    function get_datatables()
    {
        $this->_get_datatables_query();
        $this->_get_custom_field();
  

        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }
    function _get_custom_field()
    {
        if(isset($_POST['columns'][9]['search']['value']) and $_POST['columns'][9]['search']['value'] !=''){
            $this->db->where('status',$_POST['columns'][9]['search']['value']);
        }
    }

    public function count_all()
    {
        return $this->db->count_all_results('peserta'); 
    }
    public function delete_by_id($id)
    {
        $this->db->where('id', $id);
        $this->db->delete($this->_table);
    }


    public function metopem($id) 
    {
        $this->db->where('id', $id);
        $this->db->update('peserta', array('tipe_bayar' => $tipe_bayar));
    }

    public function konfirmasi($id)
    {
        $this->db->where('id', $id);
        $this->db->update('peserta', array('status' => 1));
    }
    public function batal_konfirmasi($id)
    {
        $this->db->where('id', $id);
        $this->db->update('peserta', array('status' => 2));
    }





function get_table() {
$table = "peserta";
return $table;
}

function get($order_by) {
$table = $this->get_table();
$this->db->order_by($order_by);
$query=$this->db->get($table);
return $query;
}

function get_with_limit($limit, $offset, $order_by) {
$table = $this->get_table();
$this->db->limit($limit, $offset);
$this->db->order_by($order_by);
$query=$this->db->get($table);
return $query;
}

function get_where($id) {
$table = $this->get_table();
$this->db->where('id', $id);
$query=$this->db->get($table);
return $query;
}

function get_where_custom($col, $value) {
$table = $this->get_table();
$this->db->where($col, $value);
$query=$this->db->get($table);
return $query;
}

function _insert($data) {
$table = $this->get_table();
$this->db->insert($table, $data);
}

function _update($id, $data) {
$table = $this->get_table();
$this->db->where('id', $id);
$this->db->update($table, $data);
}

function _delete($id) {
$table = $this->get_table();
$this->db->where('id', $id);
$this->db->delete($table);
}

function count_where($column, $value) {
$table = $this->get_table();
$this->db->where($column, $value);
$query=$this->db->get($table);
$num_rows = $query->num_rows();
return $num_rows;
}


function get_max() {
$table = $this->get_table();
$this->db->select_max('id');
$query = $this->db->get($table);
$row=$query->row();
$id=$row->id;
return $id;
}

function _custom_query($mysql_query) {
$query = $this->db->query($mysql_query);
return $query;
}



function peserta(){
	$id = $this->uri->segment(3); 
	$peserta = $this->db->get_where('peserta',array('id' => $id));
	return $peserta;
 }
 function kuota(){
    $id = $this->uri->segment(3); 
    $peserta = $this->db->get_where('persediaan',array('id' => $id));
    return $peserta;
 }

function admin(){
	$query = $this->db->order_by('id','DESC')->get('peserta');
	return $query->result();
}

function jumlah_peserta_5k_bayar(){
$query = $this->db->query("SELECT * FROM peserta where status=1 and kategori_lomba=1");
$total5k = $query->num_rows();
return $total5k;
}
function jumlah_peserta_10k_bayar(){
$query = $this->db->query("SELECT * FROM peserta where status=1 and kategori_lomba=2");
$total10k = $query->num_rows();
return $total10k;
}
function jumlah_peserta_21k_n_bayar(){
$query = $this->db->query("SELECT * FROM peserta where status=1 and kategori_lomba=3");
$total21kn = $query->num_rows();
return $total21kn;
}
function jumlah_peserta_21k_i_bayar(){
$query = $this->db->query("SELECT * FROM peserta where status=1 and kategori_lomba=4");
$total21ki = $query->num_rows();
return $total21ki;
}
function jumlah_peserta_42k_n_bayar(){
$query = $this->db->query("SELECT * FROM peserta where status=1 and kategori_lomba=5");
$total42kn = $query->num_rows();
return $total42kn;
}
function jumlah_peserta_42k_i_bayar(){
$query = $this->db->query("SELECT * FROM peserta where status=1 and kategori_lomba=6");
$total42ki = $query->num_rows();
return $total42ki;
}

//check pendaftaran
function check_daftar($dafta){
$query = $this->db->query("SELECT id FROM peserta where no_daftar=$dafta");
return $query->result();
}
function check_d($daftar){
    $this->db->select('id')->from('peserta')->where('no_daftar',$daftar);

     $query = $this->db->get();

     return $query->result();
}
 
//kuota peserta

function jumlah_kuota($kuota){
$query = $this->db->query("SELECT kuota FROM persediaan where kategori_lomba=$kuota");
return $query->result();

}
//kuota jersey

function jumlah_jersey($kuota){
$query = $this->db->query("SELECT * FROM persediaan where kategori_lomba=$kuota");
return $query->result();

}
//sisa ukuran jersey 
function jersey_5k_s(){
$query = $this->db->query("SELECT * FROM peserta where status=1 and jersey=1 and kategori_lomba=1");
$jersey1 = $query->num_rows();
return $jersey1;
}
function jersey_5k_m(){
$query = $this->db->query("SELECT * FROM peserta where status=1 and jersey=2 and kategori_lomba=1");
$jersey2 = $query->num_rows();
return $jersey2;
}
function jersey_5k_l(){
$query = $this->db->query("SELECT * FROM peserta where status=1 and jersey=3 and kategori_lomba=1");
$jersey3 = $query->num_rows();
return $jersey3;
}
function jersey_5k_xl(){
$query = $this->db->query("SELECT * FROM peserta where status=1 and jersey=4 and kategori_lomba=1");
$jersey4 = $query->num_rows();
return $jersey4;
}

function jersey_10k_s(){
$query = $this->db->query("SELECT * FROM peserta where status=1 and jersey=1 and kategori_lomba=2");
$jersey5 = $query->num_rows();
return $jersey5;
}
function jersey_10k_m(){
$query = $this->db->query("SELECT * FROM peserta where status=1 and jersey=2 and kategori_lomba=2");
$jersey6 = $query->num_rows();
return $jersey6;
}
function jersey_10k_l(){
$query = $this->db->query("SELECT * FROM peserta where status=1 and jersey=3 and kategori_lomba=2");
$jersey7 = $query->num_rows();
return $jersey7;
}
function jersey_10k_xl(){
$query = $this->db->query("SELECT * FROM peserta where status=1 and jersey=4 and kategori_lomba=2");
$jersey8 = $query->num_rows();
return $jersey8;
}

function jersey_21k_s(){
$query = $this->db->query("SELECT * FROM peserta where status=1 and jersey=1 and (kategori_lomba=3 or kategori_lomba=4)");
$jersey9 = $query->num_rows();
return $jersey9;
}
function jersey_21k_m(){
$query = $this->db->query("SELECT * FROM peserta where status=1 and jersey=2 and (kategori_lomba=3 or kategori_lomba=4)");
$jersey10 = $query->num_rows();
return $jersey10;
}
function jersey_21k_l(){
$query = $this->db->query("SELECT * FROM peserta where status=1 and jersey=3 and (kategori_lomba=3 or kategori_lomba=4)");
$jersey11 = $query->num_rows();
return $jersey11;
}
function jersey_21k_xl(){
$query = $this->db->query("SELECT * FROM peserta where status=1 and jersey=4 and (kategori_lomba=3 or kategori_lomba=4)");
$jersey12 = $query->num_rows();
return $jersey12;
}

function jersey_42k_s(){
$query = $this->db->query("SELECT * FROM peserta where status=1 and jersey=1 and (kategori_lomba=5 or  kategori_lomba=6) ");
$jersey13 = $query->num_rows();
return $jersey13;
}
function jersey_42k_m(){
$query = $this->db->query("SELECT * FROM peserta where status=1 and jersey=2 and (kategori_lomba=5 or  kategori_lomba=6)");
$jersey14 = $query->num_rows();
return $jersey14;
}
function jersey_42k_l(){
$query = $this->db->query("SELECT * FROM peserta where status=1 and jersey=3 and (kategori_lomba=5 or  kategori_lomba=6)");
$jersey15 = $query->num_rows();
return $jersey15;
}
function jersey_42k_xl(){
$query = $this->db->query("SELECT * FROM peserta where status=1 and jersey=4 and (kategori_lomba=5 or  kategori_lomba=6)");
$jersey16 = $query->num_rows();
return $jersey16;
}




}

/* End of file model.php */
/* Location: ./application/models/model.php */