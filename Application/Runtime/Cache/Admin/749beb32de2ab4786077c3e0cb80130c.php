<?php if (!defined('THINK_PATH')) exit();?><div class="row">
    <div class="col-xs-12 col-md-12">
        <div class="widget">
            <div class="widget-header bg-blue">
                <i class="widget-icon fa fa-arrow-down"></i>
                <span class="widget-caption">会员列表</span>
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
                <div class="table-toolbar">
                    <button href="#" class="btn btn-primary" id="sendMsg">
                        <i class="fa fa-comment-o"></i>发送消息
                    </button>
                    <!-- <button href="#" class="btn btn-sky" id="sendMail">
						<i class="fa fa-envelope-o"></i>发送邮件
					</button> -->
                    <button href="javascript:void(0)" class="btn btn-primary" id="exportVip"><i class="fa fa-save"></i>导出会员数据</button>
                    <a href="#" class="hide" id="sendMsgbtn" data-loader="App-loader" data-loadername="会员消息"></a>
                    <a href="#" class="hide" id="sendMailbtn" data-loader="App-loader" data-loadername="发送邮件"></a>
                    <div class="pull-right">
                        <form id="App-search">
                            <label style="margin-bottom: 0px;">
                                <input name="plv" type="search" class="form-control input-sm" placeholder="会员层级" value="<?php echo ($plv); ?>">
                            </label>
                            <label style="margin-bottom: 0px;">
                                <input name="search" type="search" class="form-control input-sm" placeholder="会员昵称或者手机号" value="<?php echo ($search); ?>">
                            </label>
                            <a href="<?php echo U('Admin/Vip/viplist/');?>" class="btn btn-success" data-loader="App-loader" data-loadername="会员列表" data-search="App-search">
                                <i class="fa fa-search"></i>搜索
                            </a>
                        </form>
                    </div>
                </div>
                <table id="App-table" class="table table-bordered table-hover">
                    <thead class="bordered-darkorange">
                        <tr role="row">
                            <th width="20px">
                                <div class="checkbox" style="margin-bottom: 0px; margin-top: 0px;">
                                    <label style="padding-left: 4px;">
                                        <input type="checkbox" class="App-checkall colored-blue">
                                        <span class="text"></span>
                                    </label>
                                </div>
                            </th>
                            <th width="80px">ID</th>
                            <th width="80px">层级</th>
                            <th width="200px">昵称</th>
                            <th width="100px">下线人数</th>
                            <th width="100px">手机号</th>
                            <th width="100px">电子邮箱</th>
                            <th width="100px">姓名</th>
                            <th width="80px">分销等级</th>
                            <th width="100px">所属员工</th>
                            <th width="100px">账户金额</th>
                            <th width="100px">积分</th>
                            <!--<th width="100px">经验</th>-->
                            <th width="100px">注册时间</th>
                            <th width="100px">最后访问</th>
                            <!--<th width="100px">状态</th>-->
                            <th width="">操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(is_array($cache)): $i = 0; $__LIST__ = $cache;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr id="item<?php echo ($vo["id"]); ?>">
                                <td>
                                    <div class="checkbox" style="margin-bottom: 0px; margin-top: 0px;">
                                        <label style="padding-left: 4px;">
                                            <input name="checkvalue" type="checkbox" class="colored-blue App-check" value="<?php echo ($vo["id"]); ?>">
                                            <span class="text"></span>
                                        </label>
                                    </div>
                                </td>
                                <td class=" sorting_1"><?php echo ($vo["id"]); ?></td>
                                <td class=" "><?php echo ($vo["plv"]); ?></td>
                                <td class=" "><?php echo ($vo["nickname"]); ?></td>
                                <td class=" "><?php echo ($vo["total_xxlink"]); ?></td>
                                <td class=" "><?php echo ($vo["mobile"]); ?></td>
                                <td class=" "><?php echo ($vo["email"]); ?></td>
                                <td class=" "><?php echo ($vo["name"]); ?></td>
                                <td class=" "><?php echo ($vo["fxname"]); ?></td>
                                <td class=" "><?php echo ($vo["employee"]); ?></td>
                                <td class=" "><?php echo ($vo["money"]); ?></td>
                                <td class=" "><?php echo ($vo["score"]); ?></td>
                                <!--<td class=" "><?php echo ($vo["cur_exp"]); ?></td>-->
                                <td class=" "><?php echo (date('Y-m-d',$vo["ctime"])); ?></td>
                                <td class=" "><?php echo (date('Y-m-d',$vo["cctime"])); ?></td>
                                <!--<td class=" "><?php echo ($vo["status"]); ?></td>-->
                                <td class="center "><a href="<?php echo U('Admin/Vip/vipSet/',array('id'=>$vo['id']));?>" class="btn btn-success btn-xs" data-loader="App-loader" data-loadername="会员编辑"><i class="fa fa-edit"></i> 编辑</a>&nbsp;&nbsp;
                                    <button class="btn btn-sky btn-xs App-vippath" data-id="<?php echo ($vo["id"]); ?>" data-path="<?php echo ($vo["path"]); ?>"><i class="fa fa-eye"></i> 层级树</button>
                                    <!-- &nbsp;&nbsp;<a href="<?php echo U('Admin/Vip/vipFxtj/',array('id'=>$vo['id']));?>" class="btn btn-darkorange btn-xs" target="_blank"><i class="fa fa-money"></i> 收益预估</a> -->
                                    <!--&nbsp;&nbsp;<a href="<?php echo U('Admin/vip/message/');?>" class="btn btn-danger btn-xs" data-type = "del" data-ajax="<?php echo U('Admin/vip/messageDel/',array('id'=>$vo['id']));?>" ><i class="fa fa-trash-o"></i> 删除</a>--></td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    </tbody>
                </table>
                <div class="row DTTTFooter">
                    <?php echo ($page); ?>
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
<!--全选特效封装/全部删除-->
<script type="text/javascript">
//全选
var checkall = $('#App-table .App-checkall');
var checks = $('#App-table .App-check');
var trs = $('#App-table tbody tr');
$(checkall).on('click', function() {
    if ($(this).is(":checked")) {
        $(checks).prop("checked", "checked");
    } else {
        $(checks).removeAttr("checked");
    }
});
$(trs).on('click', function() {
    var c = $(this).find("input[type=checkbox]");
    if ($(c).is(":checked")) {
        $(c).removeAttr("checked");
    } else {
        $(c).prop("checked", "checked");
    }
});
$('#sendMsg').on('click', function() {
    var checks = $(".App-check:checked");
    var chk = '';
    $(checks).each(function() {
        chk += $(this).val() + ',';
    });
    if (!chk) {
        $.App.alert('danger', '请选择要发送的对象！');
        return false;
    }
    var tourl = "<?php echo U('Admin/Vip/messageSet');?>" + "/pids/" + chk;
    $('#sendMsgbtn').attr('href', tourl).trigger('click');
});

