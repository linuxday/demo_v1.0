<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\UserModel;
header("Content-type: text/html;charset=utf-8;");
class DemoController extends Controller {

	/**Demo首页  */
	public function index($page=1){
		//列表
		$user_model = new UserModel();
		$info = $user_model->getAll();
		$num = count($info);
		$pageNum = 10;
		$pageStart = $page*$pageNum-$pageNum;
		$pageEnd = $page*$pageNum;
		if ($pageEnd>$num){
			$pageEnd = $num;
		}
		$list = '';
		for ($i=$pageStart;$i<$pageEnd;$i++){
			$bianhao = $i+1;
			$user_id = $info[$i]['user_id'];
			$name = $info[$i]['name'];
			$pwd = $info[$i]['pwd'];
			$sex = $info[$i]['sex'];
			$age = $info[$i]['age'];
			$tel = $info[$i]['tel'];
			$addr = $info[$i]['addr'];
			$date = $info[$i]['date'];
			$oper = "<a href='javascript:;' class='btn btn-default status-btn text-muted'
						data-userid='{$user_id}'
						data-name='{$name}'
						data-pwd='{$pwd}'
						data-sex='{$sex}'
						data-age='{$age}'
						data-tel='{$tel}'
						data-addr='{$addr}'
						data-date='{$date}'
					 >编辑</a>";
			$oper .= "<a href='javascript:;' class='btn btn-default status-btn text-muted'
						data-userid='{$user_id}'
						data-name='{$name}'
						data-pwd='{$pwd}'
						data-sex='{$sex}'
						data-age='{$age}'
						data-tel='{$tel}'
						data-addr='{$addr}'
						data-date='{$date}'
					 >删除</a>";
			$oper = "<div class='btn-group' role='group' aria-label='...'>$oper</div>";
			$list .= "<tr>
						<td class='text-center'>$bianhao</td>
						<td class='text-center'>$user_id</td>
						<td>$name</td>
						<td class='text-left'>$pwd</td>
						<td class='text-center'>$sex</td>
						<td class='text-center'>$age</td>
						<td>$tel</td>
						<td class='text-left'>$addr</td>
						<td class='text-center'>$date</td>
						<td>$oper</td>
					 </tr>";
		}
		//分页-表格
		$pageNext = $page+1;
		$pageUP = $page-1;
		$pageTotal = ceil($num/$pageNum);//总页数
		if ($page>4){
			$start = $page-2;
		}else {
			$start= 1;
		}
		if (($pageTotal-$start)<5){
			$page_length = $pageTotal;
		}else {
			$page_length = $start+4;
		}
		$pageLi = '';
		$pageLi2 = '';
		for ($i=$start;$i<=$page_length;$i++){
			if ($i==$page){
				$pageLi .= "<li class='active'><a href='javascript:;'>{$i}<span class='sr-only'>(current)</span></a></li>";
			}else {
				$pageLi .= "<li><a href='javascript:;' class='ajax_list_page' data-page='{$i}'>{$i}</a></li>";
			}
		}
		for ($i=1;$i<=$pageTotal;$i++){
			if ($i==$page){
				$pageLi2 .= "<option value='{$i}' selected>{$i}/{$pageTotal}</option>";
			}else {
				$pageLi2 .= "<option value='{$i}'>{$i}/{$pageTotal}</option>";
			}

		}
		if ($page==1 && $page<$pageTotal){
			$page_ul = "
			<ul class='pagination'>
			{$pageLi}
			<li><a href='javascript:;' aria-label='Next' class='ajax_list_page' data-page='{$pageNext}'><span aria-hidden='true'>&raquo;</span></a></li>
			</ul>
			";
		}elseif ($page==$pageTotal && $page>1){
			$page_ul = "
			<ul class='pagination'>
			<li><a href='javascript:;' aria-label='Previous' class='ajax_list_page' data-page='{$pageUP}'><span aria-hidden='true'>&laquo;</span></a></li>
			{$pageLi}
			</ul>
			";
		}elseif ($page==$pageTotal && $page==1){
			$page_ul = "
			<ul class='pagination'>
			{$pageLi}
			</ul>
			";
		}else{
			$page_ul = "
			<ul class='pagination'>
			<li><a href='javascript:;' aria-label='Previous' class='ajax_list_page' data-page='{$pageUP}'><span aria-hidden='true'>&laquo;</span></a></li>
			{$pageLi}
			<li><a href='javascript:;' aria-label='Next' class='ajax_list_page' data-page='{$pageNext}'><span aria-hidden='true'>&raquo;</span></a></li>
			</ul>
			";
		}
		$page_ul2 = "<select id='page_jump'>{$pageLi2}</select>";
		$page_ul = "<nav aria-label='Page navigation'>{$page_ul}</nav>跳转：{$page_ul2}";
		if ($num<=$pageNum){
			$page_ul = '';
			$page_ul2 = '';
		}
		$this->assign('sum',"合计：{$pageTotal}页 {$num}条记录");
		$this->assign('page_ul',$page_ul);
		$this->assign('list',$list);
		$this->display();
	}
	/**Demo首页  */
	public function ajaxIndex(){
		//列表
		$page = I('post.page');
		$user_model = new UserModel();
		$info = $user_model->getAll();
		$num = count($info);
		$pageNum = 10;
		$pageStart = $page*$pageNum-$pageNum;
		$pageEnd = $page*$pageNum;
		if ($pageEnd>$num){
			$pageEnd = $num;
		}
		$list = '';
		for ($i=$pageStart;$i<$pageEnd;$i++){
			$bianhao = $i+1;
			$user_id = $info[$i]['user_id'];
			$name = $info[$i]['name'];
			$pwd = $info[$i]['pwd'];
			$sex = $info[$i]['sex'];
			$age = $info[$i]['age'];
			$tel = $info[$i]['tel'];
			$addr = $info[$i]['addr'];
			$date = $info[$i]['date'];
			$oper = "<a href='javascript:;' class='btn btn-default status-btn text-muted'
						data-userid='{$user_id}'
						data-name='{$name}'
						data-pwd='{$pwd}'
						data-sex='{$sex}'
						data-age='{$age}'
						data-tel='{$tel}'
						data-addr='{$addr}'
						data-date='{$date}'
					 >编辑</a>";
			$oper .= "<a href='javascript:;' class='btn btn-default status-btn text-muted'
						data-userid='{$user_id}'
						data-name='{$name}'
						data-pwd='{$pwd}'
						data-sex='{$sex}'
						data-age='{$age}'
						data-tel='{$tel}'
						data-addr='{$addr}'
						data-date='{$date}'
					 >删除</a>";
			$oper = "<div class='btn-group' role='group' aria-label='...'>$oper</div>";
			$list .= "<tr>
						<td class='text-center'>$bianhao</td>
						<td class='text-center'>$user_id</td>
						<td>$name</td>
						<td class='text-left'>$pwd</td>
						<td class='text-center'>$sex</td>
						<td class='text-center'>$age</td>
						<td>$tel</td>
						<td class='text-left'>$addr</td>
						<td class='text-center'>$date</td>
						<td>$oper</td>
					 </tr>";
		}
		//分页-表格
		$pageNext = $page+1;
		$pageUP = $page-1;
		$pageTotal = ceil($num/$pageNum);//总页数
		if ($page>4){
			$start = $page-2;
		}else {
			$start= 1;
		}
		if (($pageTotal-$start)<5){
			$page_length = $pageTotal;
		}else {
			$page_length = $start+4;
		}
		$pageLi = '';
		$pageLi2 = '';
		for ($i=$start;$i<=$page_length;$i++){
			if ($i==$page){
				$pageLi .= "<li class='active'><a href='javascript:;'>{$i}<span class='sr-only'>(current)</span></a></li>";
			}else {
				$pageLi .= "<li><a href='javascript:;' class='ajax_list_page' data-page='{$i}'>{$i}</a></li>";
			}
		}
		for ($i=1;$i<=$pageTotal;$i++){
			if ($i==$page){
				$pageLi2 .= "<option value='{$i}' selected>{$i}/{$pageTotal}</option>";
			}else {
				$pageLi2 .= "<option value='{$i}'>{$i}/{$pageTotal}</option>";
			}

		}
		if ($page==1 && $page<$pageTotal){
			$page_ul = "
			<ul class='pagination'>
			{$pageLi}
			<li><a href='javascript:;' aria-label='Next' class='ajax_list_page' data-page='{$pageNext}'><span aria-hidden='true'>&raquo;</span></a></li>
			</ul>
			";
		}elseif ($page==$pageTotal && $page>1){
			$page_ul = "
			<ul class='pagination'>
			<li><a href='javascript:;' aria-label='Previous' class='ajax_list_page' data-page='{$pageUP}'><span aria-hidden='true'>&laquo;</span></a></li>
			{$pageLi}
			</ul>
			";
		}elseif ($page==$pageTotal && $page==1){
			$page_ul = "
			<ul class='pagination'>
			{$pageLi}
			</ul>
			";
		}else{
			$page_ul = "
			<ul class='pagination'>
			<li><a href='javascript:;' aria-label='Previous' class='ajax_list_page' data-page='{$pageUP}'><span aria-hidden='true'>&laquo;</span></a></li>
			{$pageLi}
			<li><a href='javascript:;' aria-label='Next' class='ajax_list_page' data-page='{$pageNext}'><span aria-hidden='true'>&raquo;</span></a></li>
			</ul>
			";
		}
		$page_ul2 = "<select id='page_jump'>{$pageLi2}</select>";
		$page_ul = "<nav aria-label='Page navigation'>{$page_ul}</nav>跳转：{$page_ul2}";
		if ($num<=$pageNum){
			$page_ul = '';
			$page_ul2 = '';
		}
		//分页
		if (!$num){
			$empty = "<div class='empty' colspan='13'>空空如也！</div>";
		}else {
			$empty = '';
			$list = "<table class='table table-hover table-bordered table-striped'>
			<tr class='success'>
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
			{$list}
			<tr>
			<td colspan='10' class='text-center'>{$page_ul}合计：{$pageTotal}页 {$num}条记录</td>
			</tr>
			</table>
			<div class='empty-box'>{$empty}</div>";
		}
		$data = array();
		$data['list'] = $list;
		$data['status'] = 'success';
		$this->ajaxReturn($data);
	}



























	/*end-------------------------------------------------------------------------*/
}