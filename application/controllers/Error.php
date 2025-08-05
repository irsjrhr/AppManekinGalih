<?php 

class Error extends Landing_controller{
	public function __construct(){
		parent::__construct();
	}
	public function index(){
		$data = [];
		$msg_err = $this->input->get('msg');
		echo $msg_err;
		$this->view('Error/index', $data);
	}
}
