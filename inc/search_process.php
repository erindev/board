<?php

	#echo"성공";
	header("Contet-type:text/html; charset=utf-8;");

	//1. db연동
	include_once "./db_connect.php";
	
	//2. get 방식으로 데이터 넘겨받기

	$search = $_REQUEST['now_search']; // request는 데이터의 키값?으로 가져오기

	//3. 현재 단어가 포함되어 있는 (like 이용) 자료 찾아오기 (표-SELECT)

	$sql = "select * from multiboard where title LIKE '%$search%'";

	$result = mysqli_query ( $con, $sql ) or die (mysqli_error($con));
	
	//4. 한줄씩 출력
	



	while ($row = mysqli_fetch_array( $result, MYSQLI_ASSOC) /*true*/ ) {

		$returnresult .= '<tr><td>'.$row['no'].'</td>
		<td><a href="./04_board_detail.php?no=' . $row['no'] .'">' . $row['title'] . '</a></td>
		<td>'.$row['name'].'</td>
		<td>'.$row['date'].'</td>
		<td>'.$row['view'].'</td></tr>';
	}





/*	!empty // 비어있지 않니?
	!isset // !empty 반대 */

	//5. DB 닫기

	mysqli_free_result( $result );
	mysqli_close($con);

	echo $returnresult; ###################### 중요!! 쏴줘야지!!! ###################### 그래야 넘어가지#########3

?>