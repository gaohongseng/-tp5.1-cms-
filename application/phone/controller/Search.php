<?php
namespace app\phone\controller;
use \think\Controller;
use \think\Db;
class Search extends Cms2base
{
	public function anli(){
		$imgRes=$this->getFuture('nav',42);
        $showone=$this->showTag(6,6);
        $showtwo=$this->showTag(9,3);
        //得到协议名
        $scheme=$_SERVER['REQUEST_SCHEME'];
        //得到主机名
        $host=$_SERVER['SERVER_NAME'];
        $port=$_SERVER['SERVER_PORT'];
        //得到路径和请求字符串
        $uri=$_SERVER['REQUEST_URI'];
        //中间做处理，要将page=5等这种字符串拼接url中，所以如果原来url中有page这个
        //参数，我们首先需要先将原来的page参数给清空
        $uriArray=parse_url($uri);
        $path=$uriArray['path'];
        if(!empty($uriArray['query'])){
        	//首先将请求字符串变为关联数组
        	parse_str($uriArray['query'],$array);
        	unset($array['page']);
        	$query=http_build_query($array);
        	dump($query);
        }
        $this->assign([
            'imgRes'=>$imgRes,
            'showone'=>$showone,
            'showtwo'=>$showtwo,
        ]);
		return $this->fetch();
	}

	public function quanzhan(){
		$dang=44;
		$glueRes=$this->getFuture('nav',$dang,'article',4);
        $glueManRes=$this->getManFuture($dang,'article',10);
        $noNavs=$this->getCateNav('gonglue',$dang);
        $glueanli=$this->getManFuture(42,'arttupian',4);

//搜索结果
       	$keyword=trim(input('keyword'));
       	$this->getkeyResult('quan',$keyword,44,'title|desc','article',3);
        $this->assign([
            'glueRes'=>$glueRes,
            'noNavs'=>$noNavs,
            'glueanli'=>$glueanli,
            'glueManRes'=>$glueManRes,
        ]);
		return $this->fetch(); 
	}
}