<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- Head -->

<head>
    <meta charset="utf-8" />
    <title>WeMall分销管理</title>
    <meta name="description" content="blank page" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="/Public/Admin/img/favicon.png" type="image/x-icon">
    <!--Basic Styles-->
    <link href="/Public/Admin/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/Public/Admin/css/font-awesome.min.css" rel="stylesheet" />
    <link href="/Public/Admin/css/weather-icons.min.css" rel="stylesheet" />
    <!--Beyond styles-->
    <link id="beyond-link" href="/Public/Admin/css/beyond.min.css" rel="stylesheet" />
    <link href="/Public/Admin/css/demo.min.css" rel="stylesheet" />
    <link href="/Public/Admin/css/typicons.min.css" rel="stylesheet" />
    <link href="/Public/Admin/css/animate.min.css" rel="stylesheet" />
    <link href="/Public/Admin/css/appcms.css" rel="stylesheet" />
    <!--Skin Script: Place this script in head to load scripts for skins and rtl support-->
    <!--<script src="/Public/Admin/js/skins.min.js"></script>-->
    <style>
    .upimgwell {
        margin-bottom: 0px;
    }
    
    .clear {
        clear: both;
    }
    
    .FL {
        float: left;
    }
    
    .FR {
        float: right;
    }
    </style>
