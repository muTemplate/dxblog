<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:71:"D:\mumu\WWW\windowCms\public/../dxcms/app/admin\view\set_up\system.html";i:1585897843;s:61:"D:\mumu\WWW\windowCms\dxcms\app\admin\view\common\_style.html";i:1585897035;}*/ ?>
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
			<form action="" method="post" class="layui-form">
				<div class="dx-main-box">
					<!-- title -->
					<ul class="nav nav-tabs stystem-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">站点</a></li>
						<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">安全</a></li>
						<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">邮件</a></li>
						<li role="presentation"><a href="#pay" aria-controls="pay" role="tab" data-toggle="tab">支付</a></li>
						<li role="presentation"><a href="#tel" aria-controls="tel" role="tab" data-toggle="tab">联系</a></li>
						<li role="presentation" class="dx-add-btn">
							<a href="#tel" onclick="dx_openWindowParent('<i style=\'margin-right:6px;\' class=\'glyphicon glyphicon-plus\'></i> Add-添加','add_system.html')">添加</a>
						</li>
					</ul>
					<!-- title end -->
					<!-- Tab panes -->
					<div class="tab-content stystem-tabs-content">
						<!-- 站点设置 Start -->
						<div role="tabpanel" class="tab-pane col-md-6 active" id="home">

							<div class="form-group">
								<label for="title">站点名称</label>
								<input type="text" class="form-control" name="title" value="" id="title" autocomplete="off">
							</div>

							<div class="form-group">
								<label for="keyword">META关键词</label>
								<input type="text" class="form-control" name="keyword" value="" id="keyword" autocomplete="off">
							</div>

							<div class="form-group">
								<label for="description">META描述</label>
								<textarea class="form-control" name="description" id="description" autocomplete="off" rows="3"></textarea>
							</div>

							<div class="form-group">
								<label for="filepath">附件存储路径</label>
								<input type="text" class="form-control" name="filepath" value="upload" id="filepath" autocomplete="off">
							</div>

							<div class="form-group">
								<label for="beian">域名备案</label>
								<input type="text" class="form-control" name="beian" value="" id="beian" autocomplete="off">
							</div>

							<div class="form-group">
								<label for="copyright">版权信息</label>
								<textarea class="form-control" name="copyright" id="copyright" autocomplete="off" rows="3"></textarea>
							</div>


						</div>
						<!-- 站点设置 End -->

						<!-- 安全设置 Start -->
						<div role="tabpanel" class="tab-pane col-md-6" id="profile">
							<div class="form-group">
								<label for="inlineRadio1">开启全局验证码</label>
								<div>
									<input type="radio" name="captcha_open" value="1" title="开始" checked>
									<input type="radio" name="captcha_open" value="0" title="关闭">
								</div>
							</div>

							<div class="form-group">
								<label for="captcha_scene">验证场景</label>
								<input type="text" class="form-control" name="captcha_scene" value="1,2,3,4,5,6" id="captcha_scene"
								 autocomplete="off">
							</div>

							<div class="form-group">
								<label for="captcha_font">验证码字符</label>
								<input type="text" class="form-control" name="captcha_font" value="123456789abcdefghijklmnopqrstuvwxyz" id="captcha_font"
								 autocomplete="off">
							</div>

							<div class="form-group">
								<label for="member_name_no">禁止使用会员名称</label>
								<input type="text" class="form-control" name="member_name_no" value="" id="member_name_no" autocomplete="off">
							</div>

							<div class="form-group">
								<label for="member_add_font">字段过滤</label>
								<input type="text" class="form-control" name="member_add_font" value="" id="member_add_font" autocomplete="off">
							</div>

						</div>
						<!-- 安全设置 End -->


						<!-- 邮件设置 Start -->
						<div role="tabpanel" class="tab-pane col-md-6" id="messages">
							<div class="form-group">
								<label for="captcha_font">占个空</label>
								<input type="text" class="form-control" name="captcha_font" value="123456789abcdefghijklmnopqrstuvwxyz" id="captcha_font"
								 autocomplete="off">
							</div>

						</div>
						<!-- 邮件设置 End -->

						<!-- 支付设置 Start -->
						<div role="tabpanel" class="tab-pane col-md-6" id="pay">
							<div class="form-group">
								<label for="captcha_font">占个空</label>
								<input type="text" class="form-control" name="captcha_font" value="支付设置" id="captcha_font" autocomplete="off">
							</div>
						</div>
						<!-- 支付设置 End -->

						<!-- 联系方式设置 Start -->
						<div role="tabpanel" class="tab-pane col-md-6" id="tel">
							<div class="form-group">
								<label for="full_name">联系人姓名</label>
								<input type="text" class="form-control" name="full_name" value="" id="full_name" autocomplete="off">
							</div>

							<div class="form-group">
								<label for="tel">联系电话</label>
								<input type="text" class="form-control" name="tel" value="" id="tel" autocomplete="off">
							</div>

							<div class="form-group">
								<label for="fax">传真号码</label>
								<input type="text" class="form-control" name="fax" value="" id="fax" autocomplete="off">
							</div>

							<div class="form-group">
								<label for="address">公司地址</label>
								<textarea class="form-control" name="address" id="address" rows="3" autocomplete="off"></textarea>
							</div>

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
