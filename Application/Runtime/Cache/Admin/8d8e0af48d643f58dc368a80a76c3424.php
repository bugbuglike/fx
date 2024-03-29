<?php if (!defined('THINK_PATH')) exit();?><div class="row">
    <div class="col-xs-12 col-xs-12">
        <div class="widget radius-bordered">
            <div class="widget-header bg-blue">
                <i class="widget-icon fa fa-arrow-down"></i>
                <span class="widget-caption">会员编辑</span>
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
                        <a href="<?php echo U('Admin/Vip/vipList/');?>" class="btn btn-primary" data-loader="App-loader" data-loadername="会员列表">
                            <i class="fa fa-mail-reply"></i>返回
                        </a>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">会员积分<sup>*</sup></label>
                        <div class="col-lg-4">
                            <input type="text" name="score" class="form-control" value="<?php echo ($cache["score"]); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">会员余额<sup>*</sup></label>
                        <div class="col-lg-4">
                            <input type="text" name="money" class="form-control" value="<?php echo ($cache["money"]); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">开启分销商</label>
                        <div class="col-lg-4">
                            <label>
                                <input type="hidden" name="isfx" value="<?php echo ($cache["isfx"]); ?>" id="isfx">
                                <input class="checkbox-slider slider-icon colored-darkorange" type="checkbox" id="isfxbtn" <?php if(($cache["isfx"]) == "1"): ?>checked="checked"<?php endif; ?>>
                                <span class="text darkorange">&nbsp;&nbsp;&larr;重要：启用后会员将变成分销商,可享受提成。</span>
                            </label>
                        </div>
                    </div>
                    <!-- <div class="form-group">
                        <label class="col-lg-2 control-label">开启花股</label>
                        <div class="col-lg-4">
                            <label>
                                <input type="hidden" name="isfxgd" value="<?php echo ($cache["isfxgd"]); ?>" id="isfxgd">
                                <input class="checkbox-slider slider-icon colored-darkorange" type="checkbox" id="isfxgdbtn" <?php if(($cache["isfxgd"]) == "1"): ?>checked="checked"<?php endif; ?>>
                                <span class="text darkorange">&nbsp;&nbsp;&larr;重要：启用后会员将变成花股,可享受提成20层内下线佣金。</span>
                            </label>
                        </div>
                    </div> -->
                    <div class="form-group">
                        <label class="col-lg-2 control-label">会员昵称</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" disabled="disabled" value="<?php echo ($cache["nickname"]); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">真实姓名</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" disabled="disabled" value="<?php echo ($cache["name"]); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">真实手机</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" disabled="disabled" value="<?php echo ($cache["mobile"]); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">电子邮件</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" disabled="disabled" value="<?php echo ($cache["email"]); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">累计消费</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" disabled="disabled" value="<?php echo ($cache["total_buy"]); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">下线人数</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" name="total_xxlink" value="<?php echo ($cache["total_xxlink"]); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">下线关注</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" name="total_xxsub" value="<?php echo ($cache["total_xxsub"]); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">下线累计消费人次</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" name="total_xxbuy" value="<?php echo ($cache["total_xxbuy"]); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">佣金总收益</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" name="total_xxyj" value="<?php echo ($cache["total_xxyj"]); ?>">
                        </div>
                    </div>
                    <!--提现信息-->
                    <div class="form-title"></div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">提现姓名</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" disabled="disabled" value="<?php echo ($cache["txname"]); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">提现电话</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" disabled="disabled" value="<?php echo ($cache["txmobile"]); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">提现银行</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" disabled="disabled" value="<?php echo ($cache["txyh"]); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">提现分行</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" disabled="disabled" value="<?php echo ($cache["txfh"]); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">提现所在地</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" disabled="disabled" value="<?php echo ($cache["txszd"]); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">提现卡号</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" disabled="disabled" value="<?php echo ($cache["txcard"]); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-4">
                            <button class="btn btn-primary btn-lg" type="submit">保存</button>&nbsp;&nbsp;&nbsp;&nbsp;
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
        var lid = '';
        var checks = $('.label-check');
        $(checks).each(function() {
            if ($(this).is(":checked")) {
                lid += $(this).val() + ',';
            }
        });
        $('#lid').val(lid);
        var tourl = "<?php echo U('Admin/Vip/vipSet');?>";
        var data = $('#AppForm').serialize();
        $.App.ajax('post', tourl, data, null);
        return false;
    },
});
$('#isfxbtn').on('click', function() {
    var value = $(this).prop('checked') ? 1 : 0;
    $('#isfx').val(value);
});
$('#isfxgdbtn').on('click', function() {
    var value = $(this).prop('checked') ? 1 : 0;
    $('#isfxgd').val(value);
});
</script>
<!--/表单验证与提交封装-->