<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width">
<title>吃了么_首页</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width">
<link type="text/css" rel="stylesheet" href="css/main.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap-theme.css">
<link rel="shortcut icon" href="favicon.ico">
<script src="js/modernizr.js"></script>

<style type="text/css">
#paging-wrapper {
	width: 100%;
	margin-top: 32px;
	text-align: center;
}
#paging-wrapper li {
	display: inline-block;
	width: 30px;
	height: 30px;
	margin: 5px;
	text-align: center;
	line-height: 30px;
	background-color: rgba(0, 0, 0, .1);
	border: 1px solid rgba(0, 0, 0, .3);
	cursor: pointer;
}
#paging-wrapper li:hover {
	color: white;
	background-color: rgba(0, 0, 0, .3);
}
#paging-wrapper li:nth-child(1) {
	width: 50px;
}
#paging-wrapper li:nth-child(2) {
	width: 66px;
}
#paging-wrapper li:nth-child(3) {
	color: white;
	background-color: rgba(0, 0, 0, .3);
}
/*------搜索框下方分类部分 classify------*/
.classifyWrapper {
	padding: 10px 0 0 10px;
	background: #fff;
	border: 1px solid #e6e6e6;
	font-size: 15px;
}
.classifyWrapper a {
	color: #666;
	width: 40px;
	height: 36px;
	line-height: 36px;
	padding: 5px 20px;
}
.classify span {
	color: #999;
}
.classify a:nth-child(2) {
	background: #f6f6f6;
}
.classify a:hover, .classify a:focus {
	background: #f6f6f6;
}
.classify a:focus {
	color: #fff;
}
/*-------主体部分 contentBox------*/
.contentBox {
	margin-top: 20px;
	background: #fff;
	border: 1px solid #e6e6e6;
	font-size: 0;
}
.contentBox a {
	border-bottom: 1px #f5f5f5 solid;
	width: 25%;
	display: inline-block;
	font-size: 16px;
}
.contentBox a:hover {
	background: #eee;
	filter: alpha(Opacity = 80); /*背景透明*/
	-moz-opacity: 0.8;
	opacity: 0.8;
}
.restaurantLogo {
	float: left;
	position: relative;
	display: inline-block;
	padding: 25px;
}
.restaurantLogo span {
	position: absolute;
	left: 35px;
	bottom: 5px;
	font-size: 12px;
	padding-top: 10px;
}
.resIntroduce {
	padding: 29px;
}
.resIntroduce h3 {
	color: #000;
	font-size: 1em;
}
.resIntroduce h3:hover {
	color: #0089dc;
}
.resIntroduce .sale {
	padding-left: 10px;
}
.resIntroduce .sale, .resIntroduce p {
	color: #999;
	font-size: 14px;
}
/*评级五角星*/
.starrating {
	position: relative;
	display: inline-block;
	line-height: 1em;
	color: #ccc;
	font-family: eleme;
	speak: none;
	font-style: normal;
	font-weight: 400;
	-webkit-font-feature-settings: normal;
	font-feature-settings: normal;
	font-variant: normal;
	text-transform: none;
	line-height: 1;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
}
.starrating  b {
	float: left;
	width: 14px;
	height: 11px;
	background: url(images/starss.png) 0 -11px no-repeat;
}
.starrating  .starnum {
	background: url(images/starss.png) 0 0px no-repeat;
}
.starrating span {
	position: absolute;
	top: 0;
	left: 0;
	overflow: hidden;
	color: #ffc30c;
	white-space: nowrap;
}
.main {
	height: 800px;
	width: 1300px;
	min-width: 1300px;
	margin: 40px auto;
	border: 1px solid #C0C0C0;
}
.main .ul {
	width: 150px;
	height: 800px;
	background-color: #0099CC;
}
.main .ul .li1 {
	width: 150px;
	margin: 0 auto;
}
.main .ul .li {
	display: block;
	height: 50px;
	width: 150px;
	color: white;
	text-align: center;
	line-height: 50px;
	background-color: #0066FF;
}
.main .ul .li1 a {
	display: block;
	height: 50px;
	width: 150px;
	color: white;
	text-align: center;
	line-height: 50px;
	cursor: pointer;
}
.main .ul .li1 a:hover {
	background-color: white;
	color: black;
}
.main .ul .li1 .shopimg {
	height: 80px;
	width: 80px;
	border-radius: 50%;
	margin-left: 35px;
}
.main .mainLeft {
	height: 800px;
	width: 150px;
	float: left;
}
.main .mainRight {
	height: 800px;
	width: 1148px;
	float: right;
}
.main .mainRight .mainRightTop {
	height: 50px;
	width: 1148px;
	background-color: #E8E8E8;
}
.main .mainRight .mainRightMiddle {
	height: 750px;
	width: 1148px;
	display: none;
}
.main .mainRight .mainRightMiddle .ShopDish {
	height: 150px;
	width: 1148px;
	margin-bottom: 10px;
	display: inline-block;
	background-color: white;
	border-top: 1px solid #D0D0D0;
	border-bottom: 1px solid #D0D0D0;
}
.main .mainRight .mainRightMiddle .ShopDish span {
	height: 20px;
	width: 20px;
	display: block;
}
.main .mainRight .mainRightMiddle .ShopDish span:before {
	content: "\00a5";
	font-size: 12px;
	marign-right: 5px;
}
.main .mainRight .mainRightMiddle .ShopDish .ha {
	height: 120px;
	width: 120px;
	display: inline-block;
}
.main .mainRight .mainRightMiddle .ShopDish .img1 {
	height: 120px;
	width: 120px;
	margin-top: -50px;
	margin-left: 20px;
}
.main .mainRight .mainRightMiddle .ShopDish .title {
	height: 50px;
	width: 200px;
	margin-left: 60px;
	display: inline-block;
}
.main .mainRight .mainRightMiddle .ShopDish .title h4 {
	margin-top: 30px;
}
.main .mainRight .mainRightMiddle .ShopDish .title p {
	display: inline-block;
	font-size: 12px;
}
.main .mainRight .mainRightMiddle .ShopDish .title .star {
	height: 20px;
	width: 50px;
	display: inline-block;
}
.main .mainRight .mainRightMiddle .ShopDish  button {
	display: inline-block;
	border: 0;
	cursor: pointer;
	width: 90px;
	height: 26px;
	line-height: 26px;
	border-radius: 20px;
	text-align: center;
	margin-left: 30px;
	margin-top: 20px;
	outline: 0;
	color: white;
	background-color: #0089dc;
}
.main .mainRight .mainRightMiddle .ShopDish  .update {
	height: 150px;
	width: 500px;
	float: right;
	margin-right: 5px;
	display: none;
}
.main .mainRight .mainRightMiddle .ShopDish  .update p {
	display: inline-block;
	margin-top: 25px;
	margin-left: 30px;
}
.main .mainRight .mainRightMiddle .ShopDish  .update input {
	height: 30px;
	width: 200px;
	border-radius: 20px;
	display: inline-block;
	margin-top: 25px;
	margin-left: 10px;
	border: 1px solid #909090;
	box-shadow: 2px 2px 1px #D0D0D0 inset;
}
.main .mainRight .mainRightMiddle .ShopDish  .update .but1 {
	margin: 0;
	padding: 0;
}
.shadow-inside {
	border: 1px solid #909090;
	border-radius: 20px;
	box-shadow: 2px 2px 1px #D0D0D0 inset;
}
.main .mainRight .mainRightMiddle1 {
	height: 750px;
	width: 1148px;
	display: none;
}
.main .mainRight .mainRightMiddle1 p {
	display: inline-block;
	font-size: 20px;
	margin-left: 21%;
	margin-top: 80px;
}
.main .mainRight .mainRightMiddle1 input {
	height: 40px;
	width: 400px;
}
.main .mainRight .mainRightMiddle1 select {
	height: 40px;
	width: 400px;
}
.main .mainRight .mainRightMiddle1 .input1 {
	height: 15px;
	width: 15px;
	margin-left: 20px;
}
.main .mainRight .mainRightMiddle1 .p1 {
	display: inline-block;
	font-size: 18px;
	margin-left: 5px;
	margin-top: 0;
}
.main .mainRight .mainRightMiddle1 button {
	display: block;
	border: 0;
	cursor: pointer;
	width: 90px;
	height: 26px;
	line-height: 26px;
	border-radius: 20px;
	text-align: center;
	margin: 100px auto;
	outline: 0;
	color: white;
	background-color: #0089dc;
}
.main .mainRight .mainRightMiddle2 {
	height: 750px;
	width: 1148px;
	display: block;
}
.main .mainRight .mainRightMiddle2 .editor {
	width: 650px;
	margin: 30px auto;
	border-bottom: 0px;
}
.main .mainRight .mainRightMiddle2 .editor table {
	border-collapse: collapse;
	border-spacing: 0;
}
.main .mainRight .mainRightMiddle2 .editor table tr .tha {
	height: 130px;
	width: 150px;
	text-indent: 20px;
}
.main .mainRight .mainRightMiddle2 .editor table tr .thb {
	height: 60px;
	width: 500px;
	font-size: 24px;
	text-indent: 10px;
	border-bottom: 1px solid #C0C0C0;
}
.main .mainRight .mainRightMiddle2 .editor table tr .thb a {
	font-size: 14px;
	float: right;
	margin-right: 30px;
}
.main .mainRight .mainRightMiddle2 .editor table tr .th1 {
	height: 70px;
	width: 150px;
	text-indent: 40px;
	border: 1px solid #C0C0C0;
}
.main .mainRight .mainRightMiddle2 .editor table tr .th2 {
	height: 70px;
	width: 520px;
	font-size: 18px;
	text-indent: 40px;
	border-bottom: 1px solid #C0C0C0;
	border-right: 1px solid #C0C0C0;
}
.main .mainRight .mainRightMiddle2 .editor table tr .tha img {
	border-radius: 50%;
}
.main .mainRight .mainRightMiddle2 .input {
	height: 50px;
	width: 120px;
	margin-top: 30px;
	margin-left: 250px;
	border: 0;
	background-color: #0099FF;
}
.main .mainRight .mainRightMiddle3 {
	height: 750px;
	width: 1148px;
	display: none;
}
.main .mainRight .mainRightMiddle3 .editor {
	width: 650px;
	margin: 60px auto;
}
.main .mainRight .mainRightMiddle3 .editor table {
	border-collapse: collapse;
	border-spacing: 0;
}
.main .mainRight .mainRightMiddle3 .editor table tr .th1 {
	height: 60px;
	width: 150px;
	text-indent: 20px;
	background-color: #E8E8E8;
	border: 1px solid #C0C0C0;
}
.main .mainRight .mainRightMiddle3 .editor table tr .th2 {
	height: 60px;
	width: 500px;
	text-indent: 40px;
	border: 1px solid #C0C0C0;
}
.main .mainRight .mainRightMiddle3 .editor table tr .th2 input {
	height: 60px;
	width: 500px;
	border: 0;
}
.main .mainRight .mainRightMiddle3 .editor a {
	height: 40px;
	width: 120px;
	margin-top: 30px;
	margin-left: 270px;
	border-radius: 5px;
	text-decoration: none;
	text-align: center;
	line-height: 40px;
	color: white;
	border: 0;
	cursor: pointer;
	background-color: #0099FF;
	display: block;
}
.main .mainRight .mainRightMiddle4 {
	height: 750px;
	width: 1148px;
	display: none;
}
.orderMain {
	height: 800px;
	width: 828px;
	margin: 0px auto;
}
.oederMain .orderMainTop {
	height: 50px;
	width: 828px;
	background-color: #E8E8E8;
}
.orderMainTop .order_nav {
	display: inline-block;
	width: 412px;
	height: 49px;
	line-height: 50px;
	font-size: 18px;
	font-weight: 600;
	text-align: center;
	border: 1px solid #1e89e0;
}
.orderMainTop .order_nav:hover {
	cursor: pointer;
	color: white;
	background: #1e89e0;
}
.orderMain .orderMainMiddle {
	min-height: 750px;
	width: 828px;
}
.orderMainMiddle .middle_top {
	width: 100%;
	height: 50px;
	border-bottom: 1px solid #eee;
}
.orderMainMiddle .middle_top span {
	display: inline-block;
	height: 50px;
	line-height: 50px;
	font-size: 14px;
	color: #6d6d6d;
}
.orderMainMiddle .middle_top .content_top {
	width: 420px;
	margin-left: 20px;
}
.orderMainMiddle .middle_top .phone_top {
	width: 130px;
}
.orderMainMiddle .middle_top .payment_top {
	width: 70px;
}
.orderMainMiddle .middle_top .operate_top {
	width: 150px;
	text-align: center;
}
.orderMainMiddle .middle_list {
	width: 100%;
	height: 111px;
}
.orderMainMiddle .middle_list .note_main {
	width: 770px;
	height: 110px;
	margin-left: 20px;
	position: relative;
	border-bottom: 1px dashed #ddd;
}
.middle_list .note_main:hover {
	cursor: pointer;
}
.note_main .note_main .content, .phone, .payment {
	float: left;
	height: 110px;
	margin-right: 5px;
	line-height: 110px;
}
.note_main .content {
	width: 420px;
}
.note_main .content b {
	float: left;
	width: 80px;
	height: 80px;
	margin-top: 15px;
}
.note_main .content .user_note {
	float: left;
	width: 300px;
	height: 80px;
	margin-left: 10px;
	margin-top: 15px;
}
.user_note .user_name {
	width: 300px;
	height: 40px;
	text-indent: 20px;
	font-weight: 700;
	line-height: 40px;
}
.user_note .user_mes {
	width: 300px;
	height: 40px;
	line-height: 40px;
}
.user_note .user_mes .order_time, .order_number {
	display: inline-block;
	font-size: 12px;
}
.user_note .user_mes .order_time {
	width: 120px;
}
.user_note .user_mes .order_number {
	width: 170px;
}
.note_main .phone {
	font-size: 14px;
	width: 150px;
}
.note_main .payment {
	font-size: 18px;
	font-weight: 500;
	width: 70px;
}
.note_main .operate {
	width: 80px;
	height: 30px;
	line-height: 30px;
	text-align: center;
	font-size: 14px;
	position: absolute;
	top: 40px;
	right: 10px;
	border: 1px solid #ddd;
	border-radius: 3px;
}
.note_main .operate:hover {
	border: none;
	background: #1e89e0;
	color: white;
	cursor: pointer;
}
.middle_list .main_list {
	display: none;
	width: 770px;
	position: relative;
	margin-left: 20px;
	border: 1px solid #ddd;
}
.middle_list .main_list .order_main {
	width: 350px;
	min-height: 250px;
	border-right: 1px solid #ddd;
}
.main_list p {
	width: 100%;
	height: 50px;
	line-height: 60px;
	color: #6d6d6d;
	text-indent: 20px;
	font-weight: 600;
	font-size: 15px;
}
.main_list .order_main .real_list {
	width: 310px;
	height: 80px;
	margin: 20px auto;
	line-height: 80px;
	text-align: right;
	font-size: 14px;
	border-top: 1px dashed #ddd;
}
.real_list .real_pay {
	font-size: 24px;
	font-weight: 600;
	color: #1e89e0;
}
.middle_list .main_list .pro_main {
	position: absolute;
	top: 0px;
	right: 0px;
	width: 400px;
}
.pro_main .address_note, .pro_note {
	width: 100%;
	height: 120px;
}
.pro_main .address, .pro {
	width: 100%;
	height: 70px;
	border: 1px dashed #ddd;
}
.onf {
	color: white;
	background: #1e89e0;
}
.starratingg  b{
	float: left;
	width: 14px;
	height: 11px;
	background: url(images/starss.png) 0 -11px no-repeat;
}
.starratingg  .starnum{
	background: url(images/starss.png) 0 0px no-repeat;
}
</style>
<script>
//实现分类显示详情选项
var aa=document.getElementById("details");
function showtext(){
    details.style.display="block";
  }
  
