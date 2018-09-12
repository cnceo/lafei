<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta name="renderer" content="webkit">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>首页－<?php echo S('WEB_NAME');?></title>
<link href="/lf/html/Public/Home/css/bootstrap.min.css" rel="stylesheet">
<link href="/lf/html/Public/Home/css/nifty.min.css" rel="stylesheet">
<link href="/lf/html/Public/Home/css/font-awesome.min.css" rel="stylesheet">
<link href="/lf/html/Public/Home/css/switchery.min.css" rel="stylesheet">
<link href="/lf/html/Public/Home/css/css.min.css" rel="stylesheet">
<link href="/lf/html/Public/Home/css/home.min.css" rel="stylesheet">
</head>
<body class="nifty-ready" style="background-color: #f8f3f0; overflow:hidden;">

<div id="container" class="effect mainnav-lg mainnav-fixed navbar-fixed footer-fixed">
	<div id="page-content" class="homecontainer">
		<div class="homerowa">
			<div class="homerowaleft">
				<div class="homebox">
				</div>
			</div>
			<div class="homemargin">
			</div>
			<div class="homerowamiddle">
				<div class="homebox">
					<p>
						<em><label>￥</label>447015.90</em>
					</p>
					<strong><img alt="" src="/lf/html/Public/Home/images/main/r.png">本期奖池金额</strong>
				</div>
			</div>
			<div class="homemargin">
			</div>
			<div class="homerowaright">
				<div class="homebox">
					<div>
						<p>
							上期奖池金额：<strong>￥ 10891.26</strong>
						</p>
						<p>
							当前入围销量：<strong>￥ 4457799.28</strong>
						</p>
						<p>
                        当前我的销量：
							<strong>
                            ￥ <?php echo ($this->iff($myxf['xiaofei'], $myxf['xiaofei'], '0')); ?>
                            (未入榜)
							</strong>
						</p>
					</div>
					<ul style="margin-top:15px;">
						<li><a href="<?php echo U('activity/activity');?>">活动详情</a></li>
						<li><a href="<?php echo U('activity/activity');?>">参与活动</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="homerowb">
			<div class="homerowbleft"  style="display: none">
				<div class="homebox">
					<div class="hometitle">
						<img alt="" src="/lf/html/Public/Home/images/main/i1.png">安全等级<a>提升</a>
					</div>
					<div class="safebox">
						<div class="safeboxleft">
							<span class="chart di" data-percent="30"><em>高</em></span>
						</div>
						<div class="safeboxright">
							<div>
                            安全星级：
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</div>
							<p>
								上次登录的IP：<?=preg_replace('/(\d+)\.(\d+)\.(\d+)\.(\d+)/is',"$11.$22.*.*", long2ip($login[0]['loginIP'])); ?>
							</p>
							<p>
								上次登录地址：隐藏地域
							</p>
							<p>
								上次登录时间：<?php echo date('Y/m/d H:i:s',$login[0]['loginTime']);?>
							</p>
						</div>
					</div>
				</div>
				<div class="homebox" style="margin-top: 20px;">
					<div class="hometitle">
						<img alt="" src="/lf/html/Public/Home/images/main/i3.png">最近登录地址
						<input id="IsAllopatryLogin" checked="checked" data-switchery="true" style="display: none;" title="异地登录验证" type="checkbox">
						
						<span id="IsAllopatryLoginField">异地登录验证</span>
					</div>
					<div class="addressbox">
						<table class="hometbl">
						<tbody>
						<tr>
							<th style="text-align:left;">
								日期
							</th>
							<th style="text-align:left;">
								IP
							</th>
							<th style="text-align:left;">
								地址
							</th>
						</tr>
						<?php foreach($login as $var){ ?>
						<tr>
							<td>
								<?php echo date('Y/m/d H:i:s',$var['loginTime']);?>
							</td>
							<td>
								<?php echo long2ip($var['loginIP']);?>
							</td>
							<td>
                                    隐藏地域
							</td>
						</tr>
						<?php } ?>
						</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="homemargin"  style="display: none">
			</div>
			<div class="homerowbright">
				<div class="homebox">
					<div class="hometitle">
						<img alt="" src="/lf/html/Public/Home/images/main/i2.png">通知公告<a href="<?php echo U('notice/index');?>">更多</a>
					</div>
					<div class="hometipsbox">
						<div class="hometipsbox">
							<ul>
								<?php foreach($notice as $var){ $i++; $ii=$i%4+1; ?>
								<li>
								<p>
									<img alt="" src="/lf/html/Public/Home/images/main/a<?php echo ($ii); ?>.png">
                                        <?php echo ($var["title"]); ?>
									<em><?php echo date('Y/m/d H:i:s',$var['addTime']);?></em>
								</p>
								<span><?php echo ($this->CsubStr($var['content'],0,50)); ?><a href="<?php echo U('notice/index?id='.$var['id']);?>">[查看详情]</a></span>
								</li>
								<?php } ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>
	<div class="modal fade" id="securitycard-modal" role="dialog" tabindex="-1" aria-labelledby="securitycard-modal" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button data-dismiss="modal" class="close" type="button">
					<span aria-hidden="true">×</span>
					</button>
					<h4 class="modal-title text-danger">
					<i class="fa fa-building-o fa-lg"></i>需要进行验证
					</h4>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-sm-6">
							<img alt="" src="index_data/ga4.png" id="j-validateImgGA" style="display:block; width:250px;height:350px;">
							<img alt="" src="index_data/mbk.jpg" id="j-validateImgMB" style="display:none;width:250px;height:350px;">
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<p class="text-primary text-bold">
									您需要使用谷歌动态密码或密保卡密码来进行验证，成功后才能关闭异地登录验证。
                            如果没有申请，请从【
									<font class="text-danger">菜单</font>】-&gt;【<font class="text-danger">安全中心</font>】-&gt;申请谷歌身份验证或密保卡后再来关闭。
								</p>
							</div>
							<div class="form-group">
								<div class="radio">
									<label class="form-radio form-normal form-primary form-text active" id="j-radioGALable">
									<input name="j-validateMode" id="radioGA" value="1" checked="checked" type="radio"> 谷歌动态密码验证
									</label>
									<label class="form-radio form-normal form-info form-text" id="j-radioMBLable">
									<input name="j-validateMode" id="radioMB" value="0" type="radio"> 密保卡验证
									</label>
								</div>
							</div>
							<div class="form-group">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-asterisk fa-lg"></i>
									</div>
									<input id="SafePwd" class="form-control" placeholder="请输入谷歌动态密码" maxlength="6" style="height:40px;width:215px;" type="text">
									<input id="SafeCmd" type="hidden">
									<input id="SafeVC" type="hidden">
									<span class="fa fa-lg form-control-feedback text-danger" id="BankIcon" style="margin-right:70px; display:none;">
									<img id="SecurityCode" style="cursor: pointer;height:40px; width:90px;" src="index.htm" alt="密保卡">
									</span>
								</div>
							</div>
							<div class="form-group">
								<label id="labValidateInfo" class="form-no-label text-danger">请根据左边的谷歌身份验证器示例图输入正确的动态密码。</label>
							</div>
							<div class="form-group text-center">
								<a href="javascript:;" id="validateSecurityCard" class="btn btn-primary btn-labeled fa fa-check fa-lg">验  证</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="/lf/html/Public/Home/js/jquery.min.js"></script>
