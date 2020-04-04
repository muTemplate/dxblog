<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:79:"D:\mumu\WWW\windowCms\public/../dxcms/app/admin\view\category\add_category.html";i:1585987098;s:61:"D:\mumu\WWW\windowCms\dxcms\app\admin\view\common\_style.html";i:1585897035;}*/ ?>
<!DOCTYPE html>
<html lang="zh">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>添加栏目 - Window - 后台模板 </title>


		<link rel="stylesheet" type="text/css" href="/dxcms/include/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="/dxcms/include/layui/css/layui.css" />
<link rel="stylesheet" type="text/css" href="/dxcms/css/dx-template.css" />

<script src="/dxcms/js/jquery.js" type="text/javascript" charset="utf-8"></script>
<script src="/dxcms/include/bootstrap/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
<script src="/dxcms/include/layui/layui.js" type="text/javascript" charset="utf-8"></script>
<script src="/dxcms/js/dx-template.js" type="text/javascript" charset="utf-8"></script>
		<style type="text/css">
			#upload{
				width: 100%;
				min-height: 100px;
				max-height: 150px;
				padding: 0;
				border: 1px solid #d0e9c6;
				text-align: center;
				cursor: pointer;
			}

			#upload .glyphicon{
				font-size: 80px;
				color: #dddddd;
				margin-top: 5px;
			}


			#demo1{
				width: 100%;
				max-height: 150px;
			}


		</style>
	</head>
	<body>
		<div class="container-fluid dx-main">
			<form action="<?php echo url('category/save'); ?>" method="post" class="layui-form" style="height: auto;">
				<div class="dx-main-box">
					<!-- title -->
					<ul class="nav nav-tabs stystem-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">基本</a></li>
						<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">高级</a></li>
						<li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">内容</a></li>
						
					</ul>
					<!-- title end -->
					<!-- Tab panes -->
					<div class="tab-content stystem-tabs-content">
						<!-- 基本设置 Start -->
						<div role="tabpanel" class="tab-pane col-md-3 active" id="home">

							<div class="form-group">
								<label for="title"><span style="color: #fc5520;">*</span>栏目名称</label>
								<input type="text" class="form-control" name="title" value="" id="title" autocomplete="off">
								<input type="hidden" name="pid" value="<?php echo $pid; ?>">
							</div>

							<div class="form-group">
								<label for="keyword">英文名称</label>
								<input type="text" class="form-control" name="name" value="" id="keyword" autocomplete="off">
							</div>

							<div class="form-group">
								<label for="keyword">封面图片</label>
								<div class="layui-upload" id="upload">

									<img  id="demo1" src="" alt="">
								</div>
								<input class="form-control" type="text" readonly name="cover_img" value="" id="face">
							</div>

							<div class="form-group">
								<label for="beian">栏目类型</label>
								<select name="type" class="form-control">
									<option value="1">文章列表</option>
									<option value="2">封面频道</option>
									<option value="3">站外跳转</option>
									<option value="4">专题活动</option>
								</select>
							</div>

							<div class="form-group">
								<label for="filepath">栏目文件夹名称</label>
								<input type="text" class="form-control" name="cate_folder" value="" id="filepath" autocomplete="off">
							</div>

							<div class="form-group">
								<label for="filepath">浏览权限</label>
								<select name="readauth" class="form-control">
									<option value="1">开放浏览</option>
									<option value="2">注册会员</option>
									<option value="3">初级会员</option>
									<option value="4">中级会员</option>
									<option value="5">高级会员</option>
								</select>
							</div>

							<div class="form-group">
								<label for="open_captcha">隐藏栏目</label>
								<div>
									<input type="radio" name="isread" value="1" title="显示" checked>
									<input type="radio" name="isread" value="0" title="隐藏">
								</div>
							</div>

						</div>
						<!-- 基本设置 End -->

						<!-- 高级设置 Start -->
						<div role="tabpanel" class="tab-pane col-md-6" id="profile">
							
							<div class="form-group">
								<label for="disabledTextInput">列表页模板</label>
								<div class="form-inline">
									<div class="layui-input-inline">
										<input type="text" class="layui-input disabled" name="" readonly="readonly" value="list_article.html" autocomplete="off">
									</div>
									<div class="layui-input-inline">
										<select name="" style="margin-left: -4px;">
											<option value="">list_article.html</option>
										</select>
									</div>
								</div>
							</div>

							<div class="form-group">
								<label for="captcha_font">频道页模板</label>
								<div class="form-inline">
									<div class="layui-input-inline">
										<input type="text" class="layui-input disabled" name="" readonly="readonly" value="index_default.html" autocomplete="off">
									</div>
									<div class="layui-input-inline">
										<select name="" style="margin-left: -8px;">
											<option value="">index_default.html</option>
										</select>
									</div>
								</div>
							</div>

							<div class="form-group">
								<label for="member_name_no">内容页模板</label>
								<div class="form-inline">
									<div class="layui-input-inline">
										<input type="text" class="layui-input disabled" name="" readonly="readonly" value="article_article.html" autocomplete="off">
									</div>
									<div class="layui-input-inline">
										<select name="" style="margin-left: -8px;">
											<option value="">article_article.html</option>
										</select>
									</div>
								</div>
							</div>
							
							<div class="form-group">
								<label for="captcha_font">SEO标题</label>
								<input type="text" class="form-control" name="meta_title" value="" id="captcha_font1"
								 autocomplete="off">
							</div>
							
							<div class="form-group">
								<label for="captcha_font">SEO关键词</label>
								<input type="text" class="form-control" name="meta_key" value="" id="captcha_font2"
								 autocomplete="off">
							</div>
							
							<div class="form-group">
								<label for="captcha_font">SEO描述</label>
								<textarea name="meta_desc" class="form-control" autocomplete="off"></textarea>
							</div>

						</div>
						<!-- 高级设置 End -->

						<!-- 栏目内容 Start -->
						<div role="tabpanel" class="tab-pane col-md-6" id="settings" style="height: 530px;overflow: hidden;">
							<div class="form-group">
								<label for="captcha_font">这里是栏目内容-Content</label>
								<textarea name="content" class="form-control" id="content"></textarea>
							</div>
						</div>
						<!-- 栏目内容 End -->

						<div class="btn-box" style="clear: both;padding: 15px;">
							<button type="submit" class="btn btn-primary dx-btn-submit">提交</button>
						</div>

					</div>
				</div>

			</form>
		</div>

	</body>
	<script src="/dxcms/include/umeditor/ueditor.config.js" type="text/javascript" charset="utf-8"></script>
	<script src="/dxcms/include/umeditor/ueditor.all.min.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript">
		var ue = UE.getEditor('content', {
			//取消内容框自动增长，改成滚动条
			autoHeight: false,
			// 取消工具栏浮动
			autoFloatEnabled: false,
			toolbars: [
				[
					'undo', //撤销
					'redo', //重做
					'help', //帮助
					'|',
					'removeformat', //清除格式

					'autotypeset', //自动排版
						'|',
					'forecolor', //字体颜色
					'backcolor', //背景色
					'fontborder', //字符边框
					'|',
					'bold', //加粗
					'italic', //斜体
					'underline', //下划线
					'strikethrough', //删除线
					'formatmatch', //格式刷
					'|',
					'pasteplain', //纯文本粘贴模式
					'emotion', //表情
					'spechars', //特殊字符
					'searchreplace', //查询替换
					'|',
					'justifyleft', //居左对齐
					'justifyright', //居右对齐
					'justifycenter', //居中对齐
					'justifyjustify', //两端对齐
						'|',
					'simpleupload', //单图上传
					'insertimage', //多图上传
					'insertvideo', //视频
					'map', //Baidu地图
					'|',
					'inserttitle', //插入标题
					'insertcode', //代码语言
					'fontfamily', //字体
					'fontsize', //字号
					'paragraph', //段落格式
					'customstyle', //自定义标题
					'|',
					'insertorderedlist', //有序列表
					'insertunorderedlist', //无序列表
					'link', //超链接
					'preview', //预览
					'|',
					'imagenone', //默认
					'imageleft', //左浮动
					'imageright', //右浮动
					'imagecenter', //居中
					'|',
					'lineheight', //行间距
					'rowspacingtop', //段前距
					'rowspacingbottom', //段后距
					'indent', //首行缩进
					'subscript', //下标
					'superscript', //上标
					'|',
					'selectall', //全选
					'horizontal', //分隔线
					'time', //时间
					'date', //日期
					'fullscreen', //全屏
					'edittip ', //编辑提示
					//'drafts', // 从草稿箱加载
					'cleardoc', //清空文档
				]
			]

		});
	</script>
	<script type="text/javascript">
		layui.use('upload', function() {
			var upload = layui.upload;

			//普通图片上传
			var uploadInst = upload.render({
				elem: '#upload'
				,url: "<?php echo url('file/image'); ?>" //改成您自己的上传接口
				,before: function(obj){
					//预读本地文件示例，不支持ie8
					obj.preview(function(index, file, result){
						$('#demo1').show();
						$('#upload .glyphicon').hide();
						$('#del').show();
						$('#demo1').attr('src', result); //图片链接（base64）
					});
				}
				,done: function(res){
					//如果上传失败
					if(res.code === 0){
						$('#face').val(res.data);
						layer.alert(res.msg);

					}
					else{
						$('#face').val(res.data);
					}
					//上传成功
				}

			});

		});
	</script>
</html>
