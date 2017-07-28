<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>吃了么-首页</title>
<script src="js/jquery-3.2.1.min.js"></script>
<link type="text/css" rel="stylesheet" href="css/main.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="shortcut icon" href="favicon.ico">
<style type="text/css">
ul li{
	float:left;
}
/*头部*/
.container{
	width:100%;
	min-width:1400px;
	height:200px;
	background:url(images/back1.jpg) no-repeat 30% 30%;
	box-shadow:5px 5px 3px #888888;
}
/*餐馆介绍*/
.liimg{
	float:left;
	height:130px;
	width:360px;
	margin-left:60px;
	margin-top:5px;
	padding-top:15px;
	display:inline-block;
}
.liimg .img1{
	margin-left:10px;
	border-radius:50%;
	border:3px solid #C8C8C8;
}

.liimg .title1{
	height:70px;
	width:240px;
	float:right;
	margin-top:15px;
	display:inline-block;
}
.liimg .title1 h2{
	margin-top:10px;
}
.liimg .title1 p{
	display:inline-block;
	font-size:16px;
}
.liimg .title1 .star{
	height:20px;
	width:100px;
	display:inline-block;
}
.liimg .title1 .star img{
	height:20px;
	width:20px;
}

/*搜索框*/
.wrapperBox{
	float:right;
	margin:60px 0px 50px 0;
	height:32px;
	display:inline-block;
}
.searchBox{
	float:right;
	position:relative;
	z-index:3;
	background:#fff;
	border:1px solid #ccc;
	color:#999;	
}
.searchBox i{
	float:right;
	color:#999;
	width:46px;
	height:inherit;
	line-height:32px;
	text-align: center;
	font-size:20px;
}
.searchBox input{
	width:180px;
	height:30px;
	border:0;
	outline: none;
}
.searchBox span{
	padding-right:10px;
}

/*中间部分总体*/
.middle{
	height:600px;
	width:100%;
	min-width:1350px;
}


/*中间头部，索引*/
.middleTop{
	height:21%;
	width:855px;
	margin-left:2%;	
	margin-top:20px;
	border:1px solid #C8C8C8;
	background-color:white;
}


.middleTop ul li .span1{
	line-height:40px;
}
.middleTop ul li .span2{
	margin-top:50px;
}
.middleTop ul li .a1{
	display:block;
	height:125px;
	width:120px;
	text-align:center;
	margin-left:2px;
	background-color: #6495ED;
}
.middleTop ul li .a1:hover{
	display:block;
	height:110px;
	width:120px;
	background-color:#E9CD4C;
	border-top:10px solid #1e89e0;
	background:url(images/icon1.png) no-repeat 50% 50%;
}

.middleTop ul li .a2{
	display:block;
	height:125px;
	width:120px;
	text-align:center;
	margin-left:2px;
	background-color:pink;
}
.middleTop ul li .a2:hover{
	display:block;
	height:110px;
	width:120px;
	background-color:#E9CD4C;
	border-top:10px solid #1e89e0;
	background:url(images/icon2.png) no-repeat 50% 50%;
}

.middleTop ul li .a3{
	display:block;
	height:125px;
	width:120px;
	text-align:center;
	margin-left:2px;
	background-color:#6495ED;
}
.middleTop ul li .a3:hover{
	display:block;
	height:110px;
	width:120px;
	background-color:#E9CD4C;
	border-top:10px solid #1e89e0;
	background:url(images/icon3.png) no-repeat 50% 50%;
}

.middleTop ul li .a4{
	display:block;
	height:125px;
	width:120px;
	text-align:center;
	margin-left:2px;
	background-color:pink;
}
.middleTop ul li .a4:hover{
	display:block;
	height:110px;
	width:120px;
	background-color:#E9CD4C;
	border-top:10px solid #1e89e0;
	background:url(images/icon4.png) no-repeat 50% 50%;
}

.middleTop ul li .a5{
	display:block;
	height:125px;
	width:120px;
	text-align:center;
	margin-left:2px;
	background-color:#6495ED;
}
.middleTop ul li .a5:hover{
	display:block;
	height:110px;
	width:120px;
	background-color:#E9CD4C;
	border-top:10px solid #1e89e0;
	background:url(images/icon5.png) no-repeat 50% 50%;
}

