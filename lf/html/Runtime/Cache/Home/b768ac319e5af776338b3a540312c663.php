<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta name="renderer" content="webkit">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>用户登录</title>
<link rel="stylesheet" href="/lf/html/Public/Home/css/login.css">
<link rel="stylesheet" href="login_files/font-awesome.css">
<style type="text/css">
        /*扫描二维码界面开始*/
.masksao
{
	position:fixed;
	left:0;
	top:0;
	width:100%;
	height:100%;
	background-color:rgba(0,0,0,.8);
	z-index:99999;
	display:none
}
.sao
{
	position:absolute;
	left:45%;
	top:50%;
	width:360px;
	margin-left:-100px;
	margin-top:-100px;
	height:285px;
	background-color:#fff;
	text-align:center;
	box-sizing:border-box;
	padding-top:20px;
}
.sao p
{
	padding-top:10px;
}
.sao span {
	display: table-cell;
	text-align: center;
}
</style>
<link href="login_files/mibaoka.css" rel="stylesheet">
<script type="text/javascript" src="/lf/html/Public/Home/js/jquery-1.8.0.min.js"></script>
<script type="text/javascript">
	$(function(){
		$("#password").focus();
		
		$("form").submit(function(){
			var self = $(this);
			$.post(self.attr("action"), self.serialize(), success, "json");
			return false;

			function success(data){
				if(data.status){
					window.location.href = data.url;
				} else {
					$(".reloadverify").click();
					alert(data.info);				
				}
			}
		});
		
		$("#j-app-btn").bind("click",
          function toggle() {
              $(".masksao").show();
          }
        );
        $(".masksao").bind("click",
          function toggle() {
              $(".masksao").hide();
          }
        );
	});	
</script>
</head>
<body>
<div class="bg">
 <div class="logo">

    </div>
	<div class="cx">

    </div>

</div>
<div class="masksao">
	<div class="sao">
		<span><img alt="" src="/lf/html/Public/Home/images/vcode1.png" /><br>安卓版</span>
		<span><img alt="" src="/lf/html/Public/Home/images/vcode2.png"><br>苹果版</span>
		
		<p>
			(微信内置扫一扫无法直接下载时，可使用qq扫一扫)
		</p>
	</div>	
</div>
<div class="loginbox">
	
	<div class="loginform">
		<div class="loginformbox">
			<form method="post" id="login" action="<?php echo U('user/logined');?>" enter="true">
				
				<div class="loginformboxtitle">
					 用 户 登 录
				</div>
				<div class="loginformboxcontent">
					<!--<p>
						<em>问候语：</em> <?php echo ($this->iff(session('safepwd'),session('safepwd'),'没有设置')); ?>
						<input id="LogGreeting" name="LogGreeting" value="光宇大侠" type="hidden">
					</p>-->
				
					<p>
						<i class="fa fa-user"></i>
						<input style="ime-mode:disabled;" autocomplete="off" placeholder="请输入用户名" maxlength="50" id="username" name="username" type="text" disabled value="<?php echo session('username');?>">
					</p>
					<p>
						<i class="fa fa-asterisk"></i>
						<input style="ime-mode:disabled;" maxlength="40" autocomplete="off" placeholder="请输入密码" id="password" name="password" type="password">						
					</p>
					
					<div>
						<input value="确 定" type="submit" style="cursor:pointer">
					</div>
					
					<div class="loginbottomcontent">
						<a href="<?php echo U('user/login');?>">切换用户？</a>&nbsp;&nbsp;&nbsp;&nbsp;
						
					</div>
				</div>
			</form>
			
		</div>
	</div>
</div>
<div class="loginfoot">
	<div class="loginfootbox">
		<div class="loginfootboxleft" id="walkthrough-1">
			
			<p>
				<a href="http://dlsw.baidu.com/sw-search-sp/soft/9d/14744/ChromeStandalone_47.0.2526.80_Setup.1449716976.exe" target="_blank">
				<span class="bg1"><i class="fa fa-chrome"></i></span><strong>谷歌浏览器<em>版本：47.0</em></strong>
				</a>
				<a href="http://down.360safe.com/cse/360cse_8.5.0.128.exe" target="_blank">
				<span class="bg3"><i class="fa fa-360"></i></span><strong>360极速浏览器<em>版本：8.5</em></strong>
				</a>
				<a href="http://download.microsoft.com/download/F/2/8/F2871AC4-E82B-4636-BB37-A5F2B14C8616/IE11-Windows6.1-x86-zh-cn.exe" target="_blank">
				<span class="bg2"><i class="fa fa-internet-explorer"></i></span><strong>IE  浏览器<em>版本：11.0</em></strong>
				</a>
			</p>
		</div>
		<div class="loginfootboxright">
			
			<p>
				<a href="javascript:void(0);">
				<span class="bg4"><i class="fa fa-desktop"></i></span><strong>PC客户端<em>版本：1.0</em></strong>
				</a>
				<a href="javascript:;" id="j-app-btn">
				<span class="bg5"><i class="fa fa-mobile" style="font-size:30px"></i></span><strong>手机客户端<em>版本：1.0</em></strong>
				</a>
			</p>
		</div>
	</div>
	<div class="loginfootboxx">
		<p>©2016 云梦开发团队 All Rights Reserved.建议最佳分辨率 1366*768
				
			</p>
		
	
	</div>
</div>

</body>
</html>