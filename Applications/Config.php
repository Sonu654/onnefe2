<?php 
	define('baseurl','/ONNEFE2');
	//define('preSession','onnefe');         //Session Prefix
	//define('preCookies','onnefe');         //Cookies Prefix	
	date_default_timezone_set('Asia/Calcutta');
	require_once('Config/App.php');
	require_once('Config/Controller.php');
	require_once('Config/Model.php');
	require_once('Config/View.php');
	require_once('Config/Load.php');
	require_once('Config/Session.php');
	require_once('Config/selectDB.php');
	require_once('Config/insertDB.php');
	require_once('Config/UpdateDB.php');
	require_once('Config/database.php');
	require_once('Config/db.php');
	$app=new App();