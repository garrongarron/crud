<?php
namespace dafiti;

class Controller
{
	private $db;
	public function __consrtuct($database = null){
		if($database == null){
			$db = new DB();	
		} else {
			$db = $database;
		}
	}
	function add($data)
	{
		$db->add($data);
	}

	function edit($data)
	{
		$db->edit($data);
	}

	function delete($data)
	{
		$db->delete($data);
	}
}