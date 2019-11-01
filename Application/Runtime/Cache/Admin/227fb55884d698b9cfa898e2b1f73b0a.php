<?php if (!defined('THINK_PATH')) exit();?><!-- DataTables Example -->
<div class="row">
    <div class="col-lg-12">
        <div class="widget-container fluid-height clearfix">
            <div class="widget-content padded clearfix">
                <table class="table table-hover" style="margin-bottom: 12px">
                    <thead>
                    <th class="check-header hidden-xs">
                        <label><input id="checkAll" name="checkAll" type="checkbox"><span></span></label>
                    </th>
                    <th>
                        订单编号
                    </th>
                    <th>
                        联系人
                    </th>
                    <th class="hidden-xs">
                        总积分
                    </th>
                    <th class="hidden-xs">
                        订单状态
                    </th>
                    <th class="hidden-xs">
                        兑换商品
                    </th>
                    <th class="hidden-xs">
                        备注
                    </th>
                    <th class="hidden-xs">
                        时间
                    </th>
                    <th class="hidden-xs">
                        操作
                    </th>
                    </thead>
                    <tbody>
                    <?php if(is_array($order)): $i = 0; $__LIST__ = $order;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$order): $mod = ($i % 2 );++$i;?><tr>
                            <td class="check hidden-xs">
                                <label><input name="optionsRadios1" type="checkbox"
                                              value="option1"><span></span></label>
                            </td>
                            <td>
                                <?php echo ($order["orderid"]); ?>
                            </td>
                            <td>
                                <div class="btn-group" style="margin: 0px;">
                                    <button class="btn btn-primary-outline dropdown-toggle" data-toggle="dropdown">
                                        <?php echo ($order["contact"]["name"]); ?><span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#">联系方式：<?php echo ($order["contact"]["mobile"]); ?></a>
                                        </li>
                                        <li>
                                            <a href="#">联系地址：<?php echo ($order["contact"]["address"]); ?></a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                            <td class="hidden-xs">
                                <?php echo ($order["totalscore"]); ?>
                            </td>
                            <td class="hidden-xs">
                                <?php if($order["status"] == -1): ?>已取消
                                    <?php elseif($order["status"] == 0): ?>
                                    <font color="red">未处理</font>
                                    <?php elseif($order["status"] == 1): ?>
                                    <font color="blue">正在配送中</font>
                                    <?php else: ?>
                                    已完成<?php endif; ?>
                            </td>
                            <td class="hidden-xs">
                                <?php echo ($order["score"]["name"]); ?>
                            </td>
                            <td class="hidden-xs">
                                <?php echo ($order["note"]); ?>
                            </td>
                            <td class="hidden-xs">
                                <?php echo ($order["time"]); ?>
                            </td>
                            <!--<td class="hidden-xs">-->
                                <!--<div class="btn-group" style="margin: 0px;">-->
                                    <!--<button class="btn btn-primary-outline"-->
                                            <!--onclick="openUrlReturn('<?php echo U('Admin/Score/publish',array('id'=>$order['id']));?>','<?php echo U('Admin/Score/order');?>')"-->
                                            <!--data-toggle="dropdown">发货-->
                                    <!--</button>-->
                                    <!--<button class="btn btn-primary-outline"-->
                                            <!--onclick="openUrlReturn('<?php echo U('Admin/Score/complete',array('id'=>$order['id']));?>','<?php echo U('Admin/Score/order');?>')"-->
                                            <!--data-toggle="dropdown">完成-->
                                    <!--</button>-->
                                    <!--<button class="btn btn-primary-outline"-->
                                            <!--onclick="openUrlReturn('<?php echo U('Admin/Score/cancel',array('id'=>$order['id']));?>','<?php echo U('Admin/Score/order');?>')"-->
                                            <!--data-toggle="dropdown">取消-->
                                    <!--</button>-->
                                    <!--<button class="btn btn-primary-outline"-->
                                            <!--onclick="openUrlReturn('<?php echo U('Admin/Score/delorder',array('id'=>$order['id']));?>','<?php echo U('Admin/Score/order');?>')"-->
                                            <!--data-toggle="dropdown">删除-->
                                    <!--</button>-->
                                <!--</div>-->
                            <!--</td>-->
                            <td class="hidden-xs">
                                <style type="text/css">
                                    .action-buttons > a {
                                        margin-left: 5px;
                                        float: left;
                                    }
                                </style>
                                <div class="btn-group" style="margin: 0px;">
                                    <a class="table-actions" href="<?php echo U('Admin/Score/publish');?>" data-type="confirm" data-ajax="<?php echo U('Admin/Score/publish',array('id'=>$order['id']));?>">发货</a>
                                    <a class="table-actions" href="<?php echo U('Admin/Score/complete');?>" data-type="confirm" data-ajax="<?php echo U('Admin/Score/complete',array('id'=>$order['id']));?>">完成</a>
                                    <a class="table-actions" href="<?php echo U('Admin/Score/cancel');?>" data-type="confirm" data-ajax="<?php echo U('Admin/Score/cancel',array('id'=>$order['id']));?>">取消</a>
                                    <a class="table-actions" href="<?php echo U('Admin/Score/delorder');?>" data-type="del" data-ajax="<?php echo U('Admin/Score/delorder',array('id'=>$order['id']));?>">删除</a>
                                </div>
                            </td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    </tbody>
                </table>
                <?php echo ($page); ?>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function searchpay(obj) {
        var payment = $(obj).val();
        if (payment >= 0) {
            $.ajax({
                type: "post",
                url: '<?php echo U('Admin/Order/searchpay');?>',
                data: {
                    payment: payment
                },
                success: function (data) {
                    $('#main-content').html(data);
                    $('#popover').delay(1000).hide(1);
                },
                beforeSend: function () {
                },
                complete: function () {
                }
            });
        }
    }
</script>