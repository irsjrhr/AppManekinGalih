<?php 

class Manekin extends CI_Controller{

	public function __construct(){
		parent::__construct();
	}
	public function index(){
		$data = [];
		$data['param_gender'] = "men";
		$this->load->view('Manekin/header', $data);
		$this->load->view('Manekin/index', $data);
		$this->load->view('Manekin/footer', $data);
	}

}
