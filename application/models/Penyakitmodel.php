<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Penyakitmodel extends CI_Model {

	private $_table = "penyakit";

	public function __construct(){
		parent::__construct();
	}

	public function get_penyakit(){
		$q = $this->db->get($this->_table)->result_array();
		return $q;
	}

	public function detail_penyakit($id){
		$this->db->where('id_penyakit',$id);
		$q = $this->db->get($this->_table)->row_array();
		return $q;
	}
}