<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use app\admin\model\articleqita as ArticleQita;
class Tpqtarticle extends TpBase
{

	/*文章列表页的处理*/

	public function tp3wenzhanlst(){

   			$list=Db::name("articleqita")->paginate(5);
	
		$this->assign('list',$list);
		return $this->fetch();
	}

/*添加文章*/
	public function tp3wenzhanadd(){
	
		if(request()->isPost()){
			$data=input("post.");

			if($_FILES['thumb']['tmp_name']){
				$file=request()->file('thumb');
				$info=$file->rule("date")->move(ROOT_PATH.'public/static/admin'.DS.'articleimg');
				$data['thumb']='/static/admin/articleimg/'.$info->getSaveName();
			}
			$tpwenzhanok=db('articleqita')->insert($data);

			if($tpwenzhanok!==false){
				$this->success("添加文章成功!",url('tpqtarticle/tp3wenzhanlst'),'',0.5);
			}else{
				$this->error("添加文章失败!",url('tpqtarticle/tp3wenzhanlst'),'',0.5);
			}
		}

		return $this->fetch();
	}


/*修改文章*/
	public function tp3wenzhanedit(){
		$theid=input("theid");
	

		if(request()->isPost()){
			$data=input("post.");
			$article=new ArticleQita();
			$tpwenzhanok=$article->update($data,array('id'=>$theid));
			if($tpwenzhanok){
				$this->success("修改文章成功!",url('tpqtarticle/tp3wenzhanlst'),'',0.5);
			}else{
				$this->error("修改文章失败!",url('tpqtarticle/tp3wenzhanlst'),'',0.5);
			}
		}



		$theartRes=db('articleqita')->find($theid);

		$this->assign([
	
			'list'=>$theartRes
		]);
		return $this->fetch();
	}


	/*删除文章*/
	public function tp3wenzhandel(){
			if(ArticleQita::destroy(input("theid"))){
				$this->success("删除文章成功!",url('tp3wenzhanlst'),'',0.5);
			}else{
				$this->success("删除文章失败!",url('tp3wenzhanlst'),'',0.5);
			}

	}







































}