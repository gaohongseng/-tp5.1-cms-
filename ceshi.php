<?php
namespace beijing\haidian\tiananmen\maozedong;
header("Content-Type:text/html;charset=utf-8");
class Animal{

	public $obj='dog';
	static $name='大黄';
}
function getmsg(){
	echo '北京海淀';
}

namespace shanghai\putuo\mingzhu;
class Animal{
	public $obj='pig';
	static $name='哼哼';
}
function getmsg(){
	echo '上海普陀';
}
// $animal=new \beijing\haidian\Animal();
// echo $animal->obj;
// echo \beijing\haidian\Animal::$name;
// use beijing\haidian\tiananmen\maozedong;
// echo maozedong\Animal::$name;
use beijing\haidian\tiananmen\maozedong;
$animal=new maozedong\Animal();
echo maozedong\Animal::$name;
?>+