$('#sendMail').on('click', function() {
    var checks = $(".App-check:checked");
    var chk = '';
    $(checks).each(function() {
        chk += $(this).val() + ',';
    });
    if (!chk) {
        $.App.alert('danger', '请选择要发送的对象！');
        return false;
    }
    var tourl = "<?php echo U('Admin/Vip/mailSet');?>" + "/pids/" + chk;
    $('#sendMailbtn').attr('href', tourl).trigger('click');
});
//会员层级
var btnpath = $('.App-vippath');
$(btnpath).on('click', function() {
    var data = $(this).data('path');
    var id = $(this).data('id');
    $.ajax({
        type: 'post',
        data: {
            'data': data,
            'id': id,
        },
        url: "<?php echo U('Admin/Vip/vipTree');?>",
        async: false,
        dataType: 'json',
        success: function(e) {
            bootbox.dialog({
                message: e.msg,
                title: "会员完整层级展示",
                className: "modal-darkorange",
                buttons: {
                    "取消": {
                        className: "btn-danger",
                        callback: function() {}
                    }
                }
            });
            return false;
        },
        error: function() {
            $.App.alert('danger','通讯失败！');
            return false;
        }
    });
    return false;
});

//导出会员数据
$('#exportVip').on('click', function() {
    var checks = $(".App-check:checked");
    var chk = '';
    $(checks).each(function() {
        chk += $(this).val() + ',';
    });
    window.open("<?php echo U('Admin/Vip/vipExport');?>/id/" + chk);
})
</script>
<!--/全选特效封装-->