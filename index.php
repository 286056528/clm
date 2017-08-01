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

.logout{
	position:absolute;
	display:none;
	top:44px;
	right:123px;
	width:53px;
	height:50px;
	text-align:center;
	background-color:#1e89e0;
	color:white;
	cursor:pointer;
}
#paging-wrapper{
	width: 100%;
	margin-top: 32px;
	text-align: center;
}
#paging-wrapper li{
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
#paging-wrapper li:hover{
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
/*------中部内容 container------*/
.container{
	width:1200px;
	margin:0 auto;
}
/*------搜索框部分 searchBox-----*/
.wrapperBox{
	margin:10px 0px 50px 0;
	height:32px;
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
/*------搜索框下方分类部分 classify------*/
.classifyWrapper{
	padding:10px 0 0 10px;
	background:#fff;
	border: 1px solid #e6e6e6;
	font-size:15px;
}
.classifyWrapper a{
	color:#666;
	width:40px;
	height:36px;
	line-height:36px;
	padding:5px 20px;
}
.classify span{
	color:#999;
}
.classify a:nth-child(2){
	background:#f6f6f6;
}
.classify a:hover,.classify a:focus{
	background:#f6f6f6;
}
.classify a:focus{
	color:#fff;
}
/*.last{
	margin-left:70px;
}*/
/*点击某个分类展开更详细的分类 details*/
#details{
	display: none;
	background:#f6f6f6;
	padding:10px;
	margin:10px;
	color:#fff;
	margin-left:70px;
}
#details a:focus{
	background: #0089dc;
	color:#fff;
}
#details a:nth-child(1){
	background: #0089dc;
	color:#fff;
	height:40px;
}
/*-------主体部分 contentBox------*/
.contentBox{
	margin-top: 20px;
	background: #fff;
	border: 1px solid #e6e6e6;
	font-size: 0;	
}
.contentBox a{
	border-bottom: 1px #f5f5f5 solid;
	width:25%;
	display: inline-block;
	font-size:16px;
}
.contentBox a:hover{
	background: #eee;
	filter:alpha(Opacity=80);/*背景透明*/
	-moz-opacity:0.8;
	opacity: 0.8;
}
.restaurantLogo{
	float:left;
	position:relative;
	display:inline-block;
	padding:25px;
}
.restaurantLogo span{
	position: absolute;
	left:35px;
	bottom: 5px;
	font-size: 12px;
	padding-top: 10px;
}
.resIntroduce{
	padding:29px;
}
.resIntroduce h3{
	color:#000;
	font-size:1em;
}
.resIntroduce h3:hover{
	color:#0089dc;
}
.resIntroduce .sale{
	padding-left:10px;
}
.resIntroduce .sale,.resIntroduce p{
	color:#999;
	font-size: 14px;
}
/*评级五角星*/
.starrating{
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

.starrating  b{
	float: left;
	width: 14px;
	height: 11px;
	background: url(images/starss.png) 0 -11px no-repeat;
}
.starrating  .starnum{
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
</style>
<script>
//实现搜索框横向伸展效果
window.onload=function(){
    var aA=document.getElementsByTagName('input');
	for(var i=0; i<aA.length; i++){
		aA[i].onmouseover=function(){
			var This=this;
			clearInterval(This.time);/*清除计时器*/
			This.time=setInterval(function(){/*设定计时器*/
					This.style.width=This.offsetWidth+8+"px";
					if(This.offsetWidth>=230)/*input标签的宽度*/
					clearInterval(This.time);
				},30)
		}
		aA[i].onmouseout=function(){
				clearInterval(this.time);
				var This=this;
				this.time=setInterval(function(){
					This.style.width=This.offsetWidth-8+"px";
					if(This.offsetWidth<=180){
						This.style.width='180px';
						clearInterval(This.time);
					}
				},30)
		}
	}
}
//实现分类显示详情选项
var aa=document.getElementById("details");
function showtext(){
    details.style.display="block";
  }

</script>
</head>
<body>
<!-- topBar结束 头部菜单 -->
	<div class="topBar clearfix">
		<h1 class="topBarLogo"><b></b>吃了么</h1>
		<div class="topBarList" id="topBarList">
			<a href="index.php" class="change">首页</a>
			<a href="order.php">我的订单</a>
			<a href="#">加盟合作</a>
		</div>
		<nav class="topBarNav">
			<a href="#"><i class="fa fa-user-o"></i>服务中心</a>
			<a href="#">规则中心</a>
			<a href="#"><i class="fa fa-mobile"></i>手机应用</a>
		</nav>
		<div class="topBarNavLogin">
		<?php if(empty($_SESSION['userId'])){?>
			   <a href="login.html"><i class="fa fa-user"></i>登录/注册</a>
			   <?php }else{?>
			    <div class='logname'>
			      <a  href="order.php"><i class="fa fa-user"></i><?php echo $_SESSION['name'] ?></a>
			     <span class="logout">退出</span>
			   </div>
			   <?php }?>
		</div>
	</div>
<!-- sidebar 侧边栏 -->
	<div id="sidebar">
        <div id="wrap">
            <div id="prof" class="item">
                <a class="order">
                    <i class="fa fa-reorder"></i>
                    <span>我的订单</span><b class="trangle"></b>
                </a>
            </div>
            <div id="asset" class="item">
                <span>
                    <i class="fa fa-cart-plus"></i>
                </span>
                <div>
                                                 购物车
                </div>
            </div>
            <div id="brand" class="item">
                <a class="msg">
                    <i class="fa fa-envelope-o"></i>
                    <span>我的信息</span><b class="trangle"></b>
                </a>
            </div>  
        </div>
        <div id="closeBar"><!-- 将侧边栏收进去 -->
            <div>
                <i class="fa fa-remove"></i>
            </div>
        </div>
    </div><!-- sideBar结束 -->
    <div id="asset-content" class="nav-content"><!-- 侧边栏滑出内容 -->
        <div class="nav-con-close">
            <i class="fa fa-angle-left fa-2x"></i>
        </div>
        <div class="carContent clearfix">
            <h3>购物车</h3>
            <div class="carChoose">
                <div class="chooseTitle">
	                <h4>1号购物车</h4>
		            <a class="clear" href="#">[清空]</a>
		            <div class="content"></div>
                </div>
            </div>
            <div class="count">
	            <p class="sum">共<span>1</span>份，总计￥<span>5</span></p>
	            <button class="payment">结算</button>
            </div>
        </div>
    </div>
<!-- container 中部内容 -->
    <div class="container clearfix">
		<div class="wrapperBox">
			<div class="searchBox clearfix">
				<i class="fa fa-search"></i>
				<span></span><input id="change" class="searchInput" placeholder="搜索商家/美食...">
			</div>
		</div>
		<div class="classifyWrapper">
			<div class="classify" id="classify">
				<span>商家分类:</span>
				<a href="#">全部商家</a>
				<a href="#" onclick="showtext()">美食</a>
				<a href="#">快餐便当</a>
				<a href="#">特色菜系</a>
				<a href="#">异国料理</a>
				<a href="#">小吃宵夜</a>
				<a href="#">甜品饮品</a>
				<a href="#">果蔬生鲜</a>
				<a href="#">鲜花蛋糕</a>
				<a href="#">商店超市</a>
				<a href="#" >早餐</a>
				<a href="#">下午茶</a>
				<a href="#">晚餐</a>
				<a href="#" class="last">宵夜</a>
			</div>
			<div id="details">
				<a href="#">全部</a>
				<a href="#">简餐便当</a>
				<a href="#">地方菜系</a>
				<a href="#">小吃炸串</a>
				<a href="#">面食粥点</a>
				<a href="#">香锅冒菜</a>
				<a href="#">汉堡披萨</a>
			</div>
		</div>
		<div class="contentBox">
		<!-- ********商家********* -->
			
		</div><!-- *********商家结束********** -->
	</div>
	<ul id="paging-wrapper"></ul>
<!-- footer 页脚 -->
	<div class="footer clearfix">
		<div class="footerLinks help">
			<h3 class="linksTitle">用户帮助</h3>
			<a href="#">服务中心</a>
			<a href="#">常见问题</a>
		</div>
		<div class="footerLinks cooperation">
			<h3 class="linksTitle">商务合作</h3>
			<a href="#">我要开店</a>
			<a href="#">加盟指南</a>
			<a href="#">市场合作</a>
			<a href="#">开放平台</a>
		</div>
		<div class="footerLinks about">
			<h3 class="linksTitle">关于我们</h3>
			<a href="#">吃了么介绍</a>
			<a href="#">加入我们</a>
			<a href="#">联系我们</a>
			<a href="#">规则中心</a>
		</div>
		<div class="footerContect">
			<ul>
				<li>24小时客服热线：<a>1234567</a></li>
				<li>意见反馈：<a>12345@163.com</a></li>
				<li>
					关注我们：
					<a href="#"><i class="fa fa-qq"></i></a>
					<a href="#"><i class="fa fa-facebook"></i></a>
				</li>
			</ul>
		</div>
		<div class="footerQrCode clearfix">
			<a href="#"><img src="http://faas.elemecdn.com/desktop/media/img/appqc.95e532.png"></a>
			<div class="qrCodeRight">
				<h3>下载手机版</h3>
				<p>扫一扫，手机订餐更方便</p>
			</div>
		</div>
		<div class="footerCopyRight">
		           技术支持Team.S&nbsp;&nbsp;copyright&copy&nbsp;2004-2017&nbsp;&nbsp;Team.S 版权所有
		</div>
	</div>
	<!-- 页脚结束 -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/sidebar.js"></script>
    <script src="js/JqueryPaging-1.0.js"></script>
    <script>
    (function(){
    	
    	//结算
    	$('.payment').on("click",function(){
    		$.ajax({
    	        type: "post",
    	        url: 'PHP/api.php',
    	        dataType: 'json',
    	        data: {status:"payment"},
    	        success: function (data) {
    	        	if(data['status'] === 2){
    	        		alert("请登录后再结算！")
    	        		window.location.href = "login.html";
    	        	}else if(data['status'] === 3){
    	        		alert("购物是空的哦，快去选购一些食物吧！")
    	        	}else if(data['status'] === 1){
	        	    window.location.href = "order.php"
		        	}
    	        },
    	        error: function () {
    	           console.log("error")
    	        }
    	    })
    	})
    	
    	//获取购物车里的数据
    	var sum = 0
    	$.ajax({
            type: "post",
            url: 'PHP/api.php',
            dataType: 'json',
            data: {status:"shopcart",type:"get"},
            success: function (data) {
            	console.log(data)
            	
            		html = ""
            	for(var i = 0;i<data.length;i++){
            		sum += parseInt(data[i].price)
            		html += "<p>" + data[i].name + "</p>"
            	}
            	 
    			$(".content").html(html)		
           html = "共<span>" + data.length + "</span>份，总计￥<span>" + sum + "</span>"
    		$(".sum").html(html)
            },
            error: function () {
               console.log("error")
            }
        })
    	
    	//清除购物车里的数据
		$(".clear").on("click",function(){
			$.ajax({
		        type: "post",
		        url: 'PHP/api.php',
		        dataType: 'json',
		        data: {status:"shopcart",type:"delete"},
		        success: function (data) {
		        	if(data['state']){
		        		$(".content").html("")	
		        		sum = 0
		        		var html = "共<span>" +0+ "</span>份，总计￥<span>" + 0+ "</span>"
			$(".sum").html(html)
		        }
		        },
		        error: function () {
		           console.log("error")
		        }
		    })
		})
    	
    	 	
        //首页商家分类
        var navClassify = $("#classify a")
        navClassify.on("click",function(){
        	var _index = $(this).index() - 1,
        		_data = {}
        	console.log(_index)
        	
        	
        	if(_index === 0){
        		_data = {
        				status:"index",
        				currentPage:1	
        		}
        	}else{
        		_data = {
        				status:"index",
        				type:_index,
        				currentPage:1
        		}
        	}
        	
        	$.ajax({
                type: "post",
                url: 'PHP/api.php',
                dataType: 'json',
                data: _data,
                success: function (data) {
        			console.log(data)
        			var html = "";
        			console.log(data.length)
                   for(var i = 0;i <data.length - 1;i++){
        				html += "<a href='PHP/api.php?status=indextoshop&id="+data[i].shop_id+"'"+
        								"class='resBox clearfix'>"+
        								"<div class='restaurantLogo'>"+
        								"<img alt='"+data[i].shop_name+"' src='"+data[i].shop_img_path+"'>"+
        								"<span>30分钟</span>"+
        								"</div>"+
        								"<div class='resIntroduce'>"+
        								"<h3>"+data[i].shop_name+"</h3>"+
        								"<div class='starrating'>"
        							     var _starnum = 0
        							    if(data[i].shop_rating_count === 5){
        							        _starnum = 5
            							    }else{
            							        _starnum = Math.ceil(data[i].shop_rating_count/data[i].shop_sales)
                							    }

        			                    for(var j = 0;j <5;j++){
            			                    if(j<_starnum){
          			                    	   html += "<b class='starnum'></b>"
            			                        }else{
            			                        	html += "<b></b>"
                			                        }
            			                    } 
        								
        							html +="</div>"+
        								"<span class='sale'>总售"+data[i].shop_sales+"</span>"
        			   	if(data[i].shop_delivery_cost === "0"){
        								html +="<p>免配送费</p>"
        						}else{
        					html +="<p>配送费￥"+data[i].shop_delivery_cost+"</p>"
        						}
        								html +="</div></a>"
                   }
                   $('.contentBox').html(html)
                   //配置数据
                   var option = {
                       id: '#paging-wrapper',
                       pages: Math.ceil(data[data.length -1] / 8), //总页数
                       displayPage: 3, //只显示多少页
                       data:_data,
                       drawHtml:function(data){
                    	   var html = "";
                           for(var i = 0;i <data.length - 1;i++){
                        	   html += "<a href='PHP/api.php?status=indextoshop&id="+data[i].shop_id+"'"+
								"class='resBox clearfix'>"+
								"<div class='restaurantLogo'>"+
								"<img alt='"+data[i].shop_name+"' src='"+data[i].shop_img_path+"'>"+
								"<span>30分钟</span>"+
								"</div>"+
								"<div class='resIntroduce'>"+
								"<h3>"+data[i].shop_name+"</h3>"+
								"<div class='starrating'>"
							     var _starnum = 0
							    if(data[i].shop_rating_count === 5){
							        _starnum = 5
  							    }else{
  							        _starnum = Math.ceil(data[i].shop_rating_count/data[i].shop_sales)
      							    }

			                    for(var j = 0;j <5;j++){
  			                    if(j<_starnum){
			                    	   html += "<b class='starnum'></b>"
  			                        }else{
  			                        	html += "<b></b>"
      			                        }
  			                    } 
								
							html +="</div>"+
								"<span class='sale'>总售"+data[i].shop_sales+"</span>"
			   	if(data[i].shop_delivery_cost === "0"){
								html +="<p>免配送费</p>"
						}else{
					html +="<p>配送费￥"+data[i].shop_delivery_cost+"</p>"
						}
								html +="</div></a>"
	                          }
                          $('.contentBox').html(html)
                       }
                   }
                   //调用分页插件
                   new Paging(option)
                },
                error: function () {
                   console.log("error")
                }
            })
        })
        navClassify[0].click()


        $('.logname').on("mouseover",function(){
		$('.logout').css("display","inline-block");
		$('.logout').on("click",function(){
			$.ajax({
		        type: "post",
		        url: 'PHP/api.php',
		        dataType: 'json',
		        data: {status:"logout"},
		        success: function (data) {
		        	if(data['status'] === 1){
	        		    window.location.href = "index.php"
		        	  }
		        },
		        error: function () {
		           console.log("error")
		        }
		    })
		});

	  }).on("mouseout",function(){
		  $('.logout').css("display","none");
		  })
        
    })()
    </script>
</body>
</html>