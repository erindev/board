<?php
include_once "./inc/header.php";
include_once "./inc/db_connect.php";

	//4 삭제할 번호 넘겨받기, 비밀번호 넘겨받기
	$no = $_GET['no'];
	$userpass = $_POST['pass'];
	echo $userpass;

	//5 $sql 구문 작성: 삭제할 번호의 비밀번호 넘겨받기
	$sql =" select pass from multiboard where no='$no'";

	
	$result = mysqli_query ( $con , $sql ) or die (mysqli_error($con));
	$row = mysqli_fetch_array ( $result, MYSQLI_NUM);

	//6 만약 4에서 사용자가 입력한 비번($_POST('pass'))과 5,db에서 뽑아온 데이터 같다면 삭제처리 / 삭제 알림창/ board.php로 이동
	if ( $userpass == $row[0] ) {
		echo "<script>alert('일치합니다. 삭제되었습니다');</script>";

		$deletesql = "delete from multiboard where no='$no'";
		$resultdelete = mysqli_query ( $con, $deletesql ) or die (mysqli_error($con));

		echo "<meta http-equiv='refresh' content='0; url=./01_board.php?no=$no'/>";
	} else { 
	//7 비밀번호가 다르다면 비밀번호를 확인해주세요 알림창
		echo "<script>alert('일치하지않습니다');  history.go(-1); </script>";
	}

	//db닫기
	mysqli_close($con);
?>