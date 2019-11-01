<?php if (!defined('THINK_PATH')) exit();?><div class="row">
    <div class="col-lg-4 col-sm-6 col-xs-12">
        <div class="databox databox-lg radius-bordered databox-shadowed databox-graded">
            <div class="databox-left bg-azure">
                <div class="databox-piechart">
                    <div data-toggle="easypiechart" class="easyPieChart" data-barcolor="#fff" data-linecap="butt" data-percent="<?php echo ($newviptotalrate); ?>" data-animate="500" data-linewidth="3" data-size="60" data-trackcolor="#7fe2fa"><span class="white font-90"><?php echo ($newviptotalrate); ?>%</span>
                    </div>
                </div>
            </div>
            <div class="databox-right">
                <span class="databox-number azure">今日：<?php echo ($newvipToday); ?>&nbsp;&nbsp;昨日：<?php echo ($newvipYesterday); ?></span>
                <div class="databox-text darkgray">新增会员
                    <div class="databox-stat bg-azure radius-bordered">
                        <div class="stat-text">环比：<?php echo ($newviprate); ?>%</div>
                        <?php if(($newviprate) > "0"): ?><i class="stat-icon fa fa-arrow-up"></i>
                            <?php else: ?>
                            <i class="stat-icon fa fa-arrow-down"></i><?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="databox databox-xlg radius-bordered databox-shadowed databox-vertical">
            <div class="databox-top bg-blue">
                <span class="databox-header">会员分布【总数：<?php echo ($viptotal); ?>人】</span>
            </div>
            <div class="databox-bottom bg-white no-padding" style=" height: 230px;">
                <div id="vip-chart" class="chart chart"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-6 col-xs-12">
        <div class="databox databox-lg radius-bordered databox-shadowed databox-graded">
            <div class="databox-left bg-orange">
                <div class="databox-piechart">
                    <div data-toggle="easypiechart" class="easyPieChart" data-barcolor="#fff" data-linecap="butt" data-percent="<?php echo ($newordertotalrate); ?>" data-animate="500" data-linewidth="3" data-size="60" data-trackcolor="#fa8872"><span class="white font-90"><?php echo ($newordertotalrate); ?>%</span>
                    </div>
                </div>
            </div>
            <div class="databox-right">
                <span class="databox-number orange">今日：<?php echo ($neworderToday); ?>&nbsp;&nbsp;昨日：<?php echo ($neworderYesterday); ?></span>
                <div class="databox-text darkgray">新增订单
                    <div class="databox-stat bg-orange radius-bordered">
                        <div class="stat-text">环比：<?php echo ($neworderrate); ?>%</div>
                        <?php if(($neworderrate) > "0"): ?><i class="stat-icon fa fa-arrow-up"></i>
                            <?php else: ?>
                            <i class="stat-icon fa fa-arrow-down"></i><?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="databox databox-xlg radius-bordered databox-shadowed databox-vertical">
            <div class="databox-top bg-orange">
                <span class="databox-header">订单分布【总数：<?php echo ($ordertotal); ?>个】</span>
            </div>
            <div class="databox-bottom bg-white no-padding" style=" height: 230px;">
                <div id="order-chart" class="chart chart"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-6 col-xs-12">
        <div class="databox databox-lg radius-bordered databox-shadowed databox-graded">
            <div class="databox-left bg-palegreen">
                <div class="databox-piechart">
                    <div data-toggle="easypiechart" class="easyPieChart" data-barcolor="#fff" data-linecap="butt" data-percent="<?php echo ($yjtotalrate); ?>" data-animate="500" data-linewidth="3" data-size="60" data-trackcolor="#aadc95"><span class="white font-90"><?php echo ($yjtotalrate); ?>%</span>
                    </div>
                </div>
            </div>
            <div class="databox-right">
                <span class="databox-number green">今日：<?php echo ($yjToday); ?>&nbsp;&nbsp;昨日：<?php echo ($yjYesterday); ?></span>
                <div class="databox-text darkgray">新增佣金
                    <div class="databox-stat bg-palegreen radius-bordered">
                        <div class="stat-text">环比：<?php echo ($yjrate); ?>%</div>
                        <?php if(($yjrate) > "0"): ?><i class="stat-icon fa fa-arrow-up"></i>
                            <?php else: ?>
                            <i class="stat-icon fa fa-arrow-down"></i><?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="databox databox-xlg radius-bordered databox-shadowed databox-vertical">
            <div class="databox-top bg-palegreen">
                <span class="databox-header">分销商分布【总数：<?php echo ($viptotal); ?>人】</span>
            </div>
            <div class="databox-bottom bg-white no-padding" style=" height: 230px;">
                <div id="fx-chart" class="chart chart"></div>
            </div>
        </div>
    </div>
