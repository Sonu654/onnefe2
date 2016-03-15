<?php 
	class ONNEFE extends Controller{
		function Index(){
			$this->load->view('Header',['title'=>'ONNEFE 2.0']);
			$this->load->view('Index',['category'=>$this->db->selectFieldsWhere('category',['category_id,category_name'],'isActive=1')]);	
			$this->load->view('footer');	
		}

		function test(){
			$this->load->view('Header',['title'=>'Test']);
			$this->load->view('footer');
		}
	}