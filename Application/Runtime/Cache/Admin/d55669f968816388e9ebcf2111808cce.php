<?php if (!defined('THINK_PATH')) exit();?><style>
.left15 {
    float: left !important;
    padding-left: 15px!important;
}
</style>
<script src="/Public/Admin/js/datetime/moment.js"></script>
<script src="/Public/Admin/js/datetime/daterangepicker.js"></script>
<div class="row">
    <div class="col-xs-12 col-xs-12">
        <div class="widget radius-bordered">
            <div class="widget-header bg-blue">
                <i class="widget-icon fa fa-arrow-down"></i>
                <span class="widget-caption">卡券设置</span>
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
                        <a href="<?php echo U('Admin/Vip/card/',array('type'=>2));?>" class="btn btn-primary" data-loader="App-loader" data-loadername="卡券列表">
                            <i class="fa fa-mail-reply"></i>返回
                        </a>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">选择卡券类型<sup>*</sup></label>
                        <div class="col-lg-4">
                            <select class="form-control" name="type" data-bv-notempty="true" data-bv-notempty-message="请选择类型">
                                <option value="">请选择类型</option>
                                <!-- <option value="1" <?php if(($cache["type"]) == "1"): ?>selected<?php endif; ?>>充值卡</option> -->
                                <option value="2" <?php if(($cache["type"]) == "2"): ?>selected<?php endif; ?>>代金券</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">卡券金额<sup>*</sup></label>
                        <div class="input-group input-group-sm col-lg-4 left15">
                            <input type="text" class="form-control" name="money" placeholder="必填" data-bv-notempty="true" data-bv-notempty-message="" value="<?php echo ($cache["money"]); ?>">
                            <span class="input-group-addon">元</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">有效期</label>
                        <div class="input-group input-group-sm col-lg-4 left15">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            <input type="text" class="form-control" id="usetime" name="usetime" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">使用规则</label>
                        <div class="input-group input-group-sm col-lg-4 left15">
                            <span class="input-group-addon">订单金额满</span>
                            <input type="text" class="form-control" name="usemoney">
                            <span class="input-group-addon">元可使用</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label"></label>
                        <div class="col-lg-4 left15">
                            <span><sup style="font-size:1em">*使用卡券时，金额必须小于订单总金额</sup></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">生成数量<sup>*</sup></label>
                        <div class="input-group input-group-sm col-lg-4 left15">
                            <input type="text" class="form-control" name="num" placeholder="必填" data-bv-notempty="true" data-bv-notempty-message="">
                            <span class="input-group-addon">张</span>
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
$('#usetime').daterangepicker();
</script>
<!--/面包屑导航封装-->
<!--表单验证与提交封装-->
<script type="text/javascript">
$('#AppForm').bootstrapValidator({
    submitHandler: function(validator, form, submitButton) {
        var tourl = "<?php echo U('Admin/Vip/cardSet');?>";
        var data = $('#AppForm').serialize();
        $.App.ajax('post', tourl, data, null);
        return false;
    },
});
</script>
<!--/表单验证与提交封装-->