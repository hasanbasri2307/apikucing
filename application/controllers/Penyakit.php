<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';

class Penyakit extends REST_Controller {

	private $_data = array ();

	public function __construct(){
		parent::__construct();
		$this->load->model('penyakitmodel','c');

	}

	public function penyakit_get(){
		try {
			$this->_data['penyakit'] = $this->c->get_penyakit();
			$this->_data['status'] = true;

			$this->response($this->_data,200);

		} catch (Exception $e) {
			$this->_data['status'] = false;
			$this->response($this->_data,500);
		}
	}

	public function detail_get(){
		try {
			$id = $this->get('id');
			$this->_data['penyakit'] = $this->c->detail_penyakit($id);
			$this->response($this->_data,200);

		} catch (Exception $e) {
			$this->_data['status'] = false;
			$this->response($this->_data,500);
		}
	}


}