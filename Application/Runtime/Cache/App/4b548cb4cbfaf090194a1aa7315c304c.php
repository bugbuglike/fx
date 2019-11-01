<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<title><?php echo ($_SESSION['SHOP']['set']['tdname']); ?>中心</title>
	    <meta charset="utf-8" />
		<!--页面优化-->
		<meta name="MobileOptimized" content="320">
		<!--默认宽度320-->
		<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
		<!--viewport 等比 不缩放-->
		<meta http-equiv="cleartype" content="on">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<!--删除苹果菜单-->
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
		<!--默认颜色-->
		<meta name="apple-mobile-web-app-title" content="yes">
		<meta name="apple-touch-fullscreen" content="yes">
		<!--加载全部后 显示-->
		<meta content="telephone=no" name="format-detection" />
		<!--不识别电话-->
		<meta content="email=no" name="format-detection" />
		<link rel="stylesheet" href="/Public/App/css/style.css" />
		<script type="text/javascript" src="/Public/App/js/zepto.min.js"></script>
		<script type="text/javascript" src="/Public/App/js/countUp.js"></script>
        <script type="text/javascript" src="/Public/App/gmu/gmu.min.js"></script>
        <script type="text/javascript" src="/Public/App/gmu/app-basegmu.js"></script>
	</head>
	<body class="back1">
		<div class="home-hd" style="background: url(/Public/App/img/head-bg.png) no-repeat;background-size: 100% 100%;">
			<div class="home-hdc ovflw">
				<div class="fl home-info">
					<p>昵称：<?php echo ($data["nickname"]); ?>--<?php echo ($data["fxname"]); ?></p>
					<p>历史总<?php echo ($_SESSION['SHOP']['set']['yjname']); ?>：<span class="home-jf" id="levelname"><?php echo ($data["total_xxyj"]); ?></span></p>
				</div>
				<div class="clr"></div>
				<div class="home-panel ovflw">
					<div class="fl home-item"><a href="javascript:void(0)" class="home-br text-c"><span id="home-jf"><?php echo ($data["total_xxlink"]); ?><em style="font-size: 0.6em;">人</em></span><span class="home-add" id="add-jf"></span><p>点击链接</p></a></div>
					<div class="fl home-item"><a href="javascript:void(0)" class="home-br text-c"><span id="home-jy"><?php echo ($data["total_xxsub"]); ?><em style="font-size: 0.6em;">人</em></span><span class="home-add" id="add-jy"></span><p>成功关注</p></a></div>
					<div class="fl home-item"><a href="javascript:void(0)" class="text-c"><span><?php echo ($data["total_xxbuy"]); ?><em style="font-size: 0.6em;">次</em></span><p>成功购买</p></a></div>
				</div>
			</div>
		</div>
		<div class="home-cc">
			<a href="#" class="home-lst border-b1 border-t1 ovflw back2" id="mymoneybtn">
				<span class="iconfont fl icon text-c icon-bc1">&#xe6e0</span>
				<span class="home-tt color6">我的<?php echo ($_SESSION['SHOP']['set']['yjname']); ?>：<?php echo ($data["money"]); ?></span>
				<span class="iconfont fr icon-r">&#xe661;</span>
			</a>
			<div class="home-lst2 border-b1 border-t1 back2 ovflw" style="display: none;" id="mymoney">
				<a  href="#" class="border-b1 ovflw home-li">
					<span class="iconfont fl icon text-c icon-bc2">&#xe6ed;</span>
					<span class="home-tt color6">我的<?php echo ($_SESSION['SHOP']['set']['yjname']); ?>：<?php echo ($data["money"]); ?></span>
				</a>
				<a href="#" class="border-b1 ovflw home-li">
					<span class="iconfont fl icon text-c icon-bc3">&#xe6ac;</span>
					<span class="home-tt color6">待收<?php echo ($_SESSION['SHOP']['set']['yjname']); ?>：<?php echo ($data["fxmoney"]); ?></span>
				</a>
				<a href="#"  class="ovflw home-li">
					<span class="iconfont fl icon text-c icon-bc4">&#xe66c;</span>
					<span class="home-tt color6 fl">在审<?php echo ($_SESSION['SHOP']['set']['yjname']); ?>：<?php echo ($data["txmoney"]); ?></span>
				</a>
			</div>
			<div class="home-lst2 border-b1 border-t1 back2 ovflw" id="mygroupbtn">
					<a href="#" class="ovflw home-li">
						<span class="iconfont fl icon text-c icon-bc7">&#xe67c;</span>
						<span class="home-tt color6">我的<?php echo ($_SESSION['SHOP']['set']['tdname']); ?>：<?php echo ($data["total_xxlink"]); ?>人</span>
						<span class="iconfont fr icon-r">&#xe661;</span>
					</a>
			</div>
			<div class="home-lst2 border-b1 border-t1 back2 ovflw" style="display: none;" id="mygroup">
				<a  href="<?php echo U('App/Fx/myuser/type/1');?>" class="border-b1 ovflw home-li">
					<span class="iconfont fl icon text-c icon-bc2">&#xe6cc;</span>
					<span class="home-tt color6"><?php echo ($_SESSION['SHOP']['set']['fx1name']); ?>用户</span>
					<span class="iconfont fr icon-r">&#xe6a3</span>
				</a>
				<a href="<?php echo U('App/Fx/myuser/type/2');?>" class="border-b1 ovflw home-li">
					<span class="iconfont fl icon text-c icon-bc3">&#xe6cc;</span>
					<span class="home-tt color6"><?php echo ($_SESSION['SHOP']['set']['fx2name']); ?>用户</span>
					<span class="iconfont fr icon-r">&#xe6a3</span>
				</a>
				<a href="<?php echo U('App/Fx/myuser/type/3');?>"  class="ovflw home-li">
					<span class="iconfont fl icon text-c icon-bc4">&#xe6cc;</span>
					<span class="home-tt color6 fl"><?php echo ($_SESSION['SHOP']['set']['fx3name']); ?>用户&nbsp;&nbsp;</span>
					<span class="iconfont fr icon-r">&#xe6a3</span>
				</a>
			</div>
			<?php if(($data["isfxgd"]) == "1"): ?><div class="home-lst2 border-b1 border-t1 back2 ovflw">
					<a href="#" class="ovflw home-li">
						<span class="iconfont fl icon text-c icon-bc7">&#xe67c;</span>
						<span class="home-tt color6">花股团队总人数：<?php echo ($data["total_hglink"]); ?>人</span>
					</a>
			</div><?php endif; ?>
			<div class="home-lst2 border-b1 border-t1 back2 ovflw">
				<?php if(($$_SESSION['WAP']['vipset']['ispaihang']) == "1"): ?><a  href="<?php echo U('App/Fx/paihang');?>" class="border-b1 ovflw home-li">
					<span class="iconfont fl icon text-c icon-bc2">&#xe6cc;</span>
					<span class="home-tt color6"><?php echo ($_SESSION['SHOP']['set']['fxname']); ?>收入英雄榜</span>
					<span class="iconfont fr icon-r">&#xe6a3</span>
				</a><?php endif; ?>
				<!--<a  href="<?php echo U('App/Fx/myqrcode');?>" class="ovflw home-li">-->
					<!--<span class="iconfont fl icon text-c icon-bc3">&#xe6b0;</span>-->
					<!--<span class="home-tt color6">我的专属</span>-->
					<!--<span class="iconfont fr icon-r">&#xe6a3</span>-->
				<!--</a>-->
			</div>
			<div class="home-lst2 border-b1 border-t1 back2 ovflw">
				<a href="<?php echo U('App/Fx/dslog');?>" class="border-b1 ovflw home-li">
					<span class="iconfont fl icon text-c icon-bc1">&#xe699;</span>
					<span class="home-tt color6">待收<?php echo ($_SESSION['SHOP']['set']['yjname']); ?></span>
					<span class="iconfont fr icon-r">&#xe6a3</span>
				</a>
				<a href="<?php echo U('App/Fx/fxlog');?>" class="border-b1 ovflw home-li">
					<span class="iconfont fl icon text-c icon-bc2">&#xe6af;</span>
					<span class="home-tt color6">已收<?php echo ($_SESSION['SHOP']['set']['yjname']); ?></span>
					<span class="iconfont fr icon-r">&#xe6a3</span>
				</a>
				<a href="<?php echo U('App/Fx/tjlog');?>" class="ovflw home-li">
					<span class="iconfont fl icon text-c icon-bc3">&#xe6f3;</span>
					<span class="home-tt color6">我的推广</span>
					<span class="iconfont fr icon-r">&#xe6a3</span>
				</a>
			</div>
			<div class="home-lst2 border-b1 border-t1 back2 ovflw mr-b">
				<!--<a href="<?php echo U('App/Fx/about');?>"  class="border-b1 ovflw home-li">-->
					<!--<span class="iconfont fl icon text-c icon-bc6">&#xe699;</span>-->
					<!--<span class="home-tt color6">分销政策</span>-->
					<!--<span class="iconfont fr icon-r">&#xe6a3</span>-->
				<!--</a>-->
				<a  href="tel:<?php echo ($_SESSION['WAP']['shopset']['phone']); ?>" class="ovflw home-li">
					<span class="iconfont fl icon text-c icon-bc5">&#xe652</span>
				<span class="home-tt color6">客服热线 <?php echo ($_SESSION['WAP']['shopset']['phone']); ?></span>
				</a>
			</div>
		</div>
		<div class="insert1"></div>
		<!-- 底部导航 -->
		<div class="dtl-ft ovflw">
			<div class=" fl dtl-icon dtl-bck ovflw">
				<a href="<?php echo U('App/Vip/index');?>">
					<i class="iconfont">&#xe679</i>
				</a>
			</div>
		</div>
		<script type="text/javascript">
			var mygroupbtn=$('#mygroupbtn');
			var mygroup=$('#mygroup');
			$(mygroupbtn).on('click',function(){
				$(mygroup).toggle();
				return false;
			});
			var mymoneybtn=$('#mymoneybtn');
			var mymoney=$('#mymoney');
			$(mymoneybtn).on('click',function(){
				$(mymoney).toggle();
				return false;
			});
		</script>
		<!--通用分享-->
		<script type="text/javascript">
	function onBridgeReady(){
 		WeixinJSBridge.call('hideOptionMenu');
	}

	if (typeof WeixinJSBridge == "undefined"){
	    if( document.addEventListener ){
	        document.addEventListener('WeixinJSBridgeReady', onBridgeReady, false);
	    }else if (document.attachEvent){
	        document.attachEvent('WeixinJSBridgeReady', onBridgeReady); 
	        document.attachEvent('onWeixinJSBridgeReady', onBridgeReady);
	    }
	}else{
	    onBridgeReady();
	}	
</script>

	</body>
</html>