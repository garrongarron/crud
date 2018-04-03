<?php
namespace dafiti;

class DB
{
	public function __construct(){
	}

	public function getAll(){
		if(!isset($_SESSION)){
			return [];
		}
		return $_SESSION;
	}

	public function add($data){
		$_SESSION['dafiti_'.$data['id']] = $data;
		return 'Adding data id = ' . $data['id'];
	}

	public function delete($data){
		unset($_SESSION['dafiti_'.$data['id']]);
		return 'Delete data id =' . $data['id'];
	}

	public function edit($data){
		$_SESSION['dafiti_'.$data['id']] = $data;
		return 'Edit data id = ' . $data['id'];
	}
}