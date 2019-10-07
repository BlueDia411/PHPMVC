<?php 
class Mahasiswa_model{

	private $table = 'mahasiswa';
	private $db;

	public function __construct(){
		$this->db = new Database;
	}

	public function getAllMahasiswa(){
		$this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
		$this->stmt->execute();
		return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
	}
}