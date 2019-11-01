<?php if (!defined('THINK_PATH')) exit();?><div class="row">
    <div class="col-lg-12">
        <div class="widget-container fluid-height clearfix">
            <div class="widget-content padded clearfix">
                <table class="table table-hover" style="margin-bottom: 12px">
                    <thead>
                    <th>
                        ID
                    </th>
                    <th>
                        订单ID
                    </th>
                    <th>
                        卡券ID
                    </th>
                    <th>
                        核销金额
                    </th>
                    <th>
                        时间
                    </th>
                    </thead>
                    <tbody>
                    <?php if(is_array($coupon)): $i = 0; $__LIST__ = $coupon;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$coupon): $mod = ($i % 2 );++$i;?><tr>
                            <td>
                                <?php echo ($coupon["id"]); ?>
                            </td>
                            <td>
                                <?php echo ($coupon["order_id"]); ?>
                            </td>
                            <td>
                                <?php echo ($coupon["cardid"]); ?>
                            </td>
                            <td>
                                <?php echo ($coupon["cost"]); ?>
                            </td>
                            <td>
                                <?php echo ($coupon["time"]); ?>
                            </td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    </tbody>
                </table>
                <?php echo ($page); ?>
            </div>
        </div>
    </div>
</div>