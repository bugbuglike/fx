<?php if (!defined('THINK_PATH')) exit();?><div class="row">
    <div class="col-xs-12 col-md-12">
        <div class="widget">
            <div class="widget-header bg-blue">
                <i class="widget-icon fa fa-arrow-down"></i>
                <span class="widget-caption">商城分类</span>
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
                    <a href="<?php echo U('Admin/Shop/cateSet/');?>" class="btn btn-primary" data-loader="App-loader" data-loadername="设置分组">
                        <i class="fa fa-plus"></i>新增分类
                    </a>
                    <div class="pull-right">
                        <form id="App-search">
                            <label style="margin-bottom: 0px;">
                                <input name="name" type="search" class="form-control input-sm">
                            </label>
                            <a href="<?php echo U('Admin/Shop/cate/');?>" class="btn btn-success" data-loader="App-loader" data-loadername="门店分组" data-search="App-search">
                                <i class="fa fa-search"></i>搜索
                            </a>
                        </form>
                    </div>
                </div>
                <table id="App-table" class="table table-bordered table-hover">
                    <thead class="bordered-darkorange">
                        <tr role="row">
                            <th>ID</th>
                            <!-- <th>PID</th>
							<th>Path</th> -->
                            <th>层级</th>
                            <th>分类名称</th>
                            <th>分类备注</th>
                            <th>子分类</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(is_array($cache)): $i = 0; $__LIST__ = $cache;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr id="item<?php echo ($vo["id"]); ?>">
                                <td class=" sorting_1"><?php echo ($vo["id"]); ?></td>
                                <!-- <td class=" "><?php echo ($vo["pid"]); ?></td>
