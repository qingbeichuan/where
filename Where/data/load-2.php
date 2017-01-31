<?php
	header('Content-Type:application/json;charset=utf8');
	require 'init.php';
	$sql="SELECT * from discount_four";
	$result=mysqli_query($conn,$sql);
	if(!$result){
		echo "$sql语句有误";
	}else{
		while(($row=mysqli_fetch_assoc($result))!=null){
			$output[]=$row;
		}
	}
	echo json_encode($output);
?>