<?php

	
	$con = mysqli_connect("localhost", "root", "", "lifestylestore")or die($mysqli_error($con));
	
	// session_start();

	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
