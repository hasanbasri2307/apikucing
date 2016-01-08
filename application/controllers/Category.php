<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';

class Category extends REST_Controller {

	private $_data = array ();

	public function __construct(){
		parent::__construct();
		$this->load->model('categorymodel','c');

	}

	public function category_get(){
		try {
			$this->_data['category'] = $this->c->get_category();
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
			$this->_data['category'] = $this->c->detail_category($id);
			$this->response($this->_data,200);

		} catch (Exception $e) {
			$this->_data['status'] = false;
			$this->response($this->_data,500);
		}
	}


}