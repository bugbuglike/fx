<?php if (!defined('THINK_PATH')) exit();?><div class="row">
    <div class="col-xs-12 col-md-12">
        <div class="widget">
            <div class="widget-header bg-blue">
                <i class="widget-icon fa fa-arrow-down"></i>
                <span class="widget-caption">当天订单统计</span>
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
                <?php if(is_array($cache)): $key = 0; $__LIST__ = $cache;if( count($__LIST__)==0 ) : echo "暂无数据" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?><div class="widget">
                        <div class="widget-header bg-gold" onclick="shoption(this);">
                            <span class="widget-caption"><?php echo ($goods[$key-1]['name']); ?> 商品统计</span>
                        </div>
                        <div class="widget-body">
                            <?php foreach ($vo as $key2=> $voo) {?>
                            <table class="table table-hover table-condensed">
	                            <thead class="bordered-darkorange" onclick="shoption(this);">
			                        <tr role="row">
			                            <th style="width:50%">
			                                <?php if($key2!=0) echo $sku[$key2][ 'skuattr']; else echo "当前商品无Sku"; ?>
			                            </th>
			                            <th></th>
			                        </tr>
			                    </thead>
			                    <tbody style="text-align:center">
                                    <?php $temp_count=0; $temp_sum=0; foreach ($voo as $key3=> $vooo) {?>
                                    <tr>
                                    	<td>
                                        <?php $temp_count +=$key3; echo $key3. "件";?>
                                        </td>
                                        <td>
                                        <?php $temp_sum +=$vooo;echo $vooo. "单";?>
                                        </td>
                                    </tr>
                                    <?php }?>
                                    <tr class="info">
                                    	<td>
                                        <?php  echo "共计".$temp_count. "件";?>
                                        </td>
                                        <td>
                                        <?php echo "共计".$temp_sum. "单";?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <br />
                            <?php }?>
                        </div>
                    </div><?php endforeach; endif; else: echo "暂无数据" ;endif; ?>
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
function shoption(o){
	$(o).next().toggle("fast",function(){});
};
</script>