<?php

include_once "./inc/header.php";
include_once "./inc/db_connect.php";
	
?>
<div class="m_content">
	<h4>로그인 ></h4>
	<form action="./login_process.php" method="post"  id="loginform"  name="loginform" >
		<fieldset>
		<legend class="hidden">LOGIN ></legend>
			<p>
				<label for="userid"> 아이디</label>
				<input type="text"  id="userid"  name="userid"  maxlength="15"/>
<!--				<span><input type="checkbox"  id="logincheck" name="logincheck"/><label for="logincheck">아이디저장</label></span>-->
			</p>
			<p  class="bt_border">
				<label for="userpass"> 비밀번호 </label>
				<input type="password" id="userpass" name="userpass" maxlength="15"/>
			</p>
			<ul  class="menu_btn" >
				<li><input type="submit"  value="로그인"    style="cursor:pointer;"/></li>
				<li><input type="button"  value="회원가입"   /></li>
				<li><input type="button"  value="아이디/비밀번호찾기"   /></li>
			</ul>
		</fieldset>
	</form>
</div>
<?php
		include_once "./footer.php"
		?>
