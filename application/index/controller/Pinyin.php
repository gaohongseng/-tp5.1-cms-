<?php
namespace app\index\controller;
use \think\Controller;
use \think\Db;
class Pinyin extends Controller{
  public function index(){
     var_dump(pinyin::utf8_to('我是柴崇涛'));
dump('<br>');


     var_dump(pinyin::utf8_to('PHP汉字转拼音类'));
dump('<br>');

     var_dump(pinyin::utf8_to('我是中国人', 1));

    
  }
  public static function utf8_to($s, $isfirst = false) {
    return self::to(self::utf8_to_gb2312($s), $isfirst);
  }

  public static function utf8_to_gb2312($s) {
    return iconv('UTF-8', 'GB2312//IGNORE', $s);
  }

  // 字符串必须为GB2312编码
  public static function to($s, $isfirst = false) {
    $res = '';
    $len = strlen($s);
    $pinyin_arr = self::get_pinyin_array();
    for($i=0; $i<$len; $i++) {
      $ascii = ord($s{$i});
      if($ascii > 0x80) {
        $ascii2 = ord($s{++$i});
        $ascii = $ascii * 256 + $ascii2 - 65536;
      }

      if($ascii < 255 && $ascii > 0) {
        if(($ascii >= 48 && $ascii <= 57) || ($ascii >= 97 && $ascii <= 122)) {
          $res .= $s{$i}; // 0-9 a-z
        }elseif($ascii >= 65 && $ascii <= 90) {
          $res .= strtolower($s{$i}); // A-Z
        }else{
          $res .= '_';////将符号转义 不替换符号$res .= $s{$i};
        }
      }elseif($ascii < -20319 || $ascii > -10247) {
        $res .= '_';
      }else{
        foreach($pinyin_arr as $py=>$asc) {
          if($asc <= $ascii) {
            $res .= $isfirst ? $py{0} : $py;
            break;
          }
        }
      }
    }
    return $res;
  }

  public static function to_first($s) {
    $ascii = ord($s{0});
    if($ascii > 0xE0) {
      $s = self::utf8_to_gb2312($s{0}.$s{1}.$s{2});
    }elseif($ascii < 0x80) {
      if($ascii >= 65 && $ascii <= 90) {
        return strtolower($s{0});
      }elseif($ascii >= 97 && $ascii <= 122) {
        return $s{0};
      }else{
        return false;
      }
    }

    if(strlen($s) < 2) {
      return false;
    }

    $asc = ord($s{0}) * 256 + ord($s{1}) - 65536;

    if($asc>=-20319 && $asc<=-20284) return 'a';
    if($asc>=-20283 && $asc<=-19776) return 'b';
    if($asc>=-19775 && $asc<=-19219) return 'c';
    if($asc>=-19218 && $asc<=-18711) return 'd';
    if($asc>=-18710 && $asc<=-18527) return 'e';
    if($asc>=-18526 && $asc<=-18240) return 'f';
    if($asc>=-18239 && $asc<=-17923) return 'g';
    if($asc>=-17922 && $asc<=-17418) return 'h';
    if($asc>=-17417 && $asc<=-16475) return 'j';
    if($asc>=-16474 && $asc<=-16213) return 'k';
    if($asc>=-16212 && $asc<=-15641) return 'l';
    if($asc>=-15640 && $asc<=-15166) return 'm';
    if($asc>=-15165 && $asc<=-14923) return 'n';
    if($asc>=-14922 && $asc<=-14915) return 'o';
    if($asc>=-14914 && $asc<=-14631) return 'p';
    if($asc>=-14630 && $asc<=-14150) return 'q';
    if($asc>=-14149 && $asc<=-14091) return 'r';
    if($asc>=-14090 && $asc<=-13319) return 's';
    if($asc>=-13318 && $asc<=-12839) return 't';
    if($asc>=-12838 && $asc<=-12557) return 'w';
    if($asc>=-12556 && $asc<=-11848) return 'x';
    if($asc>=-11847 && $asc<=-11056) return 'y';
    if($asc>=-11055 && $asc<=-10247) return 'z';
    return false;
  }

