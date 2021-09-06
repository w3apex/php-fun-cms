<?php
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db   = 'batch_three_cms';

	// Create connection
	$conn = new mysqli($host, $user, $pass, $db); //Dynamic

	// Check connection
	if ($conn->connect_error) {
	    die('<p style="color:red;">ERROR: Could not connect. '.$conn->connect_error.'</p>');
	}

