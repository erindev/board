<?php
	header("Content-Type: text/html; charset=utf-8");

	include_once "./inc/db_connect.php";

	$userid= $_POST['userid'];   	$userpass = $_POST['userpass'];
	//// 5. DB에 데이터 확인하고 데이터가 비밀번호와 아이디가 맞는지 확인하기
	// 5-1)   members라는 테이블에서 id와 pass를 두개다 일치하는 데이터 가져오기
	// 5-2)   만약  id와 pass라는 데이터가 1개라면 로그인 성공
	$sql = "SELECT count(*) FROM members   WHERE   userid='$userid'  AND  userpass='$userpass'  ";
	$result = mysqli_query( $con ,   $sql );   // 테이블표
	$row = mysqli_fetch_array( $result ,  MYSQLI_NUM );  // 줄

	if(  $row[0] == 1 ){   
session_start();
						$_SESSION['userid']=$userid;
						$_SESSION['now']=$userid.date("Ymd His");
		echo "<script>alert('로그인에 성공했습니다.')</script>";
					   } // 데이터를 찾은칸
	else{   echo  "<script>
	                            alert('아이디와 비밀번호를 확인해주세요 .');
								history.go(-1);
					  </script>";
			
	}
	mysqli_free_result( $result );
	mysqli_close( $con  );
	echo "<meta  http-equiv='refresh'  content='0;  url=/board/01_board.php' />";
?>