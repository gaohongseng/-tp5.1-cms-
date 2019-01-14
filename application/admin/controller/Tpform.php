<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use app\admin\model\form as formsee;
class Tpform extends TpBase
{

	/*文章列表页的处理*/

	public function lists(){

   		$list=Db::name("form")->paginate(5);
	
		$this->assign('list',$list);
		return $this->fetch();
	}

/*添加文章*/
	public function add(){
	
		if(request()->isPost()){
			$data=input("post.");
			$tpwenzhanok=db('form')->insert($data);

			if($tpwenzhanok!==false){
				$this->success("添加文章成功!",url('tpqtarticle/lst'),'',0.5);
			}else{
				$this->error("添加文章失败!",url('tpqtarticle/lst'),'',0.5);
			}
		}

		return $this->fetch();
	}


/*修改文章*/
	public function edit(){
		$theid=input("theid");
	

		if(request()->isPost()){
			$data=input("post.");
			$article=new formSee();
			$tpwenzhanok=$article->update($data,array('id'=>$theid));
			if($tpwenzhanok){
				$this->success("修改文章成功!",url('tpqtarticle/lst'),'',0.5);
			}else{
				$this->error("修改文章失败!",url('tpqtarticle/lst'),'',0.5);
			}
		}



		$theartRes=db('form')->find($theid);

		$this->assign([
	
			'list'=>$theartRes
		]);
		return $this->fetch();
	}


	/*删除文章*/
	public function del(){
			$res=db('form')->delete(input("theid"));
			if($res){
				$this->success("删除留言成功!",url('lists'),'',0.5);
			}else{
				$this->success("删除留言失败!",url('lists'),'',0.5);
			}

	}







































}