<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:75:"D:\mumu\WWW\windowCms\public/../dxcms/app/admin\view\category\category.html";i:1585990744;s:61:"D:\mumu\WWW\windowCms\dxcms\app\admin\view\common\_style.html";i:1585897035;}*/ ?>
<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>栏目管理 - Window - 后台模板 </title>

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
           onclick="dx_openWindowParent('<i style=\'margin-right:6px;\' class=\'glyphicon glyphicon-plus\'></i> Add-添加','<?php echo url('category/add'); ?>')">
            <i class="glyphicon glyphicon-plus"></i>
            添加栏目
        </a>
        <button  type="button" class="btn btn-warning" onclick="sort()">
            <i class="glyphicon glyphicon-sort"></i>
            排序
        </button>
        <a href="javascript:;" class="btn btn-success telescopic" data-val="false">
            <i class="glyphicon glyphicon-resize-full"></i>
            展开
        </a>
        <a href="javascript:;" onclick="window.location.reload()" class="btn btn-info"><i
                class="glyphicon glyphicon-refresh"></i>刷新</a>
    </div>
    <div class="table-responsive">
        <form class="form">
        <table class="table table-hover">
            <thead>
            <tr>
                <th class="frist-th">ID</th>
                <th>排序</th>
                <th style="min-width: 300px;">栏目名称</th>
                <th>栏目Banner</th>
                <th>栏目类型</th>
                <th>栏目链接</th>
                <th>添加时间</th>
                <th>状态</th>
                <th class="last-th">操作</th>
            </tr>
            </thead>
            <tbody class="category-table cate-tbody">
            <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                <tr pid=<?php echo $item['pid']; ?> cid=<?php echo $item['id']; if($item['pid'] !=0){echo ' class="tr-hide"';};?> >

                <td class="frist-th"><?php echo $item['id']; ?></td>
                <td>
                    <input type="text" name="sort[<?php echo $item['id']; ?>]" value="<?php echo $item['sort']; ?>" class="sort">
                </td>

                <td><i class="glyphicon glyphicon-folder-close icon-a" data-open="on"></i>
                    <span style="color: #1E9FFF;">
                        <?php echo str_repeat('————|',$item['level']*1); ?>
                    </span>
                    <a href="#"> <?php echo $item['title']; ?> </a>
                </td>
                <td>
                    <?php if($item['cover_img'] != null): ?>
                    <img src="<?php echo $item['cover_img']; ?>" class="table-img br0">
                    <?php else: ?>
                    <img src="/dxcms/img/no_img.gif" alt="暂无图片" class="table-img br0">
                    <?php endif; ?>

                </td>
                <td>
                    <?php switch($item['type']): case "1": ?>文章列表<?php break; case "2": ?>封面频道<?php break; case "3": ?>站外跳转<?php break; default: ?>专题活动
                    <?php endswitch; ?>

                </td>
                <td><?php echo $item['typelink']; ?></td>
                <td>
                    <?php echo $item['create_time']; ?>
                </td>
                <td>
                    <?php if($item['isread'] == 1): ?>
                    <span class="btn btn-default btn-xs no status" data-name="status" data-id="<?php echo $item['id']; ?>"
                          data-val="<?php echo $item['isread']; ?>">
                            <i class="glyphicon glyphicon-remove"></i> 禁用
                        </span>
                    <?php else: ?>
                    <span class="btn btn-success btn-xs status" data-name="status" data-id="<?php echo $item['id']; ?>"
                          data-val="<?php echo $item['isread']; ?>">
									<i class="glyphicon glyphicon-ok"></i> 启用
								</span>

                    <?php endif; ?>
                </td>
                <td>
                    <div class="btn-group btn-group-xs" style="position: relative;">
                        <a href="javascript:;" class="btn btn-xs btn-success"
                           onclick="dx_openWindowParent('<i class=\'glyphicon glyphicon-edit\'></i> Edit-编辑','<?php echo url('category/edit'); ?>?id=<?php echo $item['id']; ?>')">
                            <i class="glyphicon glyphicon-edit"></i> 编辑
                        </a>
                        <a href="javascript:;" class="btn btn-xs btn-primary"
                           onclick="dx_openWindowParent('<i class=\'glyphicon glyphicon-plus\'></i> Add-添加子栏目','<?php echo url('category/add'); ?>?pid=<?php echo $item['id']; ?>')">
                            <i class="glyphicon glyphicon-plus"></i> 添加子栏目
                        </a>
                        <a href="javascript:;" class="btn btn-xs btn-info">
                            <i class="glyphicon glyphicon-retweet"></i> 转移
                        </a>
                        <a href="javascript:;" class="btn btn-warning" onclick="del(this,'<?php echo $item['id']; ?>')">
                            <i class="glyphicon glyphicon-trash"></i> 删除
                        </a>
                    </div>
                </td>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
        </form>
    </div>
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
            $(this).attr('class', 'btn btn-xs btn-success status').attr('data-val', '0').html('<i class="glyphicon glyphicon-ok"></i> 启用');
        } else {
            $(this).attr('class', 'btn btn-xs btn-default no status').attr('data-val', '1').html('<i class="glyphicon glyphicon-remove"></i> 禁用');
        }

        $.ajax({
            type: "post",
            url: "<?php echo url('category/update'); ?>",
            async: true,
            data: {id: id, isread: status},
            dataType: 'json',
            success: function (data) {
                if (data.code === 0) {
                    layer.msg(data.msg, {icon: 7, anim: 4})
                } else {
                    layer.alert(data.msg, {icon: 1, anim: 1}, function () {
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
                url: "<?php echo url('category/del'); ?>",
                async: true,
                data: {id: id},
                dataType: 'json',
                success: function (data) {
                    if (data.code === 0) {
                        layer.msg(data.msg, {icon: 7, anim: 4})
                    } else {
                        layer.alert(data.msg, {icon: 1, anim: 1}, function () {
                            layer.closeAll();
                            $(obj).parents("tr").remove();
                        })
                    }
                }
            });
            return false;
        });
    }

    function sort() {
        $.ajax({
            type: "post",
            url: "<?php echo url('category/sort'); ?>",
            async: true,
            data: $('form').serialize(),
            dataType: 'json',
            success: function (data) {
                if (data.code === 0) {
                    layer.msg(data.msg, {icon: 7, anim: 4})
                } else {
                    layer.alert(data.msg, {icon: 1, anim: 1}, function () {
                        layer.closeAll();
                    })
                }
            }
        });
        return false;
    }

</script>


</html>
