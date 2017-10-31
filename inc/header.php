<?php
	include_once "./inc/db_connect.php";
session_cache_expire(10);
session_start();
?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="UTF-8"/>
<title>TMPT2</title>

<style type="text/css">
	*{margin:0; padding:0;}
	li{list-style:none;}
	img{border:0 none;}
	.hidden {font-size:0; position:absolute; left:-9999%; height:0; line-height:0; text-indent: -9999%;}
	body{    font-size: 90%;
    font-family: "Malgun Gothic", dotum, sans-serif;
    color: #000;
    background-color: #eee;
    background: url(./img/visual1.jpg) no-repeat;
    background-size: cover;}
	a:link, a:visited {color:#000; text-decoration:none;}
	a:hover, a:focus {color:#f00; text-decoration:underline;}
	.m_content {margin-top:80px;    margin-left: 27%;}
	.basic{width:80%; background-color:#ececec; margin:50px auto; }
	#infoMenu {overflow:hidden; float: right;
    margin-bottom: 20px;  }
	#infoMenu li { float:left; width:150px; height:35px; border-right:2px solid gray;    text-align: center;
    line-height: 35px;
    font-size: 16px;
    font-weight: bold;}
	h3 {text-align: center; height:80px; line-height:80px; font-size:30px;}
	h4 { font-size:20px; height:50px; line-height:50px;}
	fieldset {border:0;}
	fieldset p { overflow:hidden; margin:5px 0;}
	label {display:block; width:100px; height:35px; line-height:35px; float:left;}
	input[type='text'], input[type='password'], input[type='email'] {display:block; width:150px; height:35px; line-height:35px; float:left;}
	input[type='button'], input[type='submit'], input[type='reset'] {display:block; width:150px; height:35px; line-height:35px; float:left;}
	
	#peopleTable input[type='text'],#peopleTable input[type='password'],#peopleTable input[type='email'] , #peopleTable textarea {width:100%; display:block;}
	
	table {width:90%;     margin: auto; text-align: center;}
	th { height:50px; line-height:50px; background-color:#637aaf; color:#eee; font-size:16px;}
	td { height:40px; line-height:40px; font-size:16px;}
	tr {}
	caption {text-indent: -9999px;}
	thead { background-color:#eee; color:red; font-weight:bold;}
	#footer {margin-bottom:20px;}

	.menubars td>a, .menubars td input[type='button'] {    display: block;
    width: 20%;
    margin: auto;
		font-size: 18px;
    height: 35px;
    line-height: 35px;
    background-color: darkcyan;
    color: #eee;
    font-weight: bold;
    box-shadow: 1px 1px 5px grey;}
	.btn {overflow: hidden;     width: fit-content;
    margin: auto;
    padding-top: 30px;
}
	.menubars td input[type='text'] {height:35px; line-height:35px; margin-right:10px;}
	.btn li {float:left; margin:0 10px; border:1px solid gray; width:120px; height:30px; line-height:30px; font-weight:bold;}
	.btn li a {display:block; width:100%; height:100%; text-align: center;}
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
</script>
</head>
<body>
	<div class="basic">

		<h3>게시판</h3>
		<ul   id="infoMenu">
			<li><a href="/board/01_board.php"   title="홈페이지 메인 바로가기"> home</a></li>	


			<?php
				//1.만약 세션이 없다면 login과 join로 넘기기
				if ( empty($_SESSION['userid']) ){ ?>
				
					<li><a href="/board/login.php"    title="로그인페이지 바로가기" > login</a></li>
					<li><a href="/board/join.php"    title="회원가입페이지 바로가기" > join</a></li>
				
				<!-- //  만약 세션이 있다면 span 안에 *** 님 환영합니다 + logout 가능하게 -->
			<?php
				} else { ?>
			<li><span  style="color:#ff0099"><?=$_SESSION['userid']?></span>님 환영합니다.</li>
				<li>
					<a href="/board/logout.php" title="로그아웃페이지 바로가기"  style="color:#f00">logout </a>
					</li>
			<?php	} ?>
				
		</ul><!--보조메뉴-->

