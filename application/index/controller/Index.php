<?php
namespace app\index\controller;
use \think\Controller;
use \think\Db;
use app\index\model\cate as CateModel;
class Index extends Cms2base
{

	
	public function index(){
		//查询pid为4的栏目
		$jindian=db('cate')->where(array("pid"=>4))->select();
		//栏目关联文章
        $cate=new CateModel();
      
        // $allarticleId=$cate->getallArt($catgetid,4);

        $paimin=db("article")->where(array("cateid"=>8))->select();
    	$anli=db("article")->where(array("cateid"=>12))->select();
    	$yinxiao=db("article")->where(array("cateid"=>25))->select();
    	$shouji=db("article")->where(array("cateid"=>16))->select();
    	$tuiguan=db("article")->where(array("cateid"=>31))->select();
//VIP客户的文章
        $vip=db("article")->where(array("cateid"=>39))->paginate(10);
//团队风采文章
        $tuandui=db("article")->where(array("cateid"=>37))->paginate(4);
//为什么选择我们
         $xuanze=db("articleqita")->find(14);

         $xinwen=db('cate')->where(array("pid"=>26))->order('sort asc')->select();

//底部修改
        $gongsi=db("article")->where(array('cateid'=>30))->paginate(8);
        $hanye=db("article")->where(array('cateid'=>27))->paginate(8);
        $yinxiao=db("article")->where(array('cateid'=>28))->paginate(8);
        $yidong=db("article")->where(array('cateid'=>29))->paginate(8);
        $gongsia=db("article")->find(13);
        $hanyea=db("article")->find(14);

//得到常见问题的所有文章
        $xinwenallId=db('cate')->where(array("pid"=>40))->order('sort asc')->select();

         $catgetid=$cate->getchildrenid(40);
         $allarticleId=$cate->getallArt($catgetid,40);
         $artres=db("article")->where("id IN($allarticleId)")->paginate(4);
         $fuwuquyu=db("articleqita")->find(1);



         if(request()->isPOST()){
            if(input("xinmin")=='' or input("shouji")==''){
                echo '<script>alert("姓名电话不能为空!")</script>';
            }else{
                $data['shouji']='首页:'.input("shouji");
                $data['xinmin']='首页:'.input("xinmin");
                $res=db("form")->insert($data);
                if($res){
                    $this->success("咨询成功,请您耐心等待!",url('index'),'',0.5);
                }else{
                    $this->error("咨询失败,请您重新提交!",url('index'),'',0.5);
                }
            }

        }
        $zuo=db('articleqita')->find(2);
$lunbo=db('articleqita')->find(3);
//首页logo
 
     	$this->assign([
     		"jindian"=>$jindian,
     		"paimin"=>$paimin,
     		"anli"=>$anli,
     		"yinxiao"=>$yinxiao,
     		"shouji"=>$shouji,
     		"tuiguan"=>$tuiguan,
            "vip"=>$vip,
            'tuandui'=>$tuandui,
            'xuanze'=>$xuanze,
            'gongsi'=>$gongsi,
            'hanye'=>$hanye,
            'yinxiao'=>$yinxiao,
            'yidong'=>$yidong,
            'xinwen'=>$xinwen,
            'gongsia'=>$gongsia,
            'hanyea'=>$hanyea,
            'wtartres'=>$artres,
            'fuwuquyu'=>$fuwuquyu,
            'zuo'=>$zuo,
            'lunbo'=>$lunbo,

     	]);
		return $this->fetch();
	}


	
}
