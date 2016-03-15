<?php 
	class Set implements Session, Cookies{

		function __construct(){
		//	$this->setCookies('',''); 
		}

		function setCookies($name,$value,$expirary=360000,$path='/',$domain='',$security=0){
		//	echo $expirary+=time();
		}

		function delCookies(){

		}
	
}