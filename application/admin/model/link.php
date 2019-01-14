<?php
namespace app\admin\model;
use think\Model;
class link extends Model
{
	public function linkres(){
		return db("link")->order("sort asc")->paginate(5);
	}

}