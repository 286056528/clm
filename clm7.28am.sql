/*
SQLyog Ultimate v11.24 (32 bit)
MySQL - 5.5.24-log : Database - clm
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`clm` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `clm`;

/*Table structure for table `address` */

DROP TABLE IF EXISTS `address`;

CREATE TABLE `address` (
  `id` int(6) NOT NULL AUTO_INCREMENT COMMENT '每个地址对应的id',
  `uid` int(6) NOT NULL COMMENT '用户id',
  `name` varchar(20) NOT NULL COMMENT '该地址接收人名字',
  `address` varchar(50) NOT NULL COMMENT '详细地址',
  `Rphone` int(11) NOT NULL COMMENT '该地址接收人电话',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `address` */

insert  into `address`(`id`,`uid`,`name`,`address`,`Rphone`) values (1,1,'','长江师范学院北15',0),(2,2,'','长江师范学院北14',0),(3,3,'','长江师范学院北15',0),(4,4,'','长江师范学院南10',0),(5,1,'','聚贤大道08',0);

/*Table structure for table `buesiness` */

DROP TABLE IF EXISTS `buesiness`;

CREATE TABLE `buesiness` (
  `id` int(6) NOT NULL AUTO_INCREMENT COMMENT '商家id',
  `name` varchar(20) NOT NULL COMMENT '商家名称',
  `phone` varchar(11) NOT NULL COMMENT '商家电话',
  `password` varchar(32) NOT NULL COMMENT '商家登录密码',
  `status` int(2) NOT NULL DEFAULT '2' COMMENT '商家状态1：营业。2：休息',
  `photo` varchar(20) NOT NULL DEFAULT 'images/resLogo.jpeg' COMMENT '商家头像',
  `address` varchar(50) NOT NULL COMMENT '商家地址',
  `comment_num` int(8) NOT NULL DEFAULT '0' COMMENT '商家所有评论数',
  `sale` int(10) NOT NULL DEFAULT '0' COMMENT '商家商品月售数',
  `start_money` decimal(3,0) NOT NULL DEFAULT '0' COMMENT '商家起送价',
  `delivery_cost` decimal(3,0) NOT NULL DEFAULT '0' COMMENT '商家配送费',
  `comment_level` int(1) NOT NULL DEFAULT '0' COMMENT '商家星级评价',
  `work_time` varchar(20) NOT NULL DEFAULT '8:00-22:00' COMMENT '商家营业时间',
  `kind` varchar(20) NOT NULL DEFAULT '1' COMMENT '商家类型',
  `announcement` varchar(256) NOT NULL DEFAULT '无' COMMENT '商家公告',
  PRIMARY KEY (`id`,`name`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

/*Data for the table `buesiness` */

insert  into `buesiness`(`id`,`name`,`phone`,`password`,`status`,`photo`,`address`,`comment_num`,`sale`,`start_money`,`delivery_cost`,`comment_level`,`work_time`,`kind`,`announcement`) values (1,'乡村基','13594708322','1111111',2,'images/resLogo.jpeg','涪陵聚龙大道01',0,0,'0','0',0,'8:00-22:00','1','无'),(2,'李海粥王','13594708322','1111111',2,'images/resLogo.jpeg','涪陵聚龙大道02',0,0,'0','0',0,'8:00-22:00','1','无'),(3,'有必客披萨','13594708322','1111111',2,'images/resLogo.jpeg','涪陵聚龙大道03',0,0,'0','0',0,'8:00-22:00','1','无'),(4,'川北凉粉','13594708322','1111111',2,'images/resLogo.jpeg','涪陵聚龙大道04',0,0,'0','0',0,'8:00-22:00','1','无'),(5,'果多汇','13594708322','1111111',2,'images/resLogo.jpeg','涪陵聚龙大道05',0,0,'0','0',0,'8:00-22:00','1','无'),(6,'港式叉烧饭','13594782302','1111111',2,'images/resLogo.jpeg','涪陵聚龙大道06',0,0,'0','0',0,'8:00-22:00','1','无'),(7,'好友来','13594708322','1111111',2,'images/resLogo.jpeg','涪陵聚龙大道07',0,0,'0','0',0,'8:00-22:00','1','无'),(8,'农夫餐馆','13594708322','1111111',2,'images/resLogo.jpeg','涪陵聚龙大道08',0,0,'0','0',0,'8:00-22:00','1','无');

/*Table structure for table `comment` */

DROP TABLE IF EXISTS `comment`;

CREATE TABLE `comment` (
  `id` int(6) NOT NULL AUTO_INCREMENT COMMENT '评论id',
  `uid` int(6) NOT NULL COMMENT '用户id',
  `bid` int(6) NOT NULL COMMENT '商家id',
  `fid` int(6) NOT NULL COMMENT '商品id',
  `name` varchar(20) NOT NULL COMMENT '商家名称',
  `comment` varchar(100) NOT NULL COMMENT '评论内容',
  `comment_time` varchar(25) DEFAULT NULL COMMENT '评论时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `comment` */

insert  into `comment`(`id`,`uid`,`bid`,`fid`,`name`,`comment`,`comment_time`) values (1,1,1,1,'','真的好吃','2017-07-25 15:20:30'),(2,2,1,2,'','真的很好吃','2017-07-25 15:25:30'),(3,3,2,5,'','好吃又便宜，吃了过六级。','2017-07-25 15:27:30');

/*Table structure for table `food` */

DROP TABLE IF EXISTS `food`;

CREATE TABLE `food` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '商品id',
  `bid` int(6) NOT NULL COMMENT '商家id',
  `name` varchar(20) NOT NULL COMMENT '商品名称',
  `price` decimal(10,0) NOT NULL COMMENT '商品单价',
  `state` varchar(5) NOT NULL DEFAULT '断货' COMMENT '商品状态：有货，断货',
  `picture` varchar(20) DEFAULT NULL COMMENT '商品图案',
  `details` varchar(50) DEFAULT NULL COMMENT '商品详情描述',
  `comment_num` int(10) NOT NULL COMMENT '商品评论总数',
  `food_level` int(1) DEFAULT '0' COMMENT '商品星级评价',
  `sale_num` int(6) DEFAULT NULL COMMENT '商品销售总数',
  `kinds` varchar(10) NOT NULL COMMENT '商品类别',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `food` */

insert  into `food`(`id`,`bid`,`name`,`price`,`state`,`picture`,`details`,`comment_num`,`food_level`,`sale_num`,`kinds`) values (1,1,'卤肉饭','16','断货','shop/1/images/1.jpg','秘制卤料，十年经典。',0,4,NULL,''),(2,2,'皮蛋瘦肉粥','12','断货','shop/2/images/1.jpg','永川皮蛋与上等精瘦肉的奇妙碰撞。',0,5,NULL,''),(3,3,'13寸经典披萨','23','断货','shop/3/images/1.jpg','经典披萨',0,2,NULL,''),(4,3,'24寸黑椒牛肉披萨','68','断货','shop/3/images/2.jpg','精选新西兰上等牛肉',0,4,NULL,'');

/*Table structure for table `order` */

DROP TABLE IF EXISTS `order`;

CREATE TABLE `order` (
  `id` int(6) NOT NULL AUTO_INCREMENT COMMENT '订单id',
  `uid` int(6) NOT NULL COMMENT '用户id',
  `time` varchar(20) NOT NULL COMMENT '下单时间',
  `Bname` varchar(20) DEFAULT NULL COMMENT '商家名称',
  `order_status` int(1) DEFAULT NULL COMMENT '订单状态',
  `fid` int(6) DEFAULT NULL COMMENT '商品id',
  `name` varchar(256) DEFAULT NULL COMMENT '商品名称',
  `num` int(6) DEFAULT NULL COMMENT '商品数量',
  `price` decimal(10,0) NOT NULL COMMENT '商品单价',
  `uaddress` varchar(20) NOT NULL COMMENT '用户地址',
  `uphone` int(11) NOT NULL COMMENT '用户电话',
  `usay` varchar(50) DEFAULT NULL COMMENT '用户备注',
  `money` decimal(10,0) NOT NULL COMMENT '所有商品总价',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `order` */

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(6) NOT NULL AUTO_INCREMENT COMMENT '用户id',
  `phone` varchar(11) NOT NULL COMMENT '用户电话号码',
  `password` varchar(32) NOT NULL COMMENT '用户登录密码',
  `name` varchar(20) DEFAULT NULL COMMENT '用户名',
  `photo` varchar(20) DEFAULT NULL COMMENT '用户头像',
  `e-mail` varchar(20) DEFAULT NULL COMMENT '用户邮箱',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `user` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
