<?php namespace Hajiphp\Myapi;

class client {
	
	public function json(array $array) {
		header('Content-Type: application/json; charset=UTF-8');
		echo json_encode($array, JSON_PRETTY_PRINT);
		
	}
}