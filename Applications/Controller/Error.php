<?php 
class Error extends Controller{
	function __construct(){
		echo "inside error";
	}
	

	function Index(){
		echo '<h1>403 <br/>Unable to Access</h1><h6>Requested page not found!!!</h6>';
	}
}