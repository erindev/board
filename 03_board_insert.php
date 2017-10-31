<?php

include_once "./inc/header.php";
include_once "./inc/db_connect.php";
	

	//04.데이터받아오기
	$title = $_POST["title"];
	$name = $_POST["name"];
	$email = $_POST["email"];
	$pass = $_POST["pass"];
	$content = $_POST["content"];
	$ip = $_SERVER['REMOTE_ADDR'];

	//05. 쿼리구문작성
	$sql = "insert into multiboard (title, content, pass, name, wdate, email, ip)
			values ( '$title', '$content', '$pass', '$name', now(), '$email', '$ip' )";

	//06. $result = mysqli_query 실행 
	$result = mysqli_query( $con , $sql ) or die ( mysqli_error($con) );
	
	
	//07. 글쓰기에 성공했다면 글쓰기에 성공했다고 알림창 / 실패 false, 성공시 true
	if ( $result ) { echo "<script>alert('글쓰기가 성공했습니다');</script>"; } //07

	//08. db닫기
	mysqli_close($con);
	
	//09. board.php로 넘어가기
	echo "<meta http-equiv='refresh' content='0; url=./01_board.php?metadata=$name'/>"
	

	//표로 받아올때만 free_result...
?>