<?php 
class Account extends CI_Controller {

	public function __construct() {
		parent::__construct();
			
		//Melakukan load model terkait controller
		$this->load->model('User_model');

		//Melakukan route untuk API
		header('Content-Type: application/json');
		$http_method = $_SERVER['REQUEST_METHOD'];
		switch ( $http_method ) {
			case 'GET':
			//Ketika methodnya GET 
			$this->get();
			break;
			case 'POST':
			//Ketika methodnya POST
			$this->post();
			break;
		}
	}
	public function index(){
		//Ini hanya sebagai prasyarat controller
	}
	public function get() {
		$data = $this->User_model->get_many([]);
		$this->Base_model->send_response($data, 200);
	}
	public function post() {
		$result = $this->User_model->tambah();
		$this->Base_model->send_response($result, 200);
	}
}
