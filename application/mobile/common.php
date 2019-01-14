<?php
header('Content-Type:text/html;charest=utf-8');
function arr_unique($arr2d){
static $temp=array();
	foreach($arr2d as $key=>$value){
		$v=join(',',$value);
		$temp[]=$v;
	}

	$temp=array_unique($temp);
	foreach($temp as $key=>$value){
		$temp[$key]=explode(',',$value);
	}
	//这里的话有一个缺陷，比如前面的数组的值都能获取，但是如果还要后面的数据的话是获取不到的。
	return $temp;
}


function getps(){
	echo 1;
}