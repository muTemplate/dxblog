<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:78:"D:\mumu\WWW\windowCms\public/../dxcms/app/admin\view\article\edit_article.html";i:1586013785;s:61:"D:\mumu\WWW\windowCms\dxcms\app\admin\view\common\_style.html";i:1585897035;}*/ ?>
<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>添加文档 - Window - 后台模板 </title>
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
            height: 150px;
            padding: 0;
            border: 1px solid #d0e9c6;
            text-align: center;
            cursor: pointer;
        }

        #face {
            width: 100%;
        }

        #demo1{
            width: 100%;
        }

    </style>
</head>
<body>
<div class="container-fluid dx-main" style="height: auto;">
    <form action="<?php echo url('article/save'); ?>" method="post" class="col-md-6 layui-form" style="height: auto;padding:20px 15px;">

        <div class="form-group">
            <label for="account">文章标题</label>
            <input type="text" class="form-control" name="title" value="<?php echo $article['title']; ?>" id="account" autocomplete="off">
            <input type="hidden" name="id" value="<?php echo $article['id']; ?>">
        </div>

        <div class="form-group">
            <label for="account">文章属性*- <i style="font-size: 12px;color: #ff0000;">暂时支持单选</i> -*</label>
            <div style="padding-top: 5px;">
                <?php if(is_array($flag) || $flag instanceof \think\Collection || $flag instanceof \think\Paginator): $i = 0; $__LIST__ = $flag;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$f): $mod = ($i % 2 );++$i;?>
                <input type="checkbox" name="flag" value="<?php echo $f['fName']; ?>" title="<?php echo $f['fTitle']; ?>" lay-skin="primary" <?php if($article['flag'] == $f['fName']): ?> checked <?php endif; ?> >
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div>

        <div class="form-group">
            <label for="password">文章摘要</label>
            <textarea class="form-control" name="info" id="password" autocomplete="off" rows="4"><?php echo $article['info']; ?></textarea>
        </div>

        <div class="form-group">
           <div class="col-md-6" style="padding:  0;padding-right: 10px;">

               <div style="margin-bottom: 15px;">
                   <label for="source">所属栏目</label>
                   <select name="pid" class="form-control">
                       <option value=""></option>
                       <?php if(is_array($cate) || $cate instanceof \think\Collection || $cate instanceof \think\Paginator): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;if($item['type'] == 1): ?>
                                <option <?php if($article['pid'] == $item['id']): ?> selected <?php endif; ?>  value="<?php echo $item['id']; ?>"><?php echo str_repeat('————|',$item['level']*1); ?> <?php echo $item['title']; ?></option>
                            <?php endif; endforeach; endif; else: echo "" ;endif; ?>

                   </select>
               </div>

               <div style="margin-bottom: 15px;">
                   <label for="writer">文章作者</label>
                   <input type="text" class="form-control" name="writer" value="<?php echo $article['writer']; ?>" id="writer" autocomplete="off">
               </div>

               <div style="margin-bottom: 15px;">
                   <label for="source">文章来源</label>
                   <input type="text" class="form-control" name="source" value="<?php echo $article['source']; ?>" id="source" autocomplete="off">
               </div>
           </div>

            <div class="col-md-6" style="padding:0;padding-left: 10px;">
                <label for="face" style="width: 100%;">
                    文章缩略图
                </label>
                <div class="layui-upload" id="upload">
                    <img id="demo1" src="<?php echo $article['thumbnail']; ?>" alt="">
                </div>
                <input class="form-control" type="text" name="thumbnail" readonly value="<?php echo $article['thumbnail']; ?>" id="face">
            </div>
        </div>


        <div class="form-group" style="height: 530px;clear: both;">
            <label for="captcha_font">文章内容</label>
            <textarea name="body" class="form-control" id="content"><?php echo $content['body']; ?></textarea>
        </div>

        <div class="form-group" style="height: 60px;">
            <div class="col-md-4" style="padding:  0;padding-right: 10px;">
                <label>隐藏文章</label>
                <div>
                    <input type="radio" name="isread" value="1" title="显示" <?php if($article['isread'] == 1): ?> checked <?php endif; ?> >
                    <input type="radio" name="isread" value="0" title="隐藏"  <?php if($article['isread'] == 0): ?> checked <?php endif; ?> >
                </div>
            </div>
            <div class="col-md-4" style="padding:  0;padding-left: 10px;">
                <label>开启评论</label>
                <div>
                    <input type="radio" name="comment" value="1" title="开启"  <?php if($article['comment'] == 1): ?> checked <?php endif; ?>>
                    <input type="radio" name="comment" value="0" title="关闭"  <?php if($article['comment'] == 0): ?> checked <?php endif; ?>>
                </div>
            </div>
            <div class="col-md-4" style="padding:  0;padding-left: 10px;">
                <label>发布时间</label>
                <div>
                    <input type="text" class="form-control" name="create_time" value="<?php echo $article['create_time']; ?>" id="addTime" >
                </div>
            </div>
        </div>

        <div class="form-group" style="clear: both;">
            <button type="submit" class="btn btn-primary dx-btn-submit"> 提交</button>
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
    layui.use(['laydate','upload'], function(){
        var laydate = layui.laydate;
        var upload = layui.upload;
        //执行一个laydate实例
        laydate.render({
            elem: '#addTime'
            ,type: 'datetime'
            ,theme: '#1c93d1'
            ,value: new Date()
        });

        //普通图片上传
        var uploadInst = upload.render({
            elem: '#upload'
            ,url: "<?php echo url('file/image'); ?>" //改成您自己的上传接口
            ,before: function(obj){
                //预读本地文件示例，不支持ie8
                obj.preview(function(index, file, result){
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
