<?php
	$con = mysqli_connect("localhost","root","");
		if(!$con){
			die("Error" .mysqli_error());
		}
		
	$select_db = mysqli_select_db($con,"blog");
	
	