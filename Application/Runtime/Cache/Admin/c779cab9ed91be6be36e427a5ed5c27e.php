<?php if (!defined('THINK_PATH')) exit();?><style type="text/css">
.tree {
    min-height: 20px;
    padding: 19px;
    margin-bottom: 20px;
    background-color: #fbfbfb;
    border: 1px solid #999;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
    -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
}
.tree li {
    list-style-type: none;
    margin: 0;
    padding: 10px 5px 0 5px;
    position: relative;
}

.tree li::before,
.tree li::after {
    content: '';
    left: -20px;
    position: absolute;
    right: auto
}

.tree li::before {
    border-left: 1px solid #999;
    bottom: 50px;
    height: 100%;
    top: 0;
    width: 1px
}

.tree li::after {
    border-top: 1px solid #999;
    height: 20px;
    top: 25px;
    width: 25px
}

.tree li span:first-child {
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border: 1px solid #999;
    border-radius: 5px;
    display: inline-block;
    padding: 3px 8px;
    text-decoration: none
}

.tree li.parent>span {
    cursor: pointer
}

.tree li.leaf>span {
	background: #eee;
    cursor: pointer
}

.tree>ul>li::before,
.tree>ul>li::after {
    border: 0
}

.tree li:last-child::before {
    height: 30px
}

.numPer {
	width: 29px;
	height: 25px;
	line-height: 25px;
	border-radius: 3px;
	margin-left: 1%;
	text-align: center;
	color: #fff;
	font-size: 8px;
	display:inline-block;
}
.redCol {background: #ff6666;}
.blueCol{background: #ff9900;}
.greenCol{background: #99cc66;}
.rouCol{width:15em;background: #666633;}
.eyeCol{background: #99cccc;}
.eyeColCol{color:black;}

</style>
<div class="row">
    <div class="col-xs-12 col-md-12">
        <div class="widget">
            <div class="widget-header bg-blue">
                <i class="widget-icon fa fa-arrow-down"></i>
                <span class="widget-caption">会员层级树</span>
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
                <div class="tree well">
                	<span><sup style="font-size:1em;">* "+"代表存在下级会员，"叶子"代表没有下级会员</sup></span><br />
                	<span><sup style="font-size:1em;">* "红色"代表一级会员数量，"橙色"代表二级会员数量，"青色"代表三级会员的数量</sup></span><br />
                	<span><sup style="font-size:1em;">* 订单量为该会员及其三级下线所有订单量的总和</sup></span>
                	<hr />
                    <ul>
                        <?php if(is_array($cache)): $i = 0; $__LIST__ = $cache;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(($vo["type"]) == "1"): ?><li id="node<?php echo ($vo["id"]); ?>" data-id="<?php echo ($vo["id"]); ?>" class="parent">
                                    <span onclick="javascript:pathopen(this);"><i class="glyphicon glyphicon-plus"></i> <?php echo ($vo["nickname"]); ?></span> <a href="javascript:;"></a>
                                    <span class="numPer redCol"><?php echo ($vo["count1"]); ?></span><span class="numPer blueCol"><?php echo ($vo["count2"]); ?></span><span class="numPer greenCol"><?php echo ($vo["count3"]); ?></span><span class="numPer rouCol"><?php echo ($vo["ocount"]); ?>单：共计<?php echo ($vo["osum"]); ?></span>
                                    <span class="numPer eyeCol" data-id="<?php echo ($vo["id"]); ?>" onclick="userInfo(this)"><i class="glyphicon glyphicon-eye-open"></i></span>
                                </li>
                                <?php else: ?>
                                <li id="node<?php echo ($vo["id"]); ?>" data-id="<?php echo ($vo["id"]); ?>" class="leaf">
                                    <span><i class="glyphicon glyphicon-leaf"></i> <?php echo ($vo["nickname"]); ?></span>
                                    <a href="javascript:;"></a>
                                    <span class="numPer rouCol" style="color:black"><?php echo ($vo["ocount"]); ?>单：共计<?php echo ($vo["osum"]); ?></span>
                                    <span class="numPer eyeCol eyeColCol" data-id="<?php echo ($vo["id"]); ?>" onclick="userInfo(this)"><i class="glyphicon glyphicon-eye-open"></i></span>
                                </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--面包屑导航封装-->
<div id="tmpbread" style="display: none;"><?php echo ($breadhtml); ?></div>
<script type="text/javascript">
setBread($('#tmpbread').html());
</script>
<!--/面包屑导航封装-->
<script type="text/javascript">
//会员层级
function pathopen(o) {
	var temp = $(o).parent();
	if(temp.hasClass('parent-plus')){
		temp.children('ul').slideUp('fast',function(){
			temp.children('ul').remove();
		});
		temp.removeClass('parent-plus');
	}else{
	    var id = temp.data('id');
	    $.ajax({
	        type: 'post',
	        data: {
	            'vipid': id,
	        },
	        url: "<?php echo U('Admin/Vip/vipTrack');?>",
	        async: false,
	        dataType: 'json',
	        success: function(e) {
	            var temp1 = $(e.msg);
	            temp1.hide();
	            $('#node'+e.id+':last').append(temp1);
	            temp1.slideDown('fast',function(){
	            	return;
	            });
	            return false;
	        },
	        error: function() {
	            $.App.alert('danger', '通讯失败！');
	            return false;
	        }
	    });
	    temp.addClass('parent-plus')
	    return false;
	}
}

function userInfo(o) {
	var object = $(o);
	var id = object.data('id');
	if(!id){
		$.App.alert('danger','通信失败！');
	}else{
	    $.ajax({
	        type: 'post',
	        data: {
	            'id': id,
	        },
	        url: "<?php echo U('Admin/Vip/vipInfo');?>",
	        async: false,
	        dataType: 'json',
	        success: function(e) {
	        	bootbox.dialog({
	                message: e.msg,
	                title: "个人信息",
	                className: "modal-darkorange",
	                buttons: {
	                    "关闭": {
	                        className: "btn-danger",
	                        callback: function() {}
	                    }
	                }
	            });
	            return false;
	        },
	        error: function() {
	            $.App.alert('danger', '通讯失败！');
	        }
	    });
	    return false;
	}
}


</script>