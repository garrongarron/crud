<?php
namespace dafiti;

class DB
{
	public function __construct(){
	}

	public function getAll(){
		return [1,2,3,4];
	}

	public function add($data){
		return 'adding data' . print_r($data, 1);
	}

	public function delete($data){
		return 'delete data' . print_r($data, 1);
	}

	public function edit($data){
		return 'edit data' . print_r($data, 1);
	}
}