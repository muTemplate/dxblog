$(window).ready(function() {
	layui.use(['element', 'form','layer'], function() {
		var element = layui.element;
		var form = layui.form;
		var layer = layui.layer;


		$("tbody.category-table tr[pid!='0']").hide();
		$('.icon').click(function() {
			if ($(this).attr('data-open') == 'on') {
				$(this).attr('class', 'glyphicon glyphicon-minus icon-a');
				$(this).attr('data-open', 'off');
				cateId = $(this).parents('tr').attr('cid');
				$("tbody.category-table tr[pid=" + cateId + "]").show();
				$('.telescopic').attr('data-val', 'true').html('<i class="glyphicon glyphicon-sort"></i> 收起');
			} else {
				cateIds = [];
				$(this).attr('class', 'glyphicon glyphicon-plus icon-a');
				$(this).attr('data-open', 'on');
				cateId = $(this).parents('tr').attr('cid');
				getCateId(cateId);
				for (var i in cateIds) {
					$("tbody.category-table tr[cid=" + cateIds[i] + "]").hide().find('.icon').attr('class',
							'glyphicon glyphicon-plus icon-a')
						.attr('data-open', 'on');
				}
			}
		});
		var cateIds = [];

		function getCateId(cateId) {

			$("tbody.category-table tr[pid=" + cateId + "]").each(function(index, el) {
				id = $(el).attr('cid');
				cateIds.push(id);
				getCateId(id);
			});
		}

		// 伸缩展开
		$('.telescopic').click(function() {
			var status = $(this).attr('data-val');

			if (status === "false") {
				$(this).attr('data-val', 'true').html('<i class="glyphicon glyphicon-sort"></i> 收起');
				$('.icon').attr('class', 'glyphicon glyphicon-minus icon-a');
				$('.icon').attr('data-open', 'off');
				$("tbody.category-table tr[class=tr-hide]").show();
			} else {

				$(this).attr('data-val', 'false').html('<i class="glyphicon glyphicon-sort"></i> 展开');
				$('.icon').attr('class', 'glyphicon glyphicon-plus icon-a');
				$('.icon').attr('data-open', 'open');
				$("tbody.category-table tr[class=tr-hide]").hide();

			}
		})

	})
});



// 打开窗口
function dx_openWindow(title, url, w, h) {
	var window_width	= $(window).width();

	if (title == null || title == '') {
		title = false;
	};
	if (url == null || url == '') {
		url = "404.html";
	};
	
	if(window_width > 767){
		if (w == null || w == '') {
			w = ($(window).width() * .8);
		};
		if (h == null || h == '') {
			h = ($(window).height()) * .8;
		};
	}else{
		if (w == null || w == '') {
			w = ($(window).width() * .96);
		};
		if (h == null || h == '') {
			h = ($(window).height()) * .96;
		};
	}
	
	
	layer.open({
		type: 2,
		area: [w + 'px', h + 'px'],
		fix: false,
		skin: 'layui-layer-molv',
		maxmin: true,
		shadeClose: true,
		shade: 0.5,
		title: title,
		content: url
	});
}

// 在父级弹出窗口
function dx_openWindowParent(title, url, w, h) {

	if (title == null || title == '') {
		title = false;
	};
	if (url == null || url == '') {
		url = "404.html";
	};
	if (w == null || w == '') {
		w = ($(window).width() * 0.9);
	};
	if (h == null || h == '') {
		h = ($(window).height() * 0.9);
	};
	parent.layer.open({
		type: 2,
		area: [w + 'px', h + 'px'],
		fix: false,
		skin: 'layui-layer-molv',
		maxmin: true,
		shadeClose: true,
		shade: 0.5,
		title: title,
		content: url
	});
}

// 关闭子窗口 并刷新父窗口
function dx_closeWindow() {
	window.parent.location.reload(); //刷新父页面
	var index = parent.layer.getFrameIndex(window.name);
	parent.layer.close(index);
}
