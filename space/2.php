<?php
//没有指定命名空间是一个公共空间
function getmsg(){
	echo "北京";
}

const NM="tongpan";
include("./1.php");

echo NM;

echo \NM;

echo \beijing\NM;