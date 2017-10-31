<?php
	
	include_once "./inc/header.php";
include_once "./inc/db_connect.php";

	$username = $_POST['username'];   	$userid = $_POST['userid'];
	$userpass = $_POST['userpass'];     	$useremail = $_POST['useremail'];
	$userphone = $_POST['userphone']   . $_POST['userphone2']  . $_POST['userphone3'] ;
	$sql = "INSERT INTO  members  ( username , userid ,  userpass ,  useremail , userphone , userdate )  
		   VALUES   ( '$username' , '$userid' ,  '$userpass' ,  '$useremail' , '$userphone'  , now()  )";
	$result = mysqli_query( $con ,  $sql  )  or  die( mysqli_error(  $con)  );
	mysqli_close(  $con );

	echo "<meta http-equiv='refresh'  content='0; URL=./join_result.php?userdata=$useremail'   />";
?>
