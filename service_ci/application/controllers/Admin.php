<?php
class Admin extends CI_Controller {

	public function __construct() {
		parent::__construct();
		header('Content-Type: application/json');
		$this->load->model('User_model');
		$this->load->model('Level_model');
		$this->load->model('Course_model');
		$this->load->model('Lesson_model');
		$this->load->model('LessonMedia_model');
	}

	private function send_response( $data_result = [], $status = 200) {
		http_response_code($status);

		// $result = [
		// 	"status" => bool,
		// 	"msg" => "",
		// 	"data" => [],
		// ];

		echo json_encode($data_result);
		exit;
	}
    //++++ Level
	public function level(){
		$http_method = $_SERVER['REQUEST_METHOD'];
		switch ( $http_method ) {
			case 'GET':
			$this->get_level();
			break;
			case 'POST':
			$this->add_level();
			break;
		}
	}
	public function get_level() {
		$data = $this->Level_model->get_many([]);
		$this->send_response( $data, 200 );
	}
	public function add_level() {
		$result = $this->Level_model->tambah();
		$this->send_response( $result, 200 );
	}

    //++++ User Account
	public function account(){
		$http_method = $_SERVER['REQUEST_METHOD'];
		switch ( $http_method ) {
			case 'GET':
			$this->get_account();
			break;
			case 'POST':
			$this->add_account();
			break;
		}
	}
	public function get_account() {
		$data = $this->User_model->get_many([]);
		$this->send_response( $data, 200 );
	}
	public function add_account() {
		$result = $this->User_model->tambah();
		$this->send_response( $result, 200 );
	}

    //++++ Course
    //Route 
	public function course(){
		$http_method = $_SERVER['REQUEST_METHOD'];
		switch ( $http_method ) {
			case 'GET':
			$this->get_course();
			break;
			case 'POST':
			$this->add_course();
			break;
		}
	}
	public function get_course() {
		$data = $this->Course_model->get_many([]);
		$this->send_response($data, 200);
	}
	public function add_course() {

		$result = $this->Course_model->tambah();
		$this->send_response($result, 200);
	}


    //++++ Lesson
	public function lesson(){
		//Melakukan filter daari http request yag dilakukan dan akan mengarahkannya ke method terkait 
		$http_method = $_SERVER['REQUEST_METHOD'];
		switch ( $http_method ) {
			case 'GET':
			$this->get_lesson();
			break;
			case 'POST':
			$this->add_lesson();
			break;
		}
	}
	public function get_lesson() {
		$data = $this->Lesson_model->get_many([]);
		$this->send_response( $data, 200 );
	}
	public function add_lesson() {
		$result = $this->Lesson_model->tambah();
		$this->send_response( $result, 200 );
	}
	public function update_attendance_status($id_lesson) {
		$result = $this->Lesson_model->update_status_absensi($id_lesson);
		$this->send_response( $result, 200 );
	}

    //++++ Lesson Media
	public function lesson_media(){
		$http_method = $_SERVER['REQUEST_METHOD'];
		switch ( $http_method ) {
			case 'GET':
			$this->get_lesson_media();
			break;
			case 'POST':
			$this->add_lesson_media();
			break;
		}
	}
	public function get_lesson_media() {
		$data = $this->LessonMedia_model->get_many([]);
		$this->send_response( $data, 200 );
	}
	public function add_lesson_media() {
		$id_lesson = $this->input->post('id_lesson');
		$result = $this->LessonMedia_model->tambah($id_lesson);
		$this->send_response( $result, 200 );
	}
}