.middleTop ul li .a6{
	display:block;
	height:125px;
	width:120px;
	text-align:center;
	margin-left:2px;
	background-color:pink;
}
.middleTop ul li .a6:hover{
	display:block;
	height:110px;
	width:120px;
	background-color:#E9CD4C;
	border-top:10px solid #1e89e0;
	background:url(images/yu.png) no-repeat 50% 50%;
}

.middleTop ul li .a7{
	display:block;
	height:125px;
	width:120px;
	text-align:center;
	margin-left:2px;
	background-color:#6495ED;
}
.middleTop ul li .a7:hover{
	display:block;
	height:110px;
	width:120px;
	background-color:#E9CD4C;
	border-top:10px solid #1e89e0;
	background:url(images/icon7.png) no-repeat 50% 50%;
}

.p1,.p2{
	display:block;
}

.p1{
	font-size:12px;	
}




.middleHot{
	width:858px;
	margin-left:2%;	
}

.middleHot .hot{
	height:50px;
	width:300px;
	display:block;
	line-height:50px;
	font-size:26px;
}

.middleHot .hot span{
	font-size:13px;
}

.middleHot .dish{
	height:100px;
	width:420px;
	margin-bottom:30px;
	display:inline-block;
	background-color:white;
	border:1px solid #D0D0D0;
}

.middleHot .dish .title{
	height:50px;
	width:310px;
	float:right;
	display:inline-block;
}
.middleHot .dish .title h4{
	margin-top:10px;
}
.middleHot .dish .title p{
	display:inline-block;
	font-size:12px;
}
.middleHot .dish .title .star{
	height:20px;
	width:50px;
	display:inline-block;
}

.middleHot .dish .price{
    position:absolute;
	height:30px;
	width:300px;
	margin-left:10px;
	margin-top:60px;
	display:inline-block;
}

.middleHot .dish .price span{
	height:20px;
	width:20px;
}
.middleHot .dish span:before{
	content:"\00a5";
	font-size:12px;
	marign-right:5px;
}

.middleHot .dish .price button{
display: inline-block;
border: 0;
cursor: pointer;
width: 90px;
height: 26px;
line-height: 26px;
border-radius: 20px;
text-align: center;
margin-left:170px;
outline: 0;
background-color:#0089dc;
}


.inform{
	height:360px;
	width:350px;
	background-color:white;
	margin-right:90px;
	float:right;
	border:1px solid #D0D0D0;
}
.inform .informTop{
	height:40px;
	width:350px;
	background-color:#1e89e0;
}

.inform .informTop span{
	line-height:40px;
	font-size:20px;
	margin-left:10px;
	color:white;
}
.inform p{
	font-size:16px;
	text-indent:20px;
	margin-left:10px;
	margin-right:10px;
	margin-top:10px;
}
.inform .informMiddle{
	height:60px;
	width:350px;
	margin-top:90px;
	background-color:#F0F0F0;
}
.inform .informMiddle span{
	margin-top:10px;
	margin-left:20px;
   display:block;
}
.inform button{
    height:50px;
	width:350px;
	border:0;
	font-size:16px;
	border-top:1px solid #D0D0D0; 
	background-color:white;
}

/*商家配送费地址等信息div*/
.detail{
	float:left;
	height:130px;
	width:420px;
	margin-top:5px;
	display:none;
	border:1px solid #D0D0D0;
	background-color:#F8F8F8;
}
.detail .detailLeft{
	height:128px;
	width:110px;
	border-right:1px solid #D0D0D0;
	display:inline-block;
}
.detail .detailLeft .span1{
	float:left;
	height:40px;
	width:110px;
	font-size:24px;
	text-indent:37px;
	margin-top:25px;
}
.detail .detailLeft .span2{
	font-size:10px;
	display:block;
	margin-left:37px;
}
.detail .detailLeft .span3{
	font-size:10px;
	display:block;
	margin-left:10px;
}
.detail p{
	position:relative;
	bottom:130px;
	left:90px;
	margin-top:6px;
	width:300px;
	font-size:13px;
	text-indent:37px;
}

