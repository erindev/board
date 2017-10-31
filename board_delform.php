<?php
include_once "./inc/header.php";
include_once "./inc/db_connect.php";
echo "<script src='./js/main.js'></script>";
?>

 <div class="basic">
	<h3>데이터 삭제 비밀번호 확인</h3>
	<form  action="./board_delete.php?no=<?=$_GET['no']?>"  method="post"   id="delform">
		<fieldset>
		   <legend> 비밀번호확인</legend>
			  <p>
				    <label for="pass">	비밀번호 </label>
					<input type="password"   id="pass" name="pass"  size="10"  maxlength="8"/>
					<input  type="submit"  value="확인"/>
					<input  type="reset"    value="취소"   onclick="history.back(-1)"/>
			  </p>
		</fieldset>
	</form>
</div>
<?php
		include_once "./footer.php"
		?>