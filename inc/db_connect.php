<?php

	header("Content-type:text/html; charset=utf-8");


	session_cache_expire(10);
	session_start();

	$con = mysqli_connect("localhost","yjkang3530","k1142002","yjkang3530");
	if ( mysqli_connect_errno() ) { echo "실패" . mysqli_connect_error(); exit(); }
	//else { echo "성공";}

	mysqli_set_charset( $con, "utf8");

?>