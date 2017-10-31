<?php
	header("Content-type:text/html; charset=utf-8");

	session_start();
	session_destroy(); //세션파괴!
	echo "<script>alert('로그아웃되었습니다');</script>"
	echo "<meta http-equiv='refresh' content='0; url=./01_board.php'/>";
?>