function gai(){
	document.getElementById("update").style.display='block';
	console.log("fghtrj");
}
</script>
</head>
<body>
	<!-- topBar结束 头部菜单 -->
	<div class="topBar clearfix">
		<h1 class="topBarLogo">
			<b></b>吃了么
		</h1>
		<div class="topBarList" id="topBarList">
			<a href="index.php" class="change">首页</a> <a href="order.php">我的订单</a>
			<a href="#">加盟合作</a>
		</div>
		<nav class="topBarNav">
			<a href="#"><i class="fa fa-user-o"></i>服务中心</a> <a href="#">规则中心</a>
			<a href="#"><i class="fa fa-mobile"></i>手机应用</a>
		</nav>
		<div class="topBarNavLogin"></div>
	</div>
	<!-- container 中部内容 -->
	<div class="main">
		<div class="mainLeft">
			<ul class="ul">
				<li class="li li1">吃了么商家</li>
				<li class="li1"><img src="shop/1/images/shop.jpg" class="shopimg"></li>
				<li class="li1" id="li1"><a href="#" id="a1"><img
						src="maneger/sang.png">我的店铺</a></li>
				<li class="li1" id="li2"><a href="#" id="a2"><img
						src="maneger/ding.png">订单管理</a></li>
				<li class="li1" id="li3"><a href="#" id="a3"><img
						src="maneger/cai.png">我的菜品</a></li>
				<li class="li1" id="li4"><a href="#" id="a4"><img
						src="maneger/tian.png">添加菜品</a></li>
			</ul>
		</div>
		<div class="mainRight">
			<div class="mainRightTop"></div>
			<div class="mainRightMiddle">
		      <div class="mainRightMiddless"></div>
		      <ul id="paging-wrapper"></ul>
			</div>
			<div class="mainRightMiddle1">
				<p>请输入要添加的菜品名称：</p>
				<input type="text" class="shadow-inside" s><br>
				<p>请输入要添加的菜品价格：</p>
				<input type="text" class="shadow-inside" s><br>
				<p>请选择要添加的菜品类别：</p>
				<input type="radio" class="input1" name="leibie" />
				<p class="p1">盖饭</p>
				<input type="radio" class="input1" name="leibie" />
				<p class="p1">面食</p>
				<input type="radio" class="input1" name="leibie" />
				<p class="p1">米饭</p>
				<input type="radio" class="input1" name="leibie" />
				<p class="p1">烤鱼</p>
				<input type="radio" class="input1" name="leibie" />
				<p class="p1">炒饭</p>
				<button id="xiugai">确定</button>
			</div>

			<div class="mainRightMiddle2">
				<div class="editor">
					<table>
						<tr>
							<th class="tha"><img alt="" src="shop/1/images/shop.jpg"></th>
							<th class="thb" id="orname">乡村基<a href="#" id="a_xiugai">修改资料</a></th>
						</tr>
						<tr>
							<th class="th1">商家地址：</th>
							<th class="th2" id="orshopaddress">hqy</th>
						</tr>
						<tr>
							<th class="th1">营业时间：</th>
							<th class="th2" id="orshoptime">hqy1</th>
						</tr>
						<tr>
							<th class="th1">配送费：</th>
							<th class="th2" id="orshopprice">hqy2</th>
						</tr>
						<tr>
							<th class="th1">起送价：</th>
							<th class="th2" id="orshopstart">hqy3</th>
						</tr>
						<tr>
							<th class="th1">电话：</th>
							<th class="th2" id="orshopphone">hqy4</th>
						</tr>
					</table>
				</div>
			</div>
			<div class="mainRightMiddle3">

				<div class="editor">
				<form action=""  id = "info">
					<table>
						<tr>
							<th class="th1">商家地址：</th>
							<th class="th2"><input type="text" name="address" id="shopaddress"></th>
						</tr>
						<tr>
							<th class="th1">营业时间：</th>
							<th class="th2"><input type="text" name="time" id="shoptime"></th>
						</tr>
						<tr>
							<th class="th1">配送费：</th>
							<th class="th2"><input type="text" name="price" id="shopprice"></th>
						</tr>
						<tr>
							<th class="th1">起送价：</th>
							<th class="th2"><input type="text" name="startPrice" id="shopstart"></th>
						</tr>
						<tr>
							<th class="th1">电话：</th>
							<th class="th2"><input type="text" name="phone" id="shopphone"></th>
						</tr>
					</table>
					</form>
					<a id="finish">完成</a>
				</div>
			</div>
			<div class="mainRightMiddle4">
				<div class="orderMain">
					<div class="orderMainTop">
						<div class="order_nav o1">新增订单</div>
						<div class="order_nav o2">完成订单</div>
					</div>
					<div class="orderMainMiddle">
						<div class="middle_top">
							<span class="content_top">订单内容</span> <span class="phone_top">手机号</span>
							<span class="payment_top">支付金额</span> <span class="operate_top">操作</span>
						</div>
						<div class="middle">
							<div class="middle_list"></div>
							<ul id="paging-wrapper"></ul>
						</div>
						<div class="accom">
							<div class="accom_list"></div>
							<ul id="paging-wrapper"></ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- footer 页脚 -->
	<div class="footer clearfix">
		<div class="footerLinks help">
			<h3 class="linksTitle">用户帮助</h3>
			<a href="#">服务中心</a> <a href="#">常见问题</a>
		</div>
		<div class="footerLinks cooperation">
			<h3 class="linksTitle">商务合作</h3>
			<a href="#">我要开店</a> <a href="#">加盟指南</a> <a href="#">市场合作</a> <a
				href="#">开放平台</a>
		</div>
		<div class="footerLinks about">
			<h3 class="linksTitle">关于我们</h3>
			<a href="#">吃了么介绍</a> <a href="#">加入我们</a> <a href="#">联系我们</a> <a
				href="#">规则中心</a>
		</div>
		<div class="footerContect">
			<ul>
				<li>24小时客服热线：<a>1234567</a></li>
				<li>意见反馈：<a>12345@163.com</a></li>
				<li>关注我们： <a href="#"><i class="fa fa-qq"></i></a> <a href="#"><i
						class="fa fa-facebook"></i></a>
				</li>
			</ul>
		</div>
		<div class="footerQrCode clearfix">
			<a href="#"><img
				src="http://faas.elemecdn.com/desktop/media/img/appqc.95e532.png"></a>
			<div class="qrCodeRight">
				<h3>下载手机版</h3>
				<p>扫一扫，手机订餐更方便</p>
			</div>
		</div>
		<div class="footerCopyRight">
			技术支持Team.S&nbsp;&nbsp;copyright&copy&nbsp;2004-2017&nbsp;&nbsp;Team.S
			版权所有</div>
	</div>
	<!-- 页脚结束 -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/sidebar.js"></script>
	<script src="js/JqueryPaging-1.0.js"></script>
	<script>

	var shopData,
	   foodData

	//我的菜品
