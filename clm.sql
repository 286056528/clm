/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50524
Source Host           : localhost:3306
Source Database       : clm

Target Server Type    : MYSQL
Target Server Version : 50524
File Encoding         : 65001

Date: 2017-08-02 16:29:01
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for address
-- ----------------------------
DROP TABLE IF EXISTS `address`;
CREATE TABLE `address` (
  `id` int(6) NOT NULL AUTO_INCREMENT COMMENT '每个地址对应的id',
  `uid` int(6) NOT NULL COMMENT '用户id',
  `name` varchar(20) NOT NULL COMMENT '该地址接收人名字',
  `address` varchar(50) NOT NULL COMMENT '详细地址',
  `Rphone` int(11) NOT NULL COMMENT '该地址接收人电话',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of address
-- ----------------------------
INSERT INTO `address` VALUES ('1', '1', '', '长江师范学院北15', '0');
INSERT INTO `address` VALUES ('2', '2', '', '长江师范学院北14', '0');
INSERT INTO `address` VALUES ('3', '3', '', '长江师范学院北15', '0');
INSERT INTO `address` VALUES ('4', '4', '', '长江师范学院南10', '0');
INSERT INTO `address` VALUES ('5', '1', '', '聚贤大道08', '0');

-- ----------------------------
-- Table structure for buesiness
-- ----------------------------
DROP TABLE IF EXISTS `buesiness`;
CREATE TABLE `buesiness` (
  `id` int(6) NOT NULL AUTO_INCREMENT COMMENT '商家id',
  `name` varchar(20) NOT NULL COMMENT '商家名称',
  `phone` varchar(11) NOT NULL COMMENT '商家电话',
  `password` varchar(32) NOT NULL COMMENT '商家登录密码',
  `status` int(2) NOT NULL DEFAULT '2' COMMENT '商家状态1：营业。2：休息',
  `photo` varchar(20) NOT NULL DEFAULT 'images/resLogo.jpg' COMMENT '商家头像',
  `address` varchar(50) NOT NULL COMMENT '商家地址',
  `comment_num` int(8) NOT NULL DEFAULT '0' COMMENT '商家所有评论数',
  `sale` int(10) NOT NULL DEFAULT '0' COMMENT '商家商品月售数',
  `start_money` decimal(3,0) NOT NULL DEFAULT '0' COMMENT '商家起送价',
  `delivery_cost` decimal(3,0) NOT NULL DEFAULT '0' COMMENT '商家配送费',
  `comment_level` int(10) NOT NULL DEFAULT '0' COMMENT '商家星级评价',
  `work_time` varchar(20) NOT NULL DEFAULT '8:00-22:00' COMMENT '商家营业时间',
  `kind` varchar(20) NOT NULL DEFAULT '1' COMMENT '商家类型',
  `announcement` varchar(256) NOT NULL DEFAULT '无' COMMENT '商家公告',
  `kindfood` varchar(256) NOT NULL,
  PRIMARY KEY (`id`,`name`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of buesiness
-- ----------------------------
INSERT INTO `buesiness` VALUES ('1', '乡村基', '13594708322', '1111111', '2', 'images/resLogo.jpg', '涪陵聚龙大道01', '7', '17', '0', '0', '27', '8:00-22:00', '1|2', '无', '热销|盖饭|炒饭|面食|油炸');
INSERT INTO `buesiness` VALUES ('2', '李海粥王', '13594708322', '1111111', '2', 'images/resLogo.jpg', '涪陵聚龙大道02', '0', '0', '0', '0', '0', '8:00-22:00', '1|3', '无', '');
INSERT INTO `buesiness` VALUES ('3', '有必客披萨', '13594708322', '1111111', '2', 'images/resLogo.jpg', '涪陵聚龙大道03', '0', '0', '0', '0', '0', '8:00-22:00', '1|2|3', '无', '');
INSERT INTO `buesiness` VALUES ('4', '川北凉粉', '13594708322', '1111111', '2', 'images/resLogo.jpg', '涪陵聚龙大道04', '0', '0', '0', '0', '0', '8:00-22:00', '1', '无', '');
INSERT INTO `buesiness` VALUES ('5', '果多汇', '13594708322', '1111111', '2', 'images/resLogo.jpg', '涪陵聚龙大道05', '0', '0', '0', '0', '0', '8:00-22:00', '1', '无', '');
INSERT INTO `buesiness` VALUES ('6', '港式叉烧饭', '13594782302', '1111111', '2', 'images/resLogo.jpg', '涪陵聚龙大道06', '0', '0', '0', '0', '0', '8:00-22:00', '1', '无', '');
INSERT INTO `buesiness` VALUES ('7', '好友来', '13594708322', '1111111', '2', 'images/resLogo.jpg', '涪陵聚龙大道07', '0', '0', '0', '0', '0', '8:00-22:00', '1', '无', '');
INSERT INTO `buesiness` VALUES ('8', '农夫餐馆', '13594708322', '1111111', '2', 'images/resLogo.jpg', '涪陵聚龙大道08', '0', '0', '0', '0', '0', '8:00-22:00', '1', '无', '');

-- ----------------------------
-- Table structure for comment
-- ----------------------------
DROP TABLE IF EXISTS `comment`;
CREATE TABLE `comment` (
  `id` int(6) NOT NULL AUTO_INCREMENT COMMENT '评论id',
  `uid` int(6) NOT NULL COMMENT '用户id',
  `bid` int(6) NOT NULL COMMENT '商家id',
  `fid` int(6) NOT NULL COMMENT '商品id',
  `food_name` varchar(20) NOT NULL COMMENT '商家名称',
  `comment` varchar(100) NOT NULL COMMENT '评论内容',
  `comment_time` varchar(25) NOT NULL COMMENT '评论时间',
  `rating_count` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of comment
-- ----------------------------
INSERT INTO `comment` VALUES ('14', '1', '1', '1', '卤肉饭', 'dd', '2017-07-31 11:01:41', '5');
INSERT INTO `comment` VALUES ('15', '1', '1', '12', '扬州炒饭', 'dd', '2017-07-31 11:01:41', '5');
INSERT INTO `comment` VALUES ('16', '1', '1', '13', '小面', 'dd', '2017-07-31 11:01:41', '5');
INSERT INTO `comment` VALUES ('17', '1', '1', '11', '蛋炒饭', '', '2017-07-31 11:02:11', '3');
INSERT INTO `comment` VALUES ('18', '1', '1', '1', '卤肉饭', '', '2017-07-31 11:02:11', '3');
INSERT INTO `comment` VALUES ('19', '2', '1', '12', '扬州炒饭', '', '2017-07-31 11:16:11', '5');
INSERT INTO `comment` VALUES ('20', '2', '1', '11', '蛋炒饭', '', '2017-07-31 11:16:36', '3');
INSERT INTO `comment` VALUES ('21', '3', '1', '12', '扬州炒饭', '', '2017-07-31 14:42:34', '4');
INSERT INTO `comment` VALUES ('22', '3', '1', '11', '蛋炒饭', '', '2017-07-31 14:43:29', '3');
INSERT INTO `comment` VALUES ('23', '3', '1', '12', '扬州炒饭', '', '2017-07-31 14:47:22', '4');
INSERT INTO `comment` VALUES ('24', '3', '1', '13', '小面', '', '2017-07-31 14:47:22', '4');

-- ----------------------------
-- Table structure for food
-- ----------------------------
DROP TABLE IF EXISTS `food`;
CREATE TABLE `food` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '商品id',
  `bid` int(6) NOT NULL COMMENT '商家id',
  `name` varchar(20) NOT NULL COMMENT '商品名称',
  `price` decimal(10,0) NOT NULL COMMENT '商品单价',
  `state` int(1) NOT NULL DEFAULT '1' COMMENT '商品状态：有货，断货',
  `picture` varchar(20) DEFAULT 'images/shop.jpg' COMMENT '商品图案',
  `details` varchar(50) DEFAULT NULL COMMENT '商品详情描述',
  `comment_num` int(10) NOT NULL DEFAULT '0' COMMENT '商品评论总数',
  `food_level` int(10) DEFAULT '0' COMMENT '商品星级评价',
  `sale_num` int(6) DEFAULT '0' COMMENT '商品销售总数',
  `kinds` varchar(10) NOT NULL COMMENT '商品类别',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of food
-- ----------------------------
INSERT INTO `food` VALUES ('1', '1', '卤肉饭', '16', '0', 'images/shop.jpg', '秘制卤料，十年经典。', '2', '8', '6', '盖饭');
INSERT INTO `food` VALUES ('2', '2', '皮蛋瘦肉粥', '12', '0', 'images/shop.jpg', '永川皮蛋与上等精瘦肉的奇妙碰撞。', '0', '0', '0', '粥');
INSERT INTO `food` VALUES ('3', '3', '13寸经典披萨', '23', '0', 'images/shop.jpg', '经典披萨', '0', '0', '0', '披萨');
INSERT INTO `food` VALUES ('4', '3', '24寸黑椒牛肉披萨', '68', '0', 'images/shop.jpg', '精选新西兰上等牛肉', '0', '0', '0', '牛排');
INSERT INTO `food` VALUES ('5', '1', '盐煎肉', '10', '1', 'images/shop.jpg', null, '0', '0', '0', '盖饭');
INSERT INTO `food` VALUES ('6', '1', '麻辣牛肉', '12', '1', 'images/shop.jpg', null, '0', '0', '0', '盖饭');
INSERT INTO `food` VALUES ('7', '1', '鸡翅', '5', '1', 'images/shop.jpg', null, '0', '0', '0', '油炸');
INSERT INTO `food` VALUES ('8', '1', '鸡腿', '6', '1', 'images/shop.jpg', null, '0', '0', '0', '油炸');
INSERT INTO `food` VALUES ('9', '1', '金针菇肉丝', '10', '1', 'images/shop.jpg', null, '0', '0', '0', '盖饭');
INSERT INTO `food` VALUES ('10', '1', '青椒肉丝', '10', '1', 'images/shop.jpg', null, '0', '0', '0', '盖饭');
INSERT INTO `food` VALUES ('11', '1', '蛋炒饭', '6', '1', 'images/shop.jpg', null, '3', '9', '4', '炒饭');
INSERT INTO `food` VALUES ('12', '1', '扬州炒饭', '9', '1', 'images/shop.jpg', null, '4', '18', '5', '炒饭');
INSERT INTO `food` VALUES ('13', '1', '小面', '5', '1', 'images/shop.jpg', null, '2', '9', '2', '面食');
INSERT INTO `food` VALUES ('14', '1', '炸酱面', '8', '1', 'images/shop.jpg', null, '0', '0', '0', '面食');

-- ----------------------------
-- Table structure for orderdata
-- ----------------------------
DROP TABLE IF EXISTS `orderdata`;
CREATE TABLE `orderdata` (
  `id` int(6) NOT NULL AUTO_INCREMENT COMMENT '订单id',
  `uid` int(6) NOT NULL COMMENT '用户id',
  `bid` int(6) NOT NULL,
  `fid` varchar(50) NOT NULL,
  `b_name` varchar(20) NOT NULL,
  `b_phone` varchar(22) NOT NULL,
  `food_name` varchar(256) NOT NULL,
  `food_price` varchar(50) NOT NULL,
  `food_num` varchar(50) NOT NULL,
  `total_prices` decimal(10,0) NOT NULL,
  `order_status` int(1) NOT NULL,
  `order_time` varchar(50) NOT NULL,
  `order_rating_count` int(1) DEFAULT '0',
  `u_address` varchar(20) DEFAULT NULL,
  `u_phone` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of orderdata
-- ----------------------------
INSERT INTO `orderdata` VALUES ('9', '1', '1', '1|12|13|', '乡村基', '13594708322', '卤肉饭|扬州炒饭|小面|', '16|9|5|', '1|1|1|', '30', '0', '2017-07-31 11:00:51', '5', null, null);
INSERT INTO `orderdata` VALUES ('10', '1', '1', '11|1|', '乡村基', '13594708322', '蛋炒饭|卤肉饭|', '6|16|', '1|1|', '22', '0', '2017-07-31 11:02:06', '3', null, null);
INSERT INTO `orderdata` VALUES ('12', '2', '1', '12|', '乡村基', '13594708322', '扬州炒饭|', '9|', '1|', '9', '0', '2017-07-31 11:15:56', '5', null, null);
INSERT INTO `orderdata` VALUES ('13', '2', '1', '11|', '乡村基', '13594708322', '蛋炒饭|', '6|', '1|', '6', '0', '2017-07-31 11:16:31', '3', null, null);
INSERT INTO `orderdata` VALUES ('16', '3', '1', '12|', '乡村基', '13594708322', '扬州炒饭|', '9|', '1|', '9', '0', '2017-07-31 14:42:31', '4', null, null);
INSERT INTO `orderdata` VALUES ('17', '3', '1', '11|', '乡村基', '13594708322', '蛋炒饭|', '6|', '1|', '6', '0', '2017-07-31 14:43:24', '3', null, null);
INSERT INTO `orderdata` VALUES ('19', '3', '1', '12|13|', '乡村基', '13594708322', '扬州炒饭|小面|', '9|5|', '1|1|', '14', '0', '2017-07-31 14:47:17', '4', null, null);

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(6) NOT NULL AUTO_INCREMENT COMMENT '用户id',
  `phone` varchar(11) NOT NULL COMMENT '用户电话号码',
  `password` varchar(32) NOT NULL COMMENT '用户登录密码',
  `name` varchar(20) DEFAULT '匿名' COMMENT '用户名',
  `photo` varchar(20) DEFAULT NULL COMMENT '用户头像',
  `e-mail` varchar(20) DEFAULT NULL COMMENT '用户邮箱',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', '13594708322', '96e79218965eb72c92a549dd5a330112', '匿名', null, null);
INSERT INTO `user` VALUES ('2', '15025643914', 'e3ceb5881a0a1fdaad01296d7554868d', '匿名', null, null);
INSERT INTO `user` VALUES ('3', '15683585210', 'e10adc3949ba59abbe56e057f20f883e', '匿名', null, null);
INSERT INTO `user` VALUES ('4', '13983591420', 'e10adc3949ba59abbe56e057f20f883e', '匿名', null, null);