</div>
<div style="clear: both;"></div>
<div class="row" style="margin-top: 80px;">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="row">
            <div class="col-xs-12">
                <div class="dashboard-box">
                    <div class="box-header">
                        <div class="deadline">
                            系统运行: <?php echo ($remaindays); ?>&nbsp;天
                        </div>
                    </div>
                    <div class="box-progress">
                        <div class="progress-handle"><?php echo ($_SESSION["CMS"]["set"]["name"]); ?></div>
                        <div class="progress progress-xs progress-no-radius bg-whitesmoke">
                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                            </div>
                        </div>
                    </div>
                    <div class="box-tabbs">
                        <div class="tabbable">
                            <ul class="nav nav-tabs tabs-flat  nav-justified" id="myTab11">
                                <li class="active">
                                    <a data-toggle="tab" href="#viplog">
                                                                    关注日志
                                    </a>
                                </li>
                                <li class="">
                                    <a data-toggle="tab" href="#orderlog">
                                                                支付日志
                                    </a>
                                </li>
                                <li class="">
                                    <a data-toggle="tab" href="#fxlog">
                                                                分销日志
                                    </a>
                                </li>
                                <li class="">
                                    <a data-toggle="tab" href="#tjlog">
                                                                推广日志
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content tabs-flat no-padding">
                                <div id="viplog" class="tab-pane animated fadeInUp active">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="chart no-margin" style="height: 326px;">
                                                <div class="tickets-container" style="background: #FFFFFF;">
                                                    <ul class="tickets-list">
                                                        <?php if(is_array($viplog)): $i = 0; $__LIST__ = $viplog;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="ticket-item">
                                                                <div class="row">
                                                                    <div class="ticket-user col-lg-4 col-sm-12">
                                                                        <img src="<?php echo ($vo["headimgurl"]); ?>" class="user-avatar">
                                                                        <span class="user-name"><?php echo ($vo["fromname"]); ?>[<?php echo ($vo["sex"]); ?>]</span>
                                                                        <span class="user-at">from</span>
                                                                        <span class="user-company"><?php echo ($vo["toname"]); ?></span>
                                                                    </div>
                                                                    <div class="ticket-type  col-lg-1 col-sm-1 col-xs-12">
                                                                        <span class="divider hidden-xs"></span>
                                                                        <span class="type"><?php echo ($vo["event"]); ?></span>
                                                                    </div>
                                                                    <div class="ticket-type  col-lg-4 col-sm-6 col-xs-12">
                                                                        <span class="divider hidden-xs"></span>
                                                                        <span class="type"><?php echo ($vo["country"]); ?>-<?php echo ($vo["province"]); ?>-<?php echo ($vo["city"]); ?></span>
                                                                    </div>
                                                                    <div class="ticket-time  col-lg-2 col-sm-6 col-xs-12">
                                                                        <div class="divider hidden-md hidden-sm hidden-xs"></div>
                                                                        <i class="fa fa-clock-o"></i>
                                                                        <span class="time"><?php echo (date("Y-m-d H:i:s",$vo["ctime"])); ?></span>
                                                                    </div>
                                                                    <?php if(($vo["issub"]) == "1"): ?><div class="ticket-state bg-palegreen">
                                                                            <i class="fa fa-check"></i>
                                                                        </div>
                                                                        <?php else: ?>
                                                                        <div class="ticket-state bg-darkorange">
                                                                            <i class="fa fa-times"></i>
                                                                        </div><?php endif; ?>
                                                                </div>
                                                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="orderlog" class="tab-pane padding-left-5 padding-right-10 animated fadeInUp">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="chart no-margin" style="width: 100%; padding: 0px; position: relative;">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="chart no-margin" style="height: 326px;">
                                                            <div class="tickets-container" style="background: #FFFFFF;">
                                                                <ul class="tickets-list">
                                                                    <?php if(is_array($orderlog)): $i = 0; $__LIST__ = $orderlog;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="ticket-item">
                                                                            <div class="row">
                                                                                <div class="ticket-user col-lg-4 col-sm-12">
                                                                                    <img src="<?php echo ($vo["headimgurl"]); ?>" class="user-avatar">
                                                                                    <span class="user-name"><?php echo ($vo["vipname"]); ?>[<?php echo ($vo["sex"]); ?>]</span>
                                                                                    <span class="user-at">手机</span>
                                                                                    <span class="user-company"><?php echo ($vo["vipmobile"]); ?></span>
                                                                                </div>
                                                                                <div class="ticket-type  col-lg-2 col-sm-3 col-xs-12">
                                                                                    <span class="divider hidden-xs"></span>
                                                                                    <span class="type"><?php switch($vo["paytype"]): case "money": ?>余额支付<?php break;?>
                                    <?php case "alipaywap": ?>支付宝WAP<?php break;?>
                                    <?php case "wxpay": ?>微信支付<?php break; endswitch;?>-<?php echo (date("Y-m-d H:i:s",$vo["paytime"])); ?></span>
                                                                                </div>
                                                                                <div class="ticket-type  col-lg-4 col-sm-6 col-xs-12">
                                                                                    <span class="divider hidden-xs"></span>
                                                                                    <span class="type">订单ID：<?php echo ($vo["id"]); ?>&nbsp;&nbsp;&nbsp;订单总额：<?php echo ($vo["totalprice"]); ?>&nbsp;&nbsp;&nbsp;邮费：<?php echo ($vo["yf"]); ?>&nbsp;&nbsp;&nbsp;实付金额：<?php echo ($vo["payprice"]); ?></span>
                                                                                </div>
                                                                                <div class="ticket-time  col-lg-2 col-sm-6 col-xs-12">
                                                                                    <div class="divider hidden-md hidden-sm hidden-xs"></div>
                                                                                    <i class="fa fa-clock-o"></i>
                                                                                    <span class="time"><?php echo (date("Y-m-d H:i:s",$vo["ctime"])); ?></span>
                                                                                </div>
                                                                                <div class="ticket-state bg-palegreen">
                                                                                    <i class="fa fa-check"></i>
                                                                                </div>
                                                                            </div>
                                                                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="fxlog" class="tab-pane padding-10 animated fadeInUp">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="chart no-margin" style="width: 100%; padding: 0px; position: relative;">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="chart no-margin" style="height: 326px;">
                                                            <div class="tickets-container" style="background: #FFFFFF;">
                                                                <ul class="tickets-list">
                                                                    <?php if(is_array($fxlog)): $i = 0; $__LIST__ = $fxlog;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="ticket-item">
                                                                            <div class="row">
                                                                                <div class="ticket-user col-lg-4 col-sm-12">
                                                                                    <img src="<?php echo ($vo["headimgurl"]); ?>" class="user-avatar">
                                                                                    <span class="user-name"><?php echo ($vo["fromname"]); ?>[<?php echo ($vo["sex"]); ?>]</span>
                                                                                    <span class="user-at">贡献给</span>
                                                                                    <span class="user-company"><?php echo ($vo["toname"]); ?></span>
                                                                                </div>
                                                                                <div class="ticket-type  col-lg-1 col-sm-1 col-xs-12">
                                                                                    <span class="divider hidden-xs"></span>
                                                                                    <span class="type"><?php echo ($vo["event"]); ?></span>
                                                                                </div>
                                                                                <div class="ticket-type  col-lg-4 col-sm-6 col-xs-12">
                                                                                    <span class="divider hidden-xs"></span>
                                                                                    <span class="type">订单ID：<?php echo ($vo["oid"]); ?>&nbsp;&nbsp;&nbsp;订单总额：<?php echo ($vo["fxprice"]); ?>&nbsp;&nbsp;&nbsp;贡献佣金：<?php echo ($vo["fxyj"]); ?></span>
                                                                                </div>
                                                                                <div class="ticket-time  col-lg-2 col-sm-6 col-xs-12">
                                                                                    <div class="divider hidden-md hidden-sm hidden-xs"></div>
                                                                                    <i class="fa fa-clock-o"></i>
                                                                                    <span class="time"><?php echo (date("Y-m-d H:i:s",$vo["ctime"])); ?></span>
                                                                                </div>
                                                                                <?php if(($vo["status"]) == "1"): ?><div class="ticket-state bg-palegreen">
                                                                                        <i class="fa fa-check"></i>
                                                                                    </div>
                                                                                    <?php else: ?>
                                                                                    <div class="ticket-state bg-darkorange">
                                                                                        <i class="fa fa-times"></i>
                                                                                    </div><?php endif; ?>
                                                                            </div>
                                                                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="tjlog" class="tab-pane animated fadeInUp no-padding-bottom " style="padding:20px 20px 0 20px;">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="chart no-margin" style="width: 100%; padding: 0px; position: relative;">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="chart no-margin" style="height: 326px;">
                                                            <div class="tickets-container" style="background: #FFFFFF;">
                                                                <ul class="tickets-list">
                                                                    <?php if(is_array($tjlog)): $i = 0; $__LIST__ = $tjlog;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="ticket-item">
                                                                            <div class="row">
                                                                                <div class="ticket-user col-lg-4 col-sm-12">
                                                                                    <img src="<?php echo ($vo["headimgurl"]); ?>" class="user-avatar">
                                                                                    <span class="user-name"><?php echo ($vo["nickname"]); ?>[<?php echo ($vo["sex"]); ?>]</span>
                                                                                    <span class="user-at">下线</span>
                                                                                    <span class="user-company"><?php echo ($vo["xxnickname"]); ?></span>
                                                                                </div>
                                                                                <div class="ticket-type  col-lg-1 col-sm-1 col-xs-12">
                                                                                    <span class="divider hidden-xs"></span>
                                                                                    <span class="type"><?php echo ($vo["event"]); ?></span>
                                                                                </div>
                                                                                <div class="ticket-type  col-lg-4 col-sm-6 col-xs-12">
                                                                                    <span class="divider hidden-xs"></span>
                                                                                    <span class="type"><?php echo ($vo["msg"]); ?></span>
                                                                                </div>
                                                                                <div class="ticket-time  col-lg-2 col-sm-6 col-xs-12">
                                                                                    <div class="divider hidden-md hidden-sm hidden-xs"></div>
                                                                                    <i class="fa fa-clock-o"></i>
                                                                                    <span class="time"><?php echo (date("Y-m-d H:i:s",$vo["ctime"])); ?></span>
                                                                                </div>
                                                                                <div class="ticket-state bg-palegreen">
                                                                                    <i class="fa fa-check"></i>
                                                                                </div>
                                                                            </div>
                                                                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-days">
                        <div class="row">
                            <div class=" col-lg-2 col-md-2 col-sm-6 col-xs-12">
                                <a class="day-container" href="">
                                    <div class="day"><?php echo ($ordertotal); ?></div>
                                    <div class="month">订单总数</div>
                                    <b class="day-pin"></b>
                                </a>
                            </div>
                            <div class=" col-lg-2 col-md-2 col-sm-6 col-xs-12">
                                <a class="day-container" href="">
                                    <div class="day"><?php echo ($zxl); ?></div>
                                    <div class="month">总销量</div>
                                </a>
                            </div>
                            <div class=" col-lg-2 col-md-2 col-sm-6 col-xs-12">
                                <a class="day-container" href="">
                                    <div class="day">$<?php echo ($zxse); ?></div>
                                    <div class="month">总销售额</div>
                                </a>
                            </div>
                            <div class=" col-lg-2 col-md-2 col-sm-6 col-xs-12">
                                <a class="day-container" href="">
                                    <div class="day">$<?php echo ($zcje); ?></div>
                                    <div class="month">总成交额</div>
                                </a>
                            </div>
                            <div class=" col-lg-2 col-md-2 col-sm-6 col-xs-12">
                                <a class="day-container" href="">
                                    <div class="day">$<?php echo ($zyj); ?></div>
                                    <div class="month">发放佣金</div>
                                </a>
                            </div>
                            <div class=" col-lg-2 col-md-2 col-sm-6 col-xs-12">
                                <a class="day-container " href="">
                                    <div class="day">$<?php echo ($ztx); ?></div>
                                    <div class="month">发放提现</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--<div class="row">
    <div class="col-xs-12 col-md-6 col-lg-6">
        <div class="widget">
            <div class="widget-header ">
                <span class="widget-caption">系统状态</span>
                <div class="widget-buttons">
                    <a href="#" data-toggle="maximize">
                        <i class="fa fa-expand"></i>
                    </a>
                    <a href="#" data-toggle="collapse">
                        <i class="fa fa-minus"></i>
                    </a>
                    <a href="#" data-toggle="dispose">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="widget-body">
                
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-md-6 col-lg-6">
        <div class="widget">
            <div class="widget-header ">
                <span class="widget-caption">销量统计</span>
                <div class="widget-buttons">
                    <a href="#" data-toggle="maximize">
                        <i class="fa fa-expand"></i>
                    </a>
                    <a href="#" data-toggle="collapse">
                        <i class="fa fa-minus"></i>
                    </a>
                    <a href="#" data-toggle="dispose">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="widget-body">
                
            </div>
        </div>
    </div>