  public static function get_pinyin_array() {
    static $py_arr;
    if(isset($py_arr)) return $py_arr;

    $k = 'a|ai|an|ang|ao|ba|bai|ban|bang|bao|bei|ben|beng|bi|bian|biao|bie|bin|bing|bo|bu|ca|cai|can|cang|cao|ce|ceng|cha|chai|chan|chang|chao|che|chen|cheng|chi|chong|chou|chu|chuai|chuan|chuang|chui|chun|chuo|ci|cong|cou|cu|cuan|cui|cun|cuo|da|dai|dan|dang|dao|de|deng|di|dian|diao|die|ding|diu|dong|dou|du|duan|dui|dun|duo|e|en|er|fa|fan|fang|fei|fen|feng|fo|fou|fu|ga|gai|gan|gang|gao|ge|gei|gen|geng|gong|gou|gu|gua|guai|guan|guang|gui|gun|guo|ha|hai|han|hang|hao|he|hei|hen|heng|hong|hou|hu|hua|huai|huan|huang|hui|hun|huo|ji|jia|jian|jiang|jiao|jie|jin|jing|jiong|jiu|ju|juan|jue|jun|ka|kai|kan|kang|kao|ke|ken|keng|kong|kou|ku|kua|kuai|kuan|kuang|kui|kun|kuo|la|lai|lan|lang|lao|le|lei|leng|li|lia|lian|liang|liao|lie|lin|ling|liu|long|lou|lu|lv|luan|lue|lun|luo|ma|mai|man|mang|mao|me|mei|men|meng|mi|mian|miao|mie|min|ming|miu|mo|mou|mu|na|nai|nan|nang|nao|ne|nei|nen|neng|ni|nian|niang|niao|nie|nin|ning|niu|nong|nu|nv|nuan|nue|nuo|o|ou|pa|pai|pan|pang|pao|pei|pen|peng|pi|pian|piao|pie|pin|ping|po|pu|qi|qia|qian|qiang|qiao|qie|qin|qing|qiong|qiu|qu|quan|que|qun|ran|rang|rao|re|ren|reng|ri|rong|rou|ru|ruan|rui|run|ruo|sa|sai|san|sang|sao|se|sen|seng|sha|shai|shan|shang|shao|she|shen|sheng|shi|shou|shu|shua|shuai|shuan|shuang|shui|shun|shuo|si|song|sou|su|suan|sui|sun|suo|ta|tai|tan|tang|tao|te|teng|ti|tian|tiao|tie|ting|tong|tou|tu|tuan|tui|tun|tuo|wa|wai|wan|wang|wei|wen|weng|wo|wu|xi|xia|xian|xiang|xiao|xie|xin|xing|xiong|xiu|xu|xuan|xue|xun|ya|yan|yang|yao|ye|yi|yin|ying|yo|yong|you|yu|yuan|yue|yun|za|zai|zan|zang|zao|ze|zei|zen|zeng|zha|zhai|zhan|zhang|zhao|zhe|zhen|zheng|zhi|zhong|zhou|zhu|zhua|zhuai|zhuan|zhuang|zhui|zhun|zhuo|zi|zong|zou|zu|zuan|zui|zun|zuo';
    $v = '-20319|-20317|-20304|-20295|-20292|-20283|-20265|-20257|-20242|-20230|-20051|-20036|-20032|-20026|-20002|-19990|-19986|-19982|-19976|-19805|-19784|-19775|-19774|-19763|-19756|-19751|-19746|-19741|-19739|-19728|-19725|-19715|-19540|-19531|-19525|-19515|-19500|-19484|-19479|-19467|-19289|-19288|-19281|-19275|-19270|-19263|-19261|-19249|-19243|-19242|-19238|-19235|-19227|-19224|-19218|-19212|-19038|-19023|-19018|-19006|-19003|-18996|-18977|-18961|-18952|-18783|-18774|-18773|-18763|-18756|-18741|-18735|-18731|-18722|-18710|-18697|-18696|-18526|-18518|-18501|-18490|-18478|-18463|-18448|-18447|-18446|-18239|-18237|-18231|-18220|-18211|-18201|-18184|-18183|-18181|-18012|-17997|-17988|-17970|-17964|-17961|-17950|-17947|-17931|-17928|-17922|-17759|-17752|-17733|-17730|-17721|-17703|-17701|-17697|-17692|-17683|-17676|-17496|-17487|-17482|-17468|-17454|-17433|-17427|-17417|-17202|-17185|-16983|-16970|-16942|-16915|-16733|-16708|-16706|-16689|-16664|-16657|-16647|-16474|-16470|-16465|-16459|-16452|-16448|-16433|-16429|-16427|-16423|-16419|-16412|-16407|-16403|-16401|-16393|-16220|-16216|-16212|-16205|-16202|-16187|-16180|-16171|-16169|-16158|-16155|-15959|-15958|-15944|-15933|-15920|-15915|-15903|-15889|-15878|-15707|-15701|-15681|-15667|-15661|-15659|-15652|-15640|-15631|-15625|-15454|-15448|-15436|-15435|-15419|-15416|-15408|-15394|-15385|-15377|-15375|-15369|-15363|-15362|-15183|-15180|-15165|-15158|-15153|-15150|-15149|-15144|-15143|-15141|-15140|-15139|-15128|-15121|-15119|-15117|-15110|-15109|-14941|-14937|-14933|-14930|-14929|-14928|-14926|-14922|-14921|-14914|-14908|-14902|-14894|-14889|-14882|-14873|-14871|-14857|-14678|-14674|-14670|-14668|-14663|-14654|-14645|-14630|-14594|-14429|-14407|-14399|-14384|-14379|-14368|-14355|-14353|-14345|-14170|-14159|-14151|-14149|-14145|-14140|-14137|-14135|-14125|-14123|-14122|-14112|-14109|-14099|-14097|-14094|-14092|-14090|-14087|-14083|-13917|-13914|-13910|-13907|-13906|-13905|-13896|-13894|-13878|-13870|-13859|-13847|-13831|-13658|-13611|-13601|-13406|-13404|-13400|-13398|-13395|-13391|-13387|-13383|-13367|-13359|-13356|-13343|-13340|-13329|-13326|-13318|-13147|-13138|-13120|-13107|-13096|-13095|-13091|-13076|-13068|-13063|-13060|-12888|-12875|-12871|-12860|-12858|-12852|-12849|-12838|-12831|-12829|-12812|-12802|-12607|-12597|-12594|-12585|-12556|-12359|-12346|-12320|-12300|-12120|-12099|-12089|-12074|-12067|-12058|-12039|-11867|-11861|-11847|-11831|-11798|-11781|-11604|-11589|-11536|-11358|-11340|-11339|-11324|-11303|-11097|-11077|-11067|-11055|-11052|-11045|-11041|-11038|-11024|-11020|-11019|-11018|-11014|-10838|-10832|-10815|-10800|-10790|-10780|-10764|-10587|-10544|-10533|-10519|-10331|-10329|-10328|-10322|-10315|-10309|-10307|-10296|-10281|-10274|-10270|-10262|-10260|-10256|-10254';
    $key = explode('|', $k);
    $val = explode('|', $v);
    $py_arr = array_combine($key, $val);
    arsort($py_arr);

    return $py_arr;
  }


















































