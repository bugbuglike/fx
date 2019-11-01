<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<!--Head-->
<head>
    <meta charset="utf-8"/>
    <title>WeMall分销系统登录</title>

    <meta name="description" content="login page"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" href="/Public/Admin/img/favicon.png" type="image/x-icon">

    <!--Basic Styles-->
    <link href="/Public/Admin/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="/Public/Admin/css/bootstrap.extend.css" rel="stylesheet"/>
    <link href="/Public/Admin/css/font-awesome.min.css" rel="stylesheet"/>

    <!--Beyond styles-->
    <link id="beyond-link" href="/Public/Admin/css/beyond.min.css" rel="stylesheet"/>
    <link href="/Public/Admin/css/demo.min.css" rel="stylesheet"/>
    <link href="/Public/Admin/css/typicons.min.css" rel="stylesheet"/>
    <link href="/Public/Admin/css/animate.min.css" rel="stylesheet"/>

    <!--Skin Script: Place this script in head to load scripts for skins and rtl support-->
    <!--<script src="/Public/Admin/js/skins.min.js"></script>-->
    <style type="text/css">
        .common_footer {
            color: #eee;
            position: absolute;
            bottom: 0px;
            text-align: center;
            width: 100%;
            background: #444;
            background: rgba(0,0,0,0.3);
            padding: 10px;
        }
    </style>
</head>
<!--Head Ends-->
<!--Body-->
<body style="background-image:url('<?php echo ($wallpaper); ?>');background-position: center;background-repeat: no-repeat;background-size: cover;">
<div class="login-container animated fadeInDown" style="width: 100%;height: 100%">
    <div class="loginbox bg-white" style="height: 460px!important;">
        <div class="loginbox-title" style="padding-top: 20px;margin-bottom: 20px">登陆</div>
        <form id="loginForm" action="" method="post">
            <div class="loginbox-textbox">
                <input id="username" name="username" type="text" class="form-control" placeholder="用户名"/>
            </div>
            <div class="loginbox-textbox">
                <input id="userpass" name="userpass" type="password" class="form-control" placeholder="密码"/>
            </div>
            <div class="loginbox-textbox">
                <input id="verify" type="text" name="verify" class="form-control" placeholder="验证码"/>
            </div>
            <div class="loginbox-textbox">
                <img src="<?php echo U('Admin/Public/verify');?>" width="100%" id="verifyimg"/>
            </div>
            <div class="loginbox-forgot">
                <a href="javascript:alert('请联系管理员')">忘记密码?</a>
            </div>
            <div class="loginbox-submit">
                <input class="btn btn-primary btn-block" value="登陆" type="submit">
            </div>
        </form>
    </div>
</div>
<div class="common_footer">Powered by WeMall | Copyright © <a href="http://www.inuoer.com/" target="_blank">inuoer.com</a>
    All rights reserved.
</div>
<!--Basic Scripts-->
<script src="/Public/Admin/js/jquery-2.0.3.min.js"></script>
<script src="/Public/Admin/js/bootstrap.min.js"></script>
<script src="/Public/Admin/js/bootstrap.extend.js"></script>
<!--Beyond Scripts-->
<script src="/Public/Admin/js/beyond.min.js"></script>
<!--Page Related Scripts-->
<script src="/Public/Admin/js/toastr/toastr.js"></script>
<script>
    $('#loginForm').on('submit', function () {
        var username = $('#username');
        var userpass = $('#userpass');
        var verify = $('#verify');
        if (!$(username).val()) {
            Notify('用户名不能为空!', 'top-right', '5000', 'danger', 'fa-bolt', true);
            $(username).focus();
            return false;
        }
        if (!$(userpass).val()) {
            Notify('用户密码不能为空!', 'top-right', '5000', 'danger', 'fa-bolt', true);
            $(userpass).focus();
            return false;
        }
        if (!$(verify).val()) {
            Notify('验证码不能为空!', 'top-right', '5000', 'danger', 'fa-bolt', true);
            $(verify).focus();
            return false;
        }
    });
    $('#verifyimg').on('click', function () {
        $(this).attr('src', '<?php echo U('Admin/Public/verify');?>');
    });
</script>
</body>
<!--Body Ends-->
</html>