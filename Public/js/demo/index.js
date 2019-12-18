$(function(){
	/* 列表 */
	$("#list_box th").css('text-align',"center");
	//分页跳转
	$(document).on("change","#page_jump",function(){
		var page = $(this).val();
		$.post('/Demo/ajaxIndex',{
			'page':page,
		},function(data){
			if(data['status']=='success'){
				$("#list_box").html(data['list']);
				return false;
			}else {
				alert(data);
				return false;
			}
		});
	})
	$(document).on("click",".ajax_list_page",function(){
		var page = $(this).attr("data-page");
		$.post('/Demo/ajaxIndex',{
			'page':page,
		},function(data){
			if(data['status']=='success'){
				$("#list_box").html(data['list']);
				return false;
			}else {
				alert(data);
				return false;
			}
		});
	})
	
	//表单
	//Demo
	layui.use('form', function(){
	  var form = layui.form;
	  
	  //监听提交
	  form.on('submit(formDemo)', function(data){
	    layer.msg(JSON.stringify(data.field));
	    return false;
	  });
	});
	
	//初始化
	$(".line-form input,.line-form select").css('border','0');
	$(".line-form input,.line-form select").css('border-bottom','1px solid #cccccc');
	$(".form-control").css('border-radius','0');
	$(".form-control").css('-webkit-box-shadow','none');
	$("td").css("vertical-align","middle");
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	//默认隐藏
	$(".demo-box").hide();
	//点击切换
	$(".box-btn").click(function(){
		var obj = $(this).attr("data-class");
		$(".demo-box").hide();
		$(obj).show();
	})
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	//end
})