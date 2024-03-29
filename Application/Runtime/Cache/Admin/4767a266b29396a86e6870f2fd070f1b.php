<?php if (!defined('THINK_PATH')) exit();?><div class="row">
    <div class="col-xs-12 col-xs-12">
        <div class="widget radius-bordered">
            <div class="widget-header bg-blue">
                <i class="widget-icon fa fa-arrow-down"></i>
                <span class="widget-caption">消息设置</span>
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
                <form id="AppForm" action="" method="post" class="form-horizontal" data-bv-message="" data-bv-feedbackicons-valid="glyphicon glyphicon-ok" data-bv-feedbackicons-invalid="glyphicon glyphicon-remove" data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">
                    <input type="hidden" name="id" value="<?php echo ($cache["id"]); ?>">
                    <div class="form-title">
                        <a href="<?php echo U('Admin/Vip/message/');?>" class="btn btn-primary" data-loader="App-loader" data-loadername="会员消息">
                            <i class="fa fa-mail-reply"></i>返回
                        </a>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">发布对象</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" name="pids" id='pids' placeholder="不填则群发所有会员" value="<?php echo ($cache["pids"]); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">消息标题<sup>*</sup></label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" name="title" placeholder="必填" data-bv-notempty="true" data-bv-notempty-message="不能为空" value="<?php echo ($cache["title"]); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">消息内容</label>
                        <div class="col-lg-4">
                            <textarea class="form-control" name="content" rows="5"><?php echo ($cache["content"]); ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-4">
                            <button class="btn btn-primary btn-lg" type="submit" disabled="disabled">保存</button>&nbsp;&nbsp;&nbsp;&nbsp;
                            <button class="btn btn-palegreen btn-lg" type="reset">重填</button>
                        </div>
                    </div>
                </form>
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
<!--表单验证与提交封装-->
<script type="text/javascript">
$('#AppForm').bootstrapValidator({
    submitHandler: function(validator, form, submitButton) {
        if ($("#pids").val() == "") {
            bootbox.confirm("确认发送所有用户？", function(result) {
                if (result) {
                    var tourl = "<?php echo U('Admin/Vip/messageSet');?>";
                    var data = $('#AppForm').serialize();
                    $.App.ajax('post', tourl, data, null);
                    // return false;
                } else {
                    $.App.alert("danger", "发送已取消");
                    // return false;
                }
            });

        } else {
            var tourl = "<?php echo U('Admin/Vip/messageSet');?>";
            var data = $('#AppForm').serialize();
            $.App.ajax('post', tourl, data, null);
            return false;
        }
    }
});
</script>
<!--/表单验证与提交封装-->