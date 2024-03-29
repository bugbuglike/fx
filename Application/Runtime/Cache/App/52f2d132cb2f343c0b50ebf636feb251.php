<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <title>通知信息</title>
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
    <style>
    /******rest$通用*******/
    
    html,
    body {
        font-family: Microsoft YaHei, Helvitica, Verdana, Tohoma, Arial, san-serif;
        font-size: 16px;
        margin: 0;
        padding: 0;
        text-decoration: none;
        max-width: 720px;
        width: 100%;
        margin: 0 auto;
    }
    
    * {
        margin: 0;
        padding: 0;
    }
    
    img {
        border: none;
        vertical-align: bottom;
    }
    
    ol,
    ul,
    li {
        list-style: none;
        margin: 0;
        padding: 0;
    }
    
    b,
    em,
    i {
        font-style: normal;
    }
    
    a {
        color: #000000;
        text-decoration: none;
    }
    
    .fl {
        float: left;
        display: inline;
    }
    
    .fr {
        float: right;
        display: inline;
    }
    
    .clr {
        clear: both;
        overflow: hidden;
    }
    /*****字体图标样式******/
    
    @font-face {
        font-family: 'iconfont';
        src: url('/Public/App/iconfont/iconfont.eot');
        /* IE9*/
        
        src: url('/Public/App/iconfont/iconfont.eot?#iefix') format('embedded-opentype'),
        /* IE6-IE8 */
        
        url('/Public/App/iconfont/iconfont.woff') format('woff'),
        /* chrome、firefox */
        
        url('/Public/App/iconfont/iconfont.ttf') format('truetype'),
        /* chrome、firefox、opera、Safari, Android, iOS 4.2+*/
        
        url('/Public/App/iconfont/iconfont.svg#iconfont') format('svg');
        /* iOS 4.1- */
    }
    
    .iconfont {
        font-family: "iconfont" !important;
        font-style: normal;
        -webkit-font-smoothing: antialiased;
        -webkit-text-stroke-width: 0.2px;
        -moz-osx-font-smoothing: grayscale;
    }
    /*****wds_pay_succes样式******/
    
    .pic {
        width: 40%;
        margin: 20% auto 20px auto;
    }
    
    .wabox img {
        width: 100%;
    }
    
    .wabox h1 {
        font-size: 1.2em;
        font-weight: 300;
        text-align: center;
        line-height: 30px;
    }
    
    .order_zt {
        overflow: hidden;
        width: 80%;
        margin: 0 auto;
        padding: 30px 0;
    }
    
    .order_zt p {
        width: 50%;
        text-align: center;
        display: block;
        float: left;
    }
    
    .order_zt a {
        width: 75%;
        margin: 0 auto;
        line-height: 35px;
        font-size: 1em;
        background-color: #f4f4f4;
        background-image: -moz-linear-gradient(center bottom, #f1f0f0 0%, #f9f9f9 100%);
        background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#f9f9f9), to(#f1f0f0));
        display: block;
        border-radius: 3px;
        border: 1px solid #dfdfdf;
        color: #3c3c3c;
    }
    </style>
</head>

<body>
    <div id="wds_pay_succes">
        <div class="wabox">
            <div class="pic" style="display: none">
                <?php if(($status) == "1"): ?><img src="/Public/App/img/paysucces.png">
                    <?php else: ?><img src="/Public/App/img/payerror.png"><?php endif; ?>
            </div>
            <h1><?php echo ($msg); ?></h1>
        </div>
    </div>
</body>

</html>