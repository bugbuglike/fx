<?php if (!defined('THINK_PATH')) exit();?><div class="row">
     <div class="col-xs-12 col-xs-12">
          <div class="widget radius-bordered">
              <div class="widget-header bg-blue">
				<i class="widget-icon fa fa-arrow-down"></i>
				<span class="widget-caption">SKU属性设置</span>
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
                   <form id="AppForm" action="" method="post" class="form-horizontal"
                                                  data-bv-message=""
                                                  data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
                                                  data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
                                                  data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">
                  <input type="hidden" name="id" value="<?php echo ($cache["id"]); ?>">
                  <div class="form-title">
                        <a href="<?php echo U('Admin/Shop/skuattr/');?>" class="btn btn-primary" data-loader="App-loader" data-loadername="门店分组">
						<i class="fa fa-mail-reply"></i>返回
						</a>
                   </div>
                   <div class="form-group">
                        <label class="col-lg-2 control-label">属性名称<sup>*</sup></label>
                        <div class="col-lg-4">
                        <input type="text" class="form-control" name="name" placeholder="必填"
                                                               data-bv-notempty="true"
                                                               data-bv-notempty-message="不能为空" value="<?php echo ($cache["name"]); ?>">
                        </div>
                   </div>
                  <div class="form-group">
	                        <label class="col-lg-2 control-label">批量添加属性值</label>
	                        <div class="col-lg-4">
	                        	<textarea class="form-control" name="newitem" rows="5" placeholder="批量添加属性值，请使用英文逗号分割。例如：'白色,黑色,蓝色,红色'，原则上SKU属性值全局唯一不可以删除与编辑！"></textarea>
	                        </div>
                   </div>
                   <div class="form-group">
                        <label class="col-lg-2 control-label">属性值[自动生成]</label>
                        <div class="col-lg-4">
                        <textarea class="form-control" name="items" rows="5" disabled><?php echo ($cache["items"]); ?></textarea>
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
		submitHandler: function (validator, form, submitButton) {
           var tourl="<?php echo U('Admin/Shop/skuattrSet');?>";
			var data=$('#AppForm').serialize();
			$.App.ajax('post',tourl,data,null);
			return false;
        },
	});
//	$('#AppForm').on('submit',function(){
//		//alert('aa');
//		var tourl="<?php echo U('Admin/Shop/skuattrSet');?>";
//		var data=$('#AppForm').serialize();
//		$.App.ajax('post',tourl,data,null);
//		return false;
//	})
</script>
<!--/表单验证与提交封装-->