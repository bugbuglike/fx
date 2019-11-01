<?php if (!defined('THINK_PATH')) exit();?><!--百度编辑器-->
<script type="text/javascript" charset="utf-8" src="/Public/Admin/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/Public/Admin/ueditor/ueditor.all.min.js"></script>
<div class="row">
    <div class="col-xs-12 col-xs-12">
        <div class="widget radius-bordered">
            <div class="widget-header bg-blue">
                <i class="widget-icon fa fa-arrow-down"></i>
                <span class="widget-caption">商城配置</span>
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
                    <input type="hidden" name="id" value="1">
                    <div class="form-group">
                        <label class="col-lg-2 control-label">商城名称[分享]<sup>*</sup></label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" name="name" placeholder="必填" data-bv-notempty="true" data-bv-notempty-message="不能为空" value="<?php echo ($cache["name"]); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">商城图片[分享]</label>
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
                        <label class="col-lg-2 control-label">商城简介[分享]</label>
                        <div class="col-lg-4">
                            <textarea class="form-control" name="summary" rows="5"><?php echo ($cache["summary"]); ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">商城域名<sup>*</sup></label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" name="url" placeholder="请填写商城域名" data-bv-notempty="true" data-bv-notempty-message="不能为空" value="<?php echo ($cache["url"]); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">退货时间<sup>*</sup></label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" name="thtime" placeholder="必填,发货后几天内可以退货" data-bv-notempty="true" data-bv-notempty-message="不能为空" value="<?php echo ($cache["thtime"]); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">别名<sup>*</sup></label>
                        <div class="col-lg-2">
                            <div class="input-group input-group-xs">
                                <span class="input-group-btn">
                                    <button class="btn btn-darkorange" type="button">分销商：</button>
                                </span>
                                <input name="fxname" type="text" class="form-control" value="<?php echo ($cache["fxname"]); ?>">
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="input-group input-group-xs">
                                <span class="input-group-btn">
                                     <button class="btn btn-darkorange" type="button">佣金：</button>
                                 </span>
                                <input name="yjname" type="text" class="form-control" value="<?php echo ($cache["yjname"]); ?>">
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="input-group input-group-xs">
                                <span class="input-group-btn">
                                     <button class="btn btn-darkorange" type="button">团队：</button>
                                 </span>
                                <input name="tdname" type="text" class="form-control" value="<?php echo ($cache["tdname"]); ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">分销级别<sup>*</sup></label>
                        <div class="col-lg-2">
                            <div class="input-group input-group-xs">
                                <span class="input-group-btn">
                                    <button class="btn btn-darkorange" type="button">一级：</button>
                                </span>
                                <input name="fx1name" type="text" class="form-control" value="<?php echo ($cache["fx1name"]); ?>">
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="input-group input-group-xs">
                                <span class="input-group-btn">
                                     <button class="btn btn-darkorange" type="button">二级：</button>
                                 </span>
                                <input name="fx2name" type="text" class="form-control" value="<?php echo ($cache["fx2name"]); ?>">
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="input-group input-group-xs">
                                <span class="input-group-btn">
                             <button class="btn btn-darkorange" type="button">三级：</button>
                         </span>
                                <input name="fx3name" type="text" class="form-control" value="<?php echo ($cache["fx3name"]); ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">开启退货</label>
                        <div class="col-lg-4">
                            <label>
                                <input type="hidden" name="isth" value="<?php echo ($cache["isth"]); ?>" id="isth">
                                <input class="checkbox-slider slider-icon colored-primary" type="checkbox" id="isthbtn" <?php if(($cache["isth"]) == "1"): ?>checked="checked"<?php endif; ?>>
                                <span class="text darkorange">&nbsp;&nbsp;&larr;重要：开启后用户前端允许退货。</span>
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">开启邮费</label>
                        <div class="col-lg-4">
                            <label>
                                <input type="hidden" name="isyf" value="<?php echo ($cache["isyf"]); ?>" id="isyf">
                                <input class="checkbox-slider slider-icon colored-primary" type="checkbox" id="isyfbtn" <?php if(($cache["isyf"]) == "1"): ?>checked="checked"<?php endif; ?>>
                                <span class="text darkorange">&nbsp;&nbsp;&larr;重要：开启后邮费设置有效。</span>
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label"></label>
                        <div class="col-lg-2">
                            <div class="input-group input-group-xs">
                                <span class="input-group-btn">
                           <button class="btn btn-primary" type="button">邮费：</button>
                      </span>
                                <input name="yf" type="text" class="form-control" value="<?php echo ($cache["yf"]); ?>">
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="input-group input-group-xs">
                                <span class="input-group-btn">
                             <button class="btn btn-primary" type="button">包邮价格：</button>
                         </span>
                                <input name="yftop" type="text" class="form-control" value="<?php echo ($cache["yftop"]); ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">一键拨号</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" name="phone" placeholder="选填" value="<?php echo ($cache["phone"]); ?>">
                        </div>
                    </div>
                    <div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">一键导航</label>
                            <div class="col-lg-4">
                                <div class="input-group input-group-sm">
                                    <input id="App-address" name="address" type="text" class="form-control" value="<?php echo ($cache["address"]); ?>">
                                    <span class="input-group-btn">
                                  <button class="btn btn-default shiny" type="button" onclick="baiduDitu('App-address','App-lng','App-lat')"><i class="glyphicon glyphicon-picture"></i>地图</button>
                              </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label"></label>
                            <div class="col-lg-2">
                                <div class="input-group input-group-xs">
                                    <span class="input-group-btn">
                           <button class="btn btn-palegreen" type="button">坐标：Lng</button>
                      </span>
                                    <input id="App-lng" name="lng" type="text" class="form-control" value="<?php echo ($cache["lng"]); ?>">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="input-group input-group-xs">
                                    <span class="input-group-btn">
                             <button class="btn btn-palegreen" type="button">坐标：Lat</button>
                         </span>
                                    <input id="App-lat" name="lat" type="text" class="form-control" value="<?php echo ($cache["lat"]); ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">首页轮播</label>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" name="indexalbum" placeholder="填写首页轮播广告ID，例如：1,2" value="<?php echo ($cache["indexalbum"]); ?>">
                                <span class="text darkorange">填写 商城管理中 广告管理 添加的广告ID，例如：1,2</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">首页分类</label>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" name="indexgroup" placeholder="填写首页产品分组ID，例如：1,2" value="<?php echo ($cache["indexgroup"]); ?>">
                                <span class="text darkorange">填写 商城管理中 商品分类 添加的分类ID，例如：1,2</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">关于我们</label>
                            <div class="col-lg-4">
                                <input type="hidden">
                                <script type="text/plain" id="J-ueditor" style="width: 600px;height:380px;position:relative">
                                <?php echo (htmlspecialchars_decode($cache["content"])); ?>
                                </script>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-4">
                                <button class="btn btn-primary btn-lg" type="submit">保存</button>&nbsp;&nbsp;&nbsp;&nbsp;
                                <button class="btn btn-palegreen btn-lg" type="reset">重填</button>
                            </div>
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
    <!--编辑器封装-->
    <script type="text/javascript">
    UE.getEditor('J-ueditor', {
        textarea: 'content' //提交字段名，必须填写，数据库必须有此字段
    });
    </script>
    <!--/编辑器封装-->
    <!--表单验证与提交封装-->
    <script type="text/javascript">
    $('#AppForm').bootstrapValidator({
        submitHandler: function(validator, form, submitButton) {
            var tourl = "<?php echo U('Admin/Shop/set');?>";
            var data = $('#AppForm').serialize();
            $.App.ajax('post', tourl, data, null);
            return false;
        },
    });
    </script>
    <!--/表单验证与提交封装-->
    <script type="text/javascript">
    $('#isyfbtn').on('click', function() {
        var value = $(this).prop('checked') ? 1 : 0;
        $('#isyf').val(value);
    });
    $('#isthbtn').on('click', function() {
        var value = $(this).prop('checked') ? 1 : 0;
        $('#isth').val(value);
    });
    </script>