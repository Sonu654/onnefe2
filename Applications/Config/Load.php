<?php 
	class load Implements Model, View{
		function __construct(){
	
		}

		function Model($model){
			require_once('Applications/Model/'.$model.'.php');
			return new $model;
		}

		
		function View($view,$data=''){
			require_once('Applications/View/'.$view.'.php');
		}

		

		
	}