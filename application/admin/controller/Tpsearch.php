<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use app\admin\model\tag as TagModel;
class Tpsearch extends TpBase
{
	public function lists(){
		$searchRes=TagModel::order('sort asc')->select();
		if(request()->isPOST()){
			foreach(input('post.') as $key =>$val){
				TagModel::update(['sort'=>$val,'id'=>$key]);

			}
			$this->success('更新成功','','',0.5);
		}
		$this->assign([
			'searchRes'=>$searchRes,
		]);
		return $this->fetch();
	}
	public function add(){
		if(request()->isPOST()){
			$res=TagModel::create(input('post.'));
			if($res){
		$this->success('新增成功',url('tpsearch/lists'),'',0.5);
			}else{
		$this->success('新增成功',url('tpsearch/lists'),'',0.5);
			}
		}
		
		return $this->fetch();
	}
	public function edit(){
		$searchRes=TagModel::get(input('searchid'));
		if(request()->isPOST()){
			$res=TagModel::update(input('post.'),array('id'=>input('searchid')));
			if($res){
		$this->success('更新成功',url('tpsearch/lists'),'',0.5);
			}else{
		$this->success('更新失败',url('tpsearch/lists'),'',0.5);
			}
		}
		$this->assign([
			'searchRes'=>$searchRes,
		]);
		return $this->fetch();
	}
	public function del(){
		$res=TagModel::destroy(input('searchid'));
			if($res){
		$this->success('删除成功',url('tpsearch/lists'),'',0.5);
			}else{
		$this->success('删除失败',url('tpsearch/lists'),'',0.5);
			}
		return $this->fetch();
	}

}