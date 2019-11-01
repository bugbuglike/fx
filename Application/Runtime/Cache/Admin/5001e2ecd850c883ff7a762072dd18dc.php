<?php if (!defined('THINK_PATH')) exit();?><div class="row">
    <div class="col-xs-12 col-md-12">
        <div class="widget">
            <div class="widget-header bg-blue">
                <i class="widget-icon fa fa-arrow-down"></i>
                <span class="widget-caption">插件管理中心</span>
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
                            <th width="80px">插件标识</th>
                            <th width="80px">插件名称</th>
                            <th width="200px">插件描述</th>
                            <th width="100px">作者</th>
                            <th width="100px">链接</th>
                            <th width="100px">版本</th>
                            <th width="100px">操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(is_array($addons)): $i = 0; $__LIST__ = $addons;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$addons): $mod = ($i % 2 );++$i;?><tr id="item<?php echo ($vo["id"]); ?>">
                                <td>
                                    <div class="checkbox" style="margin-bottom: 0px; margin-top: 0px;">
                                        <label style="padding-left: 4px;">
                                            <input name="checkvalue" type="checkbox" class="colored-blue App-check" value="<?php echo ($vo["id"]); ?>">
                                            <span class="text"></span>
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <?php echo ($addons["name"]); ?>
                                </td>
                                <td>
                                    <?php echo ($addons["title"]); ?>
                                </td>
                                <td>
                                    <?php echo ($addons["description"]); ?>
                                </td>
                                <td>
                                    <div class="btn-group" style="margin: 0px">
                                        <button class="btn btn-primary-outline dropdown-toggle" data-toggle="dropdown">
                                            链接<span class="caret"></span></button>
                                        <div class="dropdown-menu" style="padding: 10px;max-width: none;">
                                            <?php echo ($url); echo u_addons($addons['name'].'://App/Index/index');?>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <?php echo ($addons["author"]); ?>
                                </td>
                                <td>
                                    <?php echo ($addons["version"]); ?>
                                </td>
                                <td>
                                    <style type="text/css">
                                        .action-buttons > a {
                                            margin-left: 5px;
                                        }
                                    </style>
                                    <div class="action-buttons" style="cursor: pointer;">
                                        <a class="table-actions" data-loader="App-loader" data-loadername="插件设置" href="<?php echo ($addons["addons_admin_url"]); ?>">设置</a><a class="table-actions" data-loader="App-loader" data-loadername="插件管理" href="<?php echo ($addons["addons_admin_url"]); ?>">管理</a><a class="table-actions" data-loader="App-loader" data-loadername="插件安装" href="<?php echo ($addons["addons_install_url"]); ?>">安装</a><a class="table-actions" data-loader="App-loader" data-loadername="插件卸载" href="<?php echo ($addons["addons_uninstall_url"]); ?>">卸载</a>
                                    </div>
                                </td>

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

$("#vipAlloc").on('click', function () {
    var checks=$(".App-check:checked");
    if(checks.length==0){
        $.App.alert('danger','请选择要分配的会员！');
        return false;
    }
    if(checks.length>1){
        $.App.alert('danger','单次仅能分配一个会员！');
        return false;
    }
    var vipid=checks.val();

    var msg='请填写员工ID：';
    
    bootbox.prompt(msg, function (result) {
        if (result != null) {
            var data={'vipid':vipid,'empid':result};
            var tourl="<?php echo U('Admin/vip/vipAlloc');?>";
            $.App.ajax('post',tourl,data,function(){$('#refresh-toggler').trigger('click');});
        }
    });
    
});
</script>