<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:73:"D:\mumu\WWW\windowCms\public/../dxcms/app/admin\view\article\article.html";i:1585991996;s:61:"D:\mumu\WWW\windowCms\dxcms\app\admin\view\common\_style.html";i:1585897035;}*/ ?>
<!DOCTYPE html>
<html lang="zh">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>文档管理 - Window - 后台模板 </title>
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
			<div class="btn-group" style="margin-bottom: 30px;margin-top: 30px;">
				<a href="javascript:;" class="btn btn-primary" onclick="dx_openWindowParent('<i style=\'margin-right:6px;\' class=\'glyphicon glyphicon-plus\'></i> Add-添加','<?php echo url('article/add'); ?>')">
					<i class="glyphicon glyphicon-plus"></i>
					添加
				</a>
				<a href="javascript:;" onclick="window.location.reload()" class="btn btn-info"><i class="glyphicon glyphicon-refresh"></i>刷新</a>
			</div>
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th class="frist-th">ID</th>
							<th style="width: 60px;">封面</th>
							<th style="min-width: 400px;">标题</th>
							<th style="width: 150px;">栏目</th>
							<th style="width: 150px;">发布人</th>
							<th>添加时间</th>

							<th>状态</th>
							<th class="last-th">操作</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="frist-th">1</td>
							<td>
								<img src="dx/img/12.jpg" class="table-img br0">
							</td>
							<td style="min-width: 400px;">
								<a href="#">T179次列车在湖南郴州脱线 未造成人员死亡</a>
							</td>
							<td>
								<a href="#">国内</a>
							</td>
							<td>admin</td>
							<td>2020-03-13</td>
							<td>
								<span class="btn btn-default no status" data-name="status" data-id="1" data-val="1">
									<i class="glyphicon glyphicon-remove"></i> 禁用
								</span>

							</td>
							<td>
								<div class="btn-group">
									<a href="javascript:;" class="btn btn-success" onclick="dx_openWindowParent('<i style=\'margin-right:6px;\' class=\'glyphicon glyphicon-edit\'></i> Edit-编辑','add.html')">
										<i class="glyphicon glyphicon-edit"></i> 编辑
									</a>
									<a href="javascript:;" class="btn btn-warning">
										<i class="glyphicon glyphicon-trash"></i> 删除
									</a>
								</div>
							</td>
						</tr>
						<tr>
							<td class="frist-th">2</td>
							<td>
								<img src="dx/img/333.jpg" class="table-img br0">
							</td>
							<td style="min-width: 400px;">
								<a href="#">T179次列车在湖南郴州脱线 未造成人员死亡</a>
							</td>
							<td>
								<a href="#">国内</a>
							</td>
							<td>admin</td>
							<td>2020-03-13</td>
							<td>
								<span class="btn btn-success status" data-name="status" data-id="2" data-val="0">
									<i class="glyphicon glyphicon-ok"></i> 启用
								</span>
							</td>
							<td>
								<div class="btn-group">
									<a href="javascript:;" class="btn btn-success" onclick="dx_openWindowParent('<i style=\'margin-right:10px;\' class=\'glyphicon glyphicon-edit\'></i> Edit-编辑','add.html')">
										<i class="glyphicon glyphicon-edit"></i> 编辑
									</a>
									<a href="javascript:;" class="btn btn-warning">
										<i class="glyphicon glyphicon-trash"></i> 删除
									</a>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<nav aria-label="Page navigation">
				<ul class="pagination">
					<li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
					<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li>
						<a href="#" aria-label="Next">
							<span aria-hidden="true">&raquo;</span>
						</a>
					</li>
			</nav>
		</div>
	</body>
	<script type="text/javascript">
		$('.status').click('on', function() {
			var name = $(this).attr('data-name');
			var id = $(this).attr('data-id');
			var val = $(this).attr('data-val');
			var action;
			if (val > 0) {
				action = "禁用";

			} else {
				action = "启用";
			}

			// layer.msg(name+'\\\\'+id+'//////'+val)
			if ($(this).hasClass('no')) {
				$(this).attr('class', 'btn btn-success status').attr('data-val', '0').html(
					'<i class="glyphicon glyphicon-ok"></i> 启用');
			} else {
				$(this).attr('class', 'btn btn-default no status').attr('data-val', '1').html(
					'<i class="glyphicon glyphicon-remove"></i> 禁用');
			}

			layer.msg('执行' + action + '操作' + '<br />' + '字段值:' + name + '<br />' + '管理员:' + id + '<br />' + '状态码:' + val, {
				anim: 1,
				time: 3000,
				offset: 'b'
			});
		})
	</script>


</html>