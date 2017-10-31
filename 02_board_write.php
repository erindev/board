<?php

include_once "./inc/header.php";
include_once "./inc/db_connect.php";
	?>
	<div class="basic">
		<h3>QNA</h3>
		<form action="./03_board_insert.php" method="post">
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
						<td><input type="text" name="title" id="title"/></td>
					</tr>
					<tr>
						<th scope="row"><label for="name">이름</label></th>
						<td><input type="text" name="name" id="name"/></td>
					</tr>
					<tr>
						<th scope="row"><label for="email">이메일</label></th>
						<td><input type="text" name="email" id="email"/></td>
					</tr>
					<tr>
						<th scope="row"><label for="pass">비밀번호</label></th>
						<td><input type="text" name="pass" id="pass"/><span>* 수정, 삭제시 필수!</span></td>
					</tr>
					<tr>
						<th scope="row"><label for="content">내용</label></th>
						<td><textarea name="content" id="content" rows="5" cols="56"></textarea></td>
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
		
<?php
		include_once "./footer.php"
		?>