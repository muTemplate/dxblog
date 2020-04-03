<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:69:"D:\mumu\WWW\windowCms\public/../dxcms/app/admin\view\index\index.html";i:1585914457;s:61:"D:\mumu\WWW\windowCms\dxcms\app\admin\view\common\_style.html";i:1585897035;}*/ ?>
<!DOCTYPE html>
<html lang="zh">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Window - 后台模板</title>

		<link rel="stylesheet" type="text/css" href="/dxcms/include/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="/dxcms/include/layui/css/layui.css" />
<link rel="stylesheet" type="text/css" href="/dxcms/css/dx-template.css" />

<script src="/dxcms/js/jquery.js" type="text/javascript" charset="utf-8"></script>
<script src="/dxcms/include/bootstrap/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
<script src="/dxcms/include/layui/layui.js" type="text/javascript" charset="utf-8"></script>
<script src="/dxcms/js/dx-template.js" type="text/javascript" charset="utf-8"></script>
		
	</head>
	<body class="dx-body">
		<div class="dx-memu">
			<div class="dx-memu-item" onclick="dx_openWindow('<i style=\'margin-right:6px;\' class=\'glyphicon glyphicon-th-large\'></i> System-系统设置','<?php echo url('systems/index'); ?>')">
				<img src="/dxcms/icon/imageres_109.ico">
				<h3>系统设置</h3>
			</div>

			<div class="dx-memu-item" onclick="dx_openWindow('<i style=\'margin-right:6px;\' class=\'glyphicon glyphicon-file\'></i> List-文档管理','<?php echo url('article/index'); ?>')">
				<img src="/dxcms/icon/imageres_6400.ico">
				<h3>通讯录</h3>
			</div>

			<div class="dx-memu-item" onclick="dx_openWindow('<i style=\'margin-right:6px;\' class=\'glyphicon glyphicon-user\'></i> List-管理员','<?php echo url('admin/index'); ?>')">
				<img src="/dxcms/icon/imageres_79.ico">
				<h3>管理员</h3>
			</div>

			<div class="dx-memu-item" onclick="dx_openWindow('<i style=\'margin-right:6px;\' class=\'glyphicon glyphicon-folder-open\'></i> List-栏目管理','<?php echo url('category/index'); ?>')">
				<img src="/dxcms/icon/imageres_8.ico">
				<h3>栏目管理</h3>
			</div>

			<div class="dx-memu-item" onclick="dx_openWindow('<i style=\'margin-right:6px;\' class=\'glyphicon glyphicon-sunglasses\'></i> List-会员管理','<?php echo url('member/index'); ?>')">
				<img src="/dxcms/icon/imageres_181.ico">
				<h3>会员管理</h3>
			</div>

			<div class="dx-memu-item" onclick="dx_openWindow('<i style=\'margin-right:6px;\' class=\'glyphicon glyphicon-picture\'></i> List-图片管理','<?php echo url('admin/index'); ?>')">
				<img src="/dxcms/icon/imageres_113.ico">
				<h3>图片管理</h3>
			</div>

			<div class="dx-memu-item" onclick="dx_openWindow('<i style=\'margin-right:6px;\' class=\'glyphicon glyphicon-file\'></i> List-文档管理','<?php echo url('article/index'); ?>')">
				<img src="/dxcms/icon/imageres_112.ico">
				<h3>文档管理</h3>
			</div>

			<div class="dx-memu-item" onclick="dx_openWindow('<i style=\'margin-right:6px;\' class=\'glyphicon glyphicon-file\'></i> List-文档管理','<?php echo url('article/index'); ?>')">
				<img src="/dxcms/icon/imageres_1022.ico">
				<h3>系统日志</h3>
			</div>

			<div class="dx-memu-item" onclick="dx_openWindow('<i style=\'margin-right:6px;\' class=\'glyphicon glyphicon-file\'></i> List-文档管理','<?php echo url('article/index'); ?>')">
				<img src="/dxcms/icon/imageres_55.ico">
				<h3>回收站</h3>
			</div>



		</div>

		<div class="footer layui-layer-molv">
			<div class="item-start">
				<i class="glyphicon glyphicon-th-large"></i>
			</div>
		</div>
	</body>



</html>