</head>
<!-- /Head -->
<!-- Body -->
<body>
    <!-- Loading Container -->
    <div class="loading-container" id="App-loading-wrap">
        <div id="loading" style="top: 150px; display: block;"><div class="lbk"></div><div class="lcont"><img src="/Public/Admin/img/loading.gif" alt="loading...">正在加载...</div></div>
    </div>
    <!--  /Loading Container -->
    <!-- Navbar -->
    <div class="navbar">
        <div class="navbar-inner">
            <div class="navbar-container">
                <!-- Navbar Barnd -->
                <div class="navbar-header pull-left" style="text-align:center;margin-left: 10px; padding-top: 10px;">
                    <a href="javascript:void(0)" class="navbar-brand">
                        <small>
                        <!--<?php echo ($_SESSION["CMS"]["set"]["name"]); ?>-->
                        WeMall分销管理
                        </small>
                    </a>
                </div>
                <!-- /Navbar Barnd -->
                <!-- Sidebar Collapse -->
                <div class="sidebar-collapse" id="sidebar-collapse">
                    <i class="collapse-icon fa fa-bars"></i>
                </div>
                <!-- /Sidebar Collapse -->
                <!-- Account Area and Settings -->
                <div class="navbar-header pull-right">
                    <div class="navbar-account">
                        <ul class="account-area">
                            <li>
                                <a class="login-area dropdown-toggle" data-toggle="dropdown">

                                    <section>
                                        <h2><span class="profile"><span><?php echo ($_SESSION["SYS"]["set"]["wxname"]); ?></span></span></h2>
                                    </section>
                                </a>
                                <!--Login Area Dropdown-->
                                <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                    <li class="username"><a><?php echo ($_SESSION["SYS"]["set"]["wxname"]); ?></a></li>
                                    <!--/Theme Selector Area-->
                                    <li class="dropdown-footer">
                                        <a href="<?php echo U('Admin/Public/logout');?>">
                                            注销登录
                                        </a>
                                    </li>
                                </ul>
                                <!--/Login Area Dropdown-->
                            </li>
                            <!-- /Account Area -->
                            <!--Note: notice that setting div must start right after account area list.
                            no space must be between these elements-->
                            <!-- Settings -->
                        </ul>
                        <!-- Settings -->
                    </div>
                </div>
                <!-- /Account Area and Settings -->
            </div>
        </div>
    </div>
    <!-- /Navbar -->
    <!-- Main Container -->
    <div class="main-container container-fluid">
        <!-- Page Container -->
        <div class="page-container">
            <!-- Page Sidebar -->
            <div class="page-sidebar" id="sidebar">
                <!-- Sidebar Menu -->
                <ul class="nav sidebar-menu">
                    <!--系统首页-->
					<?php if(in_array(($employee), is_array($useroath)?$useroath:explode(',',$useroath))): ?><li style="display:none">
                        <a id="AppHome" href="<?php echo U('Admin/Employee/main');?>" data-loader="App-loader" data-loadername="主控面板">
                            <i class="menu-icon glyphicon glyphicon-home"></i>
                            <span class="menu-text"> 首页 </span>
                        </a>
                    </li><?php endif; ?>
					<?php if(!in_array(($employee), is_array($useroath)?$useroath:explode(',',$useroath))): ?><li>
                        <a id="AppHome" href="<?php echo U('Admin/Index/main');?>" data-loader="App-loader" data-loadername="主控面板">
                            <i class="menu-icon glyphicon glyphicon-home"></i>
                            <span class="menu-text"> 系统首页 </span>
                        </a>
                    </li><?php endif; ?>

                    <?php if(in_array(($sys), is_array($useroath)?$useroath:explode(',',$useroath))): ?><!--系统设置-->
                        <li>
                            <a href="#" class="menu-dropdown">
                                <i class="menu-icon fa fa-th"></i>
                                <span class="menu-text"> 系统设置 </span>
                                <i class="menu-expand"></i>
                            </a>
                            <ul class="submenu">
                                <li>
                                    <a href="<?php echo U('Admin/User/userList');?>" data-loader="App-loader" data-loadername="管理员管理">
                                        <span class="menu-text">系统管理员</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/Wx/set');?>" data-loader="App-loader" data-loadername="微信设置">
                                        <span class="menu-text">微信设置</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/Alipay/set');?>" data-loader="App-loader" data-loadername="支付宝设置">
                                        <span class="menu-text">支付宝设置</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/Sms/set');?>" data-loader="App-loader" data-loadername="短信宝设置">
                                        <span class="menu-text">短信宝设置</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/Wxprint/set');?>" data-loader="App-loader" data-loadername="微信打印机设置">
                                        <span class="menu-text">微信打印机设置</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/Vip/set');?>" data-loader="App-loader" data-loadername="会员机制设置">
                                        <span class="menu-text">会员机制设置</span>
                                    </a>
                                </li>
								<!--
                                <li>
                                    <a href="<?php echo U('Admin/Vip/level');?>" data-loader="App-loader" data-loadername="会员等级设置">
                                        <span class="menu-text">会员等级设置</span>
                                    </a>
                                </li>
								-->
                                <li>
                                    <a href="<?php echo U('Admin/Shop/set');?>" data-loader="App-loader" data-loadername="商城设置">
                                        <span class="menu-text">商城设置</span>
                                    </a>
                                </li>
                            </ul>
                        </li><?php endif; ?>
                    <?php if(in_array(($wx), is_array($useroath)?$useroath:explode(',',$useroath))): ?><!--微信管理-->
                        <li>
                            <a href="#" class="menu-dropdown">
                                <i class="menu-icon fa fa-linux"></i>
                                <span class="menu-text"> 微信管理 </span>
                                <i class="menu-expand"></i>
                            </a>
                            <ul class="submenu">
                                <li>
                                    <a href="<?php echo U('Admin/Wx/keyword');?>" data-loader="App-loader" data-loadername="魔法关键词">
                                        <span class="menu-text">魔法关键词</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/Wx/menu');?>" data-loader="App-loader" data-loadername="自定义菜单">
                                        <span class="menu-text">魔法菜单栏</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/Wx/qrcodeBgSet');?>" data-loader="App-loader" data-loadername="二维码背景设置">
                                        <span class="menu-text">推广二维码</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/Wx/customer');?>" data-loader="App-loader" data-loadername="客服消息">
                                        <span class="menu-text">客服消息配置</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/Wx/template');?>" data-loader="App-loader" data-loadername="模版消息">
                                        <span class="menu-text">模版消息配置</span>
                                    </a>
                                </li>
                            </ul>
                        </li><?php endif; ?>
                    <?php if(in_array(($shop), is_array($useroath)?$useroath:explode(',',$useroath))): ?><!--商城设置-->
                        <li>
                            <a href="#" class="menu-dropdown">
                                <i class="menu-icon glyphicon glyphicon-shopping-cart"></i>
                                <span class="menu-text"> 商城管理 </span>
                                <i class="menu-expand"></i>
                            </a>
                            <ul class="submenu">
                                <li>
                                    <a href="<?php echo U('Admin/Shop/ads');?>" data-loader="App-loader" data-loadername="广告管理">
                                        <span class="menu-text">广告管理</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/Shop/cate');?>" data-loader="App-loader" data-loadername="商城分类">
                                        <span class="menu-text">商城分类</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/Shop/group');?>" data-loader="App-loader" data-loadername="商城分组">
                                        <span class="menu-text">商城分组</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/Shop/skuattr');?>" data-loader="App-loader" data-loadername="SKU属性（商品规格属性）">
                                        <span class="menu-text">SKU属性</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/Shop/label');?>" data-loader="App-loader" data-loadername="标签管理">
                                        <span class="menu-text">标签管理</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/Shop/goods');?>" data-loader="App-loader" data-loadername="商品管理">
                                        <span class="menu-text">商品管理</span>
                                    </a>
                                </li>
                            </ul>
                        </li><?php endif; ?>
                    <?php if(in_array(($card), is_array($useroath)?$useroath:explode(',',$useroath))): ?><li>
                            <a href="#" class="menu-dropdown">
                                <i class="menu-icon fa fa-money"></i>
                                <span class="menu-text">卡券设置</span>
                                <i class="menu-expand"></i>
                            </a>
                            <ul class="submenu">
                                <!-- <li>
                                    <a href="<?php echo U('Admin/Vip/card',array('type'=>'1'));?>" data-loader="App-loader" data-loadername="卡券列表-充值卡">
                                        <i class="glyphicon glyphicon-credit-card"></i>
                                        <span class="menu-text">充值卡</span>
                                    </a>
                                </li> -->
                                <li>
                                    <a href="<?php echo U('Admin/Vip/card',array('type'=>'2'));?>" data-loader="App-loader" data-loadername="卡券列表-代金券">
                                        <i class="glyphicon glyphicon-euro"></i>
                                        <span class="menu-text">代金券</span>
                                    </a>
                                </li>
                            </ul>
                        </li><?php endif; ?>
                    <!--员工设置-->
                    <?php if(in_array(($emp), is_array($useroath)?$useroath:explode(',',$useroath))): ?><li>
                            <a href="#" class="menu-dropdown">
                                <i class="menu-icon fa fa-sitemap"></i>
                                <span class="menu-text"> 员工管理 </span>
                                <i class="menu-expand"></i>
                            </a>
                            <ul class="submenu">
								<li>
                                    <a href="<?php echo U('Admin/Wx/qrcodeBgEmpSet');?>" data-loader="App-loader" data-loadername="员工二维码背景设置">
                                        <span class="menu-text">员工二维码</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/Employee/employeeList');?>" data-loader="App-loader" data-loadername="员工列表">
                                        <span class="menu-text">员工列表</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/Employee/achievement');?>" data-loader="App-loader" data-loadername="员工业绩">
                                        <span class="menu-text">业绩统计</span>
                                    </a>
                                </li>
                            </ul>
                        </li><?php endif; ?>
                    <?php if(in_array(($tree), is_array($useroath)?$useroath:explode(',',$useroath))): ?><!--层级树-->
                        <li>
                            <a href="<?php echo U('Admin/Vip/vipTrack');?>" data-loader="App-loader" data-loadername="层级树">
                                <i class="menu-icon glyphicon glyphicon-tree-conifer"></i>
                                <span class="menu-text">层级树</span>
                            </a>
                        </li><?php endif; ?>
                    <?php if(in_array(($normal), is_array($useroath)?$useroath:explode(',',$useroath))): ?><!--普通用户会员中心-->
                        <li>
                            <a href="#" class="menu-dropdown">
                                <i class="menu-icon fa fa-user"></i>
                                <span class="menu-text"> 会员中心 </span>
                                <i class="menu-expand"></i>
                            </a>
                            <ul class="submenu">
                                <li>
                                    <a href="<?php echo U('Admin/Normal/vipList');?>" data-loader="App-loader" data-loadername="会员列表">
                                        <span class="menu-text">会员列表</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo U('Admin/Vip/message');?>" data-loader="App-loader" data-loadername="通知中心">
                                <i class="menu-icon glyphicon glyphicon-envelope"></i>
                                <span class="menu-text">通知中心</span>
                            </a>
                        </li><?php endif; ?>
                    <?php if(in_array(($vip), is_array($useroath)?$useroath:explode(',',$useroath))): ?><!--会员中心-->
                        <li>
                            <a href="#" class="menu-dropdown">
                                <i class="menu-icon fa fa-user"></i>
                                <span class="menu-text"> 会员中心 </span>
                                <i class="menu-expand"></i>
                            </a>
                            <ul class="submenu">
                                <li>
                                    <a href="<?php echo U('Admin/Vip/vipRebornList');?>" data-loader="App-loader" data-loadername="可调配会员">
                                        <span class="menu-text">可调配会员中心</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/Vip/vipAllocList');?>" data-loader="App-loader" data-loadername="未分配员工 一级会员列表">
                                        <span class="menu-text">会员分配中心</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/Vip/vipList');?>" data-loader="App-loader" data-loadername="会员列表">
                                        <span class="menu-text">会员列表</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo U('Admin/Vip/message');?>" data-loader="App-loader" data-loadername="通知中心">
                                <i class="menu-icon glyphicon glyphicon-envelope"></i>
                                <span class="menu-text">通知中心</span>
                            </a>
                        </li><?php endif; ?>
                    <?php if(in_array(($withdraw), is_array($useroath)?$useroath:explode(',',$useroath))): ?><li>
                            <a href="#" class="menu-dropdown">
                                <i class="menu-icon glyphicon glyphicon-check"></i>
                                <span class="menu-text"> 财务管理 </span>
                                <i class="menu-expand"></i>
                            </a>
                            <ul class="submenu">
                                <li>
                                    <a href="<?php echo U('Admin/Vip/txorder',array('status'=>'1'));?>" data-loader="App-loader" data-loadername="提现订单管理-新订单">
                                        <i class="glyphicon glyphicon-usd"></i>
                                        <span class="menu-text">新申请</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/Vip/txorder',array('status'=>'2'));?>" data-loader="App-loader" data-loadername="提现订单管理-提现完成">
                                        <i class="glyphicon glyphicon-ok"></i>
                                        <span class="menu-text">提现完成</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/Vip/txorder',array('status'=>'0'));?>" data-loader="App-loader" data-loadername="提现订单管理-提现取消">
                                        <i class="glyphicon glyphicon-remove"></i>
                                        <span class="menu-text">提现取消</span>
                                    </a>
                                </li>
                            </ul>
                        </li><?php endif; ?>
                    <?php if(in_array(($order), is_array($useroath)?$useroath:explode(',',$useroath))): ?><li>
                            <a href="#" class="menu-dropdown">
                                <i class="menu-icon glyphicon glyphicon-leaf"></i>
                                <span class="menu-text"> 订单管理 </span>
                                <i class="menu-expand"></i>
                            </a>
                            <ul class="submenu">
                                <li>
                                    <a href="<?php echo U('Admin/Shop/orderReport');?>" data-loader="App-loader" data-loadername="当天订单报表">
                                        <i class="glyphicon glyphicon-paperclip"></i>
                                        <span class="menu-text">当天订单报表</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/Shop/order',array('status'=>9));?>" data-loader="App-loader" data-loadername="订单管理-当天购买记录">
                                        <i class="glyphicon glyphicon-paperclip"></i>
                                        <span class="menu-text">当天订单记录</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/Shop/order');?>" data-loader="App-loader" data-loadername="订单管理-全部订单">
                                        <i class="glyphicon glyphicon-asterisk"></i>
                                        <span class="menu-text">全部</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/Shop/order',array('status'=>'1'));?>" data-loader="App-loader" data-loadername="订单管理-未支付订单">
                                        <i class="glyphicon glyphicon-heart-empty"></i>
                                        <span class="menu-text">未付款</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/Shop/order',array('status'=>'2'));?>" data-loader="App-loader" data-loadername="订单管理-已支付订单">
                                        <i class="glyphicon glyphicon-usd"></i>
                                        <span class="menu-text">已付款</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/Shop/order',array('status'=>'3'));?>" data-loader="App-loader" data-loadername="订单管理-已发货订单">
                                        <i class="glyphicon glyphicon-export"></i>
                                        <span class="menu-text">已发货</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/Shop/order',array('status'=>'4'));?>" data-loader="App-loader" data-loadername="订单管理-退货中订单">
                                        <i class="glyphicon glyphicon-import"></i>
                                        <span class="menu-text">退货中</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/Shop/order',array('status'=>'7'));?>" data-loader="App-loader" data-loadername="订单管理-退货完成">
                                        <i class="glyphicon glyphicon-saved"></i>
                                        <span class="menu-text">退货完成</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/Shop/order',array('status'=>'5'));?>" data-loader="App-loader" data-loadername="订单管理-交易完成">
                                        <i class="glyphicon glyphicon-ok"></i>
                                        <span class="menu-text">交易完成</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/Shop/order',array('status'=>'6'));?>" data-loader="App-loader" data-loadername="订单管理-交易关闭">
                                        <i class="glyphicon glyphicon-remove"></i>
                                        <span class="menu-text">交易关闭</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/Shop/order',array('status'=>'0'));?>" data-loader="App-loader" data-loadername="订单管理-交易取消">
                                        <i class="glyphicon glyphicon-trash"></i>
                                        <span class="menu-text">交易取消</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/Shop/order',array('status'=>'8'));?>" data-loader="App-loader" data-loadername="订单管理-满7天订单">
                                        <i class="glyphicon glyphicon-ok"></i>
                                        <span class="menu-text">满7天</span>
                                    </a>
                                </li>
                            </ul>
                        </li><?php endif; ?>
                    <!--日志中心-->
                    <?php if(in_array(($log), is_array($useroath)?$useroath:explode(',',$useroath))): ?><li>
                            <a href="#" class="menu-dropdown">
                                <i class="menu-icon glyphicon glyphicon-list-alt"></i>
                                <span class="menu-text"> 日志中心 </span>
                                <i class="menu-expand"></i>
                            </a>
                            <ul class="submenu">
                                <li>
                                    <a href="<?php echo U('Admin/Log/vip');?>" data-loader="App-loader" data-loadername="会员日志">
                                        <span class="menu-text">会员日志</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/Log/order');?>" data-loader="App-loader" data-loadername="订单日志">
                                        <span class="menu-text">订单日志</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/Log/fx');?>" data-loader="App-loader" data-loadername="分销日志">
                                        <span class="menu-text">分销日志</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/Log/tj');?>" data-loader="App-loader" data-loadername="推广日志">
                                        <span class="menu-text">推广日志</span>
                                    </a>
                                </li>
                            </ul>
                        </li><?php endif; ?>

                    <?php if(in_array(($artical), is_array($useroath)?$useroath:explode(',',$useroath))): ?><li>
                            <a href="#" class="menu-dropdown">
                                <i class="menu-icon glyphicon glyphicon-book"></i>
                                <span class="menu-text"> 文章管理 </span>
                                <i class="menu-expand"></i>
                            </a>
                            <ul class="submenu">
                                <li>
                                    <a href="<?php echo U('Admin/Artical/index');?>" data-loader="App-loader" data-loadername="文章管理">
                                        <span class="menu-text">文章管理</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/Artical/add');?>" data-loader="App-loader" data-loadername="添加/修改文章">
                                        <span class="menu-text">添加/修改文章</span>
                                    </a>
                                </li>
                            </ul>
                        </li><?php endif; ?>

                    <!--插件管理-->
                    <?php if(in_array(($addon), is_array($useroath)?$useroath:explode(',',$useroath))): ?><li>
                            <a href="#" class="menu-dropdown">
                                <i class="menu-icon glyphicon glyphicon-inbox"></i>
                                <span class="menu-text"> 插件管理 </span>
                                <i class="menu-expand"></i>
                            </a>
                            <ul class="submenu">
                                <li>
                                    <a href="<?php echo U('Admin/Addons/index');?>" data-loader="App-loader" data-loadername="插件管理">
                                        <span class="menu-text">插件管理</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/Mail/index');?>" data-loader="App-loader" data-loadername="邮件设置">
                                        <span class="menu-text">邮件设置</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/Card/index');?>" data-loader="App-loader" data-loadername="会员卡设置">
                                        <span class="menu-text">会员卡设置</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/Coupon/index');?>" data-loader="App-loader" data-loadername="微信卡券核销">
                                        <span class="menu-text">微信卡券核销</span>
                                    </a>
                                </li>
                            </ul>
                        </li><?php endif; ?>

                    <?php if(in_array(($score), is_array($useroath)?$useroath:explode(',',$useroath))): ?><li>
                            <a href="#" class="menu-dropdown">
                                <i class="menu-icon glyphicon glyphicon-gift"></i>
                                <span class="menu-text"> 积分管理 </span>
                                <i class="menu-expand"></i>
                            </a>
                            <ul class="submenu">
                                <li>
                                    <a href="<?php echo U('Admin/Score/order');?>" data-loader="App-loader" data-loadername="积分订单管理">
                                        <span class="menu-text">积分订单管理</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/Score/index');?>" data-loader="App-loader" data-loadername="积分商品管理">
                                        <span class="menu-text">积分商品管理</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/Score/add');?>" data-loader="App-loader" data-loadername="添加/修改积分商品">
                                        <span class="menu-text">添加/修改积分商品</span>
                                    </a>
                                </li>
                            </ul>
                        </li><?php endif; ?>

                    <?php if(!in_array(($employee), is_array($useroath)?$useroath:explode(',',$useroath))): ?><li>
                            <a href="<?php echo U('Admin/Index/help');?>" data-loader="App-loader" data-loadername="帮助中心">
                                <i class="menu-icon glyphicon glyphicon-book"></i>
                                <span class="menu-text">帮助中心</span>
                            </a>
                        </li><?php endif; ?>

                    <!--员工-->
                    <?php if(in_array(($employee), is_array($useroath)?$useroath:explode(',',$useroath))): ?><li>
                            <a href="#" class="menu-dropdown">
                                <i class="menu-icon glyphicon glyphicon-list-alt"></i>
                                <span class="menu-text"> 我的分销 </span>
                                <i class="menu-expand"></i>
                            </a>
                            <ul class="submenu">
                                <li>
                                    <a href="#" class="menu-dropdown">
                                        <i class="menu-icon fa fa-user"></i>
                                        <span class="menu-text"> 会员中心 </span>
                                        <i class="menu-expand"></i>
                                    </a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="<?php echo U('Admin/Employee/vipCenter');?>" data-loader="App-loader" data-loadername="我的会员列表">
                                                <span class="menu-text">我的会员列表</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="menu-dropdown">
                                        <i class="menu-icon glyphicon glyphicon-leaf"></i>
                                        <span class="menu-text"> 订单管理 </span>
                                        <i class="menu-expand"></i>
                                    </a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="<?php echo U('Admin/Employee/orderCenter',array('status'=>9));?>" data-loader="App-loader" data-loadername="订单管理-当天购买记录">
                                                <i class="glyphicon glyphicon-paperclip"></i>
                                                <span class="menu-text">当天订单记录</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo U('Admin/Employee/orderCenter');?>" data-loader="App-loader" data-loadername="订单管理-全部订单">
                                                <i class="glyphicon glyphicon-asterisk"></i>
                                                <span class="menu-text">全部</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo U('Admin/Employee/orderCenter',array('status'=>'1'));?>" data-loader="App-loader" data-loadername="订单管理-未支付订单">
                                                <i class="glyphicon glyphicon-heart-empty"></i>
                                                <span class="menu-text">未付款</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo U('Admin/Employee/orderCenter',array('status'=>'2'));?>" data-loader="App-loader" data-loadername="订单管理-已支付订单">
                                                <i class="glyphicon glyphicon-usd"></i>
                                                <span class="menu-text">已付款</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo U('Admin/Employee/orderCenter',array('status'=>'3'));?>" data-loader="App-loader" data-loadername="订单管理-已发货订单">
                                                <i class="glyphicon glyphicon-export"></i>
                                                <span class="menu-text">已发货</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo U('Admin/Employee/orderCenter',array('status'=>'4'));?>" data-loader="App-loader" data-loadername="订单管理-退货中订单">
                                                <i class="glyphicon glyphicon-import"></i>
                                                <span class="menu-text">退货中</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo U('Admin/Employee/orderCenter',array('status'=>'7'));?>" data-loader="App-loader" data-loadername="订单管理-退货完成">
                                                <i class="glyphicon glyphicon-saved"></i>
                                                <span class="menu-text">退货完成</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo U('Admin/Employee/orderCenter',array('status'=>'5'));?>" data-loader="App-loader" data-loadername="订单管理-交易完成">
                                                <i class="glyphicon glyphicon-ok"></i>
                                                <span class="menu-text">交易完成</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo U('Admin/Employee/orderCenter',array('status'=>'6'));?>" data-loader="App-loader" data-loadername="订单管理-交易关闭">
                                                <i class="glyphicon glyphicon-remove"></i>
                                                <span class="menu-text">交易关闭</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo U('Admin/Employee/orderCenter',array('status'=>'0'));?>" data-loader="App-loader" data-loadername="订单管理-交易取消">
                                                <i class="glyphicon glyphicon-trash"></i>
                                                <span class="menu-text">交易取消</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo U('Admin/Employee/orderCenter',array('status'=>'8'));?>" data-loader="App-loader" data-loadername="订单管理-满7天订单">
                                                <i class="glyphicon glyphicon-ok"></i>
                                                <span class="menu-text">满7天</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li><?php endif; ?>
                </ul>
                <!-- /Sidebar Menu -->
            </div>
            <!-- /Page Sidebar -->
            <!-- Page Content -->
            <div class="page-content">
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb" id="App-bread">
                        <li>
                            <i class="fa fa-home"></i>
							<?php if(in_array(($employee), is_array($useroath)?$useroath:explode(',',$useroath))): ?><a href="<?php echo U('Admin/Index/main');?>" data-loader="App-loader" data-loadername="主控面板">首页</a><?php endif; ?>
							<?php if(in_array(($employee), is_array($useroath)?$useroath:explode(',',$useroath))): ?><a href="<?php echo U('Admin/Employee/main');?>" data-loader="App-loader" data-loadername="主控面板">首页</a><?php endif; ?>
                        </li>
                        <li class="active">主控面板</li>
                    </ul>
                </div>
                <!-- /Page Breadcrumb -->
                <!-- Page Header -->
                <div class="page-header position-relative">
                    <div class="header-title">
                        <h1 id="App-loader-title">
                                主控面板
                        </h1>
                    </div>
                    <!--Header Buttons-->
                    <div class="header-buttons">
                        <a class="sidebar-toggler" href="#">
                            <i class="fa fa-arrows-h"></i>
                        </a>
                        <a class="refresh" id="refresh-toggler" href="<?php echo U('Admin/Index/mian');?>" data-loader="App-loader" data-name="主控面板">
                            <i class="glyphicon glyphicon-refresh"></i>
                        </a>
                        <a class="fullscreen" id="fullscreen-toggler" href="#">
                            <i class="glyphicon glyphicon-fullscreen"></i>
                        </a>
                    </div>
                    <!--Header Buttons End-->
                </div>
                <!-- /Page Header -->
                <!-- Page Body -->
                <div id="App-loader" class="page-body">
                    <!-- 主加载器 -->
                </div>
                <!--图片库-->
                <!-- /Page Body -->
            </div>
            <!-- /Page Content -->
        </div>
        <!-- /Page Container -->
        <!-- Main Container -->
    </div>
    <!--全局隐藏控件-->
    <div class="hide">
        <!--AppReloader-->
        <a id="App-reloader" href="#">JOELRELOADER</a>
        <!--单图片上传控件-->
        <iframe style="display:none" name='doupimg_frame' id="doupimg_frame"></iframe>
        <form enctype="multipart/form-data" action="<?php echo U('Admin/Upload/doupimg');?>" method="post" id="App-form-upimg" target="doupimg_frame">
            <input type="file" id="jupimg" name="jupimg" accept="image/*">
        </form>
    </div>
    <!--基础脚本-->
    <script src="/Public/Admin/js/jquery-2.0.3.min.js"></script>
    <script src="/Public/Admin/js/bootstrap.min.js"></script>
    <script src="/Public/Admin/js/beyond.min.js"></script>
    <script src="/Public/Admin/js/toastr/toastr.js"></script>
    <script src="/Public/Admin/js/validation/bootstrapValidator.js"></script>
    <script src="/Public/Admin/js/bootbox/bootbox.js"></script>
    <!--统计脚本-->
    <script src="/Public/Admin/js/charts/easypiechart/jquery.easypiechart.js"></script>
    <script src="/Public/Admin/js/charts/easypiechart/easypiechart-init.js"></script>
    <script src="/Public/Admin/js/charts/flot/jquery.flot.js"></script>
    <script src="/Public/Admin/js/charts/flot/jquery.flot.orderBars.js"></script>
    <script src="/Public/Admin/js/charts/flot/jquery.flot.tooltip.js"></script>
    <script src="/Public/Admin/js/charts/flot/jquery.flot.resize.js"></script>
    <script src="/Public/Admin/js/charts/flot/jquery.flot.selection.js"></script>
    <script src="/Public/Admin/js/charts/flot/jquery.flot.crosshair.js"></script>
    <script src="/Public/Admin/js/charts/flot/jquery.flot.stack.js"></script>
    <script src="/Public/Admin/js/charts/flot/jquery.flot.time.js"></script>
    <script src="/Public/Admin/js/charts/flot/jquery.flot.pie.js"></script>
    <script src="/Public/Admin/js/charts/chartjs/Chart.js"></script>
    <!--百度地图类库-->
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=StGl5qQsPbsCVg8tizbLbkOw"></script>
    <!--App全局API-->
    <script src="/Public/Admin/js/appapi.js"></script>
    <script type="text/javascript">
    var RootPath = "";
    var AppLoaderTitle = $('#App-loader-title');
    var AppLoaderRefresh = $('#refresh-toggler');
    var AppLoaderReloader = $('#App-reloader');
    var AppSbLi = $('.sidebar-menu li');
    //主导航高亮
    var AppSideli = $('.submenu li');
    //公共设置HTML内容方法
    function setHtml(id, html) {
        $(id).html(html);
    }

    //初始化主框架加载后的操作
    function initFrame() {
            var AppLoaderTitle = $('#App-loader-title');
            var AppLoaderRefresh = $('#refresh-toggler');
            var AppLoaderReloader = $('#App-reloader');
            //处理Frame加载后的所有链接
            var links = $('a');
            $(links).on('click', function() {

                //$(AppSideli).removeClass('active');
                var loader = $(this).data('loader');
                var tourl = $(this).attr('href');
                var name = $(this).data('loadername');
                $(AppLoaderReloader).attr('href', tourl).data('loader', loader).data('loadername', name);
                if (loader) {
                    //高亮主导航
                    var li = $(this).parent('li');
                    //$(li).siblings().removeClass('active');
                    $(AppSbLi).removeClass('active');
                    $(li).addClass('active');
                    //如果是主Loader
                    if (loader == 'App-loader') {
                        setHtml(AppLoaderTitle, name);
                        $(AppLoaderRefresh).attr('href', tourl).data('loader', 'App-loader').data('loadername', name);

                    }
                    $('#' + loader).empty().load(tourl, function() {
                        initLoader(loader);
                    });
                    return false;
                }
            });
        }
        //初始化Loader加载后的操作
    function initLoader(loader) {
            //加载Widget特效
            InitiateWidgets();
            //处理Loader加载后的所有链接
            var loaderlinks = $('#' + loader + ' a');
            $(loaderlinks).on('click', function() {
                var loader = $(this).data('loader');
                var tourl = $(this).attr('href');
                var search = $(this).data('search');
                var name = $(this).data('loadername');
                //特殊按钮特效--全部阻止
                var type = $(this).data('type');

                if (type) {
                    switch (type) {
                        case 'del':
                            var content = $(this).data('content');
                            if (!content) content = "确定要删除吗？";
                            var toajax = $(this).data('ajax');
                            var funok = function() {
                                var callok = function() {
                                    //成功删除后刷新
                                    $(AppLoaderReloader).trigger('click');
                                    return false;
                                };
                                var callerr = function() {
                                    //拦截错误
                                    return false;
                                };
                                $.App.ajax('post', toajax, 'nodata', callok, callerr);
                            }
                            $.App.confirm(content, funok);
                            return false;
                            //
                            break;
                        case 'confirm':
                            var content = $(this).data('content');
                            if (!content) content = "确定要更改吗？";
                            var toajax = $(this).data('ajax');
                            var funok = function() {
                                var callok = function() {
                                    //成功删除后刷新
                                    $(AppLoaderReloader).trigger('click');
                                    return false;
                                };
                                var callerr = function() {
                                    //拦截错误
                                    return false;
                                };
                                $.App.ajax('post', toajax, 'nodata', callok, callerr);
                            }
                            $.App.confirm(content, funok);
                            return false;
                            //
                            break;
                        default:
                            $.App.alert('danger', '此Type属性系统未定义！');
                            break;
                    }

                } else {
                    //不存在特殊效果时，绑定Reloader刷新地址
                    $(AppLoaderReloader).attr('href', tourl).data('loader', loader).data('loadername', name).data('search', search);
                }

                if (loader) {
                    //如果是主Loader
                    if (loader == 'App-loader') {
                        setHtml(AppLoaderTitle, name);
                        $(AppLoaderRefresh).attr('href', tourl).data('loader', 'App-loader').data('loadername', name);
                    }
                    //如果有搜索条件绑定
                    if (search) {
                        var sv = $('#' + search).serialize();
                        if (sv) {
                            tourl = tourl + '?' + sv;
                        }
                    }
                    $('#' + loader).empty().load(tourl, function() {
                        initLoader(loader);
                    });
                    return false;
                }
            });

        }
        //公共设置面包屑导航
    function setBread(html) {
        $('#App-bread').empty().html(html);
        $('#App-bread a').on('click', function() {
            var loader = $(this).data('loader');
            var name = $(this).data('loadername');
            var tourl = $(this).attr('href');
            setHtml(AppLoaderTitle, name);
            $(AppLoaderRefresh).attr('href', tourl).data('loader', 'App-loader').data('loadername', name);
            $('#' + loader).empty().load(tourl, function() {
                initLoader(loader);
            });
            return false;
        });
    }

    //App默认图片上传管理器
    function appImguploader(fbid, isall) {
            //fbid 查找带回的文本框ID,全局唯一
            //isall 多图,单图模式
            $.ajax({
                type: "post",
                url: "<?php echo U('Admin/Upload/indeximg');?>",
                data: {
                    'fbid': fbid,
                    'isall': isall
                },
                dataType: "json",
                //beforeSend:$.App.loading(),
                success: function(mb) {
                    //$.App.loading();
                    bootbox.dialog({
                        message: mb,
                        title: "图片上传管理器",
                        className: "modal-darkorange",
                        buttons: {
                            "追加": {
                                className: "btn-success",
                                callback: function() {
                                    if (isall == 'false') {
                                        $('#' + fbid).val($('#App-uploader-findback').val());
                                    } else {
                                        $('#' + fbid).val($('#' + fbid).val() + $('#App-uploader-findback').val());
                                    }
                                }
                            },
                            "替换": {
                                className: "btn-blue",
                                callback: function() {
                                    $('#' + fbid).val($('#App-uploader-findback').val());
                                }
                            },
                            "取消": {
                                className: "btn-danger",
                                callback: function() {}
                            }
                        }
                    });
                },
                error: function(xhr) {
                    $.App.alert('danger', '通讯失败！请重试！');
                }
            });
            return false;
        }
        //App默认图片预览器
    function appImgviewer(fbid) {
            //fbid 查找带回的文本框ID,全局唯一
            //isall 多图,单图模式
            var ids = $('#' + fbid).val();
            if (!ids) {
                $.App.alert('danger', '您还没有图片可以预览！');
                return false;
            }
            $.ajax({
                type: "post",
                url: "<?php echo U('Admin/Index/appImgviewer');?>",
                data: {
                    'ids': ids
                },
                dataType: "json",
                success: function(mb) {
                    bootbox.dialog({
                        message: mb,
                        title: "图片预览器",
                        className: "modal-darkorange",
                        buttons: {
                            success: {
                                label: "确定",
                                className: "btn-blue",
                                callback: function() {}
                            },
                            "取消": {
                                className: "btn-danger",
                                callback: function() {}
                            }
                        }
                    });
                },
                error: function(xhr) {
                    $.App.alert('danger', '通讯失败！请重试！');
                }
            });
            return false;
        }
        //App默认百度地图控件
    function baiduDitu(fbaddid, fblngid, fblatid) {
            var fbadd = $('#' + fbaddid);
            var fblng = $('#' + fblngid);
            var fblat = $('#' + fblatid);
            if (!fbadd || !fblng || !fblat) {
                $.App.alert('danger', '回调控件不完整!');
            }
            //fbid 查找带回的文本框ID,全局唯一      
            $.ajax({
                type: "post",
                url: "<?php echo U('Admin/Public/baiduDitu');?>",
                data: {
                    'address': $(fbadd).val(),
                    'lng': $(fblng).val(),
                    'lat': $(fblat).val()
                },
                dataType: "json",
                success: function(mb) {
                    bootbox.dialog({
                        message: mb,
                        title: "百度地图控件",
                        className: "modal-darkorange",
                        buttons: {
                            success: {
                                label: "确定",
                                className: "btn-blue",
                                callback: function() {
                                    $(fbadd).val($('#baiduDituaddress').val());
                                    $(fblng).val($('#baiduDitulng').val());
                                    $(fblat).val($('#baiduDitulat').val());
                                }
                            },
                            "取消": {
                                className: "btn-danger",
                                callback: function() {}
                            }
                        }
                    });
                },
                error: function(xhr) {
                    $.App.alert('danger', '通讯失败！请重试！');
                }
            });
            return false;
        }
        //App默认SKU管理器
    function appSkuloader(ids, fbid) {
        //ids  已选择的属性
        //fbid 查找带回的文本框ID,全局唯一
        $.ajax({
            type: "post",
            url: "<?php echo U('Admin/Shop/skuLoader');?>",
            data: {
                'ids': ids,
                'fbid': fbid
            },
            dataType: "json",
            //beforeSend:$.App.loading(),
            success: function(mb) {
                //$.App.loading();
                bootbox.dialog({
                    message: mb,
                    title: "商品Sku管理器",
                    className: "modal-darkorange",
                    buttons: {
                        "取消": {
                            className: "btn-danger",
                            callback: function() {}
                        }
                    }
                });
            },
            error: function(xhr) {
                $.App.alert('danger', '通讯失败！请重试！');
            }
        });
        return false;
    }
    $(document).ready(function() {
        initFrame();
        //初始化图表
        //InitiateEasyPieChart.init();
        $('#AppHome').trigger('click');

    });
    </script>
</body>
<!--  /Body -->

</html>