.index{
	width:100%;
	min-width:1400px;
	height:40px;
	margin-top:20px;
	background-color:white;
}
.index ul .indexLi1{
	width:100px;
	height:40px;
	margin-left:50px;
	text-align: center;
	line-height:40px;
}
.index ul .indexLi2{
	width:100px;
	height:40px;
	text-align: center;
	line-height:40px;
}
.index ul .indexLi2:before{
position: absolute;
left: 150px;
top:32%;
content: "  ";
margin-top: -7px;
height: 24px;
width: 2px;
background-color: #ccc;
}




.middle1{
	width:100%;
	min-width:1350px;
	display:none;
}
.pingjia{
	width:855px;
	height:600px;
	margin-left:4%;
	margin-top:20px;
	
	border:1px solid #eee;
}

.pingjia .pingjiaTop{
	width:855px;
	height:50px;
	border-bottom:1px solid #eee;
	background-color:#fafafa;
}

.pingjia .pingjiaTop ul li{
	width:100px;
	height:48px;
	border-left:1px solid #eee;
	text-align: center;
	line-height:50px;
}
.pingjia .content{
	width:855px;
}
.pingjia .content ul li{
	width:855px;
	height:140px;
	border:1px solid #eee;
}
.pingjia .content ul li span{
	width:140px;
	height:84px;
	position: absolute;
    left: 60px;
    text-align: center;
	margin-top:10px;
}
.pingjia .content ul li span img{
	width: 60px;
    height: 60px;
	margin:0 auto;
	display:block;
    border-radius: 50%;
}

.pingjia .content ul li .liLeft{
	width: 710px;
    height: 150px;
	position: absolute;
    left: 200px;
}
.pingjia .content ul li .liLeft .ha{
	height:70px;
	width:710px;
	margin-top:10px;
	display:inline-block;
}

.pingjia .content ul li .liLeft .ha h4{
	margin-top:10px;
}
.pingjia .content ul li .liLeft .ha p{
	display:inline-block;
	font-size:14px;

	text-indent: 10px;
}
.pa{
color:#FFCC33;
}
.pb{
color: 	#808080;
}
.pingjia .content ul li .liLeft .ha img{
	height:20px;
	width:20px;
}
.pingjia .content ul li .liLeft .ha .star{
	height:20px;
	width:100px;
	margin-top:10px;
	display:inline-block;
}

.pingjia .content ul li .liLeft .hb{
	width: 690px;
    height: 50px;
	border-top:1px solid #C8C8C8;
}

.pingjia .content ul li .liLeft .hb p{
	margin-top:10px;
}