</div>-->
<!--面包屑导航封装-->
<div id="tmpbread" style="display: none;"><?php echo ($breadhtml); ?></div>
<script type="text/javascript">
setBread($('#tmpbread').html());
</script>
<!--/面包屑导航封装-->
<!--图表特性封装-->
<script type="text/javascript">
InitiateEasyPieChart.init();
</script>
<!--图表逻辑-->
<script type="text/javascript">
themeprimary = getThemeColorFromCss('themeprimary');
themesecondary = getThemeColorFromCss('themesecondary');
themethirdcolor = getThemeColorFromCss('themethirdcolor');
themefourthcolor = getThemeColorFromCss('themefourthcolor');
themefifthcolor = getThemeColorFromCss('themefifthcolor');
themesixthcolor = '#AC193D';
themeseventhcolor = '#001940';

function labelFormatter(label, series) {
        return "<div style='font-size:8pt; text-align:center; padding:2px; color:white;'>" + label + "<br/>" + Math.round(series.percent) + "%</div>";
    }
    //会员
var vip1 = "<?php echo ($vipsub); ?>"; //已关注
var vip2 = "<?php echo ($vipdissub); ?>"; //未关注
var vipwrap = $("#vip-chart");
var vipdata = [{
    label: "已关注",
    data: [
        [1, vip1]
    ],
    color: themefifthcolor
}, {
    label: "未关注",
    data: [
        [1, vip2]
    ],
    color: themeprimary
}];

