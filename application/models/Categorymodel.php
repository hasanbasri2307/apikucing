<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Categorymodel extends CI_Model {

	private $_table = "category";

	public function __construct(){
		parent::__construct();
	}

	public function get_category(){
		$q = $this->db->get($this->_table)->result_array();
		return $q;
	}

	public function detail_category($id){
		$this->db->where('id_category',$id);
		$q = $this->db->get($this->_table)->row_array();
		return $q;
	}
}