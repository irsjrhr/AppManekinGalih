<?php 

class Landing extends CI_Controller{

	public function __construct(){
		parent::__construct();
	}

	public function view( $page, $data ){
		$data_nav = [
			["menu" => "Beranda", "link" => base_url() . "#"],
			["menu" => "Cara Kerja", "link" => base_url() . "#step"],
			["menu" => "Kontak Kami", "link" => base_url() . "#contact"],
			["menu" => "Tentang Kami", "link" => base_url() . "Landing/tentang"],
			["menu" => "Katalog", "link" => base_url() . "Landing/katalog"],
			["menu" => "Tim", "link" => base_url() . "Landing/tim"],
		];
		$data_katalog = [ 
			[ "img" => base_url()."asset/gam/classic_cut.jpg","judul" => "Classic Cut", "deskripsi" => "Potongan rambut klasik dengan teknik tradisional yang sudah terbukti. Cocok untuk gaya formal dan kasual dengan hasil yang timeless dan elegan.", "harga" => "50000" ],
			[ "img" => base_url()."asset/gam/3d.png","judul" => "3D Hair Design", "deskripsi" => "Pengalaman virtual hair styling dengan teknologi 3D terdepan. Coba berbagai model rambut secara real-time sebelum memutuskan potongan.", "harga" => "75000" ],
			[ "img" => base_url()."asset/gam/pijet.jpg","judul" => "Styling+Keramas+Pijet", "deskripsi" => "Layanan styling premium dengan treatment khusus, produk berkualitas tinggi, dan teknik styling terbaru untuk hasil yang maksimal.", "harga" => "10000" ],
		];
		$data_layanan = [ 
			[ "img" => base_url()."asset/gam/logo.png","judul" => "Hair Wash & Treatment", "deskripsi" => "Perawatan rambut lengkap dengan shampo premium, kondisioner, dan treatment khusus untuk kesehatan rambut.", "harga" => "25000" ],
			[ "img" => base_url()."asset/gam/hairtonik.jpg","judul" => "Beard Styling", "deskripsi" => "Penataan jenggot profesional dengan berbagai pilihan model sesuai bentuk wajah dan preferensi pribadi.", "harga" => "30000" ],
			[ "img" => base_url()."asset/gam/logo.png","judul" => "Hair Consultation", "deskripsi" => "Konsultasi profesional untuk menentukan gaya rambut yang tepat sesuai bentuk wajah dan karakteristik rambut.", "harga" => "0" ],
		];

		$data['data_nav'] = $data_nav;
		$data['data_katalog'] = $data_katalog;
		$data['data_layanan'] = $data_layanan;
		$data['wa'] = "";
		$this->load->view('Landing/header', $data);
		$this->load->view($page, $data);
		$this->load->view('Landing/footer', $data);
	}
	public function index(){
		$data = [];
		$this->view('Landing/index', $data);
	}
	public function katalog(){
		$data = [];
		$this->view('Landing/katalog', $data);
	}
	public function tentang(){
		$data = [];
		$this->view('Landing/tentang', $data);
	}
	public function tim(){
		$data = [];
		$this->view('Landing/tim', $data);
	}

}


?>