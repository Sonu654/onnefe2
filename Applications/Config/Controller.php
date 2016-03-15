<?php 

class Controller{
	function __construct(){
		$this->load=new  Load();
		$this->db=new db();
		$this->set=new Set();
	}

	function Index(){
		$this->Error();
	}

	function Error(){
		$this->load->view('error 403');
	}
}