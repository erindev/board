<?php
include_once "./inc/header.php";
include_once "./inc/db_connect.php";

	$no = $_GET['no'];

	$title = $_POST['title'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$content = $_POST['content'];

	$sql = "select pass from multiboard where no='$no'";
	$result = mysqli_query( $con, $sql ) or die ( mysqli_error() );
	$row2 = mysqli_fetch_array ( $result, MYSQLI_ASSOC );


	if ( $row2['pass'] == $pass )
	{ 
	/*	$sqlupdate = "insert into multiboard ( 'title', 'name', 'email', 'pass', 'content')
				values ( '$title', '$name', '$email', '$pass', '$content')";
		$result = mysqli_query ( $con, $sqlupdate );*/

		mysqli_query( $con, "update multiboard
							SET name='$name', title='$title', content='$content', email='$email'
							where no='$no'" ) or die (mysqli_error($con));
		
		echo "<script>alert('수정완료');</script>";
		echo "<meta http-equiv='refresh' content='0; url=./04_board_detail.php?no=$no'/>";}

	else { echo "<script>alert('비밀번호를 확인해주세요'); history.go(-1); </script>"; }

	mysqli_free_result($result);
	mysqli_close($con);
/*	else
	{ echo "history.back(-1)";}*/
	//비밀번호를 sql 구문으로 찾아오기
	// 만약 사용자가 이전 번호가 같다면 수정 가능하게 업데이트 된 화면을 볼 수 있게 board_detail.php로 넘기기
	// 비밀번호가 일치하지 않으면 다시 수정폼으로 넘어가게.
	
?>