<?php if (!defined('THINK_PATH')) exit();?>﻿<!doctype html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>电子商城</title>
		<link rel="stylesheet" href="/e-market/Public/css/register.css">
	</head>
	<body>
	 	<div class="main">
	 		<div class="header">
	 			<img src="/e-market/Public/image/logoletter.png"/>
	 			<a>已有账号</a><a href="/e-market/index.php/Home/Login/login">请登录</a>
	 		</div>
	 		<div class="lcontant">
	 			<div class="txt">
	 				<input class="input_test shuru" type="text" style="color:#777" name="username" value="用户名" onclick="f1('shuru1')" onblur="f2('shuru1')"/>
	 				<p style="color:#999;font-size:14px;display:none;" id="shuru1">!!支持中文、字母、数字的组合，4-20个字符</p>
	 			</div>
	 			<div class="txt"style="height:100px;">
	 				<input class="input_test shuru" type="text" style="color:#777" name="username" value="设置密码" onclick="f1('shuru2')" onblur="f2('shuru2')"/>
	 				<p style="color:#999;font-size:14px;display:none;" id="shuru2">!!建议使用字母、数字和符号两种及以上的组合，6-20个字符</p>
	 			</div>
	 			<div class="txt">
	 				<input class="input_test shuru" type="text" style="color:#777"name="username" value="确认密码" onclick="f1('shuru3')" onblur="f2('shuru3')"/>
	 				<p style="color:#999;font-size:14px;display:none;" id="shuru3">!!请再次输入密码</p>
	 			</div>
	 			<div class="txt">
	 				<input class="input_test shuru" type="text" style="color:#777" name="username" value="邮箱账号" onclick="f1('shuru4')" onblur="f2('shuru4')"/>
	 				<p style="color:#999;font-size:14px;display:none;" id="shuru4">!!完成验证后可以使用该账号登陆和找回密码</p>
	 			</div>
	 			<div class="txt">
	 				<input class="input_test shuru" type="text" style="color:#777" name="username" value="验证码" onclick="f1('shuru5')" onblur="f2('shuru5')"/>
	 				<p style="color:999;font-size:14px;display:none;" id="shuru5">!!看不清？点击图片更换验证码</p>
	 			</div>
	 			<div class="txt">
	 				<input class="input_test shuru" type="text" style="color:#777" name="username" value="邮箱验证码" onclick="f1('shuru6')" onblur="f2('shuru6')"/>
	 			</div>
	 			<input class="submit" type="submit" name="username" value="立即注册" />
	 		</div>
	 		<div class="rcontant">
	 			<div class="right1">
	 				<img src="/e-market/Public/image/register.png"/>
	 			</div>
	 			<a href="/e-market/index.php/Home/Login/">----------商业注册</a>
	 		</div>
	 	</div>
	 	<script type="text/javascript" src="/e-market/Public/js/jquery.min.js"></script>
			<script type="text/javascript">
			$(function(){
			$('.input_test').bind({
			focus:function(){
			if (this.value == this.defaultValue){
			this.value="";
			}
			},
			blur:function(){
			if (this.value == ""){
			this.value = this.defaultValue;
			}
			}
			});
			})
			function f1(id){
				document.getElementById(id).style.display="block";
			}
			function f2(id){
				document.getElementById(id).style.display="none";
			}
			</script>
	</body>
</html>