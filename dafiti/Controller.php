<?php
namespace dafiti;

class Controller
{
	public $db;
	public function __construct($database = null){
		if($database == null){
			$this->db = new DB();	
		} else {
			$this->db = $database;
		}
	}	

	function add($data)
	{
		return $this->db->add($data);
	}

	function edit($data)
	{
		return $this->db->edit($data);
	}

	function delete($data)
	{
		return $this->db->delete($data);
	}

	function list()
	{
		return $this->db->getAll();
	}
}