$.plot(vipwrap, vipdata, {
    series: {
        pie: {
            show: true,
            radius: 1,
            tilt: 0.5,
            label: {
                show: true,
                radius: 1,
                formatter: labelFormatter,
                background: {
                    opacity: 0.8
                }
            },
            combine: {
                color: "#999",
                threshold: 0.1
            }
        }
    },
    legend: {
        show: false
    }
});
//订单分布
var order0 = "<?php echo ($order0); ?>"; //已取消
var order1 = "<?php echo ($order1); ?>"; //未付款
var order2 = "<?php echo ($order2); ?>"; //已付款
var order3 = "<?php echo ($order3); ?>"; //已发货
var order4 = "<?php echo ($order4); ?>"; //待收货
var order5 = "<?php echo ($order5); ?>"; //交易完成
var order6 = "<?php echo ($order6); ?>"; //交易关闭
var orderwrap = $("#order-chart");
var orderdata = [{
    label: "已取消",
    data: [
        [1, order0]
    ],
    color: themeprimary
}, {
    label: "未付款",
    data: [
        [1, order1]
    ],
    color: themesecondary
}, {
    label: "已付款",
    data: [
        [1, order2]
    ],
    color: themethirdcolor
}, {
    label: "已发货",
    data: [
        [1, order3]
    ],
    color: themefourthcolor
}, {
    label: "待收货",
    data: [
        [1, order4]
    ],
    color: themefifthcolor
}, {
    label: "交易完成",
    data: [
        [1, order5]
    ],
    color: themesixthcolor
}, {
    label: "交易关闭",
    data: [
        [1, order6]
    ],
    color: themeseventhcolor
}];

