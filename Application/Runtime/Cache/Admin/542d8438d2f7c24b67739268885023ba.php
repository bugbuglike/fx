<?php if (!defined('THINK_PATH')) exit();?><div class="row">
     <div class="col-xs-12 col-xs-12">
          <div class="widget radius-bordered">
              <div class="widget-header bg-blue">
				<i class="widget-icon fa fa-arrow-down"></i>
				<span class="widget-caption">关键词设置</span>
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
                        <a href="<?php echo U('Admin/Wx/keyword/');?>" class="btn btn-primary" data-loader="App-loader" data-loadername="关键词列表">
							<i class="fa fa-mail-reply"></i>返回
						</a>
                   </div>
                   <div class="form-group">
                        <label class="col-lg-2 control-label">触发关键词<sup>*</sup></label>
                        <div class="col-lg-4">
                        <input type="text" class="form-control" name="keyword" data-bv-notempty="true"
                                                               data-bv-notempty-message="不能为空" placeholder="必填,全局唯一" value="<?php echo ($cache["keyword"]); ?>">
                        </div>
                   </div>
                   <div class="form-group">
                        <label class="col-lg-2 control-label">选择类型<sup>*</sup></label>
                        <div class="col-lg-4">
                             <select class="form-control" name="type" data-bv-notempty="true"
                                                               data-bv-notempty-message="不能为空">
                                  	<option value="">请选择类型</option>
                                  	<option value="1" <?php if(($cache["type"]) == "1"): ?>selected<?php endif; ?>>纯文本</option>
                                  	<option value="2" <?php if(($cache["type"]) == "2"): ?>selected<?php endif; ?>>单图文</option>
                                  	<option value="3" <?php if(($cache["type"]) == "3"): ?>selected<?php endif; ?>>多图文</option>
                            
                             </select>

                        </div>
                   </div>
                   <div class="form-group">
                        <label class="col-lg-2 control-label">名称[图文有效]</label>
                        <div class="col-lg-4">
                        <input type="text" class="form-control" name="name" placeholder="选填" value="<?php echo ($cache["name"]); ?>">
                        </div>
                   </div>
                   <div class="form-group">
                        <label class="col-lg-2 control-label">封面[图文有效]</label>
                        <div class="col-lg-4">
                        	<div class="input-group input-group-sm">
                        		<input type="text" class="form-control" name="pic" value="<?php echo ($cache["pic"]); ?>" id="App-pic">
                        		<span class="input-group-btn">
                            		<button class="btn btn-default shiny" type="button" onclick="appImgviewer('App-pic')"><i class="fa fa-camera-retro"></i>预览</button><button class="btn btn-default shiny" type="button" onclick="appImguploader('App-pic',false)"><i class="glyphicon glyphicon-picture"></i>上传</button>
                        		</span>
                        	</div>
                        </div>
                  </div>
                  <div class="form-group">
                        <label class="col-lg-2 control-label">关键词描述</label>
                        <div class="col-lg-4">
                        <textarea class="form-control" name="summary" rows="5"><?php echo ($cache["summary"]); ?></textarea>
                        </div>
                   </div>
                   <div class="form-group">
                        <label class="col-lg-2 control-label">超链接</label>
                        <div class="col-lg-4">
                        <input type="text" class="form-control" name="url" placeholder="选填" value="<?php echo ($cache["url"]); ?>">
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
           var tourl="<?php echo U('Admin/Wx/keywordSet');?>";
			var data=$('#AppForm').serialize();
			//alert(data);
			$.App.ajax('post',tourl,data,null);
			return false;
        },
	});
</script>
<!--/表单验证与提交封装-->