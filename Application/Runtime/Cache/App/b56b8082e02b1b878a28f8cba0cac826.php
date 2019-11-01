<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>

<head>
    <title><?php echo ($_SESSION['WAP']['shopset']['name']); ?></title>
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
    <!--组件依赖js begin-->
    <script src="/Public/App/js/zepto.min.js"></script>
    <script src="/Public/App/js/fx.js"></script>
    <script src="/Public/App/js/fx_methods.js"></script>
	
    <script type="text/javascript" src="/Public/App/gmu/iscroll.js"></script>
    <script type="text/javascript" src="/Public/App/gmu/gmu.min.js"></script>
    <script type="text/javascript" src="/Public/App/gmu/widget.js"></script>
    <script type="text/javascript" src="/Public/App/gmu/navigator.js"></script>
    <script type="text/javascript" src="/Public/App/gmu/scrollable.js"></script>
    <!--组件依赖js end-->
    <!--轮播js begin-->
    <script src="/Public/App/js/tool.js"></script>
    <script src="/Public/App/js/swipe.js"></script>
	
    <style>
    <style> .pp-follow {
        padding: 0.2em 0px;
        width: 100%;
        background: #e4dcd1;
        display: block;
    }
    
    .p-fopic {
        margin-left: 1%;
        float: left;
        width: 12.5%;
        border-radius: 3px;
        margin-top: 2%;
    }
    
    .p-focon {
        float: left;
        margin-left: 2%;
        width: 60%;
        color: #000000;
        font-size: 0.9em;
        line-height: 3.2em;
    }
    
    .p-fofo {
        margin-top: 1.5%;
        margin-left: 1%;
        float: left;
        width: 22.5%;
        color: #fff;
        font-size: 0.9em;
        text-align: center;
        line-height: 2.5em;
        background: #df0e11;
        border-radius: 0.3em;
    }
    
    .p-fofo a,
    .p-fofo a:visited {
        color: #fff;
        font-size: 0.9em;
        text-align: center;
        line-height: 2.5em;
    }
    
    .clear {
        clear: both;
    }
    
    .showImg-div {
        height: 160px;
    }
    
    .showImg {
        width: 100%;
        overflow: hidden;
    }
    
    #wrap {
        width: 100%
    }
    .secondNav{width: 100%;display: none;background: #99CCCC;}
    .secondNav ul{overflow: hidden;padding-top: 10px;}
    .secondNav ul li{float: left;margin-bottom: 10px;margin-left: 20px;text-align: center}
    .secondNav ul li p{margin-top: 5px}
    .secondNav ul li a:link{color: #fff}
    .secondNav ul li a:visited{color: #fff}
    </style>
</head>

<body class="index">
    <div id="tmpshare" style="display: none;">
        <img src="<?php echo ($_SESSION['WAP']['shopset']['sharepic']); ?>">
    </div>
    <div class="zbb_index">
        <header class="ui-banner">
            <div id="slider" class="swipe">
                <ul class="swipe-wrap">
                    <?php if(is_array($indexalbum)): foreach($indexalbum as $key=>$vo): ?><li>
                            <a href="<?php echo ($vo["url"]); ?>"><img src="<?php echo ($vo["imgurl"]); ?>"></a>
                        </li><?php endforeach; endif; ?>
                </ul>
                <div id="slider_on">
                    <ul>
                        <?php if(is_array($indexalbum)): foreach($indexalbum as $key=>$vo): ?><li></li><?php endforeach; endif; ?>
                    </ul>
                </div>
            </div>
        </header>
        <?php if(($showsub) == "1"): ?><div class="pp-follow" style="padding: 0.2em 0px;background-color: rgba(255, 255, 255, 0.4);position: fixed;top: 0;z-index: 2;width:100%">
                <!--<?php if(($showfather) == "1"): ?>-->
                    <!--<img class="p-fopic" src="<?php echo ($father['headimgurl']); ?>">-->
                    <!--<div class="p-focon">来自好友<?php echo ($father['nickname']); ?>的分享</div>-->
                    <!--<?php else: ?>-->
                    <img class="p-fopic" src="<?php echo ($_SESSION['WAP']['shopset']['sharepic']); ?>">
                    <div class="p-focon">欢迎关注哟！</div>
                <!--<?php endif; ?>-->
                <div class="p-fofo"><a href="<?php echo ($_SESSION['SET']['wxsuburl']); ?>">关注我们</a></div>
                <div class="clear"></div>
            </div><?php endif; ?>
        <!-- 每日 -->
        <div class="index-lst">
            <div class="lst-tt"><span class="color11 lst-mr"><?php echo ($group["name"]); ?></span>&nbsp;<span class="color2 fonts2"><?php echo ($group["summary"]); ?></span></div>
            <ul class="lst-ul">
                <?php if(is_array($mrtj)): $i = 0; $__LIST__ = $mrtj;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                        <a href="<?php echo U('App/Shop/goods',array('sid'=>0,'id'=>$vo['id'],'ppid'=>$_SESSION['WAP']['vipid']));?>"><img src="<?php echo ($vo["imgurl"]); ?>">
                            <p><span><?php echo ($vo["name"]); ?></span><span class="fr color3 "><em class="fonts2">￥</em><em class="fonts1"><?php echo ($vo["price"]); ?></em>&nbsp;<span class="plist-xp fonts3">￥<?php echo ($vo["oprice"]); ?></span></span>
                            </p>
                        </a>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
        <!-- 全部列表页 -->
        <div class="index-alst">
            <!-- 导航 -->
            <div id="wrap">
                <div id="nav">
                    <ul>
                        <li <?php if(($type) == "0"): ?>class="ui-state-active"<?php endif; ?> id="ui-li">
                            <a href="<?php echo U('App/Shop/index#nav',array('type'=>0));?>">
                                <div <?php if(($type) == "0"): ?>class="ui-imgs indexiconson"
                                    <?php else: ?>class="ui-imgs indexiconsoff"<?php endif; ?> style="background-image: url('/Public/App/img/index_all.png');" id="ui-imgs"></div>
                                <p class="actvc1" id="ui-tts">全部</p>
                            </a>
                        </li>
                        <?php if(is_array($indexicons)): $i = 0; $__LIST__ = $indexicons;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li <?php if(($vo["ison"]) == "1"): ?>class="ui-state-active"<?php endif; ?> id="ui-li">
                                <a href="<?php echo ($vo["url"]); ?>">
                                    <div <?php if(($vo["ison"]) == "1"): ?>class="ui-imgs indexiconson"
                                        <?php else: ?>class="ui-imgs indexiconsoff"<?php endif; ?> style="background-image: url('<?php echo ($vo["iconurl"]); ?>');" id="ui-imgs"></div>
                                    <p class="actvc1" id="ui-tts"><?php echo ($vo["name"]); ?></p>
                                </a>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
						
                    </ul>
                </div>
            </div>
            <!-- 二级菜单 -->
            <!-- 第一个 -->
            <div class="secondNav">
            </div>

            
            <?php if(is_array($indexicons)): $i = 0; $__LIST__ = $indexicons;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voo): $mod = ($i % 2 );++$i;?><!--儿子存在-->
                <?php if(($voo["son"]) == "1"): ?><div class="secondNav">
                        <ul>
                            <?php if(is_array($voo["sonlist"])): $i = 0; $__LIST__ = $voo["sonlist"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vooo): $mod = ($i % 2 );++$i;?><li <?php if(($vo["ison"]) == "1"): ?>class="ui-state-active"<?php endif; ?> id="ui-li">
                                    <a href="<?php echo U('App/Shop/index#nav',array('type'=>$vooo['id']));?>">
                                        <div <?php if(($vooo["ison"]) == "1"): ?>class="ui-imgs indexiconson"
                                            <?php else: ?>class="ui-imgs indexiconsoff"<?php endif; ?> style="background-image: url('<?php echo ($vooo["iconurl"]); ?>');" id="ui-imgs"></div>
                                        <p class="actvc1" id="ui-tts"><?php echo ($vooo["name"]); ?></p>
                                    </a>
                                </li><?php endforeach; endif; else: echo "" ;endif; ?>
                            <li <?php if(($voo["ison"]) == "1"): ?>class="ui-state-active"<?php endif; ?> id="ui-li">
                                <a href="<?php echo U('App/Shop/index#nav',array('type'=>$voo['id']));?>">
                                    <div <?php if(($voo["ison"]) == "1"): ?>class="ui-imgs indexiconson"
                                        <?php else: ?>class="ui-imgs indexiconsoff"<?php endif; ?> style="background-image: url('<?php echo ($voo["iconurl"]); ?>');" id="ui-imgs"></div>
                                    <p class="actvc1" id="ui-tts">其他</p>
                                </a>
                            </li>
                        </ul>
                    </div>

                <?php else: ?>

                    <div class="secondNav">

                    </div><?php endif; endforeach; endif; else: echo "" ;endif; ?>
        
            <!-- 产品列表 -->
            <div class="index-plist ovflw" id="index-plist">
                <ul class="plist-ul ovflw">
                    <?php if(is_array($cache)): $i = 0; $__LIST__ = $cache;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                            <a href="<?php echo U('App/Shop/goods',array('sid'=>0,'id'=>$vo['id'],'ppid'=>$_SESSION['WAP']['vipid']));?>">
                                <div class="showImg-div"><img class="showImg" src="<?php echo ($vo["imgurl"]); ?>" /></div>
                                <!--图片尺寸：336*259-->
                                <h1 class="plist-tt fonts4 ovflw" style="height:30px;"><?php echo ($vo["name"]); ?></h1>
                                <p><span class="plist-yp color3"><i class="fonts3">￥</i><em class="fonts1"><?php echo ($vo["price"]); ?></em></span>&nbsp;<span class="plist-xp fonts3">￥<?php echo ($vo["oprice"]); ?></span></p>
                            </a>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
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
    </div>
    <!-- 导航栏滚动时锁定在屏幕上方-->
    <script type="text/javascript" src="/Public/App/js/menuFixed.js"></script>
    <script type="text/javascript">
    $('.ui-navul').children().eq(0).find('a').css('color', '#19a5f3');
    //轮播
    $(function() {
        $('#slider').mBanner('slider');
    });
    //导航栏滚动
    $('#nav').navigator();
    //导航栏滚动时锁定在屏幕上方
    window.onload = function() {
        menuFixed('wrap');
    }
    </script>
	<script type="text/javascript">
    $("#nav ul li").tap(function(){
      var t = $(this).index();
      for(var i=0;i<$("#nav ul li").length;++i){
        if(i == t){
          $(".secondNav").eq(i).fadeToggle(900);
        }
        else{
          $(".secondNav").eq(i).hide();
        }
      }
    })
    </script>

    <!--新版分享特效-->
    <script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
    <script>
    //var share_url = "<?php echo ($_SESSION['WAP']['shopset']['url']); ?>/App/Shop/index/ppid/<?php echo ($_SESSION['WAP']['vipid']); ?>/";
    var share_url = "http://<?php echo ($_SERVER['HTTP_HOST']); ?>/App/Shop/index/ppid/<?php echo ($_SESSION['WAP']['vipid']); ?>/";
    var share_title = "<?php echo ($_SESSION['WAP']['shopset']['name']); ?>";
    var share_content = "<?php echo ($_SESSION['SET']['wxsummary']); ?>";
    var share_img = "<?php echo ($_SESSION['WAP']['shopset']['url']); echo ($_SESSION['WAP']['shopset']['sharepic']); ?>";

    wx.config({
        debug: false,
        appId: "<?php echo ($jsapi['appId']); ?>",
        timestamp: "<?php echo ($jsapi['timestamp']); ?>",
        nonceStr: "<?php echo ($jsapi['nonceStr']); ?>",
        signature: "<?php echo ($jsapi['signature']); ?>",
        jsApiList: [
            'checkJsApi',
            'onMenuShareTimeline',
            'onMenuShareAppMessage',
            'onMenuShareQQ',
            'onMenuShareWeibo',
            'hideMenuItems',
            'showMenuItems',
            'hideAllNonBaseMenuItem',
            'showAllNonBaseMenuItem',
            //      'translateVoice',
            //      'startRecord',
            //      'stopRecord',
            //      'onRecordEnd',
            //      'playVoice',
            //      'pauseVoice',
            //      'stopVoice',
            //      'uploadVoice',
            //      'downloadVoice',
            //      'chooseImage',
            //      'previewImage',
            //      'uploadImage',
            //      'downloadImage',
            //      'getNetworkType',
            //      'openLocation',
            //      'getLocation',
            //      'hideOptionMenu',
            //      'showOptionMenu',
            //      'closeWindow',
            //      'scanQRCode',
            //      'chooseWXPay',
            //      'openProductSpecificView',
            //      'addCard',
            //      'chooseCard',
            //      'openCard'
        ]
    });

    wx.ready(function() {
        //开启菜单
        wx.showOptionMenu();
        //隐藏菜单
        //wx.hideOptionMenu();
        //分享给朋友
        wx.onMenuShareAppMessage({
            title: share_title,
            desc: share_content,
            link: share_url,
            imgUrl: share_img,
            trigger: function(res) {
                //alert('用户点击发送给朋友');
            },
            success: function(res) {
                //alert('已分享');
            },
            cancel: function(res) {
                //alert('已取消');
            },
            fail: function(res) {
                //alert(JSON.stringify(res));
            }
        });
        //分享到朋友圈
        wx.onMenuShareTimeline({
            title: share_title,
            link: share_url,
            imgUrl: share_img,
            trigger: function(res) {
                //alert('用户点击分享到朋友圈');
            },
            success: function(res) {
                //alert('已分享');
            },
            cancel: function(res) {
                //alert('已取消');
            },
            fail: function(res) {
                //alert(JSON.stringify(res));
            }
        });
        //分享到QQ
        wx.onMenuShareQQ({
            title: share_title,
            desc: share_content,
            link: share_url,
            imgUrl: share_img,
            trigger: function(res) {
                //alert('用户点击分享到QQ');
            },
            complete: function(res) {
                //alert(JSON.stringify(res));
            },
            success: function(res) {
                //alert('已分享');
            },
            cancel: function(res) {
                //alert('已取消');
            },
            fail: function(res) {
                //alert(JSON.stringify(res));
            }
        });
    });
    </script>
	
</body>

</html>