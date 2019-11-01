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
                        ID
                    </th>
                    <th>
                        商品名称
                    </th>
                    <th class="hidden-xs">
                        商品积分
                    </th>
                    <th class="hidden-xs">
                        推荐状态
                    </th>
                    <th>
                        状态
                    </th>
                    <th>
                        操作
                    </th>
                    </thead>
                    <tbody>
                    <?php if(is_array($product)): $i = 0; $__LIST__ = $product;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$product): $mod = ($i % 2 );++$i;?><tr>
                            <td class="check hidden-xs">
                                <label><input name="optionsRadios1" type="checkbox"
                                              value="option1"><span></span></label>
                            </td>
                            <td>
                                <?php echo ($product["id"]); ?>
                            </td>
                            <td>
                                <?php echo ($product["name"]); ?>
                            </td>
                            <td class="hidden-xs">
                                <?php echo ($product["score"]); ?>
                            </td>
                            <td class="hidden-xs">
                                <span class="label label-success"><?php echo ($product["recommend"]); ?></span>
                            </td>
                            <td>
                                <span class="label label-success"><?php echo ($product["status"]); ?></span>
                            </td>
                            <td class="hidden-xs">
                                <style type="text/css">
                                    .action-buttons > a {
                                        margin-left: 5px;
                                    }
                                </style>
                                <div class="action-buttons" style="cursor: pointer;">
                                    <a class="table-actions" href="<?php echo U('Admin/Score/del');?>" data-type="del" data-ajax="<?php echo U('Admin/Score/del',array('id'=>$product['id']));?>">删除</a>
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