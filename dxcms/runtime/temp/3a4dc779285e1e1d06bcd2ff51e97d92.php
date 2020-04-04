<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:68:"D:\mumu\WWW\windowCms\public/../dxcms/app/admin\view\admin\edit.html";i:1585992137;s:61:"D:\mumu\WWW\windowCms\dxcms\app\admin\view\common\_style.html";i:1585897035;}*/ ?>
<!DOCTYPE html>
<html lang="zh">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>编辑管理员 - Window - 后台模板 </title>

		<link rel="stylesheet" type="text/css" href="/dxcms/include/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="/dxcms/include/layui/css/layui.css" />
<link rel="stylesheet" type="text/css" href="/dxcms/css/dx-template.css" />

<script src="/dxcms/js/jquery.js" type="text/javascript" charset="utf-8"></script>
<script src="/dxcms/include/bootstrap/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
<script src="/dxcms/include/layui/layui.js" type="text/javascript" charset="utf-8"></script>
<script src="/dxcms/js/dx-template.js" type="text/javascript" charset="utf-8"></script>

		<style type="text/css">
			#upload{
				width: 150px;
				height: 150px;
				padding: 0;
				border: 1px solid #d0e9c6;
				text-align: center;
				cursor: pointer;
			}

			#upload .glyphicon{
				font-size: 80px;
				color: #dddddd;
				margin-top: 30px;
				display: none;
			}

			#demo1{
				width: 150px;
				height: 150px;
				display: block;
			}

			#del{
				float: right;
				display: none;
			}
		</style>

	</head>
	<body>
		<div class="container-fluid dx-main">

			<form action="<?php echo url('admin/update'); ?>" method="post" class="col-md-3 layui-form" style="height: auto;padding:10px 15px;">
				<div class="form-group">
					<label for="account">登录账号</label>
					<input type="hidden" name="id" value="<?php echo $admin['id']; ?>">
					<input type="text" class="form-control" name="account" value="<?php echo $admin['account']; ?>" readonly id="account" autocomplete="off">
				</div>

				<div class="form-group">
					<label for="password">登录密码</label>
					<input type="password" class="form-control" name="password" value="" id="password" autocomplete="off">
				</div>

				<div class="form-group">
					<label for="name">管理员别名</label>
					<input type="text" class="form-control" name="name" value="<?php echo $admin['name']; ?>" id="name" autocomplete="off">
				</div>

				<div class="form-group">
					<label for="face" style="width: 100%;">
						管理员头像


					</label>
					<div class="layui-upload" id="upload">
						
						<img  id="demo1" src="<?php echo $admin['face']; ?>" alt="">
					</div>
					<input class="form-control" type="hidden" name="odface" value="<?php echo $admin['face']; ?>" id="odface">
					<input class="form-control" type="hidden" name="face" value="<?php echo $admin['face']; ?>" id="face">
					<span style="font-size: 12px;color: #8D8D8D;">
						图片尺寸400*400
					</span>
				</div>


				<div class="form-group">
					<label for="name">是否禁用</label>
					<div>
						<?php if($admin['status'] == 1): ?>
						<input type="radio" name="status" value="1" title="启用" checked>
						<input type="radio" name="status" value="0" title="禁用">
						<?php else: ?>
						<input type="radio" name="status" value="1" title="启用">
						<input type="radio" name="status" value="0" title="禁用" checked>
						<?php endif; ?>
					</div>
				</div>

				<button type="submit" class="btn btn-primary dx-btn-submit"> 提交 </button>
			</form>

		</div>

	</body>
	<script type="text/javascript">
		layui.use('upload', function() {
			var upload = layui.upload;

			//普通图片上传
			var uploadInst = upload.render({
				elem: '#upload'
				,url: "<?php echo url('file/face'); ?>" //改成您自己的上传接口
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
						return layer.msg(res.msg);
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
