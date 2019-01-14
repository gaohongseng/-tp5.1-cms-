<?php
namespace app\admin\controller;
use think\Controller;
class Tpindex extends TpBase
{

    public function index()
    {
       
        return $this->fetch();
    }

}