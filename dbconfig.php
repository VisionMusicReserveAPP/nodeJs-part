<?php
  $conn = mysqli_connect("127.0.0.1", "root", "0000", "data","3307");

	if($conn->connect_error){
		die('데이터베이스 연결에 문제가 있습니다. 관리자에게 문의 바랍니다.');
	}

	$conn->set_charset('utf-8');
?>
