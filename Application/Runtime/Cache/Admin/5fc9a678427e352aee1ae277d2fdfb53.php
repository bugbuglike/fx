<?php if (!defined('THINK_PATH')) exit();?><div class="row">
    <div class="col-xs-12 col-md-12">
        <div class="widget">
            <div class="widget-header bg-blue">
                <i class="widget-icon fa fa-arrow-down"></i>
                <span class="widget-caption">员工业绩</span>
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
                    <sup>* 所有：包括所有订单总量，其中包含未付款订单</sup><br />
                    <sup>* 成交量：包括已付款、已发货、已完成的订单</sup><br />
                    <sup>* 失败量：包括退货中、已退货、已取消、已关闭的订单</sup><br />
                    <sup>* 成交总额：成交量中所有订单的总金额</sup><br />
                </div>
                <table id="App-table" class="table table-bordered table-hover">
                    <thead class="bordered-darkorange">
                        <tr role="row">
                            <th>ID</th>
                            <th>昵称</th>
                            <th>权重</th>
                            <th>人数</th>
                            <th>所有</th>
                            <th>成交量</th>
                            <th>失败量</th>
                            <th>成交总额</th>
                            <th>当月成交总额</th>
                            <th>当天成交总额</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(is_array($cache)): $i = 0; $__LIST__ = $cache;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr id="item<?php echo ($vo["id"]); ?>">
                                <td><?php echo ($vo["id"]); ?></td>
                                <td><?php echo ($vo["nickname"]); ?></td>
                                <td><?php echo ($vo["weight"]); ?></td>
                                <td><?php echo ($vo["vip_number"]); ?></td>
                                <td><?php echo ($vo["all_order_number"]); ?></td>
                                <td><?php echo ($vo["success_order_number"]); ?></td>
                                <td><?php echo ($vo["failure_order_number"]); ?></td>
                                <td><?php echo ($vo["success_order_payprice"]); ?></td>
                                <td><?php echo ($vo["month_order_payprice"]); ?>元 / <?php echo ($vo["month_order_number"]); ?>单</td>
                                <td><?php echo ($vo["today_order_payprice"]); ?>元 / <?php echo ($vo["today_order_number"]); ?>单</td>
                                <td class="center ">
                                    <a href="<?php echo U('Admin/Employee/vipAchievement/',array('eid'=>$vo['id']));?>" class="btn btn-success btn-xs" data-loader="App-loader" data-loadername="会员明细"><i class="glyphicon glyphicon-eye-open"></i> 会员明细</a>
                                    <!-- <a href="javascript:;" class="btn btn-info btn-xs" data-id="<?php echo ($vo["id"]); ?>" onclick="showQrcode(this);"><i class="glyphicon glyphicon-list-alt"></i> 订单明细</a> -->
                                </td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    </tbody>
                </table>
                <div class="row DTTTFooter">
                    <?php echo ($page); ?>
                </div>
            </div>
            <div id="dialog" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content widget">
                        <div class="widget-header bg-gold modal-header">
                            <span class="widget-caption"><h5>订单状态详细</h5></span>
                            <div class="widget-buttons">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                        </div>
                        <div class="modal-body" >
                        <center>
                            <img id="qrcode" style="width:70%;" src="" />
                            </center>
                        </div>
                        <div class="modal-footer">
                            <a href="javascript:;" class="pull-right btn btn-primary span2" data-dismiss="modal">关闭</a>
                        </div>
                    </div>
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
//全删
$('#App-delall').on('click', function() {
    var checks = $(".App-check:checked");
    var chk = '';
    $(checks).each(function() {
        chk += $(this).val() + ',';
    });
    if (!chk) {
        $.App.alert('danger', '请选择要删除的项目！');
        return false;
    }
    var toajax = "<?php echo U('Admin/Employee/employeeDel');?>" + "/id/" + chk;
    var funok = function() {
        var callok = function() {
            //成功删除后刷新
            $('#refresh-toggler').trigger('click');
            return false;
        };
        var callerr = function() {
            //拦截错误
            return false;
        };
        $.App.ajax('post', toajax, 'nodata', callok, callerr);
    }
    $.App.confirm("确认要删除吗？", funok);
});
</script>
<script>
function showQrcode(o) {
    var eid = $(o).data('id');
    var url = "<?php echo U('Admin/Employee/getqrcode');?>" + "/eid/" + eid;
    $("#qrcode")[0].src=url;
    $('#dialog').modal('show');
}
</script>
<!--/全选特效封装-->