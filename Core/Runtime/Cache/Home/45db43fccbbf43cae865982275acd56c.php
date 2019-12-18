<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<script src="/Public/js/jquery.min.js"></script>
<script src="/Public/bootstrap/js/bootstrap.min.js"></script>
<script src="/Public/layui/layui.js"></script>
<script src="/Public/layui/adsbygoogle.js"></script>
<link rel='stylesheet' type='text/css' href="/Public/bootstrap/css/bootstrap.min.css">
<link rel='stylesheet' type='text/css' href="/Public/layui/css/layui.css">
<script type="text/javascript">
    document.write('<link rel="stylesheet" href="/Public/css/demo/index.css?time='+new Date().getTime()+'"/>');
    document.write('<script type="text/javascript" src="/Public/js/demo/index.js?time='+new Date().getTime()+'"><'+'/'+'script>')
</script>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">


<title>Demo</title>
</head>
<body>
	<div id='box'>
		<span class="btn btn-default box-btn" data-class='#list_box'>表格-列表</span>
		<span class="btn btn-default box-btn" data-class='#form_layui_box'>表单</span>
		<span type="button" class="btn btn-default" data-toggle="modal" data-target=".bs-example-modal-lg">大模态框</span>
		<span type="button" class="btn btn-default" data-toggle="modal" data-target=".bs-example-modal-sm">小模态框</span>
	</div>
	<div id="main">
		<!-- 表格-列表 -->
		<div id="list_box" class="demo-box">
			<table class="table table-hover table-bordered table-striped">
				<tr class="success">
					<th>编号</th>
					<th>用户ID</th>
					<th>姓名</th>
					<th>密码</th>
					<th>性别</th>
					<th>年龄</th>
					<th>手机</th>
					<th>地址</th>
					<th>日期</th>
					<th>操作</th>
				</tr>
				<?php echo ($list); ?>
				<tr>
					<td colspan='10' class='text-center' style='border-bottom: 0;'><?php echo ($page_ul); echo ($sum); ?></td>
				</tr>
			</table>
			<div class="empty-box"><?php echo ($empty); ?></div>
		</div>
		
		
		<!-- form表单 -->
		<div id="form_layui_box" class="demo-box">
			<!-- 左右结构 -->
			<form class="layui-form" action="">
			  <div class="layui-form-item">
			    <label class="layui-form-label">输入框</label>
			    <div class="layui-input-block">
			      <input type="text" name="title" required  lay-verify="required" placeholder="请输入标题" autocomplete="off" class="layui-input">
			    </div>
			  </div>
			  <div class="layui-form-item">
			    <label class="layui-form-label">密码框</label>
			    <div class="layui-input-block">
			      <input type="password" name="password" required lay-verify="required" placeholder="请输入密码" autocomplete="off" class="layui-input">
				  <div class="layui-form-mid layui-word-aux">辅助文字</div>
			    </div>
			  </div>
			  <div class="layui-form-item">
			    <label class="layui-form-label">选择框</label>
			    <div class="layui-input-block">
			      <select name="city" lay-verify="required">
			        <option value=""></option>
			        <option value="0">北京</option>
			        <option value="1">上海</option>
			        <option value="2">广州</option>
			        <option value="3">深圳</option>
			        <option value="4">杭州</option>
			      </select>
			    </div>
			  </div>
			  <div class="layui-form-item">
			    <label class="layui-form-label">复选框</label>
			    <div class="layui-input-block">
			      <input type="checkbox" name="like[write]" title="写作">
			      <input type="checkbox" name="like[read]" title="阅读" checked>
			      <input type="checkbox" name="like[dai]" title="发呆">
			    </div>
			  </div>
			  <div class="layui-form-item">
			    <label class="layui-form-label">开关</label>
			   <div class="layui-input-block">
				   <input type="checkbox" name="switch" lay-skin="switch" lay-text="ON|OFF" lay-filter="switchTest" value="1"><div class="layui-unselect layui-form-switch" lay-skin="_switch"><em>OFF</em><i></i></div>
			  </div>
			  </div>
			  <div class="layui-form-item">
			    <label class="layui-form-label">单选框</label>
			    <div class="layui-input-block">
			      <input type="radio" name="sex" value="男" title="男">
			      <input type="radio" name="sex" value="女" title="女" checked>
			    </div>
			  </div>
			  <div class="layui-form-item layui-form-text">
			    <label class="layui-form-label">文本域</label>
			    <div class="layui-input-block">
			      <textarea name="desc" placeholder="请输入内容" class="layui-textarea"></textarea>
			    </div>
			  </div>
			  <div class="layui-form-item">
			    <div class="layui-input-block">
			      <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
			      <button type="reset" class="layui-btn layui-btn-primary">重置</button>
			    </div>
			  </div>
			</form>
			<!-- 上下结构 -->
			<form class="line-form">
			  <div class="form-group">
			    <label for="exampleInputEmail1">Email address</label>
			    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Password</label>
			    <select id='exampleInputPassword1' class="form-control">
			      <option>1</option>
			      <option>2</option>
			      <option>3</option>
			      <option>4</option>
			      <option>5</option>
			    </select>
			  </div>
			</form>
		</div>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		<!-- 大模态框 -->
		<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
		  <div class="modal-dialog modal-lg" role="document">
		      <div class="modal-content">
		        <div class="modal-header">
		          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		          <h4 class="modal-title">Modal title</h4>
		        </div>
		        <div class="modal-body">
		          <div class="form-group">
		              <label for="exampleInputEmail1">Email address</label>
		              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
		            </div>
		            <div class="form-group">
		              <label for="exampleInputPassword1">Password</label>
		              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
		            </div>
		        </div>
		        <div class="modal-footer">
		          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		          <button type="button" class="btn btn-primary">Save changes</button>
		        </div>
		      </div>
		    </div>
		</div>
		
		<!-- 小模态框 -->
		<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
		  <div class="modal-dialog modal-sm" role="document">
		      <div class="modal-content">
		        <div class="modal-header">
		          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		          <h4 class="modal-title">Modal title</h4>
		        </div>
		        <div class="modal-body">
		          <div class="form-group">
		              <label for="exampleInputEmail1">Email address</label>
		              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
		           </div>
		           <div class="form-group">
		              <label for="exampleInputPassword1">Password</label>
		              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
		           </div>
		        </div>
		        <div class="modal-footer">
		          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		          <button type="button" class="btn btn-primary">Save changes</button>
		        </div>
		      </div>
		    </div>
		</div>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	</div>
</body>
</html>