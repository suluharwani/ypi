<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_berita extends CI_Model {
public $_table = 'data_berita';
public $_table1 = 'admin';
    var $column_order = array(null, 'judul','isi','status','gambar','id_berita'); //set column field database for datatable orderable
    var $column_search = array('judul','isi','status','gambar','id_berita'); //set column field database for datatable searchable
    var $order = array('id_berita' => 'desc'); // default order

    function __construct() {
    	parent::__construct();
    }
    function data_berita(){
    	$id = $this->uri->segment(3); 
    	$data_berita = $this->db->get_where('data_berita',array('id' => $id));
    	return $data_berita;
    }

    //// data tables query //////
    private function _get_datatables_query()
    {
    	$this->db->select('*, admin.nama as nama_penulis');
    	$this->db->from('data_berita');
    	$this->db->join('admin' , 'data_berita.id_pengguna = admin.id', 'left');

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
    // function gambar($update_id){
    //     $query = $this->db->query("SELECT gambar FROM data_berita where id=$update_id");
    //     return $query->result();
    // }

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
    	if(isset($_POST['columns'][4]['search']['value']) and $_POST['columns'][4]['search']['value'] !=''){
    		$this->db->where('judul',$_POST['columns'][4]['search']['value']);
    	}
    }

    public function count_all_datatable()
    {
    	return $this->db->count_all_results('data_berita'); 
    }
    public function delete_by_id($id)
    {
    	$this->db->where('id_berita', $id);
    	$this->db->delete($this->_table);
    }
    //end datatable

    function get_table() {
    	$table = "data_berita";
    	return $table;
    }

    function get($order_by){
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

    function get_where($id){
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

    function _insert($data){
    	$table = $this->get_table();
    	$this->db->insert($table, $data);
    }

    function _update($id, $data){
    	$table = $this->get_table();
    	$this->db->where('id', $id);
    	$this->db->update($table, $data);
    }

    function _delete($id){
    	$table = $this->get_table();
    	$this->db->where('id_berita', $id);
    	$this->db->delete($table);
    }

    function count_where($column, $value) {
    	$table = $this->get_table();
    	$this->db->where($column, $value);
    	$query=$this->db->get($table);
    	$num_rows = $query->num_rows();
    	return $num_rows;
    }

    function count_all() {
    	$table = $this->get_table();
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

	

}

/* End of file Mdl_berita.php */
/* Location: ./application/models/Mdl_berita.php */