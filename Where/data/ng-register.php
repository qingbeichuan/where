<!DOCTYPE html>
<html ng-app="my">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/register.css">
	<link rel="stylesheet" href="../css/where.css">
	<script src='../js/angular.js'></script>
</head>
<body>
	<nav>
		<div class="logo comWidth">
			<img src="../img/logo.png" alt="">
			<span>账号注册</span>
		</div>
	</nav>
	<article>
		<div class="main comWidth">
			<div class="left_register">
				<p>注册成为“去哪儿”的用户后，您可以：</p>
				<li>畅游与去哪儿合作的<a href="">机票</a>、<a href="">酒店</a>、<a href="">度假</a>代理商网站，轻松管理订单</li>
				<li>查询、计划、管理您的预订信息</li>
				<li>享受优质超低价格<a href="">团购</a>服务</li>
				<img src="../img/chunjie.jpg" alt="">
			</div>
			<div ng-controller="ctrl" class="right_register">
				<form name="signUp" ng-submit="submitForm()" action="ng-register.php">
						<div class="form-group" ng-class="{'has-success':signUp.username.$valid}">
							<label>用户名</label>
						<!-- 	<pre>{{signUp.username}}</pre>
							<pre>合法{{signUp.username.$valid}}</pre> -->
							<input type="text" 
							name="username" 
							class="form-control" 
							ng-model="userdata.username" 
							required
							ng-minlength="4" 
							ng-maxlength="12"
							placeholder="请输入用户名" 
							>
							<!-- 鼠标移入却未填写 -->
							<p class="error" ng-if="
							signUp.username.$error.required && 
							signUp.username.$touched">用户名不可为空</p>
							<p class="error" ng-if="
							(signUp.username.$error.minlength || signUp.username.$error.maxlength) && 
							signUp.username.$touched">用户名长度必须4至12位</p>
						</div>
						<div class="form-group" ng-class="{'has-success':signUp.password.$valid}">
							<label>密码</label>
							<!-- <pre>{{signUp.password}}</pre>
							<pre>合法{{signUp.password.$valid}}</pre> -->
							<input type="password" 
							name="password" 
							class="form-control" 
							ng-model="userdata.password"
							ng-minlength="6"
							ng-maxlength="32"
							required
							placeholder="请输入密码" >
							<p class="error" 
								ng-if="signUp.password.$error.required && 
								signUp.password.$touched
								">
								密码不能为空
							</p>
							<p class="error" 
								ng-if="(signUp.password.$error.minlength || signUp.password.$error.maxlength) && 
								signUp.password.$touched
								">
								密码长度必须6至32位
							</p>
						</div>
						<div class="form-group" ng-class="{'has-success':signUp.password2.$valid}">
							<label>确认密码</label>
							<!-- <pre>{{signUp.password2}}</pre>
							<pre>合法{{signUp.password2.$valid}}</pre> -->
							<input type="password" name="password2" class="form-control" ng-model="userdata.password2" compare="userdata.password" required>
							<p class="error" ng-if="signUp.password2.$error.compare && signUp.password2.$touched
								">两次输入密码不一致</p>
						</div>
						<div class="form-group" id="validate">
							<label for="">验证码</label>
							<input type="text" class="form-control valid" placeholder="请输入验证码" name="code">
							<img border="1" id="img" src="yanzhenma.php" alt="">
							<a href="" id="a">换一个</a>
							<?php
							    if(isset($_REQUEST['code'])){
							        session_start();
							        if(strtolower($_REQUEST['code'])==strtolower($_SESSION['auto_code'])){
							            echo '<p style="color:#0f0">输入正确</p>';
							        }else{
							            echo '<p style="color:#f00">输入错误</p>';
							        }
							    }
							?>
						</div>
						<div class="form-group">
							<input type="submit" class="btn btn-success"></input>
						</div>
				</form>
			</div>
		</div>
	</article>
	<footer id="footer">
		
	</footer>
	<script>
		var app=angular.module('my',['ng'])
		app.controller('ctrl',function($scope){
			$scope.userdata={};
			$scope.submitForm=function(){
				console.log($scope.userdata)
				console.log('提交了')
				if($scope.signUp.$invalid){
					alert('请检查')
				}else{
					alert('提交成功')
				}
			}
		})
		app.directive('compare',function(){
			var o={}
			o.strict="AE";
			o.scope={
				text:"=compare"
			}
			o.require="ngModel";
			o.link=function(scope,ele,attr,ng){
				ng.$validators.compare=function(v){
					return v==scope.text;
				}
				scope.$watch('text',function(){
					ng.$validate()
				})
			}
			return o;
		})
	</script>
	<script>
        a.onclick=function(e){
            e.preventDefault();
            img.src="yanzhenma.php"
        }
    </script>
    <script src="../js/jquery-1.11.3.js"></script>
    <script>
    	$(function(){
			$('#footer').load('footer.php');
		})  
    </script>
</body>
</html>