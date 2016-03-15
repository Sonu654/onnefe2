<?php 
	interface Update{
		function updateField($field,$table,$value,$cond);
	}