<script src="/lf/html/Public/Home/js/bootstrap.min.js"></script>
<script src="/lf/html/Public/Home/js/nifty.min.js"></script>
<script src="/lf/html/Public/Home/js/switchery.min.js"></script>
<script src="/lf/html/Public/Home/js/common.min.js"></script>
<script type="text/javascript">
        $(document).ready(function () {
            $("body").click(
              function toggle() {
                  $("div#demo-set", window.top.document).removeClass("open");
                  $(".mega-dropdown", window.top.document).removeClass("open");
                  $(".dropdown", window.top.document).removeClass("open");
                  $(".lskj").fadeOut(200);
              }
            );
            var t = $(window).scrollTop();
            var scrollFunc = function (e) {
                var direct = 0;
                e = e || window.event;
                if (e.wheelDelta) {  //判断浏览器IE，谷歌滑轮事件             
                    if (e.wheelDelta > 0) {
                        $('body,html').animate({ scrollTop: t + 300 }, 100);
                    }
                    if (e.wheelDelta < 0) {
                        $('body,html').animate({ scrollTop: t - 300 }, 100);
                    }
                } else if (e.detail) {  //Firefox滑轮事件
                    if (e.detail > 0) {
                        $('body,html').animate({ scrollTop: t + 300 }, 100);
                    }
                    if (e.detail < 0) {
                        $('body,html').animate({ scrollTop: t - 300 }, 100);
                    }
                }
            }
            //给页面绑定滑轮滚动事件
            if (document.addEventListener) {
                document.addEventListener('DOMMouseScroll', scrollFunc, false);
            }
            //滚动滑轮触发scrollFunc方法
            window.onmousewheel = document.onmousewheel = scrollFunc;
        });
    </script>
