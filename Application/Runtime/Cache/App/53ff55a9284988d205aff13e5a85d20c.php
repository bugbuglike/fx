<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <title><?php echo ($cache["name"]); ?></title>
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
		<link rel="stylesheet" href="/Public/App/css/appslider.css" />
	    <!--组件依赖js begin-->
	    <script src="/Public/App/js/zepto.min.js"></script>
	    <!--组件依赖js end-->		
		<script type="text/javascript" src="/Public/App/gmu/gmu.min.js"></script>
        <script type="text/javascript" src="/Public/App/gmu/app-basegmu.js"></script>
        <script type="text/javascript" src="/Public/App/js/appslider.min.js"></script>
    	<!--追入购物车角标-->
		<style>
		.dtl-shp{position: relative;}
		.dtl-shp b{position: absolute; padding: 4px; font-size: 0.5em; line-height: 0.5em; background: #FF0000; color: #FFFFFF; right: 0px; border-radius: 30px;}
		</style>
</head>
<body class="back1">
		<div class="mr-b back2">
			<?php if(!empty($appalbum)): ?><div id="App-slider">
					<ul>
						<?php if(is_array($appalbum)): foreach($appalbum as $key=>$vo): ?><li><a href="#"><img src="<?php echo ($vo["imgurl"]); ?>"></a></li><?php endforeach; endif; ?>					
					</ul>
					<div class="dot">
						<?php if(is_array($appalbum)): foreach($appalbum as $key=>$vo): ?><span></span><?php endforeach; endif; ?>
   					</div>
			</div><?php endif; ?>
			<?php if(empty($appalbum)): if(!empty($apppic)): ?><img src="<?php echo ($apppic["imgurl"]); ?>" width="100%"><?php endif; endif; ?>
			<div class="dtl-c border-b1 ovflw fonts9">
				<div class="dtl-tt color6 "><?php echo ($cache["name"]); ?></div>
				<div class="dtl-prc border-b1">
					<em class="dtl-prc1 color3">￥<i id="goods-price"><?php echo ($cache["price"]); ?></i></em><em class="color3"></em>&nbsp;&nbsp;<em class="dtl-prc2">￥<?php echo ($cache["oprice"]); ?></em>
					<em class="fr dtl-sel">已售<?php if(($cache["issells"]) == "1"): echo ($cache["dissells"]); else: echo ($cache["sells"]); endif; ?></em>
				</div>
				<div class="dtl-lbl ovflw">
					<?php if(is_array($cache["label"])): $i = 0; $__LIST__ = $cache["label"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(($vo) != ""): ?><span class='fl margin2'><i class="iconfont">&#xe657</i>&nbsp;<?php echo ($vo); ?></span><?php endif; endforeach; endif; else: echo "" ;endif; ?>
				</div>
			</div>
		</div>
		
		<div class="dtl-prt back2 mr-b fonts9 border-t1 border-b1">
			<?php if(($cache["issku"]) == "1"): ?><div id="sku-wrap">
					<?php if(is_array($skuinfo)): foreach($skuinfo as $key=>$vo): ?><div class="sku" data-attr="">
						<p class="dtl-pty"><?php echo ($vo["attrlabel"]); ?>：</p>
						<div class="dtl-col ovflw">
							   <?php if(is_array($vo["allitems"])): foreach($vo["allitems"] as $key=>$vo2): if(!empty($vo2["checked"])): ?><span data-attr = "<?php echo ($vo2["path"]); ?>"><?php echo ($vo2["name"]); ?></span><?php endif; endforeach; endif; ?>
						</div>
					</div><?php endforeach; endif; ?>
				</div><?php endif; ?>
			<p class="dtl-pty">数量：</p>
			<div class="ovflw dtl_num fl">
				<a href="#" class="dtl_mar1" style="width: 22%" id="goods-dec">-</a>
				<input type="text" value="1" style="width:30%" class="fl dtl_input dtl_mar1" id="goods-total" disabled="disabled"/>
				<a href="#" class="" style="width: 22%" id="goods-add">+</a>
			</div>
			<span class="fr dtl-sy">剩余：<em id="goods-num"><?php echo ($cache["num"]); ?></em>件</span>
			<span id="finalsku" data-sku = "" data-skuattr="" style="display: none;"></span>
			<div class="clr"></div>
		</div>
		
		<div class="dtl-prt back2 fonts9 border-t1">
			<?php echo (htmlspecialchars_decode($cache["content"])); ?>
		</div>
		<div class="insert"></div>
		<div class="dtl-ft ovflw">
			<div class=" fl dtl-icon dtl-bck ovflw">
				<a href="<?php echo U('App/Shop/index');?>" class="">
					<i class="iconfont">&#xe679</i>
				</a>
			</div>
			<div class="dtl-btns">
				<a href="#" class="fl dtl-btn dtl-buy" id="fastbuy">立即购买</a>
				<a href="#" class="fl dtl-btn dtl-bke" id="addtocart">加入购物车</a>
			</div>
			<div class=" fr dtl-icon ovflw dtl-shp">
				<a href="<?php echo U('App/Shop/basket/',array('sid'=>0,'lasturl'=>$lasturl));?>" class="" id="basket">
					<i class="iconfont">&#xe6af</i><b id="basketnum"><?php echo ($basketnum); if(empty($basketnum)): ?>0<?php endif; ?></b>
				</a>
			</div>
		</div>
		<!--全局封装-->
		<script type="text/javascript">
			var goodsid="<?php echo ($cache["id"]); ?>";
			var issku="<?php echo ($cache["issku"]); ?>";
			var vipid="<?php echo ($_SESSION["WAP"]["vipid"]); ?>";
			var loginback="<?php echo ($loginback); ?>";
		</script>
		<!--封装图集-->
		<?php if(!empty($appalbum)): ?><script type="text/javascript">
		 Zepto(function($){		 	
			$('#App-slider').swipeSlide({
				autoSwipe : true,
        		lazyLoad : false,
        		speed : 3000
    			},function(i){
        		$('#App-slider .dot').children().eq(i).addClass('cur').siblings().removeClass('cur');
    		});
   		 });
		</script><?php endif; ?>
		<!--封装SKU-->
		<script type="text/javascript">
			var goodsid="<?php echo ($cache["id"]); ?>";
			var skujson=$.parseJSON('<?php echo ($skujson); ?>');
			var skuwrap=$('#sku-wrap');
			var allsku=$('.sku');
			var allskuattr=$('.sku span');
			var finalsku=$('#finalsku');
			var goodsprice=$('#goods-price');
			var goodsnum=$('#goods-num');
			$(allskuattr).on('click',function(){
				var fasku=$(this).parent().parent('.sku');
				var fa=$(this).parent();
				var son=$(fa).find('span');
				$(fasku).data('attr',$(this).data('attr'));
				$(son).css({'background':'#FFFFFF','color':'#636363','border':'1px solid #e5e5e5'});
				$(this).css({'background':'#f7194d','color':'#FFFFFF','border':'1px solid #f7194d'});
				var str='';
				var totalsku=0;
				var totalattr=0;
				$(allsku).each(function(){
					var dt=$(this).data('attr');
					if(dt){
						str=str+dt+'-';
						totalattr=totalattr+1;
					}
					totalsku=totalsku+1;
				});
				str=str.substring(0,str.length-1);
				if(totalsku==totalattr){
					str=goodsid+'-'+str;
					$tmpsku=skujson[str];
					$(finalsku).data('sku',$tmpsku['sku']);
					$(finalsku).data('skuattr',$tmpsku['skuattr']);
					$(goodsnum).html($tmpsku['num']);
					$(goodsprice).html($tmpsku['price']);
				}
				
			});
		</script>
		<!--封装购物车-->
		<script type="text/javascript">
			var goodsnum=$('#goods-num');
			var goodsdec=$('#goods-dec');
			var goodsadd=$('#goods-add');
			var goodstotal=$('#goods-total');
			var goodsprice=$('#goods-price');
			var addtocart=$('#addtocart');
			var fastbuy=$('#fastbuy');
			var basketnum=$('#basketnum');
			$(goodsadd).on('click',function(){
				var num=Number($(goodstotal).val());
				var left=Number($(goodsnum).html());
				var total=(num+1)<=left?(num+1):left;
				$(goodstotal).val(total);
				return false;
			});
			$(goodsdec).on('click',function(){
				var num=Number($(goodstotal).val());
				var total=(num-1)>=1?(num-1):1;
				$(goodstotal).val(total);
				return false;
			});
			$(addtocart).on('click',function(){
				var goodsnum=Number($('#goods-num').html());
				var num=Number($(goodstotal).val());
				var finalsku=$('#finalsku');
				//sku模式
				if(issku=='1'){
					if(goodsnum-num<=0){
						App_gmuMsg('该属性产品库存不足！请调整购买数量或选择其他属性！');
						return false;
					}
					if(!$(finalsku).data('sku')){
						App_gmuMsg('请选择产品属性！');
						return false;
					}
				}else{
					if(goodsnum-num<=0){
						App_gmuMsg('该产品库存不足！请调整购买量或选择其他产品！');
						return false;
					}
				}
				if(!vipid){
					var fun=function(){
						window.location.href=loginback;
					}
					App_gmuMsg('您还未登录，2秒后自动跳转登陆界面！',fun);
					return false;
				}
				var sku=$(finalsku).data('sku');
				var skuattr=$(finalsku).data('skuattr');
				var price=$(goodsprice).html();
				var num=$(goodstotal).val();
				var dt={'sid':0,'goodsid':goodsid,'vipid':vipid,'sku':sku,'num':num};
				$.ajax({
					type:"post",
					url:"<?php echo U('App/Shop/addtobasket');?>",
					dataType:'json',
					data:dt,
					success:function(info){if(info['status']){App_gmuMsg(info['msg']);$(basketnum).html(info['total']);}else{App_gmuMsg('发生未知错误,请重新尝试！');}return false;},
					error:function(xh,obj){
						App_gmuMsg('通讯失败，请重试！');
					}
				});
				return false;
			});
			//立刻购买特效
			$(fastbuy).on('click',function(){
				var goodsnum=Number($('#goods-num').html());
				var num=Number($(goodstotal).val());
				var finalsku=$('#finalsku');
				//sku模式
				if(issku=='1'){
					if(goodsnum-num<=0){
						App_gmuMsg('该属性产品库存不足！请调整购买量或选择其他属性！');
						return false;
					}
					if(!$(finalsku).data('sku')){
						App_gmuMsg('请选择产品属性！');
						return false;
					}
				}else{
					if(goodsnum-num<=0){
						App_gmuMsg('该产品库存不足！请调整购买量或选择其他属性！');
						return false;
					}
				}
				if(!vipid){
					var fun=function(){
						window.location.href=loginback;
					}
					App_gmuMsg('您还未登录，2秒后自动跳转登陆界面！',fun);
					return false;
				}
				var sku=$(finalsku).data('sku');
				var skuattr=$(finalsku).data('skuattr');
				var price=$(goodsprice).html();
				var num=$(goodstotal).val();
				var dt={'sid':0,'goodsid':goodsid,'vipid':vipid,'sku':sku,'num':num};
				//保证订单生成页的返回
				var orderurl="<?php echo U('App/Shop/orderMake',array('sid'=>0,'lasturl'=>$lasturl));?>";
				var fun=function(){
								window.location.href=orderurl;
				}
				$.ajax({
					type:"post",
					url:"<?php echo U('App/Shop/fastbuy');?>",
					dataType:'json',
					data:dt,
					success:function(info){if(info['status']){App_gmuMsg(info['msg'],fun);}else{App_gmuMsg('发生未知错误,请重新尝试！');}return false;},
					error:function(xh,obj){
						App_gmuMsg('通讯失败，请重试！');
					}
				});
				return false;
			});
		</script>
		<!--通用分享-->
		<!--新版分享特效-->
<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script>
	var share_url = "http://<?php echo ($_SERVER['HTTP_HOST']); ?>/App/Shop/goods/ppid/<?php echo ($_SESSION['WAP']['vipid']); ?>/id/<?php echo ($cache["id"]); ?>";
	var share_title="<?php echo ($cache["name"]); ?>";
	var share_content="<?php echo ($cache["summary"]); ?>";
	var share_img="<?php echo ($_SESSION['WAP']['shopset']['url']); echo ($apppic["imgurl"]); ?>";
	
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
  
  wx.ready(function () {
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
	      trigger: function (res) {
	        //alert('用户点击发送给朋友');
	      },
	      success: function (res) {
	        //alert('已分享');
	      },
	      cancel: function (res) {
	        //alert('已取消');
	      },
	      fail: function (res) {
	        //alert(JSON.stringify(res));
	      }
	    });
	    //分享到朋友圈
	    wx.onMenuShareTimeline({
	      title: share_title,
	      link: share_url,
	      imgUrl: share_img,
	      trigger: function (res) {
	        //alert('用户点击分享到朋友圈');
	      },
	      success: function (res) {
	        //alert('已分享');
	      },
	      cancel: function (res) {
	        //alert('已取消');
	      },
	      fail: function (res) {
	        //alert(JSON.stringify(res));
	      }
	    });
	    //分享到QQ
	    wx.onMenuShareQQ({
	      title: share_title,
	      desc: share_content,
	      link: share_url,
	      imgUrl: share_img,
	      trigger: function (res) {
	        //alert('用户点击分享到QQ');
	      },
	      complete: function (res) {
	        //alert(JSON.stringify(res));
	      },
	      success: function (res) {
	        //alert('已分享');
	      },
	      cancel: function (res) {
	        //alert('已取消');
	      },
	      fail: function (res) {
	        //alert(JSON.stringify(res));
	      }
	    });
  });
</script>
	</body>
</html>