<?php
include_once "./inc/header.php";
include_once "./inc/db_connect.php";

?>
		<div class="m_content">
			<h4>JOIN</h4>
			<div class="subcontent  subtop">
				<p> <strong class="required">(*)</strong>은 필수입력사항입니다. </p>
				<form  action="./join_process.php"  method="post"   id="joinform">
					<fieldset  class="joinfield jf1">
					<legend >필수 입력 정보</legend>
						<p>
							<label for="username"><strong class="required">(*)</strong>이름</label> 
							<input type="text" name="username" id="username"  >
						</p>
						<p>
							<label for="userid"><strong class="required">(*)</strong>아이디</label> 
							<input type="text" name="userid" id="userid"  ><input type="button" value="중복확인" /><span>(아이디는 영문, 숫자 4~15자리)</span>
						</p>
						<p>
							<label for="userpass"><strong class="required">(*)</strong> 비밀번호 </label> 
							<input type="password" name="userpass" id="userpass"       >
							<span>(영문, 숫자 조합 10~20자리)</span>
						</p>
						<p>
							<label for="userpassre"><strong class="required">(*)</strong> 비밀번호 확인</label> 
							<input type="password" name="userpassre" id="userpassre"       >
						</p>
						<p><!-- select -->
							<label for="useremail"><strong class="required">(*)</strong> 이메일</label> 
							<input type="email" name="useremail" id="useremail"       >
						</p>
						<p><!-- select -->
							<label for="userphone">핸드폰</label>
							<input type="text" id="userphone" name="userphone">-<input type="text" id="userphone2" name="userphone2">-<input type="text" id="userphone3" name="userphone3">
						</p>
						<p><label for="post1">우편번호</label>
							<input type="text" id="post1" name="post1">-<input type="text" id="post2" name="post2"> <input type="button" value="우편번호검색" id="postcode">
						</p>
						<p  class="br_bottom">
							<label for="useraddress">상세주소</label>
							<input type="text" id="useraddress" name="useraddress"> <input type="text" id="useraddress2" name="useraddress2">
						</p>
						<ul  class="menu_btn" >
							<li><input type="button" value="이전" /></li>
							<li><input type="submit" value="확인" /></li>
						</ul>
					</fieldset> <!-- 필수 입력 정보  -->
				</form>
			</div>

<?php
		include_once "./footer.php"
		?>


