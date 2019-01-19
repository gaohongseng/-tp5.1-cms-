/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : tp5cms4

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2019-01-17 14:43:23
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tpcms_admin
-- ----------------------------
DROP TABLE IF EXISTS `tpcms_admin`;
CREATE TABLE `tpcms_admin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tpcms_admin
-- ----------------------------
INSERT INTO `tpcms_admin` VALUES ('1', 'admin', '21232f297a57a5a743894a0e4a801fc3');
INSERT INTO `tpcms_admin` VALUES ('2', 'admin123', '0192023a7bbd73250516f069df18b500');
INSERT INTO `tpcms_admin` VALUES ('20', 'faker', '619dea94b332475cc6271c4db2511f73');

-- ----------------------------
-- Table structure for tpcms_article
-- ----------------------------
DROP TABLE IF EXISTS `tpcms_article`;
CREATE TABLE `tpcms_article` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `author` varchar(30) DEFAULT NULL,
  `thumb` varchar(160) DEFAULT NULL,
  `content` text,
  `click` mediumint(10) DEFAULT '0',
  `zan` mediumint(10) DEFAULT '0',
  `time` int(10) DEFAULT NULL,
  `cateid` mediumint(10) DEFAULT NULL,
  `rec` int(1) DEFAULT '0' COMMENT '0不推荐，1推荐',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tpcms_article
-- ----------------------------
INSERT INTO `tpcms_article` VALUES ('12', '重庆毕升印务有限公司', '', '', '', 'static/admin/articleimg/20181202\\3b878df5ce1d401873960d49857fc013.jpg', '<div class=\"case_one_attr\" style=\"margin: 0px; padding: 0px; font-size: 14px; color: rgb(85, 85, 85); width: 1090px;\"><ul class=\"ul_fl list-paddingleft-2\" style=\"list-style-type: none;\"><li class=\"one_attr1\" style=\"\"><p><span class=\"case_one_ico\" style=\"margin-right: 5px; background: rgb(255, 145, 71); height: 100%; line-height: 30px; padding: 4px 15px; color: rgb(255, 255, 255);\">行业</span>&nbsp;广告印刷</p></li><li class=\"one_attr1\" style=\"\"><p><span class=\"case_one_ico\" style=\"margin-right: 5px; background: rgb(255, 145, 71); height: 100%; line-height: 30px; padding: 4px 15px; color: rgb(255, 255, 255);\">类型</span>&nbsp;VIP客户</p></li><li class=\"one_attr1\" style=\"\"><p><span class=\"case_one_ico\" style=\"margin-right: 5px; background: rgb(255, 145, 71); height: 100%; line-height: 30px; padding: 4px 15px; color: rgb(255, 255, 255);\">网址</span>&nbsp;http://www.lftecq.com/</p></li><li class=\"one_attr2\" style=\"\"><div class=\"case_one_ico fl\" style=\"margin: 0px 5px 0px 0px; padding: 4px 15px; display: inline; float: left; background: rgb(255, 145, 71); height: 30px; line-height: 30px; color: rgb(255, 255, 255);\">客户介绍</div><div class=\"case_one_txt fr\" style=\"margin: 0px; padding: 0px; display: inline; float: right; width: 980px;\">2016年，一家集创意、设计、制作、印刷后期加工于一体的综合性专业设计印刷公司--重庆毕升印务有限公司在重庆成立了。 他是一名设计师，为企业量身定做个性化外衣，提供专业的印品；他是一名画师，泼墨油彩逼真的展现企业的精神面貌，传播专属的企业文化； 她--重庆毕升印务有限公司，以追求“诚信、高效、严谨、务实、创新”的经营理念，秉承“振兴名族工业、缔造人类文明进步”的重任，不断探索，不断创新，不断进步；极力与客户风雨同舟，共创辉煌！</div><div class=\"clear\" style=\"margin: 0px; padding: 0px; clear: both; font-size: 0px; height: 0px; line-height: 0; overflow: hidden;\"></div><div class=\"h40\" style=\"margin: 0px; padding: 0px; width: 1090px; height: 40px;\"></div></li><li class=\"one_attr3\" style=\"\"><div class=\"case_one_ico1 fl\" style=\"margin: 0px; padding: 0px; display: inline; float: left; width: 135px; height: 46px; line-height: 46px; text-align: center; background: rgb(255, 145, 71); font-size: 22px; color: rgb(255, 255, 255);\">效果展示</div></li><li class=\"one_attr4\" style=\"\"><div class=\"h35\" style=\"margin: 0px; padding: 0px; width: 1090px; height: 35px;\"></div><div class=\"case_one_con\" style=\"margin: 0px; padding: 0px;\">&nbsp; &nbsp; &nbsp; &nbsp; 重庆毕升印务有限公司于2016年10月加入了卓光科技互联网营销的大家庭，由于双方都执着于把网站做到尽善尽美，从首页设计到内容的布局上放进行了多次协商和交换意见，在耗时两个月的共同努力下，网站正式上线。<div style=\"margin: 0px; padding: 0px; text-align: center;\"><img alt=\"\" src=\"/ueditor/php/upload/image/20181202/1543737299966235.jpg\"/></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;虽然前期制作话费了不短的时间，不过网站的优化却并没有耽误太多时间，在合理的关键词布局和充分的前期准备的双重保障下，网站在约定时间内达到了预期的效果，客户也明显的感受到了网站带来的资源转化。<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;网站达到预期效果以后，重庆毕升印务有限公司为他的<a href=\"http://www.zhuoguang.net/\" target=\"_blank\" style=\"border: none; text-decoration-line: none;\"><span style=\"text-decoration:underline;\">网络营销</span></a>合作伙伴送上了锦旗，<strong>互联网全网营销竞争再激烈，卓光科技不会让你输！</strong><br/><br/><div style=\"margin: 0px; padding: 0px; text-align: center;\"><img alt=\"\" src=\"/ueditor/php/upload/image/20181202/1543737300133742.jpg\"/><img alt=\"\" src=\"/ueditor/php/upload/image/20181202/1543737301630759.jpg\"/><br/><img alt=\"\" src=\"/ueditor/php/upload/image/20181202/1543737302777326.jpg\"/></div></div><div class=\"clear\" style=\"margin: 0px; padding: 0px; clear: both; font-size: 0px; height: 0px; line-height: 0; overflow: hidden;\"></div><div class=\"h40\" style=\"margin: 0px; padding: 0px; width: 1090px; height: 40px;\"></div></li></ul></div><div class=\"clear\" style=\"margin: 0px; padding: 0px; clear: both; font-size: 0px; height: 0px; line-height: 0; overflow: hidden;\"></div><div class=\"case_one_foot\" style=\"margin: 0px; padding: 0px; border-top: 1px solid rgb(221, 221, 221); width: 1090px; border-bottom: 1px solid rgb(221, 221, 221);\"><div class=\"h40\" style=\"margin: 0px; padding: 0px; width: 1090px; height: 40px; font-family: 微软雅黑, 宋体, \"></div><div class=\"case_ofoot_con\" style=\"margin: 0px; padding: 0px; width: 1090px; font-family: 微软雅黑, 宋体, \"><div class=\"case_ofoot_con_l fl\" style=\"margin: 0px; padding: 0px; display: inline; float: left; width: 825px; font-size: 16px; color: rgb(51, 51, 51); line-height: 28px;\">重庆卓光提出“全网整合”网络营销解决方案，“为客户提供更全面的网络营销服务。 自2010年以来，帮助客户进行品牌包装，为数千多家的中小企业实现互联网盈利，得到了客户的一致好评。将自身的使命定于为企业客户带来更新颖更有效的网络服务，成为优质的网络服务提供商。</div><div class=\"case_ofoot_con_r fr\" style=\"margin: 0px; padding: 0px; display: inline; float: right; width: 175px; position: relative; right: 45px;\"><div class=\"case_ofoot_con_ra\" style=\"margin: 0px; padding: 0px; width: 135px; height: 50px; text-align: center; line-height: 45px; background: url(\"><a href=\"http://wpa.qq.com/msgrd?v=3&uin=448750844&site=qq&menu=yes\" target=\"_blank\" title=\"在线咨询\" style=\"border: none; text-decoration-line: none; font-size: 16px; color: rgb(255, 255, 255);\">立即咨询</a></div><div class=\"case_ofoot_con_rt\" style=\"margin: 0px; padding: 0px; font-size: 14px; color: rgb(51, 51, 51);\">免费获取网络营销推广方案</div></div></div><div class=\"clear\" style=\"margin: 0px; padding: 0px; clear: both; font-size: 0px; height: 0px; line-height: 0; overflow: hidden; font-family: 微软雅黑, 宋体, \"></div></div><p><br/></p>', '0', '0', '1543737348', '39', '0');
INSERT INTO `tpcms_article` VALUES ('15', '营销型网站建设的标准是什么？', '', '营销网站建设 在现在的企业网络营销中占据重要的位置，可以说营销网站的好', '', null, '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; text-indent: 24px; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255); line-height: 25px; color: rgb(51, 51, 51); font-family: Verdana, Arial, Helvetica, sans-serif;\"><span style=\"font-size: 16px;\"><strong style=\"color: rgb(182, 18, 18);\">营销<a href=\"http://www.zhuoguang.net/\" target=\"_blank\" style=\"border: none; text-decoration-line: none;\"><span style=\"text-decoration:underline;\">网站建设</span></a></strong>在现在的企业<a href=\"http://www.zhuoguang.net/\" target=\"_blank\" style=\"border: none; text-decoration-line: none;\"><span style=\"text-decoration:underline;\">网络营销</span></a>中占据重要的位置，可以说<a href=\"http://www.zhuoguang.net/zzyhv/\" target=\"_blank\" style=\"border: none; text-decoration-line: none;\"><span style=\"text-decoration:underline;\">营销网站</span></a>的好坏直接影响到整个<a href=\"http://www.zhuoguang.net/\" target=\"_blank\" style=\"border: none; text-decoration-line: none;\"><span style=\"text-decoration:underline;\">网络营销</span></a>效果，许多企业拿着传统网站在做网络营销，在营销的过程中遇到一个典型的问题那就是点击率挺高的，但询盘少着又少，这就是由于<a href=\"http://www.zhuoguang.net/zzyhv/\" target=\"_blank\" style=\"border: none; text-decoration-line: none;\"><span style=\"text-decoration:underline;\">营销网站</span></a>缺乏营销力，缺乏对客户引导力，现在许多建站公司根本不是帮助企业做好网络营销，而是出于自己的利益，为了完成一种任务，所以在整个建站的过程中，也不会去考虑那么多的，影响到网站的营销力与转化率，那么符合营销网站建设有什么标准呢?</span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; text-indent: 24px; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255); line-height: 25px; color: rgb(51, 51, 51); font-family: Verdana, Arial, Helvetica, sans-serif;\">&nbsp;</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; text-indent: 24px; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255); line-height: 25px; color: rgb(51, 51, 51); font-family: Verdana, Arial, Helvetica, sans-serif; text-align: center;\">&nbsp;</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; text-indent: 24px; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255); line-height: 25px; color: rgb(51, 51, 51); font-family: Verdana, Arial, Helvetica, sans-serif; text-align: center;\"><span style=\"font-size: 16px;\"><img alt=\"\" src=\"/ueditor/php/upload/image/20181202/1543741629123144.jpg\"/></span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; text-indent: 24px; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255); line-height: 25px; color: rgb(51, 51, 51); font-family: Verdana, Arial, Helvetica, sans-serif; text-align: center;\"><span style=\"font-size: 16px;\">优秀营销网站的标准定义</span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; text-indent: 24px; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255); line-height: 25px; color: rgb(51, 51, 51); font-family: Verdana, Arial, Helvetica, sans-serif;\">&nbsp;</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; text-indent: 24px; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255); line-height: 25px; color: rgb(51, 51, 51); font-family: Verdana, Arial, Helvetica, sans-serif;\"><span style=\"font-size: 16px;\">　　<span style=\"color: rgb(255, 128, 0);\">第一、营销网站要美观，颜色搭配和谐，给予用户留下好印象，</span>用户的印象非常重要的，整体的<a href=\"http://www.zhuoguang.net/\" target=\"_blank\" style=\"border: none; text-decoration-line: none;\"><span style=\"text-decoration:underline;\">网站制作</span></a>下来，需要考虑到用户的心理、用户体验、颜色搭配等等各方面的知识相结合，只有满足用户的搜索习惯与相关喜好，才能更好的吸引客户，客户看到的也就是网站，网站的外观，整体的印象，所以营销网站建设要结合目标用户喜好;</span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; text-indent: 24px; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255); line-height: 25px; color: rgb(51, 51, 51); font-family: Verdana, Arial, Helvetica, sans-serif;\">&nbsp;</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; text-indent: 24px; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255); line-height: 25px; color: rgb(51, 51, 51); font-family: Verdana, Arial, Helvetica, sans-serif;\"><span style=\"font-size: 16px;\">　　<span style=\"color: rgb(255, 128, 0);\">第二、网页的加载速度也在一定程度上影响用户的去留，</span>如果想要用户在短时间内产生信任感，那么就需要缩短网站的加载时间。如果一个网站的加载时间超过五秒，那么用户就会关闭这个网站。营销网站需要让用户的浏览时间转化成一种享受而不是折磨；</span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; text-indent: 24px; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255); line-height: 25px; color: rgb(51, 51, 51); font-family: Verdana, Arial, Helvetica, sans-serif;\">&nbsp;</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; text-indent: 24px; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255); line-height: 25px; color: rgb(51, 51, 51); font-family: Verdana, Arial, Helvetica, sans-serif;\"><span style=\"font-size: 16px;\">　　<span style=\"color: rgb(255, 128, 0);\">第三、导航布局一定要清晰明了，能够让目标客户找到自己想要的内容。</span>导航不仅仅是用来引导目标客户的，还是用来做优化的，如果导航内容不清晰，自己的目标客户看到一定会很吃力的，导致用户体验质量下降，在导航内容也需要布置关键词，如果任意布局，影响到关键词排名优化，不能让蜘蛛快速抓取网站信息;</span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; text-indent: 24px; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255); line-height: 25px; color: rgb(51, 51, 51); font-family: Verdana, Arial, Helvetica, sans-serif;\">&nbsp;</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; text-indent: 24px; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255); line-height: 25px; color: rgb(51, 51, 51); font-family: Verdana, Arial, Helvetica, sans-serif;\"><span style=\"font-size: 16px;\">　　<span style=\"color: rgb(255, 128, 0);\">第四、在营销网站上面更新的内容也需要<a href=\"http://www.zhuoguang.net/yxxwzv/\" target=\"_blank\" style=\"border: none; text-decoration-line: none;\"><span style=\"text-decoration:underline;\">营销型网站</span></a>的注意。</span>如果仅仅是将行业新闻、公司新闻、行业知识、知识问答等等的板块全部混在一起，这样分类不清晰的内容就会直接影响用户的浏览体验和搜索引擎的抓取。如果将这些信息内容分门别类，就会大大提高网站的效率，从而提高网站的转化率；</span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; text-indent: 24px; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255); line-height: 25px; color: rgb(51, 51, 51); font-family: Verdana, Arial, Helvetica, sans-serif;\">&nbsp;</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; text-indent: 24px; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255); line-height: 25px; color: rgb(51, 51, 51); font-family: Verdana, Arial, Helvetica, sans-serif; text-align: center;\"><span style=\"font-size: 16px;\"><img alt=\"\" src=\"/ueditor/php/upload/image/20181202/1543741630990720.jpg\"/></span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; text-indent: 24px; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255); line-height: 25px; color: rgb(51, 51, 51); font-family: Verdana, Arial, Helvetica, sans-serif; text-align: center;\"><br/><span style=\"font-size: 16px;\">重庆卓光高端营销网站建设让网站真正做到具备高营销力</span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; text-indent: 24px; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255); line-height: 25px; color: rgb(51, 51, 51); font-family: Verdana, Arial, Helvetica, sans-serif;\">&nbsp;</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; text-indent: 24px; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255); line-height: 25px; color: rgb(51, 51, 51); font-family: Verdana, Arial, Helvetica, sans-serif;\"><span style=\"font-size: 16px;\">　　总结，现在建站公司有许多，每一家建站公司对于营销网站建设的理解是不一样的，加上本质上的技术差距，建设出来的<a href=\"http://www.shenduwang.com/Site.htm\" target=\"_self\" style=\"border: none; text-decoration-line: none; color: rgb(182, 18, 18);\"><strong>营销网站</strong></a>质量也会存在差距的，营销力的强弱直接影响到网络营销的效果，所以在营销网站建设前一定要清楚的营销网站具备什么样的标准，选择什么样专业建站公司。以上就是营销网站建设小编分享的“符合营销网站建设有几个标准”相关资讯，供你参考!</span></p><div class=\"h25\" style=\"margin: 0px; padding: 0px; width: 1070px; height: 25px; color: rgb(85, 85, 85); font-family: 微软雅黑, 宋体, &quot;Microsoft Yahei&quot;, SimHei; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);\"></div><div class=\"cqzg_fx_xiaoh\" style=\"margin: 0px; padding: 0px; text-align: center; color: rgb(85, 85, 85); font-family: 微软雅黑, 宋体, &quot;Microsoft Yahei&quot;, SimHei; white-space: normal; background-color: rgb(255, 255, 255);\">本文由重庆卓光科技编辑,转载请注明出处：<a href=\"http://www.zhuoguang.net/cjwtv/yxwzv/146.html\" title=\"营销型网站建设的标准是什么？\" style=\"border: none; text-decoration-line: none; color: rgb(85, 85, 85);\">http://www.zhuoguang.net/cjwtv/yxwzv/146.html</a></div><p><br/></p>', '0', '0', '1543741636', '40', '0');
INSERT INTO `tpcms_article` VALUES ('16', '400电话可以免费办理吗？可不可信？', '', '', '', null, '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; text-indent: 24px; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255); color: rgb(79, 79, 79); font-family: &quot;microsoft yahei&quot;; line-height: 2em;\">&nbsp;&nbsp; 现在免费的东西太多了，甚至<a href=\"http://www.zhuoguang.net/teliv/\" target=\"_blank\" style=\"border: none; text-decoration-line: none;\"><span style=\"text-decoration:underline;\">400电话</span></a>都有免费的了？你相信吗？反正我是不相信的。天上不会掉馅饼，也不会路上捡到金子的。免费的吃可以有，免费的旅游可以有，免费的穿可以有，但是你要不要呢。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; text-indent: 24px; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255); color: rgb(79, 79, 79); font-family: &quot;microsoft yahei&quot;; line-height: 2em;\">&nbsp; &nbsp; &nbsp; &nbsp; 问题一：吃的让你上瘾，再赚你的钱；免费旅游把你丢了，不带你回来了；免费穿的衣服，看不看得上呢？这些免费的如果你用了，可能不会带来很严重的后果，无非都是多花钱罢了！如果一个400电话让你免费使用，后期不给你用了，那我们做的推广不都白费了吗？更可恶的是。你做了广告宣传，代理商高价把号码卖给你的同行，岂不是为他人做嫁衣，不仅浪费了更多资金，还长了同行的志气。因次，办理免费400号码用不得。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; text-indent: 24px; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255); color: rgb(79, 79, 79); font-family: &quot;microsoft yahei&quot;; line-height: 2em;\">&nbsp; &nbsp; &nbsp; &nbsp; 问题二：代理商免费给办理400电话，他的公司不赚钱，怎么存活呢?不能存活怎么给你后期的服务呢？因此保证400电话办理后期使用才是王道，免费的东西只有你在得到的那瞬间高兴，留下的都是痛苦。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; text-indent: 24px; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255); color: rgb(79, 79, 79); font-family: &quot;microsoft yahei&quot;; line-height: 2em;\">&nbsp;</p><div class=\"h25\" style=\"margin: 0px; padding: 0px; width: 1070px; height: 25px; color: rgb(85, 85, 85); font-family: 微软雅黑, 宋体, &quot;Microsoft Yahei&quot;, SimHei; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);\"></div><div class=\"cqzg_fx_xiaoh\" style=\"margin: 0px; padding: 0px; text-align: center; color: rgb(85, 85, 85); font-family: 微软雅黑, 宋体, &quot;Microsoft Yahei&quot;, SimHei; white-space: normal; background-color: rgb(255, 255, 255);\">本文由重庆卓光科技编辑,转载请注明出处：<a href=\"http://www.zhuoguang.net/cjwtv/400cjv/98.html\" title=\"400电话可以免费办理吗？可不可信？\" style=\"border: none; text-decoration-line: none; color: rgb(85, 85, 85);\">http://www.zhuoguang.net/cjwtv/400cjv/98.html</a></div><p><br/></p>', '0', '0', '1543743415', '41', '0');
INSERT INTO `tpcms_article` VALUES ('18', '做好这六大方面能够让你的网站更加吸引人', '', '', '', null, '<div class=\"arc_con\" style=\"margin: 0px; padding: 0px; line-height: 30px; font-size: 14px; color: rgb(85, 85, 85); font-family: 微软雅黑, 宋体, &quot;Microsoft Yahei&quot;, SimHei; white-space: normal; background-color: rgb(255, 255, 255);\"><div style=\"margin: 0px; padding: 0px;\">如何让您的网站在同类网站中脱颖而出？<a href=\"http://www.zhuoguang.net/\" target=\"_blank\" style=\"border: none; text-decoration-line: none;\"><span style=\"text-decoration:underline;\">重庆</span></a><span style=\"text-decoration:underline;\"><a href=\"http://www.zhuoguang.net/\" target=\"_blank\" style=\"border: none; text-decoration-line: none;\"><span style=\"text-decoration:underline;\">网站建设</span></a>公司</span>为你解答:</div><div style=\"margin: 0px; padding: 0px;\">&nbsp;</div><div style=\"margin: 0px; padding: 0px;\">1、页面设计简洁大气&nbsp; &nbsp;</div><div style=\"margin: 0px; padding: 0px;\">很多人都很注重第一感觉，生活中人们之间相处是这样，看网站也是如此，客户打开您网站觉得设计很粗糙那么会给客户留下很差的影响，即使您的产品再好，客户也不愿接着往下看。</div><div style=\"margin: 0px; padding: 0px;\">&nbsp;</div><div style=\"margin: 0px; padding: 0px;\">2、符合书写标准</div><div style=\"margin: 0px; padding: 0px;\">这里指的是网站内容的布局，字体要规范，不要太大，也不要太小，颜色要统一，图片尽可能清晰、美观，同时兼顾图片大小，不要一味追求图片质量，而忽视网站加载速度。</div><div style=\"margin: 0px; padding: 0px;\">&nbsp;</div><div style=\"margin: 0px; padding: 0px;\">3、简明精练，言简意赅，围绕行业主题</div><div style=\"margin: 0px; padding: 0px;\">文章标题和关键词紧密相关，内容找到描述与关键词契合点，用较简练的话描述出来。</div><div style=\"margin: 0px; padding: 0px;\">&nbsp;</div><div style=\"margin: 0px; padding: 0px;\">4、突出产品或服务的优势和独特性&nbsp; &nbsp;</div><div style=\"margin: 0px; padding: 0px;\">例如标题突出品牌、地域特点，内容突出价格、公司承诺、联系方式等。真实具体的信息能增加公司的信誉，也方便潜在客户与公司联系。</div><div style=\"margin: 0px; padding: 0px;\"><img alt=\"\" src=\"/ueditor/php/upload/image/20181203/1543818547125536.png\"/></div><div style=\"margin: 0px; padding: 0px;\">5、使用“！、？、-”等符号&nbsp;</div><div style=\"margin: 0px; padding: 0px;\">使用特殊符号能很快的吸引搜索者的眼球，那不要过多使用，控制住允许的范围内。</div><div style=\"margin: 0px; padding: 0px;\">&nbsp;</div><div style=\"margin: 0px; padding: 0px;\">6、同类产品或服务，从不同卖点进行描述</div><div style=\"margin: 0px; padding: 0px;\">产品尽可能从不同买点进行描述，比如：规格、价格、尺寸，还要要突出与众不同的地方。<br/><div style=\"margin: 0px; padding: 0px;\">&nbsp;</div><div style=\"margin: 0px; padding: 0px;\">申请空间以后，如果使用您自己的域名访问，您还需要到域名管理中心建立A记录（域名指向）到您所在的服务器上。具体操作因不同公司域名系统不一样。我们的域名系统如下操作：</div><div style=\"margin: 0px; padding: 0px;\">&nbsp;</div><div style=\"margin: 0px; padding: 0px;\">进入“域名管理中心”-找到需要操作的域名，点后面的“管理”按钮-“DNS解析管理”-“域名解析”-在“主机名 (A)”后面点“增加新记录”然后点提交即可。注：这里的IP地址填写您网站所在服务器的，可以到主机管理中心查看到。一般来说2小时以后域名就可以生效了</div></div><br/><div class=\"h25\" style=\"margin: 0px; padding: 0px; width: 1070px; height: 25px;\"></div><div class=\"cqzg_fx_xiaoh\" style=\"margin: 0px; padding: 0px; text-align: center; font-size: 16px;\">本文由重庆卓光科技编辑,转载请注明出处：<a href=\"http://www.zhuoguang.net/cjwtv/513.html\" title=\"做好这六大方面能够让你的网站更加吸引人\" style=\"border: none; text-decoration-line: none; color: rgb(85, 85, 85);\">http://www.zhuoguang.net/cjwtv/513.html</a></div><div class=\"h25\" style=\"margin: 0px; padding: 0px; width: 1070px; height: 25px;\"></div></div><div class=\"clear\" style=\"margin: 0px; padding: 0px; clear: both; font-size: 0px; height: 0px; line-height: 0; overflow: hidden; font-family: 微软雅黑, 宋体, &quot;Microsoft Yahei&quot;, SimHei; white-space: normal; background-color: rgb(255, 255, 255);\"></div><div class=\"h45\" style=\"margin: 0px; padding: 0px; width: 1070px; height: 45px; font-family: 微软雅黑, 宋体, &quot;Microsoft Yahei&quot;, SimHei; font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);\"></div><div class=\"arc_bq\" style=\"margin: 0px; padding: 0px; width: 1070px; height: 50px; line-height: 22px; border-bottom: 1px solid rgb(221, 221, 221); font-family: 微软雅黑, 宋体, &quot;Microsoft Yahei&quot;, SimHei; font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);\"><div class=\"arc_bq_all\" style=\"margin: 0px; padding: 0px;\"><ul class=\"ul_fl list-paddingleft-2\" style=\"list-style-type: none;\"><li style=\"\"><p><span class=\"arc_bq_title\" style=\"height: 22px; width: 44px; text-align: center; display: block; color: rgb(255, 255, 255); background: rgb(255, 102, 0);\">标签</span></p></li><li style=\"\"><p><a href=\"http://www.zhuoguang.net/tag/zhongqingwangzhanjianshe_35_1.html\" target=\"_blank\" style=\"border: none; text-decoration-line: none; color: rgb(85, 85, 85);\">重庆网站建设</a></p></li></ul></div></div><p><br/></p>', '0', '0', '1543818562', '41', '0');

-- ----------------------------
-- Table structure for tpcms_articleqita
-- ----------------------------
DROP TABLE IF EXISTS `tpcms_articleqita`;
CREATE TABLE `tpcms_articleqita` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `shuomin` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `thumb` varchar(255) DEFAULT NULL,
  `content` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tpcms_articleqita
-- ----------------------------
INSERT INTO `tpcms_articleqita` VALUES ('1', '首页服务区域', '首页服务区域', '', null, '<p><a href=\"http://www.zhuoguang.net/./dianjiang.html\" title=\"垫江\">垫江网站建设</a><a href=\"http://www.zhuoguang.net/./chenkou.html\" title=\"城口县\">城口县网站建设</a><a href=\"http://www.zhuoguang.net/./fengdu.html\" title=\"丰都\">丰都网站建设</a><a href=\"http://www.zhuoguang.net/./kaixiang.html\" title=\"开县\">开县网站建设</a><a href=\"http://www.zhuoguang.net/./wuxi.html\" title=\"巫溪\">巫溪网站建设</a><a href=\"http://www.zhuoguang.net/./xiushang.html\" title=\"秀山\">秀山网站建设</a><a href=\"http://www.zhuoguang.net/./pengshui.html\" title=\"彭水县\">彭水县网站建设</a><a href=\"http://www.zhuoguang.net/./wushanxiang.html\" title=\"巫山县\">巫山县网站建设</a><a href=\"http://www.zhuoguang.net/./youyang.html\" title=\"酉阳\">酉阳网站建设</a><a href=\"http://www.zhuoguang.net/./fengjie.html\" title=\"奉节\">奉节网站建设</a><a href=\"http://www.zhuoguang.net/./yunyang.html\" title=\"云阳\">云阳网站建设</a><a href=\"http://www.zhuoguang.net/./zhongxian.html\" title=\"忠县\">忠县网站建设</a><a href=\"http://www.zhuoguang.net/./changshou.html\" title=\"长寿\">长寿网站建设</a><a href=\"http://www.zhuoguang.net/./hechuang.html\" title=\"合川\">合川网站建设</a><a href=\"http://www.zhuoguang.net/./jiangjin.html\" title=\"江津\">江津网站建设</a><a href=\"http://www.zhuoguang.net/./lianping.html\" title=\"梁平\">梁平网站建设</a><a href=\"http://www.zhuoguang.net/./tonglian.html\" title=\"铜梁\">铜梁网站建设</a><a href=\"http://www.zhuoguang.net/./wanzhou.html\" title=\"万州\">万州网站建设</a><a href=\"http://www.zhuoguang.net/./bishan.html\" title=\"璧山\">璧山网站建设</a><a href=\"http://www.zhuoguang.net/./dazu.html\" title=\"大足\">大足网站建设</a><a href=\"http://www.zhuoguang.net/./wulong.html\" title=\"武隆\">武隆网站建设</a><a href=\"http://www.zhuoguang.net/./yongchuang.html\" title=\"永川\">永川网站建设</a><a href=\"http://www.zhuoguang.net/./nanchuang.html\" title=\"南川\">南川网站建设</a><a href=\"http://www.zhuoguang.net/./wansheng.html\" title=\"万盛\">万盛网站建设</a><a href=\"http://www.zhuoguang.net/./jinjiang.html\" title=\"黔江\">黔江网站建设</a><a href=\"http://www.zhuoguang.net/./qijian.html\" title=\"綦江\">綦江网站建设</a><a href=\"http://www.zhuoguang.net/./shuangqiao.html\" title=\"双桥\">双桥网站建设</a><a href=\"http://www.zhuoguang.net/./beibei.html\" title=\"北碚\">北碚网站建设</a><a href=\"http://www.zhuoguang.net/./yuzhong.html\" title=\"渝中\">渝中网站建设</a><a href=\"http://www.zhuoguang.net/./banan.html\" title=\"巴南\">巴南网站建设</a><a href=\"http://www.zhuoguang.net/./dadukou.html\" title=\"大渡口\">大渡口网站建设</a><a href=\"http://www.zhuoguang.net/./yubei.html\" title=\"渝北\">渝北网站建设</a><a href=\"http://www.zhuoguang.net/./jiulongpo.html\" title=\"九龙坡\">九龙坡网站建设</a><a href=\"http://www.zhuoguang.net/./nanan.html\" title=\"南岸\">南岸网站建设</a><a href=\"http://www.zhuoguang.net/./jiangbei.html\" title=\"江北\">江北网站建设</a><a href=\"http://www.zhuoguang.net/./shapingba.html\" title=\"沙坪坝\">沙坪坝网站建设</a></p>');
INSERT INTO `tpcms_articleqita` VALUES ('2', '首页我们能做什么', '', '', null, '<ul class=\"ul_fl list-paddingleft-2\"><li><div class=\"floor01_li_0 floor01_li_01\"><a href=\"/yxxwzv/\" title=\"营销型网站\"><div class=\"h95\"></div><div class=\"floor01_li_t\">\r\n					网站建设</div><div class=\"floor01_li_d\">\r\n					通过搜索引擎优化技术,提供更多的展示和推广机会,带来大量精准流量和询盘，每月意向客户增长20%。</div></a></div></li><li><div class=\"floor01_li_0 floor01_li_02\"><div class=\"h95\"></div><a href=\"/phonev/\" title=\"手机网站\"><div class=\"floor01_li_t\">\r\n					手机网站建设</div><div class=\"floor01_li_d\">\r\n					手机网站的时代强势来袭，赢在全网营销时代，手机+电脑双剑合璧，把握商机滴水不漏,</div></a></div></li><li><div class=\"floor01_li_0 floor01_li_03\"><div class=\"h95\"></div><a href=\"/wxyxv/\" title=\"微信营销\"><div class=\"floor01_li_t\">\r\n					微信营销</div><div class=\"floor01_li_d\">\r\n					集成微网站，微支付，微活动多种系统模块，通过微信公众平台迅速将您的产品和服务展现推广给海量移动端客户。</div></a></div></li><li><div class=\"floor01_li_0 floor01_li_04\"><div class=\"h95\"></div><a href=\"/zhyxv/\" title=\"整合营销\"><div class=\"floor01_li_t\">\r\n					整合网络营销</div><div class=\"floor01_li_d\">\r\n					关键词2-48小时实现快速排名，覆盖6大主流搜索引擎，不让同搜索习惯的潜在客户都能找到您！</div></a></div></li><li><div class=\"floor01_li_0 floor01_li_05\"><div class=\"h95\"></div><div class=\"floor01_li_t\">\r\n					400电话</div><div class=\"floor01_li_d\">\r\n					彰显企业品牌形象，保证24小时不占线，不错过任何商机。</div></div></li></ul>');
INSERT INTO `tpcms_articleqita` VALUES ('3', '首页轮播', '', '', null, '<div class=\"slide\"><a href target=\"_blank\" title=\"重庆卓光将技术转化为生产力\"><img src=\"/public/static/index/images/2-1G0160954100-L.jpg\"/> &nbsp; &nbsp; &nbsp;</a></div><div class=\"slide\"><a href target=\"_blank\" title=\"网站建设公司\"> &nbsp; &nbsp; &nbsp;<img src=\"/public/static/index/images/1-1603311Z433301.jpg\"/> &nbsp; &nbsp; &nbsp;</a></div><div class=\"slide\"><a href target=\"_blank\" title=\"重庆网站建设\"> &nbsp; &nbsp; &nbsp;<img src=\"/public/static/index/images/1-1603311Z533142.jpg\"/> &nbsp; &nbsp; &nbsp;</a></div><div class=\"slide\"><a href target=\"_blank\" title=\"卓光实力\"> &nbsp; &nbsp; &nbsp;<img src=\"/public/static/index/images/2-160G1100133P6.jpg\"/> &nbsp; &nbsp; &nbsp;</a></div><div class=\"slide\"><a href=\"http://wpa.qq.com/msgrd?v=3&uin=448750844&site=qq&menu=yes\" target=\"_blank\" title=\"祥云系统建站推广一步到位\"> &nbsp; &nbsp; &nbsp;<img src=\"/public/static/index/images/1-150929162251222.jpg\"/> &nbsp; &nbsp; &nbsp;</a></div>');
INSERT INTO `tpcms_articleqita` VALUES ('4', '首页logo', '', '', null, '<p>&nbsp; &nbsp;<a href=\"/\" class=\"fl\"><img id=\"xh_add_logo\" src=\"/public/static/index/images/logo.gif\" title=\"重庆卓光科技有限公司\"/></a></p>');
INSERT INTO `tpcms_articleqita` VALUES ('5', '右侧在线客服', '', '', null, '<div class=\"floatDtxt\"><span style=\"color:#ff6600;font-size:20px;\">免费</span>咨询热线</div><div class=\"floatDtel\" style=\"text-align:center;\"><span style=\"font-size:+1px;color:#ff6600\">400-188-9366</span></div><div style=\"text-align: center; padding: 10px 0px 5px; background: rgb(235, 235, 235);\"><img src=\"/public/static/index/images/weixin.jpg\"/><br/><span style=\"font-size:+1px;color:#ff6600\">关注有惊喜</span></div>');
INSERT INTO `tpcms_articleqita` VALUES ('6', '底部的二维码', '', '', null, '<p class=\"wx_pic\"><img src=\"/public/static/index/images/weixin.jpg\"/></p><p class=\"wx_txt\">\r\n				关注有惊喜</p>');
INSERT INTO `tpcms_articleqita` VALUES ('7', '最底部的备案信息', '', '', null, '<p>\r\n		Copyright &amp;copy; 2008-2016 卓光科技 版权所有 &nbsp; 渝ICP备136238825</p><p class=\"footer_fwxm\">服务项目：<a href=\"http://www.zhuoguang.net/\">网站建设</a><a href=\"http://www.zhuoguang.net/\">网站制作</a><a href=\"http://www.zhuoguang.net/\">网站设计</a><a href=\"http://www.zhuoguang.net/newv/yxghv/258.html\">网站维护</a><a href=\"http://www.zhuoguang.net/newv/hydtv/259.html\">网站运营</a><a href=\"http://www.zhuoguang.net/newv/yxghv/263.html\">网站外包</a><a href=\"http://www.zhuoguang.net/newv/yxghv/264.html\">网站托管</a><a href=\"http://www.zhuoguang.net/zzyhv/\">网站推广</a><a href=\"http://www.zhuoguang.net/zzyhv/\">网站优化</a><a href=\"http://www.zhuoguang.net/newv/hydtv/260.html\">网站价格</a><a href=\"http://www.zhuoguang.net/newv/hydtv/261.html\">网站费用</a><a href=\"http://www.zhuoguang.net/newv/hydtv/260.html\">网站多少钱</a><a href=\"http://www.zhuoguang.net/newv/yxghv/262.html\">网站建设哪家好</a></p>');
INSERT INTO `tpcms_articleqita` VALUES ('8', '手机站首页', '', '', null, '<div class=\"xh_add_f1 clearfix\"><div class=\"xh_add_h40\"></div><div class=\"xh_f1_01\"><span style=\"\">建站+推广</span>一步到位</div><div class=\"xh_add_h16\"></div><div class=\"xh_f1_02\">让有需求的客户快速时间找到您,</div><div class=\"xh_f1_03\">三网同步（pc+移动端+微信端）</div><div class=\"xh_add_h40\"></div></div><div class=\"xh_add_f2 clearfix\"><div class=\"xh_f2_01\" style=\"height: 40px; line-height: 40px;\">网站建设<img src=\"http://m.zhuoguang.net/images/xh_wzjs.png\" id=\"xh_f2_01\" height=\"40\" class=\"loaded\"/></div></div><div class=\"g-question clearfix\"><p class=\"pd44\"><em class=\"wh\">?</em>如何让你的企业网站行业<em class=\"orange\">排名靠前</em></p><p class=\"pd44\"><em class=\"wh\">?</em>如何让你的网站更有<em class=\"orange\">营销力</em></p><p class=\"pd44\"><em class=\"wh\">?</em>如何让你的网站获得更多的<em class=\"orange\">询盘转化</em></p></div><!--如何让你的企业网站行业排名第一--><div class=\"g-question curved clearfix\"><h2 class=\"shadow\"><em class=\"ico1\"></em>卓光祥云建站优势</h2><p class=\"pd44 g-question\"><em class=\"wh\"><img src=\"http://m.zhuoguang.net/images/xh_add_02.png\" class=\"loaded\"/></em>更符合搜索引擎网站架构的祥云cms</p><p class=\"pd44 g-question\"><em class=\"wh\"><img src=\"http://m.zhuoguang.net/images/xh_add_02.png\" class=\"loaded\"/></em>打通pc,手机,微信,实现<em class=\"orange\">一站式营销</em></p><p class=\"pd44 g-question\"><em class=\"wh\"><img src=\"http://m.zhuoguang.net/images/xh_add_02.png\" class=\"loaded\"/></em><em class=\"orange\">600分站</em>推广+自动外链,网站排名不再是问题</p><p class=\"pd44 g-question\"><em class=\"wh\"><img src=\"http://m.zhuoguang.net/images/xh_add_02.png\" class=\"loaded\"/></em>高品质视觉设计及交互体验,<em class=\"orange\">提高客户转化</em></p></div><div class=\"xh_add_h16\"></div><div class=\"g-jz clearfix\"><ul class=\" list-paddingleft-2\"><li style=\"\"><p><a href=\"tel:400-188-9366\"><img src=\"http://m.zhuoguang.net/images/wyjz.png\" class=\"loaded\"/></a></p></li></ul></div><div class=\"xh_add_h16\"></div><div class=\"xh_add_f2 clearfix\"><div class=\"xh_f2_01\" style=\"height: 40px; line-height: 40px;\">运营推广<img src=\"http://m.zhuoguang.net/images/xh_yytg.png\" height=\"40\" class=\"loaded\"/></div></div><div class=\"g-question clearfix\"><div class=\"xh_add_h40\"></div><div class=\"xh_f1_02\">网站做好了</div><div class=\"xh_f1_03\">你是否被以下问题困扰？</div><p class=\"pd44 g-question\"><em class=\"wh\">?</em>网站订单少,不知道去哪里找客户</p><p class=\"pd44\"><em class=\"wh\">?</em>但百度从来不收录,没排名,转化低</p><p class=\"pd44\"><em class=\"wh\">?</em>单靠百度竞价提高流量,烧钱很厉害</p><p class=\"pd44\"><em class=\"wh\">?</em>没有专业网站运营团队,维护成本高</p></div><div class=\"g-question curved clearfix\"><h2 class=\"shadow\"><em class=\"ico1\"></em>赛富通推广优势</h2><p class=\"pd44 g-question\"><em class=\"wh\"><img src=\"http://m.zhuoguang.net/images/xh_add_02.png\" class=\"loaded\"/></em><em class=\"orange\">快速排名</em>,2-48小时实现排名,7-30天排名首页</p><p class=\"pd44 g-question\"><em class=\"wh\"><img src=\"http://m.zhuoguang.net/images/xh_add_02.png\" class=\"loaded\"/></em><em class=\"orange\">精准营销</em>,让1000种不同搜索习惯客户找到你</p><p class=\"pd44 g-question\"><em class=\"wh\"><img src=\"http://m.zhuoguang.net/images/xh_add_02.png\" class=\"loaded\"/></em><em class=\"orange\">搜索全覆盖</em>,在8大主流搜索引擎实现排名</p><p class=\"pd44 g-question\"><em class=\"wh\"><img src=\"http://m.zhuoguang.net/images/xh_add_02.png\" class=\"loaded\"/></em><em class=\"orange\">一键发布</em>,即可实现全网覆盖</p><p class=\"pd44 g-question\"><em class=\"wh\"><img src=\"http://m.zhuoguang.net/images/xh_add_02.png\" class=\"loaded\"/></em><em class=\"orange\">0风险</em>,15天无排名或年流量少于5000,可退款</p></div><div class=\"xh_add_h16\"></div><div class=\"g-jz clearfix\"><ul class=\" list-paddingleft-2\"><li style=\"\"><p><a href=\"tel:400-188-9366\"><img src=\"http://m.zhuoguang.net/images/wytg.png\" class=\"loaded\"/></a></p></li></ul></div><div class=\"xh_add_h16\">&nbsp;</div>');
INSERT INTO `tpcms_articleqita` VALUES ('9', '手机站地址', '手机站地址', '', null, '<p>重庆市沙坪坝东原ARC中央广场1幢3-8<br/>\r\n			电话：<span class=\"xphone\"><a href=\"tel:400-188-9366\">400-188-9366</a></span><br/>\r\n			卓光科技网 版权所有 2015-2025\r\n			渝ICP备136238825<br/></p>');
INSERT INTO `tpcms_articleqita` VALUES ('10', '手机站首页logo1', '手机站首页logo1', '', null, '<p><a href=\"http://m.zhuoguang.net/\"><img src=\"http://m.zhuoguang.net/templets/wap/images/xiaoh_logo.png\" class=\"loaded\"/></a></p>');
INSERT INTO `tpcms_articleqita` VALUES ('11', '手机站logo2', '手机站logo2', '', null, '<p><a href=\"tel:400-188-9366\"><img src=\"http://m.zhuoguang.net/templets/wap/images/xiaoh_tel.png\" class=\"loaded\"/></a></p>');

-- ----------------------------
-- Table structure for tpcms_arttupian
-- ----------------------------
DROP TABLE IF EXISTS `tpcms_arttupian`;
CREATE TABLE `tpcms_arttupian` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `biaoqian` varchar(255) DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT 'admin',
  `content` text,
  `click` mediumint(10) DEFAULT NULL,
  `zan` mediumint(10) DEFAULT NULL,
  `create_time` int(10) DEFAULT NULL,
  `cateid` int(10) DEFAULT NULL,
  `rec` int(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tpcms_arttupian
-- ----------------------------
INSERT INTO `tpcms_arttupian` VALUES ('1', '标题', null, '标题', '标题', '<p>标题标题</p>', null, null, '1547276074', '42', '0');
INSERT INTO `tpcms_arttupian` VALUES ('2', '标题1', null, '标题1', '标题1', '<p>标题1标题1</p>', null, null, '1547276419', '42', '0');
INSERT INTO `tpcms_arttupian` VALUES ('3', '测试啊', null, '测试啊', '测试啊', '<p>测试啊测试啊</p>', null, null, '1547284596', '43', '0');

-- ----------------------------
-- Table structure for tpcms_arttusrc
-- ----------------------------
DROP TABLE IF EXISTS `tpcms_arttusrc`;
CREATE TABLE `tpcms_arttusrc` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `imgsrc` varchar(255) NOT NULL DEFAULT '' COMMENT '图片地址',
  `imgid` int(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tpcms_arttusrc
-- ----------------------------

-- ----------------------------
-- Table structure for tpcms_auth_group
-- ----------------------------
DROP TABLE IF EXISTS `tpcms_auth_group`;
CREATE TABLE `tpcms_auth_group` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` char(100) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `rules` char(80) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tpcms_auth_group
-- ----------------------------
INSERT INTO `tpcms_auth_group` VALUES ('1', '超级管理员', '1', '1,2,5,7,14,15,3,4,6,13,21,16,17,20,19,18');
INSERT INTO `tpcms_auth_group` VALUES ('2', '配置管理员', '1', '1,2,5,7,14,15');
INSERT INTO `tpcms_auth_group` VALUES ('3', '链接专员', '1', '3,4,6,13,21');

