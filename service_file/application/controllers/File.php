<?php 
class File extends CI_Controller {

	public function __construct() {
		parent::__construct();

		//Melakukan load model terkait controller
		$this->load->model('File_model');

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
		$data = $this->File_model->get_many([]);
		$this->Base_model->send_response($data, 200);
	}
	public function post() {
		$tambah_file = $this->File_model->tambah();
		$this->Base_model->send_response($tambah_file, 200);
	}

}
