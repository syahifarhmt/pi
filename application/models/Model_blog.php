<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_blog extends CI_Model {

	function get($table){
		return $this->db->get($table)->result();
	}
	function get_where(){
		return $this->db->query("SELECT * FROM berita WHERE status = 1")->result();
	}
	function get_detail($table,$id,$val){
		return $this->db->get_where($table,array($id => $val))->row();
	}
	function insert($table,$data){
		return $this->db->insert($table,$data);
	}
}