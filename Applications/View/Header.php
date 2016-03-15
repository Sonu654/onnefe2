<?php

?>
<!DOCTYPE html>
	<html>
		<head>
			<title><?php echo $data['title'];?></title>
			<script type="text/javascript">
				baseurl=<?php echo baseurl; ?>;
			</script>
			<link type="text/css" rel="stylesheet" href="<?php echo baseurl; ?>/Assets/CSS/bootstrap.min.css"/>
			<link type="text/css" rel="stylesheet" href="<?php echo baseurl; ?>/Assets/CSS/bootstrap-theme.css"/>
			<link type="text/css" rel="stylesheet" href="<?php echo baseurl; ?>/Assets/CSS/bootstrap-theme.min.css"/>
			<link type="text/css" rel="stylesheet" href="<?php echo baseurl; ?>/Assets/CSS/bootstrap.css"/>
			<link type="text/css" rel="stylesheet" href="<?php echo baseurl; ?>/Assets/CSS/myStyle.css"/>
			<link type="text/css" rel="stylesheet" href="<?php echo baseurl; ?>/Assets/CSS/bootstrap.css.map"/>
			<link type="text/css" rel="stylesheet" href="<?php echo baseurl; ?>/Assets/CSS/bootstrap-theme.css.map"/>
			<script type="text/javascript" src="<?php echo baseurl; ?>/Assets/JS/bootstrap.js"></script>
			<script type="text/javascript" src="<?php echo baseurl; ?>/Assets/JS/bootstrap.min.js"></script>
			<script type="text/javascript" src="<?php echo baseurl; ?>/Assets/JS/jquery-2.2.1.js"></script>
			<script type="text/javascript" src="<?php echo baseurl; ?>/Assets/JS/npm.js"></script>
			<script type="text/javascript" src="<?php echo baseurl; ?>/Assets/JS/myJquery.js"></script>
			<script type="text/javascript">
				var myVar = setInterval(myTimer, 1000);
				function myTimer() {
    				var d = new Date();
   					document.getElementById("time").innerHTML = d.toLocaleTimeString();
				}
			</script>
			<style type="text/css">
				#timerSection{
					position: absolute;
					bottom: 0;
				}

		        #date, #time{
		        	color:red;
		        	text-align:right;
				}

				#center{
					margin-top: 120px;					
				}
			</style>
		</head>
		<body>
			<div class="navbar navbar-inverse navbar-fixed-top" id="header">
					<div class="col-sm-3" style="border:solid; height:100px;"></div>
					<div class="col-sm-7"></div>
						<div class="col-sm-2" id="timmer" style="border:solid; height:100px;">
							<div id="timerSection">
							<div class="row" id="date"><?php echo date('D, M d,Y');?></div>
							<div class="row" id="time"></div>
						</div>
					</div>
			</div>
			<div class="container" id="center">