</style>
</head>
<body>
<div class="container clearfix">
	<div class="topBar clearfix">
		<h1 class="topBarLogo"><b></b>吃了么</h1>
		<div class="topBarList">
			<a href="index.html" class="homePage">首页</a>
			<a href="#">我的订单</a>
			<a href="#">加盟合作</a>
		</div>
		<nav class="topBarNav">
			<a href="#"><i class="fa fa-user-o"></i>服务中心</a>
			<a href="#">规则中心</a>
			<a href="#"><i class="fa fa-mobile"></i>手机应用</a>
		</nav>
		<div class="topBarNavLogin">
			   <a href="#"><i class="fa fa-user"></i>登录/注册</a>
		</div>
	</div>
	<div class="sideBar">
		<div class="sideBarTabs">
			<a class="tabsBtn order" href="#" tooltips="我的订单"><i class="fa fa-reorder"></i><span>我的订单</span><b class="trangle"></b></a>
			<div class="separator"></div>
			<a class="tabsBtn shopCar" href="#"><i class="fa fa-cart-plus"></i>购物车</a>
			<div class="separator"></div>
			<a class="tabsBtn msg" href="#" tooltips="我的信息"><i class="fa fa-envelope-o"></i><span>我的信息</span><b></b></a>
		</div>
	</div>
	
	       
			<div class="liimg" id="liimg">
			   <img src="shop/1/images/shop.jpg" class="img1">
			   <div class="title1">
               <h2>站前餐馆</h2>
	               <div class="star">
	               <img src="images/star.png"><img src="images/star.png"><img src="images/star.png"><img src="images/star.png"><img src="images/star1.png">
	               </div>
	               <p>(80)</p>
	               <p>月售420份</p>
			   </div> 
			</div>   
			
			<div class="detail">
	           <div class="detailLeft">
	           <span class="span1">4.7</span>
	           <span class="span2">综合评价</span>
	           <span class="span3">高于周边商家55.5%</span>
	           </div>
	           <p>起送价：0元</p>
	           <p>配送费：免配送费</p>
	           <p>预计送达时间：35分钟</p>
	           <p>商家地址:长江师范学院北门</p>
	           <p>营业时间：9：00-14:00/16:30-22:00</p>
	        </div>
	        
	        
				 <div class="wrapperBox">
				<div class="searchBox clearfix">
					<i class="fa fa-search"></i>
					<span></span><input id="change" class="searchInput" placeholder="搜索商家/美食...">
				</div>
		     </div>
		
		<div class="classify"></div>
		<div class="contentBox"></div>
	</div>
	
	<div class="index">
	<ul>
	<li class="indexLi1">所有商品</li>
	<li class="indexLi2">评价</li>
	</ul>
	</div>

	
	
	
	<div class="middle">
	<div class="inform">
	 <div class="informTop ">
	   <span>商家公告</span>
	   	 </div>
	   	 <p>如有什么问题请联系商家，商家会给你一个满意的答复，欢迎各位亲到站前餐馆点餐，请各位亲提前订餐，优惠多多，食材新鲜。欢迎新老顾客的支持，不要忘了给好评，谢谢各位亲</p>
	   	 
	 <div class="informMiddle">
	 <span>配送说明：</span>
	 <span>免费配送</span>
	 </div>
	 <button>举报商家</button>
	</div>
		<div class="middleTop"  id="float_banner">
			
			<ul>
				<li id="li1">
					<a href="#" class="a1">
					<span class="p2 span1">热销</span>
					<span class="p1 span2">HOT*</span>
					</a>
				</li>	
				
			<li>
			<a href="#" class="a2">
			<span class="p2 span1">优惠</span>
			<span class="p1 span2">PRIVILEGE*</span>
			</a>
			</li>
			
			<li>
			<a href="#" class="a3">
			<span class="p2 span1">米饭</span>
			<span class="p1 span2">RICE*</span>
			</a>
			</li>
			
			<li>
			<a href="#" class="a4">
			<span class="p2 span1">小吃面食</span>
			<span class="p1 span2">NOODLE*</span>
			</a>
			</li>
			<li>
			<a href="#" class="a5">
			<span class="p2 span1">盖饭</span>
			<span class="p1 span2">GAIFAN*</span>
			</a>
			</li>
			<li>
			<a href="#" class="a6">
			<span class="p2 span1">烤鱼</span>
			<span class="p1 span2">KAOYU*</span>
			</a>
			</li>
			<li>
			<a href="#" class="a7">
			<span class="p2 span1">煎蛋</span>
			<span class="p1 span2">JIANDAN*</span>
			</a>
			</li>			
			</ul>	
		</div>
		
	<div class="middleHot">
		<span class="hot">热销<span>大家喜欢吃，才叫真好吃~</span></span>
			<div class="dish">
			   <img src="shop/1/images/dish1.jpg">
			   <div class="title">
               <h4>卤鸡腿拌饭</h4>
	               <div class="star">
	               <img src="images/star.png"><img src="images/star.png"><img src="images/star.png"><img src="images/star.png"><img src="images/star1.png">
	               </div>
	               <p>(80)</p>
	               <p>月售420份</p>
			   </div>
				   <div class="price">
				   <span>15</span>
				   <button>加入购物车</button>
				   </div>
			</div>
			<div class="dish">
			    <img src="shop/1/images/dish2.jpg">
			   <div class="title">
               <h4>盐煎肉盖饭</h4>
	               <div class="star">
	               <img src="images/star.png"><img src="images/star.png"><img src="images/star.png"><img src="images/star.png"><img src="images/star1.png">
	               </div>
	               <p>(6)</p>
	               <p>月售420份</p>
			   </div>
				   <div class="price">
				   <span>15</span>
				   <button>加入购物车</button>
				   </div>
			</div>
			<div class="dish">
			   <img src="shop/1/images/dish1.jpg">
			   <div class="title">
               <h4>卤鸡腿拌饭</h4>
	               <div class="star">
	               <img src="images/star.png"><img src="images/star.png"><img src="images/star.png"><img src="images/star.png"><img src="images/star1.png">
	               </div>
	               <p>(80)</p>
	               <p>月售420份</p>
			   </div>
				   <div class="price">
				   <span>15</span>
				   <button>加入购物车</button>
				   </div>
			</div>
			<div class="dish">
			    <img src="shop/1/images/dish2.jpg">
			   <div class="title">
               <h4>盐煎肉盖饭</h4>
	               <div class="star">
	               <img src="images/star.png"><img src="images/star.png"><img src="images/star.png"><img src="images/star.png"><img src="images/star1.png">
	               </div> 
	               <p>(6)</p>
	               <p>月售420份</p>
			   </div>
				   <div class="price">
				   <span>15</span>
				   <button>加入购物车</button>
				   </div>
			</div>
			
			<div class="dish">
			    <img src="shop/1/images/dish2.jpg">
			   <div class="title">
               <h4>盐煎肉盖饭</h4>
	               <div class="star">
	               <img src="images/star.png"><img src="images/star.png"><img src="images/star.png"><img src="images/star.png"><img src="images/star1.png">
	               </div>
	               <p>(6)</p>
	               <p>月售420份</p>
			   </div>
				   <div class="price">
				   <span>15</span>
				   <button>加入购物车</button>
				   </div>
			</div>
			<div class="dish">
			   <img src="shop/1/images/dish1.jpg">
			   <div class="title">
               <h4>卤鸡腿拌饭</h4>
	               <div class="star">
	               <img src="images/star.png"><img src="images/star.png"><img src="images/star.png"><img src="images/star.png"><img src="images/star1.png">
	               </div>
	               <p>(80)</p>
	               <p>月售420份</p>
			   </div>
				   <div class="price">
				   <span>15</span>
				   <button>加入购物车</button>
				   </div>
			</div>
			
	</div>	
	<div class="middleHot">
		<span class="hot">优惠<span>美味又实惠，大家快来抢！</span></span>
			<div class="dish">
			   <img src="shop/1/images/dish1.jpg">
			   <div class="title">
               <h4>卤鸡腿拌饭</h4>
	               <div class="star">
	               <img src="images/star.png"><img src="images/star.png"><img src="images/star.png"><img src="images/star.png"><img src="images/star1.png">
	               </div>
	               <p>(80)</p>
	               <p>月售420份</p>
			   </div>
				   <div class="price">
				   <span>15</span>
				   <button>加入购物车</button>
				   </div>
			</div>
			<div class="dish">
			    <img src="shop/1/images/dish2.jpg">
			   <div class="title">
               <h4>盐煎肉盖饭</h4>
	               <div class="star">
	               <img src="images/star.png"><img src="images/star.png"><img src="images/star.png"><img src="images/star.png"><img src="images/star1.png">
	               </div>
	               <p>(6)</p>
	               <p>月售420份</p>
			   </div>
				   <div class="price">
				   <span>15</span>
				   <button>加入购物车</button>
				   </div>
			</div>
			<div class="dish">
			   <img src="shop/1/images/dish1.jpg">
			   <div class="title">
               <h4>卤鸡腿拌饭</h4>
	               <div class="star">
	               <img src="images/star.png"><img src="images/star.png"><img src="images/star.png"><img src="images/star.png"><img src="images/star1.png">
	               </div>
	               <p>(80)</p>
	               <p>月售420份</p>
			   </div>
				   <div class="price">
				   <span>15</span>
				   <button>加入购物车</button>
				   </div>
			</div>
			<div class="dish">
			    <img src="shop/1/images/dish2.jpg">
			   <div class="title">
               <h4>盐煎肉盖饭</h4>
	               <div class="star">
	               <img src="images/star.png"><img src="images/star.png"><img src="images/star.png"><img src="images/star.png"><img src="images/star1.png">
	               </div>
	               <p>(6)</p>
	               <p>月售420份</p>
			   </div>
				   <div class="price">
				   <span>15</span>
				   <button>加入购物车</button>
				   </div>
			</div>

	</div>	
		<div class="middleHot">
		<span class="hot">米饭</span>
			<div class="dish">
			   <img src="shop/1/images/rice.jpg">
			   <div class="title">
               <h4>火腿炒饭</h4>
	               <div class="star">
	               <img src="images/star.png"><img src="images/star.png"><img src="images/star.png"><img src="images/star.png"><img src="images/star1.png">
	               </div>
	               <p>(80)</p>
	               <p>月售420份</p>
			   </div>
				   <div class="price">
				   <span>15</span>
				   <button>加入购物车</button>
				   </div>
			</div>
			<div class="dish">
			    <img src="shop/1/images/rice1.jpg">
			   <div class="title">
               <h4>肉丝炒饭</h4>
	               <div class="star">
	               <img src="images/star.png"><img src="images/star.png"><img src="images/star.png"><img src="images/star.png"><img src="images/star1.png">
	               </div>
	               <p>(6)</p>
	               <p>月售420份</p>
			   </div>
				   <div class="price">
				   <span>15</span>
				   <button>加入购物车</button>
				   </div>
			</div>
	</div>		
	<div class="middleHot">
		<span class="hot">面食</span>
			<div class="dish">
			   <img src="shop/1/images/dish3.jpg">
			   <div class="title"> 
               <h4>素粉</h4>
	               <div class="star">
	               <img src="images/star.png"><img src="images/star.png"><img src="images/star.png"><img src="images/star.png"><img src="images/star1.png">
	               </div>
	               <p>(80)</p>
	               <p>月售420份</p>
			   </div>
				   <div class="price">
				   <span>15</span>
				   <button>加入购物车</button>
				   </div>
			</div>
			<div class="dish">
			    <img src="shop/1/images/dish4.jpg">
			   <div class="title">
               <h4>羊肉面</h4>
	               <div class="star">
	               <img src="images/star.png"><img src="images/star.png"><img src="images/star.png"><img src="images/star.png"><img src="images/star1.png">
	               </div>
	               <p>(6)</p>
	               <p>月售420份</p>
			   </div>
				   <div class="price">
				   <span>15</span>
				   <button>加入购物车</button>
				   </div>
			</div>
	</div>	
		<div class="middleHot">
		<span class="hot">盖饭</span>
			<div class="dish">
			   <img src="shop/1/images/dish5.jpg">
			   <div class="title">
               <h4>猪头肉盖饭</h4>
	               <div class="star">
	               <img src="images/star.png"><img src="images/star.png"><img src="images/star.png"><img src="images/star.png"><img src="images/star1.png">
	               </div>
	               <p>(80)</p>
	               <p>月售420份</p> 
			   </div>
				   <div class="price">
				   <span>15</span>
				   <button>加入购物车</button>
				   </div>
			</div>
			<div class="dish">
			    <img src="shop/1/images/dish6.jpg">
			   <div class="title">
               <h4>香辣盖饭</h4>
	               <div class="star">
	               <img src="images/star.png"><img src="images/star.png"><img src="images/star.png"><img src="images/star.png"><img src="images/star1.png">
	               </div>
	               <p>(6)</p>
	               <p>月售420份</p>
			   </div>
				   <div class="price">
				   <span>15</span>
				   <button>加入购物车</button>
				   </div>
			</div>
	</div>	
	
	
	</div>
	
	
	
	<div class="middle1">
	<div class="inform">
	 <div class="informTop ">
	   <span>商家公告</span>
	   	 </div>
	   	 <p>如有什么问题请联系商家，商家会给你一个满意的答复，欢迎各位亲到站前餐馆点餐，请各位亲提前订餐，优惠多多，食材新鲜。欢迎新老顾客的支持，不要忘了给好评，谢谢各位亲</p>
	   	 
	 <div class="informMiddle">
	 <span>配送说明：</span>
	 <span>免费配送</span>
	 </div>
	 <button>举报商家</button>
	</div>
	
	<div class="pingjia">
	<div class="pingjiaTop">
	<ul>
	<li>全部</li>
	<li>满意</li>
	<li>不满意</li>
	</ul>
	</div>
	<div class="content">
	<ul>
	<li>
		<span><img src="images/touxiang.png"></span>
		<div class="liLeft">
		 <div class="ha">
               <h4>卤鸡腿拌饭</h4>
	               <div class="star">
	               <img src="images/star.png"><img src="images/star.png"><img src="images/star.png"><img src="images/star.png"><img src="images/star1.png">
	               </div>
	               <p class="pa">满意</p>
	               <p class="pb">40分钟送达</p>
			   </div>
		  <div class="hb">
		  <p>dgdxthtjryhuj</p>
		  </div>
		</div>
	</li>
	<li>
		<span><img src="images/touxiang.png"></span>
		<div class="liLeft">
		 <div class="ha">
               <h4>卤鸡腿拌饭</h4>
	               <div class="star">
	               <img src="images/star.png"><img src="images/star.png"><img src="images/star.png"><img src="images/star.png"><img src="images/star1.png">
	               </div>
	               <p class="pa">满意</p>
	               <p class="pb">40分钟送达</p>
			   </div>
		  <div class="hb">
		  <p>dgdxthtjryhuj</p>
		  </div>
		</div>
	</li>
	<li>
		<span><img src="images/touxiang.png"></span>
		<div class="liLeft">
		 <div class="ha">
               <h4>卤鸡腿拌饭</h4>
	               <div class="star">
	               <img src="images/star.png"><img src="images/star.png"><img src="images/star.png"><img src="images/star.png"><img src="images/star1.png">
	               </div>
	               <p class="pa">满意</p>
	               <p class="pb">40分钟送达</p>
			   </div>
		  <div class="hb">
		  <p>dgdxthtjryhuj</p>
		  </div>
		</div>
	</li>
	<li>
		<span><img src="images/touxiang.png"></span>
		<div class="liLeft">
		 <div class="ha">
               <h4>卤鸡腿拌饭</h4>
	               <div class="star">
	               <img src="images/star.png"><img src="images/star.png"><img src="images/star.png"><img src="images/star.png"><img src="images/star1.png">
	               </div>
	               <p class="pa">满意</p>
	               <p class="pb">40分钟送达</p>
			   </div>
		  <div class="hb">
		  <p>dgdxthtjryhuj</p>
		  </div>
		</div>
	</li>
	</ul>
	</div>
	</div>
	</div>
	
	
	
	<script>
	var speed = 100;
	var scrollTop = null;
	var hold = 0;
	var float_banner;
	var pos = null;
	var timer = null;
	var moveHeight = null;
	float_banner = document.getElementById("float_banner");
	window.onscroll=scroll_ad;
	function scroll_ad(){
	 scrollTop = document.documentElement.scrollTop+document.body.scrollTop;
	 pos = scrollTop - float_banner.offsetTop;
	 pos = pos/10
	 moveHeight = pos>0?Math.ceil(pos):Math.floor(pos);
	 if(moveHeight!=0){
	  float_banner.style.top = float_banner.offsetTop+moveHeight+"px";
	  setTimeout(scroll_ad,speed);
	 }
	}
	
	$("#liimg").hover(function(){
		$(".detail").show();
	},function(){
		$(".detail").hide();
	});
	$(".detail").hover(function(){
		$(".detail").show();
	},function(){
		$(".detail").hide();
	});
	
	$(".indexLi1").click(function(){
		$(".middle").show();
		$(".middle1").hide();
	});
	$(".indexLi2").click(function(){
		$(".middle1").show();
		$(".middle").hide();
	});
	
	
	</script>
</body>
</html>