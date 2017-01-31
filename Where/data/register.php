<?php
	header('Content-Type:application/json;charset=utf8');
	$uname=$_REQUEST['uname'];
	$upwd=$_REQUEST['upwd'];
	require 'init.php';
	$sql="insert into user values(NULL,'$uname','$upwd')";
	$result=mysqli_query($conn,$sql);

	$output=['code'=>0,'msg'=>null];
	if(!$result){
		$output['code']=101;
		$output['msg']="sql语句有误";
	}else{
		$output['code']=102;
		$output['msg']="插入成功";
		$output['id']=mysqli_insert_id($conn);
	}
	echo json_encode($output);
?>