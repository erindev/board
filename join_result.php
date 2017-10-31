<?php	
include_once "./inc/header.php";
include_once "./inc/db_connect.php";

$useremail = $_GET['userdata'];
$sql = "select * from members where useremail='$useremail'";
$result = mysqli_query($con, $sql);
$row=mysqli_fetch_array($result, MYSQLI_ASSOC);
	

?>

						<h3> 회원정보 </h3>
							<div  id="result">
									<div>
										<span  class="label">아이디</span>
										<span  class="resultshow"><?php 	echo   $row['userid'];?></span>
									</div>
									<div>
										<span  class="label">비밀번호</span>
					<span  class="resultshow"><?=$row['userpass'];?></span>
				</div>
				
				<div>
					<span  class="label">이름</span>
					<span  class="resultshow"><?=$row['username'];?></span>
				</div>
				<div>
					<span  class="label">이메일</span>
					<span  class="resultshow"><?=$row['useremail'];?></span>
				</div>
				<div>
					<span  class="label">MOBILE</span>
					<span  class="resultshow"><?=$row['userphone'];?></span>
				</div>			
				<div>
					<span  class="label">가입날짜</span>
					<span  class="resultshow"> <?=$row['userdate'];?></span>
				</div>	
		</div>				
<?php
		include_once "./footer.php"
		?>