$.plot(orderwrap, orderdata, {
    series: {
        pie: {
            show: true,
            radius: 1,
            tilt: 0.5,
            label: {
                show: true,
                radius: 1,
                formatter: labelFormatter,
                background: {
                    opacity: 0.8
                }
            },
            combine: {
                color: "#999",
                threshold: 0.1
            }
        }
    },
    legend: {
        show: false
    }
});

//分销分布
var fx1 = "<?php echo ($fx1); ?>"; //花粉
var fx2 = "<?php echo ($fx2); ?>"; //花蜜
var fx3 = "<?php echo ($fx3); ?>"; //花股
var fxwrap = $("#fx-chart");
var fxdata = [{
    label: "普通会员",
    data: [
        [1, fx1]
    ],
    color: themeprimary
}, {
    label: "分销商",
    data: [
        [1, fx2]
    ],
    color: themesecondary
}, {
    label: "花股",
    data: [
        [1, fx3]
    ],
    color: themethirdcolor
}];

$.plot(fxwrap, fxdata, {
    series: {
        pie: {
            show: true,
            radius: 1,
            tilt: 0.5,
            label: {
                show: true,
                radius: 1,
                formatter: labelFormatter,
                background: {
                    opacity: 0.8
                }
            },
            combine: {
                color: "#999",
                threshold: 0.1
            }
        }
    },
    legend: {
        show: false
    }
});
</script>