   private $d=array(
     array("a",-20319),
     array("ai",-20317),
     array("an",-20304),
     array("ang",-20295),
     array("ao",-20292),
     array("ba",-20283),
     array("bai",-20265),
     array("ban",-20257),
     array("bang",-20242),
     array("bao",-20230),
     array("bei",-20051),
     array("ben",-20036),
     array("beng",-20032),
     array("bi",-20026),
     array("bian",-20002),
     array("biao",-19990),
     array("bie",-19986),
     array("bin",-19982),
     array("bing",-19976),
     array("bo",-19805),
     array("bu",-19784),
     array("ca",-19775),
     array("cai",-19774),
     array("can",-19763),
     array("cang",-19756),
     array("cao",-19751),
     array("ce",-19746),
     array("ceng",-19741),
     array("cha",-19739),
     array("chai",-19728),
     array("chan",-19725),
     array("chang",-19715),
     array("chao",-19540),
     array("che",-19531),
     array("chen",-19525),
     array("cheng",-19515),
     array("chi",-19500),
     array("chong",-19484),
     array("chou",-19479),
     array("chu",-19467),
     array("chuai",-19289),
     array("chuan",-19288),
     array("chuang",-19281),
     array("chui",-19275),
     array("chun",-19270),
     array("chuo",-19263),
     array("ci",-19261),
     array("cong",-19249),
     array("cou",-19243),
     array("cu",-19242),
     array("cuan",-19238),
     array("cui",-19235),
     array("cun",-19227),
     array("cuo",-19224),
     array("da",-19218),
     array("dai",-19212),
     array("dan",-19038),
     array("dang",-19023),
     array("dao",-19018),
     array("de",-19006),
     array("deng",-19003),
     array("di",-18996),
     array("dian",-18977),
     array("diao",-18961),
     array("die",-18952),
     array("ding",-18783),
     array("diu",-18774),
     array("dong",-18773),
     array("dou",-18763),
     array("du",-18756),
     array("duan",-18741),
     array("dui",-18735),
     array("dun",-18731),
     array("duo",-18722),
     array("e",-18710),
     array("en",-18697),
     array("er",-18696),
     array("fa",-18526),
     array("fan",-18518),
     array("fang",-18501),
     array("fei",-18490),
     array("fen",-18478),
     array("feng",-18463),
     array("fo",-18448),
     array("fou",-18447),
     array("fu",-18446),
     array("ga",-18239),
     array("gai",-18237),
     array("gan",-18231),
     array("gang",-18220),
     array("gao",-18211),
     array("ge",-18201),
     array("gei",-18184),
     array("gen",-18183),
     array("geng",-18181),
     array("gong",-18012),
     array("gou",-17997),
     array("gu",-17988),
     array("gua",-17970),
     array("guai",-17964),
     array("guan",-17961),
     array("guang",-17950),
     array("gui",-17947),
     array("gun",-17931),
     array("guo",-17928),
     array("ha",-17922),
     array("hai",-17759),
     array("han",-17752),
     array("hang",-17733),
     array("hao",-17730),
     array("he",-17721),
     array("hei",-17703),
     array("hen",-17701),
     array("heng",-17697),
     array("hong",-17692),
     array("hou",-17683),
     array("hu",-17676),
     array("hua",-17496),
     array("huai",-17487),
     array("huan",-17482),
     array("huang",-17468),
     array("hui",-17454),
     array("hun",-17433),
     array("huo",-17427),
     array("ji",-17417),
     array("jia",-17202),
     array("jian",-17185),
     array("jiang",-16983),
     array("jiao",-16970),
     array("jie",-16942),
     array("jin",-16915),
     array("jing",-16733),
     array("jiong",-16708),
     array("jiu",-16706),
     array("ju",-16689),
     array("juan",-16664),
     array("jue",-16657),
     array("jun",-16647),
     array("ka",-16474),
     array("kai",-16470),
     array("kan",-16465),
     array("kang",-16459),
     array("kao",-16452),
     array("ke",-16448),
     array("ken",-16433),
     array("keng",-16429),
     array("kong",-16427),
     array("kou",-16423),
     array("ku",-16419),
     array("kua",-16412),
     array("kuai",-16407),
     array("kuan",-16403),
     array("kuang",-16401),
     array("kui",-16393),
     array("kun",-16220),
     array("kuo",-16216),
     array("la",-16212),
     array("lai",-16205),
     array("lan",-16202),
     array("lang",-16187),
     array("lao",-16180),
     array("le",-16171),
     array("lei",-16169),
     array("leng",-16158),
     array("li",-16155),
     array("lia",-15959),
     array("lian",-15958),
     array("liang",-15944),
     array("liao",-15933),
     array("lie",-15920),
     array("lin",-15915),
     array("ling",-15903),
     array("liu",-15889),
     array("long",-15878),
     array("lou",-15707),
     array("lu",-15701),
     array("lv",-15681),
     array("luan",-15667),
     array("lue",-15661),
     array("lun",-15659),
     array("luo",-15652),
     array("ma",-15640),
     array("mai",-15631),
     array("man",-15625),
     array("mang",-15454),
     array("mao",-15448),
     array("me",-15436),
     array("mei",-15435),
     array("men",-15419),
     array("meng",-15416),
     array("mi",-15408),
     array("mian",-15394),
     array("miao",-15385),
     array("mie",-15377),
     array("min",-15375),
     array("ming",-15369),
     array("miu",-15363),
     array("mo",-15362),
     array("mou",-15183),
     array("mu",-15180),
     array("na",-15165),
     array("nai",-15158),
     array("nan",-15153),
     array("nang",-15150),
     array("nao",-15149),
     array("ne",-15144),
     array("nei",-15143),
     array("nen",-15141),
     array("neng",-15140),
     array("ni",-15139),
     array("nian",-15128),
     array("niang",-15121),
     array("niao",-15119),
     array("nie",-15117),
     array("nin",-15110),
     array("ning",-15109),
     array("niu",-14941),
     array("nong",-14937),
     array("nu",-14933),
     array("nv",-14930),
     array("nuan",-14929),
     array("nue",-14928),
     array("nuo",-14926),
     array("o",-14922),
     array("ou",-14921),
     array("pa",-14914),
     array("pai",-14908),
     array("pan",-14902),
     array("pang",-14894),
     array("pao",-14889),
     array("pei",-14882),
     array("pen",-14873),
     array("peng",-14871),
     array("pi",-14857),
     array("pian",-14678),
     array("piao",-14674),
     array("pie",-14670),
     array("pin",-14668),
     array("ping",-14663),
     array("po",-14654),
     array("pu",-14645),
     array("qi",-14630),
     array("qia",-14594),
     array("qian",-14429),
     array("qiang",-14407),
     array("qiao",-14399),
     array("qie",-14384),
     array("qin",-14379),
     array("qing",-14368),
     array("qiong",-14355),
     array("qiu",-14353),
     array("qu",-14345),
     array("quan",-14170),
     array("que",-14159),
     array("qun",-14151),
     array("ran",-14149),
     array("rang",-14145),
     array("rao",-14140),
     array("re",-14137),
     array("ren",-14135),
     array("reng",-14125),
     array("ri",-14123),
     array("rong",-14122),
     array("rou",-14112),
     array("ru",-14109),
     array("ruan",-14099),
     array("rui",-14097),
     array("run",-14094),
     array("ruo",-14092),
     array("sa",-14090),
     array("sai",-14087),
     array("san",-14083),
     array("sang",-13917),
     array("sao",-13914),
     array("se",-13910),
     array("sen",-13907),
     array("seng",-13906),
     array("sha",-13905),
     array("shai",-13896),
     array("shan",-13894),
     array("shang",-13878),
     array("shao",-13870),
     array("she",-13859),
     array("shen",-13847),
     array("sheng",-13831),
     array("shi",-13658),
     array("shou",-13611),
     array("shu",-13601),
     array("shua",-13406),
     array("shuai",-13404),
     array("shuan",-13400),
     array("shuang",-13398),
     array("shui",-13395),
     array("shun",-13391),
     array("shuo",-13387),
     array("si",-13383),
     array("song",-13367),
     array("sou",-13359),
     array("su",-13356),
     array("suan",-13343),
     array("sui",-13340),
     array("sun",-13329),
     array("suo",-13326),
     array("ta",-13318),
     array("tai",-13147),
     array("tan",-13138),
     array("tang",-13120),
     array("tao",-13107),
     array("te",-13096),
     array("teng",-13095),
     array("ti",-13091),
     array("tian",-13076),
     array("tiao",-13068),
     array("tie",-13063),
     array("ting",-13060),
     array("tong",-12888),
     array("tou",-12875),
     array("tu",-12871),
     array("tuan",-12860),
     array("tui",-12858),
     array("tun",-12852),
     array("tuo",-12849),
     array("wa",-12838),
     array("wai",-12831),
     array("wan",-12829),
     array("wang",-12812),
     array("wei",-12802),
     array("wen",-12607),
     array("weng",-12597),
     array("wo",-12594),
     array("wu",-12585),
     array("xi",-12556),
     array("xia",-12359),
     array("xian",-12346),
     array("xiang",-12320),
     array("xiao",-12300),
     array("xie",-12120),
     array("xin",-12099),
     array("xing",-12089),
     array("xiong",-12074),
     array("xiu",-12067),
     array("xu",-12058),
     array("xuan",-12039),
     array("xue",-11867),
     array("xun",-11861),
     array("ya",-11847),
     array("yan",-11831),
     array("yang",-11798),
     array("yao",-11781),
     array("ye",-11604),
     array("yi",-11589),
     array("yin",-11536),
     array("ying",-11358),
     array("yo",-11340),
     array("yong",-11339),
     array("you",-11324),
     array("yu",-11303),
     array("yuan",-11097),
     array("yue",-11077),
     array("yun",-11067),
     array("za",-11055),
     array("zai",-11052),
     array("zan",-11045),
     array("zang",-11041),
     array("zao",-11038),
     array("ze",-11024),
     array("zei",-11020),
     array("zen",-11019),
     array("zeng",-11018),
     array("zha",-11014),
     array("zhai",-10838),
     array("zhan",-10832),
     array("zhang",-10815),
     array("zhao",-10800),
     array("zhe",-10790),
     array("zhen",-10780),
     array("zheng",-10764),
     array("zhi",-10587),
     array("zhong",-10544),
     array("zhou",-10533),
     array("zhu",-10519),
     array("zhua",-10331),
     array("zhuai",-10329),
     array("zhuan",-10328),
     array("zhuang",-10322),
     array("zhui",-10315),
     array("zhun",-10309),
     array("zhuo",-10307),
     array("zi",-10296),
     array("zong",-10281),
     array("zou",-10274),
     array("zu",-10270),
     array("zuan",-10262),
     array("zui",-10260),
     array("zun",-10256),
     array("zuo",-10254)
   );
    public function get_pinyin($str,$charset="utf-8"){
      if($charset!="gb2312"){
        $str=$this->set_char($str,$charset,"gb2312");
        $str=$this->c($str);
        $str=$this->set_char($str,"gb2312",$charset);
      }else{
        $str=$this->c($str);
      }
      return $str;
    }
   private function set_char($str,$charset="utf-8",$charset_out="gb2312"){
    if(function_exists('iconv')){
          $str=iconv($charset,$charset_out,$str);
    }elseif(function_exists("mb_convert_encoding")){
      $str=mb_convert_encoding($str,$charset_out,$charset);
    }
    return $str;
   }
  private function g($num){
    if($num>0 && $num<160){
        return chr($num);
    }elseif($num<-20319||$num>-10247){
        return "";
    }else{
        for($i=count($this->d)-1;$i>=0;$i--){
        if($this->d[$i][1]<=$num) break;
        }
        return $this->d[$i][0];
    }
  }
  private function c($str){
    $ret="";
    for($i=0;$i<strlen($str);$i++){
        $p=ord(substr($str,$i,1));
        if($p>160){
        $q=ord(substr($str,++$i,1));
        $p=$p*256+$q-65536;
        }
        $ret.=$this->g($p);
    }
    return $ret;
  }
}

function get_pinyin($str,$charset="utf-8"){
  $pinyin=new pinyin();
  return $pinyin->get_pinyin($str,$charset);

}



function getChinese($str,$charset='utf8'){

  if($charset=='gb2312'){
    if(!preg_match_all("/^[".chr(0xa1)."-".chr(0xff)."]+/",$str,$match)){
      return false;
    }
    return implode('',$match[0]);
  }




    //取得字符串中汉字字符数字下划线和短连接符、逗号、句号、分号、冒号、书名号、问号等非特殊字符
  function getChinese($str,$charset='utf8'){
  if($charset=='gb2312'){
    if(!preg_match_all("/^[".chr(0xa1)."-".chr(0xff)."A-Za-z0-9_\-\,\。\，\.\；\;\：\:\《\》\？\?\%\%\！\!\~\~]+/",$str,$match)){
      return false;
    }
    return implode('',$match[0]);
  }
  if($charset=='utf8'){
    if(!preg_match_all("/[\x{4e00}-\x{9fa5}A-Za-z0-9_\-\,\。\，\.\；\;\：\:\《\》\？\?\%\%\！\!\~\~]+/u",$str,$match)){
      return false;
    }
    return implode('',$match[0]);
  }
  return false;
  }










}

?>