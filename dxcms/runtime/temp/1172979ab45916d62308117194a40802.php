<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:72:"D:\mumu\WWW\windowCms\public/../dxcms/app/admin\view\systems\system.html";i:1585911798;s:61:"D:\mumu\WWW\windowCms\dxcms\app\admin\view\common\_style.html";i:1585897035;}*/ ?>
<!DOCTYPE html>
<html lang="zh">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>系统设置 - Window - 后台模板 </title>

		<link rel="stylesheet" type="text/css" href="/dxcms/include/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="/dxcms/include/layui/css/layui.css" />
<link rel="stylesheet" type="text/css" href="/dxcms/css/dx-template.css" />

<script src="/dxcms/js/jquery.js" type="text/javascript" charset="utf-8"></script>
<script src="/dxcms/include/bootstrap/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
<script src="/dxcms/include/layui/layui.js" type="text/javascript" charset="utf-8"></script>
<script src="/dxcms/js/dx-template.js" type="text/javascript" charset="utf-8"></script>
	</head>
	<body>
		<div class="container-fluid dx-main">
			<form action="<?php echo url('systems/update'); ?>" method="post" class="layui-form">
				<div class="dx-main-box">
					<!-- title -->
					<ul class="nav nav-tabs stystem-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">站点</a></li>
						<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">安全</a></li>
						<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">邮件</a></li>
						<li role="presentation"><a href="#pay" aria-controls="pay" role="tab" data-toggle="tab">支付</a></li>
						<li role="presentation"><a href="#tel" aria-controls="tel" role="tab" data-toggle="tab">联系</a></li>
						<li role="presentation" class="dx-add-btn">
							<a href="#tel" onclick="dx_openWindowParent('<i style=\'margin-right:6px;\' class=\'glyphicon glyphicon-plus\'></i> Add-添加','<?php echo url('systems/add'); ?>')">添加</a>
						</li>
					</ul>
					<!-- title end -->
					<!-- Tab panes -->
					<div class="tab-content stystem-tabs-content">
						<!-- 站点设置 Start -->
						<div role="tabpanel" class="tab-pane col-md-6 active" id="home">
							<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;if($item['pid'] == 1): ?>
								<div class="form-group">
									<label for="title"><?php echo $item['title']; ?></label>
									<?php if($item['input_type'] == 1): ?>
									<input type="text" class="form-control" name="<?php echo $item['name']; ?>" value="<?php echo $item['value']; ?>" id="title" autocomplete="off">
									<?php endif; if($item['input_type'] == 2): ?>
										<textarea class="form-control" name="<?php echo $item['name']; ?>" rows="3" autocomplete="off"><?php echo $item['value']; ?></textarea>
									<?php endif; ?>
								</div>
								<?php endif; endforeach; endif; else: echo "" ;endif; ?>

						</div>
						<!-- 站点设置 End -->

						<!-- 安全设置 Start -->
						<div role="tabpanel" class="tab-pane col-md-6" id="profile">
							<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;if($item['pid'] == 2): ?>
							<div class="form-group">
								<label for="title"><?php echo $item['title']; ?></label>
								<?php if($item['input_type'] == 1): ?>
								<input type="text" class="form-control" name="<?php echo $item['name']; ?>" value="<?php echo $item['value']; ?>" id="title" autocomplete="off">
								<?php endif; if($item['input_type'] == 2): ?>
								<textarea class="form-control" name="<?php echo $item['name']; ?>" rows="3" autocomplete="off"><?php echo $item['value']; ?></textarea>
								<?php endif; ?>
							</div>
							<?php endif; endforeach; endif; else: echo "" ;endif; ?>

						</div>
						<!-- 安全设置 End -->


						<!-- 邮件设置 Start -->
						<div role="tabpanel" class="tab-pane col-md-6" id="messages">
							<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;if($item['pid'] == 3): ?>
							<div class="form-group">
								<label for="title"><?php echo $item['title']; ?></label>
								<?php if($item['input_type'] == 1): ?>
								<input type="text" class="form-control" name="<?php echo $item['name']; ?>" value="<?php echo $item['value']; ?>" id="title" autocomplete="off">
								<?php endif; if($item['input_type'] == 2): ?>
								<textarea class="form-control" name="<?php echo $item['name']; ?>" rows="3" autocomplete="off"><?php echo $item['value']; ?></textarea>
								<?php endif; ?>
							</div>
							<?php endif; endforeach; endif; else: echo "" ;endif; ?>

						</div>
						<!-- 邮件设置 End -->

						<!-- 支付设置 Start -->
						<div role="tabpanel" class="tab-pane col-md-6" id="pay">
							<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;if($item['pid'] == 4): ?>
							<div class="form-group">
								<label for="title"><?php echo $item['title']; ?></label>
								<?php if($item['input_type'] == 1): ?>
								<input type="text" class="form-control" name="<?php echo $item['name']; ?>" value="<?php echo $item['value']; ?>" id="title" autocomplete="off">
								<?php endif; if($item['input_type'] == 2): ?>
								<textarea class="form-control" name="<?php echo $item['name']; ?>" rows="3" autocomplete="off"><?php echo $item['value']; ?></textarea>
								<?php endif; ?>
							</div>
							<?php endif; endforeach; endif; else: echo "" ;endif; ?>
						</div>
						<!-- 支付设置 End -->

						<!-- 联系方式设置 Start -->
						<div role="tabpanel" class="tab-pane col-md-6" id="tel">
							<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;if($item['pid'] == 5): ?>
							<div class="form-group">
								<label for="title"><?php echo $item['title']; ?></label>
								<?php if($item['input_type'] == 1): ?>
								<input type="text" class="form-control" name="<?php echo $item['name']; ?>" value="<?php echo $item['value']; ?>" id="title" autocomplete="off">
								<?php endif; if($item['input_type'] == 2): ?>
								<textarea class="form-control" name="<?php echo $item['name']; ?>" rows="3" autocomplete="off"><?php echo $item['value']; ?></textarea>
								<?php endif; ?>
							</div>
							<?php endif; endforeach; endif; else: echo "" ;endif; ?>

						</div>
						<!-- 联系方式设置 End -->
						<div class="btn-box" style="clear: both;padding: 15px;">
							<button type="submit" class="btn btn-primary dx-btn-submit">提交</button>
						</div>

					</div>
				</div>

			</form>
		</div>

	</body>
	<script type="text/javascript">
		function changeState(el) {
			if (el.readOnly) el.checked = el.readOnly = false;
			else if (!el.checked) el.readOnly = el.indeterminate = true;
		}
	</script>
</html>
