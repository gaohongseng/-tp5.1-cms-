<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\model\admin as AdminModel;
use think\db;
use QL\QueryList;
class Tpnote extends TpBase
{
	public function add(){
		$modelres=$this->getselRes('models','id desc');
		 $this->assign([
            'modelres'=>$modelres
        ]);
		return view();
	}












	public function test(){
        //待采集的页面地址
        //采集规则
$html =<<<STR
<div id="main">
    <ul>
        <li>
          <h1>这是标题1</h1>
          <span>这是文字1<span>
        </li>
        <li>
          <h1>这是标题2</h1>
          <span>这是文字2<span>
        </li> 
    </ul>
</div>
STR;

//方法一，不推荐
$data = QueryList::Query($html,array(
    'title' => array('#main>ul>li>h1','text'),
    'content' => array('#main>ul>li>span','text')
    ))->data;
print_r($data);

//方法二，设置范围选择器
$rules='#man>ul>li';
$data = QueryList::Query($html,array(
    'list' => array('h1','text'),
    'content' => array('span','text')
    ),$rules)->data;

print_r($data);


    	return view();
    }

}