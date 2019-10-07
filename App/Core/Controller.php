<?php 

class Controller {
	public function view($view, $data = []){
		require_once '../App/Views/' . $view . '.php';
	}
}