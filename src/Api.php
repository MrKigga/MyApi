<?php namespace Hajiphp\Myapi;

class Api extends Client{
	
	public function index($data) {
		return $this->json($data);
	}
}
