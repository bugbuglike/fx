<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <title>个人中心</title>
    <meta charset="utf-8" />
    <!--页面优化-->
    <meta name="MobileOptimized" content="320">
    <!--默认宽度320-->
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
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
            <div style="margin: 16px;">
                <img src="<?php echo ($data["headimgurl"]); ?>" style="width: 62px;height: 62px;border-radius: 50%;box-shadow: 0 0 0 1px #ffffff;float: left">
            </div>
            <div class="fl home-info">
                <p><?php echo ($data["nickname"]); ?> &nbsp&nbsp</p>
                <p style="font-size:0.8em;">ID：<span ><?php echo ($data["id"]); ?></span></p>
                <p style="font-size:0.8em;">等级：<span class="home-jf" id="fxname"><?php echo ($data["fxname"]); ?></span></p>
            </div>
            <div class="fr home-dj">
                <?php if(($isqiandao) == "1"): ?><a href="#" class="home-qd ovflw text-c color3" id="home-qd">
                        <div class="qd-img">
                            <img src="/Public/App/img/qd.png" />
                        </div>
                        <p class="home-dt">签到</p>
                        <div class="home-yq" <?php if(($data["issign"]) == "0"): ?>style="display:none"<?php endif; ?>><i class="iconfont">&#xe645</i></div>
                	</a><?php endif; ?>
            </div>
            <div class="clr"></div>
            <div class="home-panel ovflw">
                <div class="fl home-item"><a href="javascript:void(0)" class="home-br text-c"><span id="home-jf"><?php echo ($data["score"]); ?></span><span class="home-add" id="add-jf"></span><p>我的积分</p></a></div>
                <?php if(($isqiandao) == "1"): ?><div class="fl home-item"><a href="javascript:void(0)" class="home-br text-c"><span id="home-jy"><?php echo ($data["cur_exp"]); ?></span><span class="home-add" id="add-jy"></span><p>我的经验</p></a></div>
                    <?php else: ?>
                    <div class="fl home-item"><a href="javascript:void(0)" class="home-br text-c"><span><?php echo ($data["total_xxlink"]); ?></span><p>我的团队</p></a></div><?php endif; ?>
                <div class="fl home-item"><a href="<?php echo U('App/Vip/card');?>" class="text-c"><span><?php echo ($data["cardnum"]); ?></span><p>我的卡券</p></a></div>
            </div>
        </div>
    </div>
    <div class="home-cc">
        <?php if(($showfather) == "1"): ?><div class="home-lst border-b1 border-t1 ovflw back2" style="text-align: center">您是由【<?php echo ($father["nickname"]); ?>】推荐</div><?php endif; ?>

        <div class="home-lst border-b1 border-t1 ovflw back2">
            <span class="iconfont fl icon text-c icon-bc1">&#xe6e0</span>
            <span class="home-tt color6">我的<?php echo ($_SESSION['SHOP']['set']['yjname']); ?>：<?php echo ($data["money"]); ?></span>
            <a href="<?php echo U('App/Vip/txOrder');?>" style="margin-left: 10px;" class="fr"><span class=" home-cz">提现</span></a>
              <!--<a href="<?php echo U('App/Vip/cz');?>" class="fr"><span class="home-cz">充值</a></span></a>-->
        </div>
        <?php if(($data["isfx"]) == "1"): if(($data["isfxgd"]) == "0"): ?><div class="home-lst2 border-b1 border-t1 back2 ovflw">
                    <a href="<?php echo U('App/Fx/index');?>" class="ovflw home-li">
                        <span class="iconfont fl icon text-c icon-bc7">&#xe67c;</span>
                        <span class="home-tt color6"><?php echo ($_SESSION['SHOP']['set']['tdname']); ?>中心</span>
                        <span class="iconfont fr icon-r">&#xe6a3</span>
                    </a>
                </div><?php endif; endif; ?>
        <?php if(($data["isfxgd"]) == "1"): ?><div class="home-lst2 border-b1 border-t1 back2 ovflw">
                <a href="<?php echo U('App/Fx/index');?>" class="ovflw home-li">
                    <span class="iconfont fl icon text-c icon-bc7">&#xe67c;</span>
                    <span class="home-tt color6"><?php echo ($_SESSION['SHOP']['set']['tdname']); ?>中心</span>
                    <span class="iconfont fr icon-r">&#xe6a3</span>
                </a>
            </div><?php endif; ?>
        <div class="home-lst2 border-b1 border-t1 back2 ovflw">
            <a href="<?php echo U('App/Vip/tx');?>" class="border-b1 ovflw home-li">
                <span class="iconfont fl icon text-c icon-bc1">&#xe6e0</span>
                <span class="home-tt color6">提现资料</span>
                <span class="iconfont fr icon-r">&#xe6a3</span>
            </a>
            <a href="<?php echo U('App/Vip/info');?>" class="border-b1 ovflw home-li">
                <span class="iconfont fl icon text-c icon-bc2">&#xe649</span>
                <span class="home-tt color6">资料绑定</span>
                <span class="iconfont fr icon-r">&#xe6a3</span>
            </a>
            <a href="<?php echo U('App/Vip/address');?>" class="border-b1 ovflw home-li">
                <span class="iconfont fl icon text-c icon-bc3">&#xe651</span>
                <span class="home-tt color6">地址管理</span>
                <span class="iconfont fr icon-r">&#xe6a3</span>
            </a>
            <a href="<?php echo U('App/Vip/message');?>" class="ovflw home-li">
                <span class="iconfont fl icon text-c icon-bc4">&#xe6bc</span>
                <span class="home-tt color6 fl">我的消息&nbsp;&nbsp;</span>
                <?php if($data["unread"] > 0): ?><b><?php echo ($data["unread"]); ?></b><?php endif; ?>
                <span class="iconfont fr icon-r">&#xe6a3</span>
            </a>
        </div>
        <div class="home-lst2 border-b1 border-t1 back2 ovflw mr-b">
            <a href="tel:<?php echo ($_SESSION['WAP']['shopset']['phone']); ?>" class="border-b1 ovflw home-li">
                <span class="iconfont fl icon text-c icon-bc5">&#xe652</span>
                <span class="home-tt color6">客服热线 <?php echo ($_SESSION['WAP']['shopset']['phone']); ?></span>
            </a>
            <a href="<?php echo U('App/Vip/about');?>" class="border-b1 ovflw home-li">
                <span class="iconfont fl icon text-c icon-bc6">&#xe6cc</span>
                <span class="home-tt color6">关于我们</span>
                <span class="iconfont fr icon-r">&#xe6a3</span>
            </a>
            <a href="<?php echo ($_SESSION['SET']['wxsuburl']); ?>" class="ovflw home-li">
                <span class="iconfont fl icon text-c icon-bc7">&#xe6f1</span>
                <span class="home-tt color6">关注我们</span>
                <span class="iconfont fr icon-r">&#xe6a3</span>
            </a>
        </div>
    </div>
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
    <script>
    $('#home-qd').click(function() {
        $.getJSON("<?php echo U('App/Vip/sign');?>", {}, function(e) {
            if (e.status == '1') {
                if (e.data.score > 0) {
                    var jf = parseInt($('#home-jf').text());
                    var add_if = parseInt(e.data.score);

                    $('#add-jf').html("+" + add_if);
                    $('#add-jf').animate({
                        opacity: 0
                    }, 2000, 'ease-out', function() {
                        $('#add-jf').html("")
                    });

                    var jf_obj = new countUp("home-jf", jf + add_if);
                    jf_obj.start();
                }
                if (e.data.exp > 0) {
                    var jy = parseInt($('#home-jy').text());
                    var add_jy = parseInt(e.data.exp);

                    $('#add-jy').html("+" + add_jy);
                    $('#add-jy').animate({
                        opacity: 0
                    }, 2000, 'ease-out', function() {
                        $('#add-jy').html("")
                    });

                    var jy_obj = new countUp("home-jy", jy + add_jy);
                    jy_obj.start();
                }
                $('.home-yq').show();
                $('#levelname').text(e.data.levelname);
            } else {
                zbb_msg(e.msg);
            }
        });
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