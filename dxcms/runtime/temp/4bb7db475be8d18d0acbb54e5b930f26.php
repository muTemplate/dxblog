<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:73:"D:\mumu\WWW\windowCms\public/../dxcms/app/admin\view\article\article.html";i:1586013471;s:61:"D:\mumu\WWW\windowCms\dxcms\app\admin\view\common\_style.html";i:1585897035;}*/ ?>
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
				<?php if($oid > 0): ?>
					<a href="javascript:;" onclick="javascript:history.back(-1);" class="btn btn-warning"><i class="glyphicon glyphicon-share-alt"></i>返回上级</a>
				<?php endif; ?>

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
					<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
						<tr>
							<td class="frist-th"><?php echo $item['id']; ?></td>
							<td>
								<?php if($item['thumbnail'] != null): ?>
								<img src="<?php echo $item['thumbnail']; ?>" class="table-img br0">
								<?php else: ?>
								<img src="/dxcms/img/no_img.gif" alt="暂无图片" class="table-img br0">
								<?php endif; ?>
							</td>
							<td style="min-width: 400px;">
								<a href=""><?php echo $item['title']; ?></a>
							</td>
							<td>
								<?php if(is_array($cate) || $cate instanceof \think\Collection || $cate instanceof \think\Paginator): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($item['pid'] == $vo['title']): ?>
										<a href="<?php echo url('article/index',['pid'=>$vo['id']]); ?>"><?php echo $vo['title']; ?></a>
									<?php endif; endforeach; endif; else: echo "" ;endif; ?>
							</td>
							<td><?php echo $item['admin']; ?></td>
							<td><?php echo $item['create_time']; ?></td>
							<td>
								<?php if($item['isread'] == 1): ?>
								<span class="btn btn-default btn-xs no status" data-name="status" data-id="<?php echo $item['id']; ?>"
									  data-val="<?php echo $item['isread']; ?>">
                            <i class="glyphicon glyphicon-remove"></i> 隐藏
                        </span>
								<?php else: ?>
								<span class="btn btn-success btn-xs status" data-name="status" data-id="<?php echo $item['id']; ?>"
									  data-val="<?php echo $item['isread']; ?>">
									<i class="glyphicon glyphicon-ok"></i> 显示
								</span>

								<?php endif; ?>

							</td>
							<td>
								<div class="btn-group">
									<a href="javascript:;" class="btn btn-xs btn-success" onclick="dx_openWindowParent('<i style=\'margin-right:6px;\' class=\'glyphicon glyphicon-edit\'></i> Edit-编辑','<?php echo url('article/edit'); ?>?id=<?php echo $item['id']; ?>')">
										<i class="glyphicon glyphicon-edit"></i> 编辑
									</a>
									<a href="javascript:;" class="btn btn-xs btn-warning" onclick="del(this,'<?php echo $item['id']; ?>')">
										<i class="glyphicon glyphicon-trash"></i> 删除
									</a>
								</div>
							</td>
						</tr>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</tbody>
				</table>
			</div>
			<nav aria-label="Page navigation">
				<?php echo $page; ?>
			</nav>
		</div>
	</body>
	<script type="text/javascript">
		$('.status').click('on', function () {
			var name = $(this).attr('data-name');
			var id = $(this).attr('data-id');
			var val = $(this).attr('data-val');
			var action;
			if (val > 0) {
				var status = 0;
				action = "禁用";

			} else {
				var status = 1;
				action = "启用";
			}
			if ($(this).hasClass('no')) {
				$(this).attr('class', 'btn btn-xs btn-success status').attr('data-val', '0').html('<i class="glyphicon glyphicon-ok"></i> 显示');
			} else {
				$(this).attr('class', 'btn btn-xs btn-default no status').attr('data-val', '1').html('<i class="glyphicon glyphicon-remove"></i> 隐藏');
			}

			$.ajax({
				type: "post",
				url: "<?php echo url('article/update'); ?>",
				async: true,
				data: {id: id, isread: status},
				dataType: 'json',
				success: function (data) {
					if (data.code === 0) {
						layer.msg(data.msg, {icon: 7, anim: 1})
					} else {
						layer.msg(data.msg, {icon: 1, anim: 1,time:3000}, function () {
							layer.closeAll();
						})
					}
				}
			});
			return false;


		});

		//    删除
		function del(obj, id) {
			layer.confirm('真的删除吗', function (e) {
				$.ajax({
					type: "get",
					url: "<?php echo url('article/del'); ?>",
					async: true,
					data: {id: id},
					dataType: 'json',
					success: function (data) {
						if (data.code === 0) {
							layer.msg(data.msg, {icon: 7, anim: 4})
						} else {
							layer.msg(data.msg, {icon: 1, anim: 1}, function () {
								layer.closeAll();
								$(obj).parents("tr").remove();
							})
						}
					}
				});
				return false;
			});
		}
	</script>


</html>
