<?php if (!defined('THINK_PATH')) exit();?><div class="row">
	<div class="col-xs-12 col-md-12">
		<div class="widget">
			<div class="widget-header bg-blue">
				<i class="widget-icon fa fa-arrow-down"></i>
				<span class="widget-caption">会员日志</span>
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
					<a href="#" class="btn btn-danger" disabled="disabled">
						<i class="fa fa-delicious"></i>预留按钮
					</a>
					<div class="pull-right">
						<form id="App-search">
							<label style="margin-bottom: 0px;">
								<input name="name" type="search" class="form-control input-sm" value="<?php echo ($name); ?>" placeholder="请输入会员ID搜索">
							</label>
							<a href="<?php echo U('Admin/Log/vip/');?>" class="btn btn-success" data-loader="App-loader" data-loadername="会员日志" data-search="App-search">
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
							<th>事件说明</th>
							<th>会员ID</th>
							<th>会员昵称</th>
							<th>会员OPENID</th>
							<th>金钱变更</th>
							<th>积分变更</th>
							<th>经验变更</th>
							<th>记录时间</th>
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
								<td class=" "><?php echo ($vo["event"]); ?></td>
								<td class=" "><?php echo ($vo["vipid"]); ?></td>
								<td class=" "><?php echo ($vo["nickname"]); ?></td>
								<td class=" "><?php echo ($vo["openid"]); ?></td>
								<td class=" "><?php echo ($vo["money"]); ?></td>
								<td class=" "><?php echo ($vo["score"]); ?></td>
								<td class=" "><?php echo ($vo["exp"]); ?></td>
								<td class=" "><?php echo (date("Y-m-d H:i:s",$vo["ctime"])); ?></td>
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
</script>
<!--/全选特效封装-->