<script src="/lf/html/Public/Home/js/jquery.easypiechart.min.js"></script>
<script type="text/javascript">
        $(document).ready(function () {
            var changeCheckbox = document.getElementById('IsAllopatryLogin'),
                    changeField = document.getElementById('IsAllopatryLoginField');
            new Switchery(changeCheckbox);
            if ($('.switchery').children().css('left') != '0px') {
                $('.switchery').children().css('left', '35px');
            }
            $('.switchery').on('click', function () {
				return;
                if ($(this).children().css('left') == '0px') {
                    setSwitcheryCancel();
                    setallopatry();
                } else {
                    setSwitcheryChoice();
                    $('#SafePwd').val('');
                    $('#securitycard-modal').modal('show');
                    $('#labValidateInfo').text('请根据左边的密保卡示例图输入正确的密保卡密码。');
                    $('#SecurityCode').click();
                }
            });
            $('#SecurityCode').click(function () {
                UpdateSecurityCode('#SafeCmd', '#SafePwd', '#SecurityCode');
            });
            $('#validateSecurityCard').on('click', function () {
                if ($('#j-radioGALable').hasClass('active')) {
                    if ($('#SafePwd').val() == '' || $('#SafePwd').val().length != 6) {
                        $('#labValidateInfo').text('请输入正确的谷歌动态密码！');
                        return;
                    }
                } else {
                    if ($('#SafePwd').val() == '' || $('#SafePwd').val().length != 6) {
                        $('#labValidateInfo').text('请输入正确的密保卡密码！');
                        return;
                    }
                }
                setallopatry();
            });
            $('#radioGA').on('click', function () {
                $('#j-validateImgGA').css('display', 'block');
                $('#j-validateImgMB').css('display', 'none');
                $('#BankIcon').css('display', 'none');
                $('#SafePwd').attr('placeholder', '请输入谷歌动态密码');
                $('#labValidateInfo').text('请根据左边的谷歌身份验证器示例图输入正确的动态密码。');
            });
            $('#radioMB').on('click', function () {
                $('#j-validateImgGA').css('display', 'none');
                $('#j-validateImgMB').css('display', 'block');
                $('#BankIcon').css('display', 'block');
                $('#SafePwd').attr('placeholder', '请输入密保卡密码');
                $('#labValidateInfo').text('请根据左边的密保卡示例图输入正确的密保卡密码。');
            });
            $('span.gao').easyPieChart({
                size: 120,
                lineWidth: 10,
                barColor: '#62a100',
                trackColor: '#e2e6e8',
                scaleColor: '#000',
            });
            $('span.zhong').easyPieChart({
                size: 120,
                lineWidth: 10,
                lineCap: 'square',
                barColor: '#ee7242',
                trackColor: '#e2e6e8',
                scaleColor: '#000',
            });
            $('span.di').easyPieChart({
                size: 120,
                lineWidth: 10,
                barColor: '#ff0000',
                trackColor: '#e2e6e8',
                scaleColor: '#000',
            });
        });
        function setallopatry() {
            var vtype = 0;
            if ($('.switchery').children().css('left') == '0px') {
                vtype = 0;
            } else {
                vtype = $('#j-radioGALable').hasClass('active') ? 1 : 0;
            }
            $('#validateSecurityCard').text('验证中...');
            $('#validateSecurityCard').attr("disabled", true);
            $.ajax({
                type: "POST",
                url: "/safety/setallopatry",
                data: { cmd: $('#SafeCmd').val(), pwd: $('#SafePwd').val(),type : vtype },
                dataType: "json",
                global: false,
                success: function (result) {
                    if (result.Message.indexOf('关闭') >= 0) {
                        setSwitcheryCancel();
                        $('#securitycard-modal').modal('hide');
                    } else if (result.Message.indexOf('开启') >= 0) {
                        setSwitcheryChoice();
                    } else {
                        $('#labValidateInfo').text(result.Message);
                        $('#SecurityCode').click();
                    }
                    var niftyType = result.IsSuccess ? 'success' : 'danger';
                    $.niftyNoty({ type: niftyType, message: result.Message, container: 'floating', closeBtn: true, timer: 3000 });
                    $('#validateSecurityCard').text('验  证');
                    $('#validateSecurityCard').removeAttr("disabled");
                },
                error: function () {
                    $('#validateSecurityCard').text('验  证');
                    $('#validateSecurityCard').removeAttr("disabled");
                }
            });
        }
        function setSwitcheryChoice() {
            $('#IsAllopatryLoginField').innerHTML = "已开启异地登录验证";
            $('#IsAllopatryLoginField').removeClass("text-danger");
            $('#IsAllopatryLoginField').addClass("text-success");
            $('.switchery').attr('style', 'border-color: rgb(100, 189, 99); box-shadow: rgb(100, 189, 99) 0px 0px 0px 10px inset; transition: border 0.4s, box-shadow 0.4s, background-color 1.2s; background-color: rgb(100, 189, 99);');
            $('.switchery').html('<small style="left: 35px; transition: left 0.2s; background-color: rgb(255, 255, 255);"></small>');
            $('#IsAllopatryLogin').attr('checked', 'checked');
        }
        function setSwitcheryCancel() {
            $('#IsAllopatryLoginField').innerHTML = "已关闭异地登录验证";
            $('#IsAllopatryLoginField').removeClass("text-success");
            $('#IsAllopatryLoginField').addClass("text-danger");
            $('.switchery').attr('style', 'border-color: rgb(223, 223, 223); box-shadow: rgb(223, 223, 223) 0px 0px 0px 0px inset; transition: border 0.4s, box-shadow 0.4s; background-color: rgb(255, 255, 255);');
            $('.switchery').html('<small style="left: 0px; transition: left 0.2s; background-color: rgb(255, 255, 255);"></small>');
            $('#IsAllopatryLogin').removeAttr('checked');
        }
    </script>
</body>
</html>