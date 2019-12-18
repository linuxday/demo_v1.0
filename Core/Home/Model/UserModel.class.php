<?php
namespace Home\Model;
use Think\Model;
/**
 * 用户表
 *  */
class UserModel extends Model {
	/** 表名 */
	protected $tableName = 'user';

	/*
	 * 获取所有数据
	 * */
	public function getAll(){
		return $this->select();
	}



















	/*end-------------------  */
}