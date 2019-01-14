<?php
namespace app\admin\model;
use think\Model;
class conf extends Model
{
	public function confres(){
		return db("conf")->order("sort asc")->paginate(5);
	}

}