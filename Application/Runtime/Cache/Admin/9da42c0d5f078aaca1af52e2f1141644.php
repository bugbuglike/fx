<?php if (!defined('THINK_PATH')) exit();?><style>
body {
    margin: 0;
    padding: 0;
    width: 100%;
    background: #fff;
}

#bodybox {
    margin: 0 auto 10% auto;
    width: 100%;
    max-width: 640px;
}

h2 {
    text-align: center;
}

img {
    width: 95%;
    margin-top: 5%;
    margin-left: 2.5%;
}

.content-div {
    background: #5cb3ff;
    color: #fff;
    padding: 5px 10px;
    border-top-right-radius: 20px;
    border-bottom-right-radius: 20px;
    line-height: 30px;
}

.text-center {
    text-align: center;
}

p {
    margin-left: 10px;
    text-indent: 2em;
}

@media screen and (min-width: 321px) and (max-width: 374px) {}

@media screen and (min-width: 375px) and (max-width: 413px) {}

@media screen and (min-width: 414px) {}
</style>
<div id="bodybox">
    <h2>帮助中心</h2>
    <span class="content-div">第一步：对接公众号URL和Token</span>
    <p>打开后台系统中系统设置项下面的微信设置，找到微信token项以及它下面的那串url地址（注：token类似于密码，token可以自己修改）。</p>
    <img src="/Public/Admin/img/help/image1.png" />
    <p class="text-center">图1 后台token对应位置</p>
    <p>打开微信官方公众后台（https://mp.weixin.qq.com）,登陆自己的公众号，进入到开发者模式模块，启用开发者模式，填写URL和Token两项（就是图1中的相关值）</p>
    <img src="/Public/Admin/img/help/image2.png" />
    <p class="text-center">图2 配置微信后台</p>
    <span class="content-div">第二步：对接appid和AppSecret及微信支付参数</span>
    <p>在微信公众后台可看到该公众号的appid和AppSecret，把这两项复制到后台系统中的对应位置。 微信支付参数设置同上述，将相关信息复制进对应位置。
    </p>
    <img src="/Public/Admin/img/help/image3.png" />
    <p class="text-center">图3 系统后台对应位置</p>
    <img src="/Public/Admin/img/help/image4.png" />
    <p class="text-center">图4 微信appid和AppSecret</p>
    <span class="content-div">第三步：测试是否设置成功</span>
    <p>去到对应公众号，输入测试回复，若返回测试成功，则代表设置成功。</p>
    <span class="content-div">第四步：设置自定义菜单</span>
    <p>建议设置项：</p>
    <p>商城首页：http://<?php echo $_SERVER['HTTP_HOST'];?>/App/Shop/index</p>
    <p>个人中心：http://<?php echo $_SERVER['HTTP_HOST'];?>/App/Vip/index</p>
	<p>我的专属：http://<?php echo $_SERVER['HTTP_HOST'];?>/App/Fx/myqrcode</p>
    <p>订单中心：http://<?php echo $_SERVER['HTTP_HOST'];?>/App/Shop/orderList/sid/0/</p>
    <p>关于我们：http://<?php echo $_SERVER['HTTP_HOST'];?>/App/Vip/about</p>
    <p>卡券中心：http://<?php echo $_SERVER['HTTP_HOST'];?>/App/Vip/card</p>
    <p>申请提现：http://<?php echo $_SERVER['HTTP_HOST'];?>/App/Vip/txOrder</p>
    <p>提现资料：http://<?php echo $_SERVER['HTTP_HOST'];?>/App/Vip/tx</p>
    <p>资料绑定：http://<?php echo $_SERVER['HTTP_HOST'];?>/App/Vip/vipInfo</p>
    <p>地址管理：http://<?php echo $_SERVER['HTTP_HOST'];?>/App/Vip/address</p>
    <p>个人消息：http://<?php echo $_SERVER['HTTP_HOST'];?>/App/Vip/message</p>
    <p>手机端帮助中心：http://<?php echo $_SERVER['HTTP_HOST'];?>/Home/index/help</p>



    <p>推广二维码：设置关键字——推广二维码</p>
	<p>员工二维码：设置关键字——员工二维码</p>
    <p>热销商品：可以去到商城管理中的商品管理，查看到每个商品对应的url</p>
    <p>也可以自己与微信官方公众后台设置好图文信息后，将对应的url地址设置进自定义菜单中。</p>
    <span class="content-div">第五步：设置首次关注回复图片或文字</span>
    <img src="/Public/Admin/img/help/image5.png" />
    <p class="text-center">图5 系统后台对应微信设置</p>
    <p>若需设置首次关注的图片，开启对应功能并上传对应图片。如果没开启，系统会去查询是否设置首次关注对应的描述，如果仍未设置，则不会有系统首次关注的回复。</p>
    <span class="content-div">第六步：设置推广二维码模板背景图片</span>
    <p>在微信管理下面找到推广二维码，按照事例图片设计好模板图片进行上传。</p>
</div>