<?php

include_once "./inc/header.php";
include_once "./inc/db_connect.php";
	


	$sql = "select * from multiboard";
	$result = mysqli_query($con,$sql) or die (mysqli_error($con)); // 표를 가져오는 것

	$rowCnt = mysqli_affected_rows( $con ); // 테이블 안에 데이터 전체 갯수를 알려줌.
	#echo "전체 개수 : " . $rowCnt;
	$cnt = 0;

	$reverOrder = "select * from multiboard order by no desc"; // 최신글을 맨 위로
	$result2 = mysqli_query( $con, $reverOrder ) or die (mysqli_error($con));
	
	
					
	
					

	
	//todo1 각각의 데이터 출력
	//todo2 반복해서 데이터 출력
	//todo3 데이터 정렬하는 법

/*	$name = $_GET['metadata'];
	$sql = "select * from multiboard where name='$name'";
	$result = mysqli_query( $con , $sql );
	$result_show = mysqli_fetch_array($result, MYSQLI_ASSOC);
	
	echo "<h3>". $result_show['email'] ."</h3>";*/
?>
<!-- #############################################header.php START###############################################3-->
	
		<table>
			<caption>QNA</caption>
			<colgroup>
				<col width="5%">
				<col width="*">
				<col width="20%">
				<col width="20%">
				<col width="5%">
			</colgroup>
			<thead>
				<tr>
					<th scope="col">번호</th>
					<th scope="col">제목</th>
					<th scope="col">글쓴이</th>
					<th scope="col">작성일</th>
					<th scope="col">조회</th>
				</tr>
				
			</thead>
			<tbody>
				
				<?php
				for ( $var = 0;  $var < $rowCnt ; $var++ )
				{	$row = mysqli_fetch_array ( $result2, MYSQLI_ASSOC);

				//또는 while ( $row = mysqli_fetch_array ( $result, MYSQLI_ASSOC); ) 이거 자체가 true임. true or null // 데이터 없으면 null을 던져줘서 알아서 나옴.
				?>
					<tr>
						<td><?=$rowCnt-$var?></td>
						<td><a href="./04_board_detail.php?no=<?=$row['no']?>"><?=$row['title']?></a></td>
						<td><?=$row['name']?></td>
						<td><?=$row['wdate']?></td>
						<td><?=$row['view']?></td>
					</tr>
				<?php
				}
				?>
				<!-- 있는 줄 수 만큼 반복.. -->
			
				<!-- 데이터삽입END -->
				<!-- 목록 화면에 보이기 -->
				<tr style="text-align:center">
					<td colspan="5">
					</td>
				</tr>
				<tr class="menubars">
					<td colspan="5">
						<a href="./02_board_write.php"> 글쓰기</a>
					</td>
				</tr> 
				<tr class="menubars">
				<td colspan="5">


								
								<input type="text" name="search" id="search" />
								<input type="button" value="검색" id="search_go">
						<script>
							$(function(){
								$("#search_go").click(function(){



									$.ajax({
										url: "./inc/search_process.php",
										type:"get",
										data:{"now_search": $("#search").val() },
										dataType:"text",
										success:function( searchData ){ $('tbody').html(searchData); 	
										},
										error: function(){ alert("error: 관리자에게문의");}
									});



								});
							});
						</script>
</td>
							</tr>
			</tbody>
		</table>
<!-- ######################################footer.php START########################################################-->
		
<?php
		include_once "./footer.php"
		?>