$("#a3").on("click",function () {
	$(".mainRightMiddle").show();
	$(".mainRightMiddle1").hide();
	$(".mainRightMiddle2").hide();
	$(".mainRightMiddle3").hide();
	$(".mainRightMiddle4").hide();
	clearInterval(timeout)

                $.ajax({
	            		type:'post',
	            		url:'php/api.php',
	            		dataType:'json',
	            		data:{status:"food",currentPage:1},
	            		success:function(data){
		            		foodData = data
	            			console.log(data)
	            			var html = ""
	            			for(var i=0;i<data.length - 1;i++){
	            		html +=	"<div class='ShopDish'>"+
	        					"<div class='ha'>"+
	        						"<img src='shop/"+<?php echo $_SESSION['nowShopId']?>+"/images/dish1.jpg' class='img1'>"+
	        					"</div>"+
	        					"<div class='title'>"+
	        						"<h4>"+data[i].food_name+"</h4>"+
	        						"<div class='starratingg'>"
	        						var _starnum = 0
     							    if(data[i].food_rating_count === 5){
     							        _starnum = 5
         							    }else{
         							        _starnum = Math.ceil(data[i].food_rating_count/data[i].food_sales)
             							    }

     			                    for(var f = 0;f <5;f++){
         			                    if(f<_starnum){
       			                    	   html += "<b class='starnum'></b>"
         			                        }else{
         			                        	html += "<b></b>"
             			                        }
         			                    } 
	        					  html +="</div>"+
	        						"<p>("+data[i].food_comment_count+")</p>"+
	        						"<p>总售"+data[i].food_sales+"份</p>"+
	        						"<span>￥"+data[i].food_price+"</span>"+
	        					"</div>"+

	        					"<button id='xiugai' >修改</button>"+
	        					"<button>删除</button>"+

	        					"<div class='update' id='update'>"+
	        						"<p>请输入你要修改的菜名</p>"+
	        						"<input type='text'><br>"+
	        						"<p>请输入你要修改的价格</p>"+
	        						"<input type='text'>"+
	        						"<button class='but1'>确定</button>"+
	        					"</div>"+
	        				"</div>"
	        				
		            			}
	            			$('.mainRightMiddless').html(html)
	            			var update = $(".update")
	            			 $("#xiugai").on("click",function () {
		            			 var _index =  $("#xiugai").index(this)
	            				     $(update[_index]).show();
	            				     }); 	
	            			var _data = {
				status:"food",
				currentPage:1
		}

//配置数据
var option = {
   id: '#paging-wrapper',
   pages: Math.ceil(data[data.length -1] / 4), //总页数
   displayPage: 3, //只显示多少页
   data:_data,
   drawHtml:function(data){
       foodData = data
	   var html = ""
			for(var i=0;i<data.length - 1;i++){
		html +=	"<div class='ShopDish'>"+
				"<div class='ha'>"+
					"<img src='shop/"+<?php echo $_SESSION['nowShopId']?>+"/images/dish1.jpg' class='img1'>"+
				"</div>"+
				"<div class='title'>"+
					"<h4>"+data[i].food_name+"</h4>"+
					"<div class='starratingg'>"
					var _starnum = 0
			    if(data[i].food_rating_count === 5){
			        _starnum = 5
				    }else{
				        _starnum = Math.ceil(data[i].food_rating_count/data[i].food_sales)
					    }

                for(var f = 0;f <5;f++){
                    if(f<_starnum){
                    	   html += "<b class='starnum'></b>"
                        }else{
                        	html += "<b></b>"
	                        }
                    } 
				  html +="</div>"+
					"<p>("+data[i].food_comment_count+")</p>"+
					"<p>总售"+data[i].food_sales+"份</p>"+
					"<span>￥"+data[i].food_price+"</span>"+
				"</div>"+

				"<button id='xiugai'' onclick='gai()'>修改</button>"+
				"<button>删除</button>"+

				"<div class='update' id='update'>"+
					"<p>请输入你要修改的菜名</p>"+
					"<input type='text'><br>"+
					"<p>请输入你要修改的价格</p>"+
					"<input type='text'>"+
					"<button class='but1'>确定</button>"+
				"</div>"+
			"</div>"
			
    			}
			$('.mainRightMiddless').html(html)
   }
}
//调用分页插件
new Paging(option)

			
		}	
    })
	
});
$("#a4").click(function(){
	$(".mainRightMiddle1").show();
	$(".mainRightMiddle").hide();
	$(".mainRightMiddle2").hide();
	$(".mainRightMiddle3").hide();
	$(".mainRightMiddle4").hide();
	clearInterval(timeout)
});
$("#a1").click(function(){
	$(".mainRightMiddle2").show();
	$(".mainRightMiddle").hide();
	$(".mainRightMiddle1").hide();
	$(".mainRightMiddle3").hide();
	$(".mainRightMiddle4").hide();
	clearInterval(timeout)
	
	 $.ajax({
		type:'post',
		url:'php/api.php',
		dataType:'json',
		data:"status=shop-info",
		success:function(data){
			console.log(data)
			shopData = data[0]
			$('#orname').text(data[0].shop_name)
			$('#orshopaddress').text(data[0].shop_adress)
			$('#orshoptime').text(data[0].shop_opening_hours)
			$('#orshopprice').text(data[0].shop_delivery_cost)
			$('#orshopstart').text(data[0].shop_minimum_delivery_amount)
			$('#orshopphone').text(data[0].shop_phone)
    		}
    })
});  
$("#a1").click()
$("#a2").click(function(){
	$(".mainRightMiddle4").show();
	$(".mainRightMiddle").hide();
	$(".mainRightMiddle1").hide();
	$(".mainRightMiddle3").hide();
	$(".mainRightMiddle2").hide();
	clearInterval(timeout)
	
	$(".o1").click()
}); 
$("#a_xiugai").click(function(){
	var changeaddress=$("#orshopaddress").text();
	var changetime=$("#orshoptime").text();
	var changeprice=$("#orshopprice").text();
	var changestart=$("#orshopstart").text();
	var changephone=$("#orshopphone").text();
	$("#shopaddress").val(changeaddress);
	$("#shoptime").val(changetime);
	$("#shopprice").val(changeprice);
	$("#shopstart").val(changestart);
	$("#shopphone").val(changephone);
	$(".mainRightMiddle3").show();
	$(".mainRightMiddle").hide();
	$(".mainRightMiddle1").hide();
	$(".mainRightMiddle2").hide();
	$(".mainRightMiddle4").hide();

	$('#shopaddress').val(shopData.shop_adress)
	$('#shoptime').val(shopData.shop_opening_hours)
	$('#shopprice').val(shopData.shop_delivery_cost)
	$('#shopstart').val(shopData.shop_minimum_delivery_amount)
	$('#shopphone').val(shopData.shop_phone)
}); 


