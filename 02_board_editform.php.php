<?php

include_once "./inc/header.php";
include_once "./inc/db_connect.php";


	$no = $_GET['no'];

	$sql = "select * from multiboard where no='$no'";

	$result = mysqli_query ( $con, $sql) or die ( mysqli_error($con) );
	$row = mysqli_fetch_array ( $result, MYSQLI_ASSOC);

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

	body{font-size:90%; font-family:"Malgun Gothic", dotum, sans-serif; color:#000; background-color:#eee;}
	a:link, a:visited {color:#000; text-decoration:none;}
	a:hover, a:focus {color:#f00; text-decoration:underline;}

	.basic{width:80%; background-color:#fff; margin:auto;}
	h3 { padding-left:10px; border-left:10px solid orange;}
	table {width:90%;}
	caption {text-indent: -9999px;}
	thead { background-color:#eee; color:red; font-weight:bold;}
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
</script>
</head>
<body>
	<div class="basic">
		<h4>QNA</h4>
		<form action="./05_board_edit.php?no=<?=$no?>" method="post">
			<table id="peopleTable" summary="PHP MYSQ. 멀티게시판제작">
				<caption>QNA WRITE</caption>
				<colgroup>
					<col width="30%"/>
					<col width="*"/>
				</colgroup>
				<thead>
					<tr>
						<th scope="col" colspan="2">글쓰기</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row"><label for="title">제목</label></th>
						<td><input type="text" name="title" id="title" value="<?=$row['title']?>"/></td>
					</tr>
					<tr>
						<th scope="row"><label for="name">이름</label></th>
						<td><input type="text" name="name" id="name" value="<?=$row['name']?>" readonly/></td>
						<!-- 수정못하게 하려면 readonly 보통 일반적으로 이름은 수정이 안됨-->
					</tr>
					<tr>
						<th scope="row"><label for="email">이메일</label></th>
						<td><input type="text" name="email" id="email" value="<?=$row['email']?>"/></td>
					</tr>
					<tr>
						<th scope="row"><label for="pass">비밀번호</label></th>
						<td><input type="text" name="pass" id="pass"/><span>* 수정, 삭제시 필수!</span></td>
					</tr>
						<!-- 비밀번호는 고객님이 직접 입력할 수 있도록 한다. 빈칸으로 비워두기?--> 
					<tr>
						<th scope="row"><label for="content">내용</label></th>
						<td><textarea name="content" id="content" rows="5" cols="56"><?=$row['content']?></textarea></td>
					</tr>
					<tr class="menubars">
						<td colspan="@">
							<input type="submit" value="저장"/>
							<input type="reset" value="다시쓰기"/>
							<input type="button" value="목록" onclick="history.back(-1)" />
						</td>
					</tr>
				</tbody>
			</table>
		</form>
	</div>
</body>
</html>