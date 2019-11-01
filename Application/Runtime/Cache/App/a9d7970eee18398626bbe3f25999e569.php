<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <title>购物车</title>
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
<body class="back2 color6">
		<div class="bsk-hd ovflw">
			<span class="bsk-hj"><i class="bak-sum">共 <b id="totalnum"><?php echo ($totalnum); ?></b> 件商品</i>合计：<em class="fonts18 color3">￥<i id="totalprice1"><?php echo ($totalprice); ?></i></em></span>
			<span class="fr ads-btn fonts9 back3" style="display: block;text-align: center;border-radius: 3px;line-height: 18px" id="clearbasket"><i class="iconfont">&#xe6b4</i>清空</span>
		</div>
		<div class="bsk-cc">
			<div class="border-t1">
			<ul class="ovflw" id="allgoods">
				<?php if(is_array($cache)): foreach($cache as $key=>$vo): ?><li class="ovflw border-b1">
						<div class="fl bsk-del goodsdel" data-id="<?php echo ($vo["id"]); ?>"><i class="iconfont fl">&#xe658</i></div>
						<div class="fl ovflw bsk-rgt">
							<div class="bsk-img fl"><img src="<?php echo ($vo["pic"]); ?>"/></div>
							<h3 class="bsk-tt font-visib"><?php echo ($vo["name"]); ?></h3>
							<p class="bsk-sx"><?php echo ($vo["skuattr"]); ?></p>
							<p class="bsk-prc color3">￥<?php echo ($vo["price"]); ?></p>	
							<p class="bsk-sx" style="visibility: hidden;">[库存：<?php echo ($vo["total"]); ?>]</p>	
							<div class="bsk-ipt ovflw"><p class="bsk-item" data-id="<?php echo ($vo["id"]); ?>" data-goodsid='<?php echo ($vo["goodsid"]); ?>' data-sku='<?php echo ($vo["sku"]); ?>' data-num='<?php echo ($vo["num"]); ?>' data-total='<?php echo ($vo["total"]); ?>' data-price='<?php echo ($vo["price"]); ?>' style="display: none;"></p><span class="fl text-c bsk-dec">-</span><input type="text" value="<?php echo ($vo["num"]); ?>" class="text-c fl bsk-total" disabled="disabled"/><span class="fl text-c bsk-add">+</span></div>
						</div>
					</li><?php endforeach; endif; ?>				
			</ul>
			</div>
		</div>
		<div class="insert1"></div>
		<div class="dtl-ft ovflw">
				<div class=" fl dtl-icon dtl-bck ovflw">
					<a href="<?php echo ($basketlasturl); ?>">
						<i class="iconfont">&#xe679</i>
					</a>
				</div>
				<a href="#" class="fr ads-btn fonts9 back3" id="makeorder">确认</a>
				<span class="fr ads-sum"><em class="fonts9">合计：</em><em class="fonts1">￥<i id="totalprice2"><?php echo ($totalprice); ?></i></em></span>
		</div>

		<!--封装购物车-->
		<script type="text/javascript">
			var totalprice1=$('#totalprice1');
			var totalprice2=$('#totalprice2');
			var totalnum=$('#totalnum');
			var allgoods=$('#allgoods');
			var goodsdec=$('.bsk-dec');
			var goodsadd=$('.bsk-add');
			var goodsdel=$('.goodsdel');
			var basketurl="<?php echo ($basketurl); ?>";
			var basketloginurl="<?php echo ($basketloginurl); ?>";
			var basketlasturl="<?php echo ($basketlasturl); ?>";
			var lasturlencode="<?php echo ($lasturlencode); ?>";
			$(goodsadd).on('click',function(){
				var num=Number($(this).parent().find('.bsk-total').val());
				var left=Number($(this).parent().find('.bsk-item').data('total'));
				var total=(num+1)<=left?(num+1):left;
				var item=$(this).parent().find('.bsk-item');
				$(this).parent().find('.bsk-total').val(total);
				$(item).data('num',total);
				var pc=Number($(totalprice1).html())+Number($(item).data('price'));
				$(totalprice1).html(pc);
				$(totalprice2).html(pc);
				$(totalnum).html(Number($(totalnum).html())+1);
				return false;
			});
			$(goodsdec).on('click',function(){
				var num=Number($(this).parent().find('.bsk-total').val());
				var total=(num-1)>=1?(num-1):1;
				var item=$(this).parent().find('.bsk-item');
				$(this).parent().find('.bsk-total').val(total);
				$(item).data('num',total);
				if((num-1)>=1){
					var pc=Number($(totalprice1).html())-Number($(item).data('price'));
					$(totalprice1).html(pc);
					$(totalprice2).html(pc);
					var nm=Number($(totalnum).html())-1;
					$(totalnum).html(nm);
				}				
				return false;
			});
			//购物车删除
			$('.goodsdel').on('click',function(){
				var tourl="<?php echo U('App/Shop/delbasket',array('sid'=>0));?>";
				var dt=$(this).data('id');
				var tt=$(this);
				$.ajax({
					type:"post",
					url:tourl,
					dataType:'json',
					data:{'id':dt},
					success:function(info){
						window.location.href=basketurl;
						App_gmuMsg(info['msg']);
						return false;
					},
					error:function(xh,o){
						App_gmuMsg('通讯失败！请重试！');
						return false;
					}
				});
				
			});
			//购物车清空
			$('#clearbasket').on('click',function(){
				var items=$('.bsk-item');
				if(!$(items).length){
					App_gmuMsg('您的购物车是空的，请先挑选商品!');
					return false;
				}
				var tourl="<?php echo U('App/Shop/clearbasket',array('sid'=>0));?>";
				$.ajax({
					type:"post",
					url:tourl,
					dataType:'json',
					data:'nodata',
					success:function(info){
						if(info['status']==3){
							var fun=function(){
								window.location.href=basketloginurl;
							}
							App_gmuMsg(info['msg'],fun);
							return false;
						}else if(info['status']==2){
							$(totalprice1).html(0);
							$(totalprice2).html(0);
							$(totalnum).html(0);
							$(allgoods).remove();
							App_gmuMsg(info['msg']);
							return false;
						}else{
							App_gmuMsg(info['msg']);
							return false;
						}
					},
					error:function(xh,o){
						App_gmuMsg('通讯失败！请重试！');
						return false;
					}
				});
				
			});
			//生成订单
			$('#makeorder').on('click',function(){
				var items=$('.bsk-item');
				//var dt=new Array();
				//var dt='';
				var dt=new Object();
				var tourl="<?php echo U('App/Shop/checkbasket',array('sid'=>0));?>";
				//保证订单生成页的返回
				var orderurl="<?php echo U('App/Shop/orderMake',array('sid'=>0,'lasturl'=>$lasturlencode));?>";
				if(!$(items).length){
					App_gmuMsg('您的购物车是空的，请先挑选商品!');
					return false;
				}
				$(items).each(function(){
					var id=$(this).data('id');
					var num=$(this).data('num');
					dt[id]=num;
				});
				$.ajax({
					type:"post",
					url:tourl,
					dataType:'json',
					data:dt,
					success:function(info){
						if(info['status']==3){
							var fun=function(){
								window.location.href=basketloginurl;
							}
							App_gmuMsg(info['msg'],fun);
							return false;
						}else if(info['status']==2){
							var fun=function(){
								window.location.href=basketurl;
							}
							App_gmuMsg(info['msg'],fun);
							return false;
						}else if(info['status']==1){
							var fun=function(){
								window.location.href=orderurl;
							}
							App_gmuMsg(info['msg'],fun);
							return false;
						}else{
							App_gmuMsg(info['msg']);
							return false;
						}
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