$("#finish").click(function(){
	var changeaddress=$("#shopaddress").val();
	var changetime=$("#shoptime").val();
	var changeprice=$("#shopprice").val();
	var changestart=$("#shopstart").val();
	var changephone=$("#shopphone").val();
	$("#orshopaddress").text(changeaddress);
	$("#orshoptime").text(changetime);
	$("#orshopprice").text(changeprice);
	$("#orshopstart").text(changestart);
	$("#orshopphone").text(changephone);
	$(".mainRightMiddle2").show();
	$(".mainRightMiddle").hide();
	$(".mainRightMiddle1").hide();
	$(".mainRightMiddle3").hide();

	 $.ajax({
		type:'post',
		url:'php/api.php',
		dataType:'json',
		data:"status=shop-info-modification&"+$("#info").serialize(),
		success:function(data){
			if(data['stauts'] === 1){
				$("#a1").click()
    			}
		}
    })
});  
var timeout
/* dingdan */
$(".o1").addClass('onf');
$(".o1").click(function(){
	$(".o1").addClass('onf');
	$(".o2").removeClass('onf');
	$(".middle").show();
	$(".accom").hide();

 	timeout = setInterval(function(){
		console.log("有没有新顾客")
		//获取顾客订单
		$.ajax({
	        type: "post",
	        url: 'php/api.php',
	        dataType: 'json',
	        data: {status:"shopOrder"},
	        success: function (data) {
	        	console.log(data)
	            var html = ""
	                for(var i=0; i<data.length;i++){
	                    html += "<div class='note_main'>"+
	            				"<div class='content'>"+
	            					"<b></b>"+
	            					"<div class='user_note'>"+
	            						"<div class='user_name'>"+data[i].order_u_name+"</div>"+
	            						"<div class='user_mes'>"+
	            							"<div class='order_time'>"+data[i].order_time+"</div>"+
	            							"<div class='order_number'>"+
	            									"<span>订单号:"+data[i].order_id+"</span>"+
	            							"</div>"+
	            						"</div>"+
	            					"</div>"+
	            				"</div>"+
	            				"<div class='phone'>"+data[i].order_u_phone+"</div>"+
	            				"<div class='payment'>"+
	            					"￥<span class='pmp'>"+data[i].order_total_prices+"</span>"+
	            				"</div>"+
	            				"<div class='operate'>接收订单</div>"+
	            			"</div>"+
	            			"<div class='main_list'>"+
	            				"<div class='order_main'>"+
	            					"<p>订单详情</p>"+
	            					"<div class='wrapperfood'>"
	            					var str1=data[i].order_food_name;
	            					var str2=data[i].order_food_price;
	            					var str3=data[i].order_food_num;
	            					var foodname=str1.match(/([\u4e00-\u9fa5]+)/g);
	            					var foodprice=str2.match(/(\d+)/g);
	            					var foodnum=str3.match(/(\d+)/g);

	            					for(var a=0;a<foodname.length;a++){
	            		       			html +="<div class='dishs_list'>"+
	            		       					"<span class='names'>"+foodname[a]+"</span>"+
	            		       					"<span class='numbers'>"+foodnum[a]+"</span>"+
	            		       					"￥<span class='prices'>"+foodprice[a]+"</span>"+
	            		       				"</div>"
	            		     				}
	            					
	            					html +="</div>"+
	            					"<div class='real_list'>"+
	            						"<div class='real'>"+
	            							"实际支付：￥<span class='real_pay'>"+data[i].order_total_prices+"</span>"+
	            						"</div>"+
	            					"</div>"+
	            				"</div>"+
	            				"<div class='pro_main'>"+
	            					"<div class='address_note'>"+
	            						"<p>送餐地址</p>"+
	            						"<div class='address'>"+data[i].order_u_address+"</div>"+
	            					"</div>"+
	            				"</div>"+
	            			"</div>"
	                    }
	            $(".middle_list").html(html)

	            var main_list = $(".main_list")
	            $(".note_main").click(function(){
	                var _index = $(this).index() / 2
	            	$(main_list[_index]).toggle();
	            });
	            $(".operate").on("click",function(e){
	                var _index = $(".operate").index(this)
	                console.log(_index)
	                e.stopPropagation()
	                
	        	$.ajax({
	            		type:'post',
	            		url:'php/api.php',
	            		dataType:'json',
	            		data:{status:'acceptOrder',id:data[_index].order_id},
	            		success:function(data){
	            			if(data['stauts'] === 1){
	            				$("#a2").click()
	                			}
	            		}
	                })
	         });   
	            
	        }    
		})
		},10000)
});	
$(".o2").click(function(){
	$(".o2").addClass('onf');
	$(".o1").removeClass('onf');
	$(".middle").hide();
	$(".accom").show();


	$.ajax({
        type: "post",
        url: 'php/api.php',
        dataType: 'json',
        data: {status:"shopOldOrder"},
        success: function (data) {
        	console.log(data)
            var html = ""
                for(var i=0; i<data.length;i++){
                    html += "<div class='note_main'>"+
            				"<div class='content'>"+
            					"<b></b>"+
            					"<div class='user_note'>"+
            						"<div class='user_name'>"+data[i].order_u_name+"</div>"+
            						"<div class='user_mes'>"+
            							"<div class='order_time'>"+data[i].order_time+"</div>"+
            							"<div class='order_number'>"+
            									"<span>订单号:"+data[i].order_id+"</span>"+
            							"</div>"+
            						"</div>"+
            					"</div>"+
            				"</div>"+
            				"<div class='phone'>"+data[i].order_u_phone+"</div>"+
            				"<div class='payment'>"+
            					"￥<span class='pmp'>"+data[i].order_total_prices+"</span>"+
            				"</div>"+
            				"</div>"
                    }
            $(".accom").html(html)
            
            var main_list = $(".main_list")
            $(".note_main").click(function(){
                var _index = $(this).index() / 2
            	$(main_list[_index]).toggle();
            }); 
            
        }    
	})
	
});
    </script>
</body>
</html>