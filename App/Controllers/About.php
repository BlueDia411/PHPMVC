<?php 
class About{
	public function index($nama = Yogi, $pekerjaan = Mahasiswa){
		$this->view('about/index');
	}
	public function page(){
		$this->view('about/page');
	}
}