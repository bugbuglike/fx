<?php if (!defined('THINK_PATH')) exit();?><div class="row">
	<div class="col-xs-12 col-md-12">
		<div class="widget">
			<div class="widget-header bg-blue">
				<i class="widget-icon fa fa-arrow-down"></i>
				<span class="widget-caption">魔法关键词</span>
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
				<div class="table-toolbar">
					<a href="<?php echo U('Admin/Wx/keywordSet/');?>" class="btn btn-primary" data-loader="App-loader" data-loadername="设置分组">
						<i class="fa fa-plus"></i>新增关键词
					</a>
					<a href="#" class="btn btn-danger" id="App-delall">
						<i class="fa fa-delicious"></i>全部删除
					</a>
					<div class="pull-right">
						<form id="App-search">
							<label style="margin-bottom: 0px;">
								<input name="name" type="search" class="form-control input-sm" value="<?php echo ($name); ?>">
							</label>
							<a href="<?php echo U('Admin/Wx/keyword/');?>" class="btn btn-success" data-loader="App-loader" data-loadername="关键词列表" data-search="App-search">
								<i class="fa fa-search"></i>搜索
							</a>
						</form>
					</div>
				</div>

				<table id="App-table" class="table table-bordered table-hover">
					<thead class="bordered-darkorange">
						<tr role="row">
							<th width="30px"><div class="checkbox" style="margin-bottom: 0px; margin-top: 0px;">
									<label style="padding-left: 4px;"> <input type="checkbox" class="App-checkall colored-blue">
                                     <span class="text"></span>
									</label>                                    
                                </div></th>
							<th>ID</th>
							<th>触发关键词</th>
							<th>类型</th>
							<th>名称</th>
							<th>简介</th>
							<th>链接</th>
							<th>图文集</th>
							<th>操作</th>
						</tr>
					</thead>
					<tbody>
						<?php if(is_array($cache)): $i = 0; $__LIST__ = $cache;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr id="item<?php echo ($vo["id"]); ?>">
								<td>
									<div class="checkbox" style="margin-bottom: 0px; margin-top: 0px;">
										<label style="padding-left: 4px;"> <input name="checkvalue" type="checkbox" class="colored-blue App-check" value="<?php echo ($vo["id"]); ?>">
	                                     <span class="text"></span>
										</label>                                    
	                                </div>
								</td>
								<td class=" sorting_1"><?php echo ($vo["id"]); ?></td>
								<td class=" "><?php echo ($vo["keyword"]); ?></td>
								<td class=" "><?php switch($vo["type"]): case "1": ?>纯文本<?php break;?>
									<?php case "2": ?>单图文<?php break;?>
									<?php case "3": ?>多图文<?php break; endswitch;?></td>
								<td class=" "><?php echo ($vo["name"]); ?></td>
								<td class=" "><?php echo ($vo["summary"]); ?></td>
								<td class=" "><?php echo ($vo["url"]); ?></td>
								<td class=" "><?php if(($vo["type"]) == "3"): ?><a href="<?php echo U('Admin/Wx/img/',array('kid'=>$vo['id']));?>" class="btn btn-azure btn-xs" data-loader="App-loader" data-loadername="多图文管理"><i class="fa fa-edit"></i> 管理</a><?php else: ?>未启用<?php endif; ?></td>
								<td class="center "><a href="<?php echo U('Admin/Wx/keywordSet/',array('id'=>$vo['id']));?>" class="btn btn-success btn-xs" data-loader="App-loader" data-loadername="设置关键词"><i class="fa fa-edit"></i> 编辑</a>&nbsp;&nbsp;<a href="<?php echo U('Admin/Wx/keyword/');?>" class="btn btn-danger btn-xs" data-type = "del" data-ajax="<?php echo U('Admin/Wx/keywordDel/',array('id'=>$vo['id']));?>"><i class="fa fa-trash-o"></i> 删除</a></td>
							</tr><?php endforeach; endif; else: echo "" ;endif; ?>
												
					</tbody>
				</table>
				<div class="row DTTTFooter">
					<?php echo ($page); ?>
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
<!--全选特效封装/全部删除-->
<script type="text/javascript">
	//全选
	var checkall=$('#App-table .App-checkall');
	var checks=$('#App-table .App-check');
	var trs=$('#App-table tbody tr');
	$(checkall).on('click',function(){
		if($(this).is(":checked")){			
			$(checks).prop("checked","checked");
		}else{
			$(checks).removeAttr("checked");
		}		
	});
	$(trs).on('click',function(){
		var c=$(this).find("input[type=checkbox]");
		if($(c).is(":checked")){
			$(c).removeAttr("checked");
		}else{
			$(c).prop("checked","checked");
		}		
	});
	//全删
	$('#App-delall').on('click',function(){
		var checks=$(".App-check:checked");
		var chk='';
		$(checks).each(function(){
			chk+=$(this).val()+',';
		});
		if(!chk){
			$.App.alert('danger','请选择要删除的项目！');
			return false;
		}
		var toajax="<?php echo U('Admin/Wx/keywordDel');?>"+"/id/"+chk;
		var funok=function(){
			var callok=function(){
				//成功删除后刷新
				$('#refresh-toggler').trigger('click');
				return false;
			};
			var callerr=function(){
				//拦截错误
				return false;
			};
			$.App.ajax('post',toajax,'nodata',callok,callerr);
		}						
		$.App.confirm("确认要删除吗？",funok);
	});
</script>
<!--/全选特效封装-->