<?php 
class About extends Controller {
	public function index($nama = 'Yogi', $pekerjaan = 'Mahasiswa', $umur = 20){
		$data['nama'] = $nama;
		$data['pekerjaan'] = $pekerjaan;
		$data['umur'] = $umur;
		$data['judul'] = 'About Me';
		$this->view('templates/header');
		$this->view('about/index', $data);
		$this->view('templates/footer');
	}
	public function page(){
		$this->view('templates/header', $data);
		$this->view('about/page');
		$this->view('templates/footer');

	}
}