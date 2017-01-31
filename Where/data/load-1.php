<?php
	header('Content-Type:application/json;charset=utf8');
	// $dis=$_REQUEST['dis'];
	require 'init.php';
	$sql="SELECT * from discount_two";
	$result=mysqli_query($conn,$sql);
	// $output=[];
	if(!$result){
		echo "$sql语句有误";
	}else{
		while(($row=mysqli_fetch_assoc($result))!=null){
			$output[]=$row;
		}
	}
	echo json_encode($output);
?>