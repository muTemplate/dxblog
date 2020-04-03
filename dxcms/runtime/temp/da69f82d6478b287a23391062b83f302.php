<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:69:"D:\mumu\WWW\windowCms\public/../dxcms/app/admin\view\admin\admin.html";i:1585925053;s:61:"D:\mumu\WWW\windowCms\dxcms\app\admin\view\common\_style.html";i:1585897035;}*/ ?>
<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>管理员 - Window - 后台模板 </title>
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
        <a href="javascript:;" class="btn btn-primary"
           onclick="dx_openWindowParent('<i style=\'margin-right:6px;\' class=\'glyphicon glyphicon-plus\'></i> Add-添加','<?php echo url('admin/add'); ?>')">
            <i class="glyphicon glyphicon-plus"></i>
            添加
        </a>
        <a href="javascript:;" onclick="window.location.reload()" class="btn btn-info"><i
                class="glyphicon glyphicon-refresh"></i>刷新</a>
    </div>
    <div class="table-responsive">
        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th class="frist-th">ID</th>
                <th>头像</th>
                <th>账号</th>
                <th>名称</th>
                <th>添加时间</th>
                <th>登录时间</th>
                <th>状态</th>
                <th class="last-th">操作</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                <td class="frist-th">
                    <?php echo $item['id']; ?>
                </td>
                <td>
                    <img src=" <?php echo $item['face']; ?>" class="table-img">
                </td>
                <td> <?php echo $item['account']; ?></td>
                <td> <?php echo $item['name']; ?></td>
                <td> <?php echo $item['create_time']; ?></td>
                <td>  <?php echo $item['login_time']; ?> </td>
                <td>
								<span class="btn btn-default no status" data-name="status" data-id="1" data-val="1">
									<i class="glyphicon glyphicon-remove"></i> 禁用
								</span>

                </td>
                <td>
                    <div class="btn-group">
                        <a href="javascript:;" class="btn btn-success"
                           onclick="dx_openWindowParent('<i style=\'margin-right:6px;\' class=\'glyphicon glyphicon-edit\'></i> Edit-编辑','<?php echo url('admin/edit'); ?>?id=<?php echo $item['id']; ?>')">
                            <i class="glyphicon glyphicon-edit"></i> 编辑
                        </a>
                        <a href="javascript:;" class="btn btn-warning">
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
            action = "禁用";

        } else {
            action = "启用";
        }

        // layer.msg(name+'\\\\'+id+'//////'+val)
        if ($(this).hasClass('no')) {
            $(this).attr('class', 'btn btn-success status').attr('data-val', '0').html('<i class="glyphicon glyphicon-ok"></i> 启用');
        } else {
            $(this).attr('class', 'btn btn-default no status').attr('data-val', '1').html('<i class="glyphicon glyphicon-remove"></i> 禁用');
        }

        layer.msg('执行' + action + '操作' + '<br />' + '字段值:' + name + '<br />' + '管理员:' + id + '<br />' + '状态码:' + val, {
            anim: 1,
            time: 3000,
            offset: 'b'
        });
    })
</script>


</html>
