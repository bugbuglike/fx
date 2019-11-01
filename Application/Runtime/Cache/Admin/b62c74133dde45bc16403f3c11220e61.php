<?php if (!defined('THINK_PATH')) exit();?><div class="row">
    <div class="col-xs-12 col-xs-12">
        <div class="widget radius-bordered">
            <div class="widget-header bg-blue">
                <i class="widget-icon fa fa-arrow-down"></i>
                <span class="widget-caption">模版消息配置</span>
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
                <br />
                <div class="form-horizontal">
                    <?php if(is_array($cache)): $i = 0; $__LIST__ = $cache;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="form-group">
                            <label class="col-sm-2 control-label"><?php echo ($vo["position"]); ?>：</label>
							<?php if($vo["type"] == 'up'): ?><label class="col-sm-3 control-label"><strong>[昵称]通过您的推广，成为了您的[层级]，</strong></label>
							<div class="col-sm-4">
                                <input id="data-<?php echo ($vo["id"]); ?>" type="text" class="form-control" placeholder="客服接口消息" value="<?php echo ($vo["value"]); ?>">
                            </div>
							<?php elseif($vo["type"] == 'emp'): ?>
							<label class="col-sm-3 control-label"><strong>[昵称]通过您推广，成为了您的[分销商]，</strong></label>
							<div class="col-sm-4">
                                <input id="data-<?php echo ($vo["id"]); ?>" type="text" class="form-control" placeholder="客服接口消息" value="<?php echo ($vo["value"]); ?>">
                            </div>
							<?php else: ?>
                            <div class="col-sm-7">
                                <input id="data-<?php echo ($vo["id"]); ?>" type="text" class="form-control" placeholder="客服接口消息" value="<?php echo ($vo["value"]); ?>">
                            </div><?php endif; ?>
                            <div class="col-sm-1">
                                <div class="btn btn-default" data-id="<?php echo ($vo["id"]); ?>" onclick="save(this)">保存</div>
                            </div>
                        </div><?php endforeach; endif; else: echo "" ;endif; ?>
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
<script type="text/javascript">
function save(o) {
    var object = $(o);
    var id = object.data('id');
    var value = $('#data-' + id).val();
    if (!id) {
        $.App.alert('danger', '通信失败！');
        return false;
    } else {
        $.ajax({
            type: 'post',
            data: {
                'id': id,
                'value': value,
            },
            url: "<?php echo U('Admin/Wx/customerSet');?>",
            async: false,
            dataType: 'json',
            success: function(e) {
                $.App.alert('ok', e.msg);
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