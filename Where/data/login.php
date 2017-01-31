<?php
	header('Content-Type:application/json;charset=utf8');
	$uname=$_REQUEST['uname'];
	$upwd=$_REQUEST['upwd'];
	require 'init.php';
	$sql="SELECT * from user WHERE uname='$uname' and upwd='$upwd'";
	$result=mysqli_query($conn,$sql);

	$output=['code'=>0,'msg'=>null];
	if(!$result){
		$output['code']=101;
		$output['msg']="sql语句有误";
	}else{
		$row=mysqli_fetch_assoc($result);
		if($row==null){
			$output['code']=102;
			$output['msg']="用户名或密码错误";
		}else{
			$output['code']=103;
			$output['msg']="登录名和密码正确";
		}
	}
	echo json_encode($output);
?>