<td class=" "><?php echo ($vo["bpath"]); ?></td>
 -->
                                <td class=" "><?php echo ($vo["lv"]); ?></td>
                                <td class=" "><?php echo ($vo["name"]); ?></td>
                                <td class=" "><?php echo ($vo["summary"]); ?></td>
                                <td class=" "><?php echo ($vo["soncate"]); ?></td>
                                <td class="center "><a href="<?php echo U('Admin/Shop/cateSet/',array('id'=>$vo['id']));?>" class="btn btn-success btn-xs" data-loader="App-loader" data-loadername="设置分组"><i class="fa fa-edit"></i> 编辑</a>&nbsp;&nbsp;<a href="<?php echo U('Admin/Shop/cate/');?>" class="btn btn-danger btn-xs" data-type="del" data-content="确定删除该分类及其子分类？" data-ajax="<?php echo U('Admin/Shop/cateDel/',array('id'=>$vo['id']));?>"><i class="fa fa-trash-o"></i> 删除</a>
                                    <!-- <?php if(empty($vo["soncate"])): ?>&nbsp;&nbsp;<a href="<?php echo U('Admin/Shop/cate/');?>" class="btn btn-danger btn-xs" data-type="del" data-ajax="<?php echo U('Admin/Shop/cateDel/',array('id'=>$vo['id']));?>"><i class="fa fa-trash-o"></i> 删除</a><?php endif; ?> -->
                                </td>
                            </tr>
                            <?php if(is_array($vo['_child'])): $i = 0; $__LIST__ = $vo['_child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i;?><tr id="item<?php echo ($vo2["id"]); ?>">
                                    <td class=" sorting_1"><?php echo ($vo2["id"]); ?></td>
<!--                                     <td class=" "><?php echo ($vo2["pid"]); ?></td>
                                    <td class=" "><?php echo ($vo2["bpath"]); ?></td> -->
                                    <td class=" "><?php echo ($vo2["lv"]); ?></td>
                                    <td class=" ">&nbsp;&nbsp;└<?php echo ($vo2["name"]); ?></td>
                                    <td class=" "><?php echo ($vo2["summary"]); ?></td>
                                    <td class=" "><?php echo ($vo2["soncate"]); ?></td>
                                    <td class="center "><a href="<?php echo U('Admin/Shop/cateSet/',array('id'=>$vo2['id']));?>" class="btn btn-success btn-xs" data-loader="App-loader" data-loadername="设置分组"><i class="fa fa-edit"></i> 编辑</a>
                                        <?php if(empty($vo2["soncate"])): ?>&nbsp;&nbsp;<a href="<?php echo U('Admin/Shop/cate/');?>" class="btn btn-danger btn-xs" data-type="del" data-ajax="<?php echo U('Admin/Shop/cateDel/',array('id'=>$vo2['id']));?>"><i class="fa fa-trash-o"></i> 删除</a><?php endif; ?>
                                    </td>
                                </tr>
                                <?php if(is_array($vo2['_child'])): foreach($vo2['_child'] as $key=>$vo3): ?><tr id="item<?php echo ($vo3["id"]); ?>">
                                        <td class=" sorting_1"><?php echo ($vo3["id"]); ?></td>
                                        <td class=" "><?php echo ($vo3["pid"]); ?></td>
                                        <td class=" "><?php echo ($vo3["bpath"]); ?></td>
                                        <td class=" "><?php echo ($vo3["lv"]); ?></td>
                                        <td class=" ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;└<?php echo ($vo3["name"]); ?></td>
                                        <td class=" "><?php echo ($vo3["summary"]); ?></td>
                                        <td class=" "><?php echo ($vo3["soncate"]); ?></td>
                                        <td class="center "><a href="<?php echo U('Admin/Shop/cateSet/',array('id'=>$vo3['id']));?>" class="btn btn-success btn-xs" data-loader="App-loader" data-loadername="设置分组"><i class="fa fa-edit"></i> 编辑</a>
                                            <?php if(empty($vo3["soncate"])): ?>&nbsp;&nbsp;<a href="<?php echo U('Admin/Shop/cate/');?>" class="btn btn-danger btn-xs" data-type="del" data-ajax="<?php echo U('Admin/Shop/cateDel/',array('id'=>$vo3['id']));?>"><i class="fa fa-trash-o"></i> 删除</a><?php endif; ?>
                                        </td>
                                    </tr>
                                    <?php if(is_array($vo3['_child'])): foreach($vo3['_child'] as $key=>$vo4): ?><tr id="item<?php echo ($vo4["id"]); ?>">
                                            <td>
                                                <empyt name="vo4.soncate">
                                                    <div class="checkbox" style="margin-bottom: 0px; margin-top: 0px;">
                                                        <label style="padding-left: 4px;">
                                                            <input name="checkvalue" type="checkbox" class="colored-blue App-check" value="<?php echo ($vo4["id"]); ?>">
                                                            <span class="text"></span>
                                                        </label>
                                                    </div>
                                                    </empty>
                                            </td>
                                            <td class=" sorting_1"><?php echo ($vo4["id"]); ?></td>
                                            <td class=" "><?php echo ($vo4["pid"]); ?></td>
                                            <td class=" "><?php echo ($vo4["bpath"]); ?></td>
                                            <td class=" "><?php echo ($vo4["lv"]); ?></td>
                                            <td class=" ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;└<?php echo ($vo4["name"]); ?></td>
                                            <td class=" "><?php echo ($vo4["summary"]); ?></td>
                                            <td class=" "><?php echo ($vo4["soncate"]); ?></td>
                                            <td class="center "><a href="<?php echo U('Admin/Shop/cateSet/',array('id'=>$vo4['id']));?>" class="btn btn-success btn-xs" data-loader="App-loader" data-loadername="设置分组"><i class="fa fa-edit"></i> 编辑</a>
                                                <?php if(empty($vo4["soncate"])): ?>&nbsp;&nbsp;<a href="<?php echo U('Admin/Shop/cate/');?>" class="btn btn-danger btn-xs" data-type="del" data-ajax="<?php echo U('Admin/Shop/cateDel/',array('id'=>$vo4['id']));?>"><i class="fa fa-trash-o"></i> 删除</a><?php endif; ?>
                                            </td>
                                        </tr>
                                        <?php if(is_array($vo4['_child'])): foreach($vo4['_child'] as $key=>$vo5): ?><tr id="item<?php echo ($vo5["id"]); ?>">
                                                <td>
                                                    <?php if(empty($vo4["soncate"])): ?><div class="checkbox" style="margin-bottom: 0px; margin-top: 0px;">
                                                            <label style="padding-left: 4px;">
                                                                <input name="checkvalue" type="checkbox" class="colored-blue App-check" value="<?php echo ($vo5["id"]); ?>">
                                                                <span class="text"></span>
                                                            </label>
                                                        </div><?php endif; ?>
                                                </td>
                                                <td class=" sorting_1"><?php echo ($vo5["id"]); ?></td>
                                                <td class=" "><?php echo ($vo5["pid"]); ?></td>
                                                <td class=" "><?php echo ($vo5["bpath"]); ?></td>
                                                <td class=" "><?php echo ($vo5["lv"]); ?></td>
                                                <td class=" ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;└<?php echo ($vo5["name"]); ?></td>
                                                <td class=" "><?php echo ($vo5["summary"]); ?></td>
                                                <td class=" "><?php echo ($vo5["soncate"]); ?></td>
                                                <td class="center ">
                                                    <a href="<?php echo U('Admin/Shop/cateSet/',array('id'=>$vo5['id']));?>" class="btn btn-success btn-xs" data-loader="App-loader" data-loadername="设置分组"><i class="fa fa-edit"></i> 编辑</a>
                                                    <?php if(empty($vo5["soncate"])): ?>&nbsp;&nbsp;<a href="<?php echo U('Admin/Shop/cate/');?>" class="btn btn-danger btn-xs" data-type="del" data-ajax="<?php echo U('Admin/Shop/cateDel/',array('id'=>$vo5['id']));?>"><i class="fa fa-trash-o"></i> 删除</a><?php endif; ?>
                                                </td>
                                            </tr><?php endforeach; endif; endforeach; endif; endforeach; endif; endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
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