-- ----------------------------
-- Table structure for tpcms_auth_group_access
-- ----------------------------
DROP TABLE IF EXISTS `tpcms_auth_group_access`;
CREATE TABLE `tpcms_auth_group_access` (
  `uid` mediumint(8) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  UNIQUE KEY `uid_group_id` (`uid`,`group_id`),
  KEY `uid` (`uid`),
  KEY `group_id` (`group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tpcms_auth_group_access
-- ----------------------------
INSERT INTO `tpcms_auth_group_access` VALUES ('1', '1');
INSERT INTO `tpcms_auth_group_access` VALUES ('2', '2');
INSERT INTO `tpcms_auth_group_access` VALUES ('20', '3');

-- ----------------------------
-- Table structure for tpcms_auth_rule
-- ----------------------------
DROP TABLE IF EXISTS `tpcms_auth_rule`;
CREATE TABLE `tpcms_auth_rule` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(80) NOT NULL DEFAULT '',
  `title` char(20) NOT NULL DEFAULT '',
  `type` tinyint(1) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `condition` char(100) NOT NULL DEFAULT '',
  `pid` int(10) DEFAULT '0',
  `level` int(11) DEFAULT NULL,
  `sort` int(11) DEFAULT '50',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tpcms_auth_rule
-- ----------------------------
INSERT INTO `tpcms_auth_rule` VALUES ('1', 'tp2conf', '系统设置', '1', '1', '', '0', '1', '1');
INSERT INTO `tpcms_auth_rule` VALUES ('2', 'tp2conf/conf', '配置项', '1', '1', '', '1', '2', '3');
INSERT INTO `tpcms_auth_rule` VALUES ('3', 'tp2link', '友情链接', '1', '1', '', '0', '1', '4');
INSERT INTO `tpcms_auth_rule` VALUES ('4', 'tp2link/lists', '链接列表', '1', '1', '', '3', '2', '2');
INSERT INTO `tpcms_auth_rule` VALUES ('5', 'tp2conf/lists', '配置列表', '1', '1', '', '1', '2', '4');
INSERT INTO `tpcms_auth_rule` VALUES ('6', 'tp2link/add', '链接添加', '1', '1', '', '4', '3', '3');
INSERT INTO `tpcms_auth_rule` VALUES ('7', 'tp2conf/del', '配置删除', '1', '1', '', '5', '3', '5');
INSERT INTO `tpcms_auth_rule` VALUES ('15', 'tp2conf/add', '配置添加', '1', '1', '', '5', '3', '50');
INSERT INTO `tpcms_auth_rule` VALUES ('13', 'tp2link/edit', '链接修改', '1', '1', '', '4', '3', '50');
INSERT INTO `tpcms_auth_rule` VALUES ('14', 'tp2conf/edit', '配置编辑', '1', '1', '', '5', '3', '50');
INSERT INTO `tpcms_auth_rule` VALUES ('16', 'tp2admin', '管理员', '1', '1', '', '0', '1', '50');
INSERT INTO `tpcms_auth_rule` VALUES ('17', 'tp2admin/lists', '管理员列表', '1', '1', '', '16', '2', '50');
INSERT INTO `tpcms_auth_rule` VALUES ('18', 'tp2admin/edit', '管理员修改', '1', '1', '', '17', '3', '50');
INSERT INTO `tpcms_auth_rule` VALUES ('19', 'tp2admin/add', '管理员添加', '1', '1', '', '17', '3', '50');
INSERT INTO `tpcms_auth_rule` VALUES ('20', 'tp2admin/del', '管理员删除', '1', '1', '', '17', '3', '50');
INSERT INTO `tpcms_auth_rule` VALUES ('21', 'tp2link/del', '链接删除', '1', '1', '', '4', '3', '50');

-- ----------------------------
-- Table structure for tpcms_cate
-- ----------------------------
DROP TABLE IF EXISTS `tpcms_cate`;
CREATE TABLE `tpcms_cate` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '栏目id',
  `catename` varchar(255) DEFAULT NULL COMMENT '栏目名称',
  `enname` varchar(255) DEFAULT NULL,
  `thumb` varchar(255) DEFAULT NULL,
  `type` decimal(1,0) DEFAULT '1' COMMENT '栏目类型:1列表栏目,2封面栏目',
  `pid` int(11) DEFAULT '0' COMMENT '上级栏目id',
  `level` int(10) DEFAULT NULL,
  `sort` int(100) DEFAULT '50',
  `keywords` varchar(255) DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `content` text,
  `rec_index` int(1) DEFAULT '0',
  `rec_bottom` int(1) DEFAULT '0',
  `link` varchar(255) DEFAULT NULL,
  `sjcontent` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tpcms_cate
-- ----------------------------
INSERT INTO `tpcms_cate` VALUES ('3', '营销型网站', 'SCHOOL PROFILE', 'static/admin/cateimg/20181127\\1b75deaba1ff17f51bf863aa3f8c143d.jpg', '2', '0', '0', '1', '', '', '', '1', '0', '', '');
INSERT INTO `tpcms_cate` VALUES ('5', '整站优化', '', null, '2', '0', '0', '3', '', '', '', '1', '0', '', '');
INSERT INTO `tpcms_cate` VALUES ('43', '软装案例1', '', null, '3', '0', '0', '50', null, null, '<p>测试测试啊</p>', '0', '0', null, null);
INSERT INTO `tpcms_cate` VALUES ('7', '手机网站', 'SCHOOL NEWS', 'static/admin/cateimg/20181127\\d6e665bf2c39f3e7c66bb7cb54c6aaae.jpg', '2', '0', '0', '2', '', '', '', '1', '0', '', '');
INSERT INTO `tpcms_cate` VALUES ('39', 'VIP客户', '', null, '1', '0', '0', '50', '', '', '', '0', '0', '', null);
INSERT INTO `tpcms_cate` VALUES ('40', '常见问题', '', null, '1', '0', '0', '50', '', '', '', '0', '0', '', null);
INSERT INTO `tpcms_cate` VALUES ('41', '营销网站常见问题', '', null, '1', '40', '1', '50', '', '', '', '0', '0', '', null);
INSERT INTO `tpcms_cate` VALUES ('42', '软装案例', '', null, '3', '0', '0', '50', '', '', '', '0', '0', '', '');

-- ----------------------------
-- Table structure for tpcms_conf
-- ----------------------------
DROP TABLE IF EXISTS `tpcms_conf`;
CREATE TABLE `tpcms_conf` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '配置项id',
  `cnname` varchar(255) DEFAULT '' COMMENT '配置项中文名称',
  `enname` varchar(255) DEFAULT '' COMMENT '配置项英文名称',
  `type` int(1) DEFAULT NULL COMMENT '配置类型:1单行文本,2多行文本,3单选按钮,4复选框,5下拉菜单',
  `value` varchar(255) DEFAULT NULL COMMENT '配置值',
  `values` varchar(255) DEFAULT NULL COMMENT '配置可选值',
  `sort` int(10) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tpcms_conf
-- ----------------------------
INSERT INTO `tpcms_conf` VALUES ('2', '其他', 'keywordsa', '4', '', '是', '32');
INSERT INTO `tpcms_conf` VALUES ('3', '站点描述', 'desc', '2', '首页描述', '飞飞飞发发而', '3');
INSERT INTO `tpcms_conf` VALUES ('4', '站点关键字', 'keywords', '1', '首页关键字', '自行车', '2');
INSERT INTO `tpcms_conf` VALUES ('5', '站点名称', 'sitename', '1', '首页站点名称	', 'thinkphp5.0我们一起加油', '1');
INSERT INTO `tpcms_conf` VALUES ('6', '是否关闭网站', 'close', '3', '否', '是,否', '4');
INSERT INTO `tpcms_conf` VALUES ('7', '启用验证码', 'code', '4', '', '是', '5');
INSERT INTO `tpcms_conf` VALUES ('8', '多久自动清空缓存', 'cache', '5', '2小时', '1小时,2小时,3小时', '6');
INSERT INTO `tpcms_conf` VALUES ('9', '联系QQ号', 'QQ', '1', '11111111', 'QQ', '1');
INSERT INTO `tpcms_conf` VALUES ('15', '邮箱地址', 'youxian', '1', 'zhuoguang@126.com', '', '1');
INSERT INTO `tpcms_conf` VALUES ('14', '公司地址', 'gongsi', '1', '重庆市沙坪坝东原ARC中央广场1幢3-8', '', '1');
INSERT INTO `tpcms_conf` VALUES ('13', '电话', 'dianhua', '1', '111111', '', '1');
INSERT INTO `tpcms_conf` VALUES ('16', '管理员名称', '小伟', '1', '卓光科技啊', '发布文章的人名', '1');

-- ----------------------------
-- Table structure for tpcms_form
-- ----------------------------
DROP TABLE IF EXISTS `tpcms_form`;
CREATE TABLE `tpcms_form` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `xinmin` varchar(100) DEFAULT NULL,
  `shouji` varchar(100) DEFAULT NULL,
  `qq` varchar(100) DEFAULT NULL,
  `content` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tpcms_form
-- ----------------------------
INSERT INTO `tpcms_form` VALUES ('2', 'feaf', 'eaf', '', '');
INSERT INTO `tpcms_form` VALUES ('3', 'fea', 'ef', null, null);
INSERT INTO `tpcms_form` VALUES ('4', 'eaf', 'aef', null, null);
INSERT INTO `tpcms_form` VALUES ('5', '首页:eaf', '首页:aef', null, null);
INSERT INTO `tpcms_form` VALUES ('6', '首页:2', '首页:2', null, null);
INSERT INTO `tpcms_form` VALUES ('7', 'eaf', 'eaf', null, 'fea');
INSERT INTO `tpcms_form` VALUES ('8', 'aef', 'eaf', null, 'aef');

-- ----------------------------
-- Table structure for tpcms_link
-- ----------------------------
DROP TABLE IF EXISTS `tpcms_link`;
CREATE TABLE `tpcms_link` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `sort` varchar(10) DEFAULT '11',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tpcms_link
-- ----------------------------
INSERT INTO `tpcms_link` VALUES ('7', 'PVC外墙挂板', 'PVC外墙挂板', 'http://www.sz-xinzhongyang.com/', '11');
INSERT INTO `tpcms_link` VALUES ('2', '大型挤出型材', '大型挤出型材', 'http://www.sqsjdg.cn/', '1');

-- ----------------------------
-- Table structure for tpcms_tag1
-- ----------------------------
DROP TABLE IF EXISTS `tpcms_tag1`;
CREATE TABLE `tpcms_tag1` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fenge` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tpcms_tag1
-- ----------------------------
INSERT INTO `tpcms_tag1` VALUES ('1', '欧式');
INSERT INTO `tpcms_tag1` VALUES ('2', '法式');
INSERT INTO `tpcms_tag1` VALUES ('3', '现代轻奢');
INSERT INTO `tpcms_tag1` VALUES ('4', '现代简约');
INSERT INTO `tpcms_tag1` VALUES ('5', '现代美式');
INSERT INTO `tpcms_tag1` VALUES ('6', '现代中式');

-- ----------------------------
-- Table structure for tpcms_tag2
-- ----------------------------
DROP TABLE IF EXISTS `tpcms_tag2`;
CREATE TABLE `tpcms_tag2` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `leixin` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tpcms_tag2
-- ----------------------------
INSERT INTO `tpcms_tag2` VALUES ('1', '别墅');
INSERT INTO `tpcms_tag2` VALUES ('2', '精装房');
INSERT INTO `tpcms_tag2` VALUES ('3', '商业空间');

-- ----------------------------
-- Table structure for tpcms_video
-- ----------------------------
DROP TABLE IF EXISTS `tpcms_video`;
CREATE TABLE `tpcms_video` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `xiandui` varchar(255) DEFAULT NULL,
  `thumb` varchar(255) DEFAULT NULL,
  `juedui` varchar(255) DEFAULT NULL,
  `cateid` int(10) DEFAULT NULL,
  `time` varchar(50) DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tpcms_video
-- ----------------------------
INSERT INTO `tpcms_video` VALUES ('1', '教学视频', '', 'static/admin/articleimg/20181126/807f1c91d1b74fee3cb04c5a5a10137c.jpg', '//14907797.s21v.faiusr.com/58/ABUIABA6GAAghYmO3QUo8qb9wwI.mp4', '16', '1543227477', 'feafaef');
INSERT INTO `tpcms_video` VALUES ('2', ' 教学视频', 'aef', 'static/admin/articleimg/20181126/16db47d24b4205a03b7f3b08e7eeb0f7.jpg', '//14907797.s21v.faiusr.com/58/ABUIABA6GAAghYmO3QUo8qb9wwI.mp4', '16', '1543227481', null);
INSERT INTO `tpcms_video` VALUES ('3', '教学视频', 'aef', 'static/admin/articleimg/20181126/1109982ef663820dd297f322ae13d25a.jpg', '//14907797.s21v.faiusr.com/58/ABUIABA6GAAghYmO3QUo8qb9wwI.mp4', '16', '1543227487', null);
INSERT INTO `tpcms_video` VALUES ('4', '教学视频', 'aef', 'static/admin/articleimg/20181126/b754c218fa8319813d507cf783c9bbf8.jpg', '//14907797.s21v.faiusr.com/58/ABUIABA6GAAghYmO3QUo8qb9wwI.mp4', '16', '1543227492', null);
INSERT INTO `tpcms_video` VALUES ('5', ' 教学视频', '', 'static/admin/articleimg/20181126/2bafda60437a2732236669ccc987b221.jpg', '//14907797.s21v.faiusr.com/58/ABUIABA6GAAgu6GO3QUomPvmJQ.mp4', '16', '1543227496', null);
INSERT INTO `tpcms_video` VALUES ('9', ' 教学视频', '', 'static/admin/articleimg/20181126/7ea4dc5fad620ddf54fc15376e200a40.jpg', '//14907797.s21v.faiusr.com/58/ABUIABA6GAAgu6GO3QUomPvmJQ.mp4', '16', '1543227500', null);
INSERT INTO `tpcms_video` VALUES ('7', ' 教学视频', '', 'static/admin/articleimg/20181126/d5485b4ae62c245eb218053afd70cf15.jpg', '//14907797.s21v.faiusr.com/58/ABUIABA6GAAgu6GO3QUomPvmJQ.mp4', '16', '1543227506', null);
INSERT INTO `tpcms_video` VALUES ('10', ' 教学视频', '', 'static/admin/articleimg/20181126/72f9381da2d1175b2f721584c2338a7b.jpg', '//14907797.s21v.faiusr.com/58/ABUIABA6GAAgu6GO3QUomPvmJQ.mp4', '16', '1543227509', null);
