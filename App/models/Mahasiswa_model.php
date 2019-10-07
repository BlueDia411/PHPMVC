<?php 
class Mahasiswa_model{
	private $mhs = [
		[
			"nama" => "Yogi Nugraha",
			"nrp" => "173040001",
			"email" => "yoginugraha43@unpas.ac.id",
			"jurusan" => "Teknik Informatika"
		],
		[
			"nama" => "Erdika",
			"nrp" => "173040002",
			"email" => "Erdika@unpas.ac.id",
			"jurusan" => "Teknik Informatika"
		],
		[
			"nama" => "Michael",
			"nrp" => "173040005",
			"email" => "Michael@unpas.ac.id",
			"jurusan" => "Teknik Informatika"
		]
	];
	public function getAllMahasiswa(){
		return $this->mhs;
	}
}