<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <title>订单列表</title>
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
	    <!--组件依赖js begin-->
	    <script src="/Public/App/js/zepto.min.js"></script>
	    <!--组件依赖js end-->		
		<script type="text/javascript" src="/Public/App/gmu/gmu.min.js"></script>
        <script type="text/javascript" src="/Public/App/gmu/app-basegmu.js"></script>
    

</head>
<body class="back1">
		<div class="ads-tabs ovflw">
			<a href="<?php echo U('App/Shop/orderList',array('sid'=>0,'type'=>4));?>" class="fl text-c"><span <?php if(($type) == "4"): ?>class='active'<?php endif; ?>>全部</span></a>
			<a href="<?php echo U('App/Shop/orderList',array('sid'=>0,'type'=>1));?>" class="fl text-c "><span <?php if(($type) == "1"): ?>class='active'<?php endif; ?>>待付款</span></a>
			<a href="<?php echo U('App/Shop/orderList',array('sid'=>0,'type'=>2));?>" class="fl text-c"><span <?php if(($type) == "2"): ?>class='active'<?php endif; ?>>待收货</span></a>
			<a href="<?php echo U('App/Shop/orderList',array('sid'=>0,'type'=>3));?>" class="fl text-c"><span <?php if(($type) == "3"): ?>class='active'<?php endif; ?>>已完成</span></a>
		</div>
		<div class="ads-cc">
		<?php if(is_array($cache)): $i = 0; $__LIST__ = $cache;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="ads-lst border-b1 ovflw mr-b back2 color6">
				<p class="ads-tt border-b1"><?php echo ($vo["oid"]); ?><span class="fr color3">
				<?php switch($vo["status"]): case "0": ?>已取消<?php break;?>
					<?php case "1": ?>待付款<?php break;?>
					<?php case "2": ?>待发货<?php break;?>
					<?php case "3": ?>待收货<?php break;?>
					<?php case "4": ?>退货中<?php break;?>
					<?php case "5": ?>已完成<?php break;?>
					<?php case "6": ?>已关闭<?php break;?>
					<?php case "7": ?>退货完成<?php break; endswitch;?></span></p>
				<?php if(is_array($vo["items"])): $i = 0; $__LIST__ = $vo["items"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vt): $mod = ($i % 2 );++$i;?><div class="ads_orinfo ads_padding3 ovflw border-b1">
						<div class="ads_orinfol ovflw fl">
							<div class="ads_or_img fl">
								<!-- 图片大小为147*101 -->
								<img  src="<?php echo ($vt["pic"]); ?>"/>
							</div>
							<h3><?php echo ($vt["name"]); ?></h3>
							<?php if(!empty($vt["skuattr"])): ?><p class="color3 fonts2"><?php echo ($vt["skuattr"]); ?></p><?php endif; ?>
						</div>
						<div class="ads_orprice ovflw ">
							<p ><em class="fonts85">￥</em><em class="fonts18"><?php echo ($vt["price"]); ?></em></p>
							<p class="ads_ornum fonts85">X<?php echo ($vt["num"]); ?></p>
						</div>
					</div><?php endforeach; endif; else: echo "" ;endif; ?>
				<p class=" ads_ortt3 fonts85 ovflw border-b1"><span class="fl">共<?php echo ($vo["totalnum"]); ?>件商品</span><span class="fr">实付：<em class="fonts18">￥<?php echo ($vo["payprice"]); ?></em></span></p>
				<p class=" ads_ortt3 fonts85 ovflw"><span class="fr"><?php if(($vo["status"]) == "1"): ?><a href="<?php echo U('App/Shop/orderCancel',array('sid'=>0,'orderid'=>$vo['id']));?>" class="home-cz">取消订单</a><?php endif; ?><a href="<?php echo U('App/Shop/orderDetail',array('sid'=>0,'orderid'=>$vo['id']));?>" class="home-cz">查看订单</a><?php if(($vo["status"]) == "1"): ?><a href="<?php echo U('App/Shop/pay',array('sid'=>0,'orderid'=>$vo['id'],'paytype'=>$vo['paytype']));?>" class="home-rz">付款</a><?php endif; if(($vo["status"]) == "3"): if(($shopset["isth"]) == "1"): ?><a href="<?php echo U('App/Shop/orderTuihuo',array('sid'=>0,'orderid'=>$vo['id']));?>" class="home-cz">我要退货</a><?php endif; ?><a href="<?php echo U('App/Shop/orderOK',array('sid'=>0,'orderid'=>$vo['id']));?>" class="home-rz">确认收货</a><?php endif; ?></span></p>
			</div><?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
		<?php if(empty($cache)): ?><div class="list_none text-c">
			<p class="color6">暂无订单</p>
		</div><?php endif; ?>
		<!-- 底部导航 -->
				<div class="insert1"></div>
		<div class="ui-nav">
			<ul class="ui-navul ovflw">
				<li><a href="<?php echo U('App/Shop/index');?>" id="fthome"><span class="iconfont">&#xe6b8</span><p class="ui-navtt">首页</p></a></li>
				<li><a href="<?php echo U('App/Shop/orderList',array('sid'=>0));?>" id="ftorder"><span class="iconfont">&#xe699</span><p class="ui-navtt">订单</p></a></li>
				<li><a href="<?php echo U('App/Shop/basket',array('sid'=>0,'lasturl'=>$footlasturl));?>" id="ftbasket"><span class="iconfont">&#xe6af</span><p class="ui-navtt">购物车</p></a></li>
				<li><a href="<?php echo U('App/Vip/index');?>" id="ftvip"><span class="iconfont">&#xe686</span><p class="ui-navtt">个人中心</p></a></li>
			</ul>
		</div>
		<script type="text/javascript">
			 var actname="<?php echo ($actname); ?>";
			 $('#'+actname).css('color','#19a5f3');
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