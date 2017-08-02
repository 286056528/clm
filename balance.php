<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>吃了么_结算</title>
<link type="text/css" rel="stylesheet" href="css/main.css">
<link
	href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
	rel="stylesheet">
<link rel="shortcut icon" href="favicon.ico">
<script src="js/jquery-3.2.1.min.js"></script>
<style type="text/css">
.logout {
	position: absolute;
	display: none;
	top: 44px;
	right: 123px;
	width: 53px;
	height: 50px;
	text-align: center;
	background-color: #1e89e0;
	color: #fff;
	cursor: pointer;
}
.container {
	margin-top: 50px;
	min-width: 980px;
}
.balance_page {
	width: 980px;
	min-height: 530px;
	margin: 0px auto;
	position: relative;
}
.balance_page .order_list {
	width: 360px;
	background: white;
}
.order_list .restname {
	width: 340px;
	height: 60px;
	line-height: 60px;
	font-weight: 700;
	font-size: 18px;
	text-align: center;
}
.order_list .order_list_top, .order_list_note {
	width: 340px;
	height: 50px;
	margin: 0px auto;
	border-bottom: 1px dashed #ddd;
}
.order_list .order_list_top span {
	display: inline-block;
	width: 167px;
	height: 50px;
	line-height: 50px;
	font-weight: 600;
	font-size: 15px;
	color: #6d6d6d;
}
.order_list .order_list_top .pn_top {
	text-align: right;
}
.order_list .order_list_note .dn, .pn {
	display: inline-block;
	height: 50px;
	line-height: 50px;
	font-size: 14px;
	color: #6d6d6d;
}
.order_list .order_list_note .dn {
	width: 240px;
}
.order_list .order_list_note .pn {
	width: 90px;
	text-align: right;
}
.order_list .delive {
	width: 340px;
	height: 20px;
	margin: 0px auto;
}
.order_list .delive span {
	display: inline-block;
	height: 20px;
	line-height: 20px;
	font-size: 12px;
	color: #6d6d6d;
}
.order_list .compute {
	width: 360px;
	height: 60px;
}
.order_list .compute .ct, .cp {
	display: inline-block;
	width: 170px;
	height: 60px;
	line-height: 60px;
	font-weight: 600;
}
.order_list .compute .ct {
	text-indent: 20px;
}
.order_list .compute .cp {
	text-align: right;
}
.balance_page .order_list_bottom {
	width: 360px;
	height: 20px;
	background: url(images/order_bottom.png) no-repeat;
	background-size: 100%;
}
.balance_page .balance_list {
	width: 600px;
	height: 500px;
	background: white;
	position: absolute;
	right: 0px;
	top: 0px;
}
.balance_list .balance_list_top {
	width: 600px;
	height: 50px;
	margin-top: 20px;
}
.balance_list .balance_list_top span {
	display: inline-block;
	width: 80px;
	height: 50px;
	line-height: 50px;
	margin-left: 20px;
}
.balance_list .balance_list_top .add_address {
	float: right;
	top: 10px;
	right: 20px;
	width: 130px;
	height: 30px;
	text-indent: 5px;
	line-height: 30px;
	border-radius: 5px;
	font-size: 15px;
	color: #6d6d6d;
}
.balance_list .balance_list_top .add_address:hover {
	cursor: pointer;
}
.balance_list .balance_list_top b {
	display: inline-block;
	position: relative;
	top: 5px;
	left: 0px;
	width: 22px;
	height: 22px;
	background: url(images/add.png) no-repeat;
}
.balance_list .address_list {
	width: 560px;
	height: 101px;
	margin: 0px auto;
	border: 1px solid #1e89e0;
}
.balance_list .address_list .address_tie, .address_main {
	width: 520px;
	height: 50px;
	line-height: 50px;
	margin: 0px auto;
}
.balance_list .address_list .address_tie {
	border-bottom: 1px dashed #eee;
}
.address_list .address_tie .address_alter {;
	float: right;
	width: 80px;
	height: 50px;
	line-height: 50px;
	color: #1e89e0;
}
.address_tie .address_alter a {
	cursor: pointer;
}
.balance_list .guest_list {
	width: 560px;
	height: 100px;
	line-height: 100px;
	margin: 0px auto;
}
.balance_list .guest_list span {
	display: inline-block;
	width: 110px;
	height: 30px;
	line-height: 30px;
	font-size: 14px;
	text-indent: 20px;
	text-align: right;
}
.balance_list .guest_list .guest {
	display: inline-block;
	width: 350px;
	height: 30px;
	line-height: 30px;
	text-indent: 10px;
	font-size: 14px;
	color: #6d6d6d;
}
.balance_list .pay_list {
	width: 560px;
	height: 30px;
	line-height: 30px;
	margin: 0px auto;
}
.balance_list .pay_list .pay_sel {
	display: inline-block;
	width: 110px;
	height: 30px;
	line-height: 30px;
	font-size: 14px;
	text-align: right;
}
.balance_list .pay_list .pay_way {
	display: inline-block;
	width: 70px;
	height: 16px;
	line-height: 12px;
	font-size: 14px;
	text-align: center;
	color: #6d6d6d;
	border: 1px solid #1e89e0;
}
.balance_list .pay_list .pay_way:hover {
	cursor: pointer;
}
.balance_list .b_list {
	width: 600px;
	height: 50px;
	background: #46a3ff;
	margin-top: 50px;
	border-top: 1px dashed #eee;
	border-bottom: 1px dashed #eee;
}
.balance_list .balance {
	width: 600px;
	height: 50px;
	line-height: 50px;
	margin-top: 30px;
	position: relative;
}
.balance_list .balance .balance_button {
	width: 100px;
	height: 30px;
	position: absolute;
	top: 10px;
	right: 50px;
	line-height: 30px;
	font-weight: 600;
	color: white;
	text-align: center;
	background: #46a3ff;
	border-radius: 5px;
}
.balance_list .balance .balance_button:hover {
	cursor: pointer;
	background: #1e89e0;
}
.balance_list .balance .bt {
	display: inline-block;
	weight: 100px;
	height: 30px;
	text-indent: 10px;
	font-size: 14px;
	margin-left: 20px;
}
.balance_list .balance .bc {
	color: #1e89e0;
	font-size: 24px;
	font-weight: 700;
}
.alterBox {
	display: none;
	width: 300px;
	height: 300px;
	position: absolute;
	top: 80px;
	right: 150px;
	border: 1px solid #1e89e0;
	background: white;
}
.deleteBox {
	display: none;
	width: 300px;
	height: 220px;
	position: absolute;
	top: 80px;
	right: 150px;
	border: 1px solid #1e89e0;
	background: white;
}
.modifyBox {
	display: none;
	width: 400px;
	min-height: 300px;
	position: absolute;
	top: 80px;
	right: 100px;
	border: 1px solid #1e89e0;
	background: white;
}
.alterBoxTitle, .deleteBoxTitle, .modifyBoxTitle {
	width: 100%;
	height: 40px;
	line-height: 40px;
	font-weight: 600;
	text-indent: 10px;
	font-size: 15px;
	color: white;
	background: #46a3ff;
}
.abc, .dbc, .mbc {
	display: block;
	width: 20px;
	height: 15px;
	line-height: 12px;
	font-size: 20px;
	color: white;
	text-align: center;
	position: absolute;
	top: 12px;
	right: 5px;
	border-radius: 2px;
	border: 1px solid #ddd;
}
.abc:hover, .dbc:hover, .mbc:hover {
	cursor: pointer;
	background: white;
	color: black;
}
.alterBox .readdress, .rename, .rephone {
	display: block;
	width: 270px;
	height: 35px;
	line-height: 35px;
	margin: 25px auto;
}
.btnAddress, .btnDelete {
	width: 80px;
	height: 30px;
	line-height: 30px;
	margin: 0px auto;
	font-size: 15px;
	color: white;
	text-align: center;
	background: #46a3ff;
	border-radius: 5px;
}
.btnAddress:hover, .btnDelete:hover {
	cursor: pointer;
	background: #1e89e0;
}
.deleteBox p {
	margin: 50px auto;
	text-align: center;
	color: #6d6d6d;
}
.modifyBox .modify_address_list {
	width: 390px;
	min-height: 40px;
	line-height: 40px;
	padding-left: 10px;
	margin: 5px auto;
	border-bottom: 1px dashed #ddd;
}
.modifyBox .modify_address_list:hover {
	background: #f0f0f0;
	cursor: pointer;
}
</style>
<script type="text/javascript">
$().ready(function(){
	    var addressData,  //地址信息
	        verifyadress  //确认地址
        //显示
    	$.ajax({
            type: "post",
            url: 'php/api.php',
            dataType: 'json',
            data: {status:"payment",type:"show"},
            success: function (data) {
                var html = "<div class='restname'>"+data[0][0].shopName+"</div>"+
                           "<div class='order_list_top'>"+
                           "<span class='dn_top'>菜品</span>"+
                    	   "<span class='pn_top'>价格/份数</span>"+
                  		   "</div>"
                   	    var sum = 0  //总价
                   	    for(var i = 0;i <data[0].length;i++){
                      	     html += "<div class='order_list_note'>"+
                                 	"<div class='dn'>"+data[0][i].name+"</div>"+
                                	"<div class='pn'>￥<span class='unit_price'>"+data[0][i].price+"</span>*<span class='unit_number'>"+data[0][i].num+"</span></div>"+
                              		"</div>"
                              		sum += data[0][i].price * data[0][i].num
                       	    }
           	        html += "<div class='compute'>"+
                   			"<span class='ct'>合计</span>"+
                   			"<span class='cp'>￥<span class='compute_price'>"+sum+"</span></span>"+
                    		"</div>"
                   $('.order_list').html(html)
                   
                   addressData = data[1]
            },
            error: function () {
               console.log("error")
            }
        })

	//添加地址
	$(".add_address").click(function(){
		$(".alterBox").show();		
	});
   //确认增加地址
   $('.btnAddress').on("click",function(){

	    var adressData = {
	        	    name:$('.rename').val(),
	        	    phone:$('.rephone').val(),
	        	    address:$('.readdress').val()
	                }
	        
	    	$.ajax({
	            type: "post",
	            url: 'php/api.php',
	            dataType: 'json',
	            data: {status:"addaddress",adressData:adressData},
	            success: function (data) {
	               if(data['status'] === 1){
	           	      $('.alterBox').hide()
	                   }
	            },
	            error: function () {
	               console.log("error")
	            }
	        })
	 })
	//选择地址
	$(".modify").click(function(){
		$(".modifyBox").show();
	    var html = ""
		    for(var i=0;i<addressData.length;i++){
		    	  html += "<div class='modify_address_list'>"+
		    	          "<span class='modify_name'>姓名："+addressData[i].address_name+"</span>&nbsp;&nbsp;&nbsp"+
		    	          "<span class='modify_phone'>电话："+addressData[i].address_phone+"</span>"+
		    	          "<p class='modify_address'>地址："+addressData[i].address_content+"</p>"+
		    	          "</div>"
		    }
	    $('.modifyBox').append(html)
	    //确认地址
		$(".modify_address_list").on("dblclick",function(){
		    console.log($(this).index())
		    console.log(addressData)
			var _index =  $(this).index() - 2,
			    html = "<div class='address_tie'>"+
        				"<span class='address_name'>姓名</span>&nbsp;"+addressData[_index].address_name+"先生/女士&nbsp;&nbsp;&nbsp;<span class='phone_number'>电话号码："+addressData[_index].address_phone+"</span>"+
        				"<div class='address_alter'><a class='modify'>选择地址</a></div>"+
            			"</div>"+
            			"<div class='address_main'>地址："+addressData[_index].address_content+"</div>"
            			
            $('.address_list').html(html) 
			$(".modifyBox").hide();
		    verifyadress = addressData[_index]
		});
	});
	$(".mbc").click(function(){
		$(".modifyBox").hide();
	});
	//删除地址
	$(".delete").click(function(){
		$(".deleteBox").show();
	});
	$(".dbc").click(function(){
		$(".deleteBox").hide();
	});

    //确认付款
   $('.balance_button').on("click",function(){
	       var message = $('.guest').val()
	           
    	        	   $.ajax({
    	                   type: "post",
    	                   url: 'php/api.php',
    	                   dataType: 'json',
    	                   data: {status:"payment",type:"ok",verifyAdress:verifyadress},
    	                   success: function (data) {
    	                      if(data['status'] === 1){  //成功后才开始查询
    	                    	 var timeout = setInterval(function(){ 
        	                    	 console.log("开始查询")
    	                    		  $.ajax({
       	           	                   type: "post",
       	           	                   url: 'PHP/api.php',
       	           	                   dataType: 'json',
       	           	                   data: {status:"payment",type:"wait"},
       	           	                   success: function (data) {
       	           	                      if(data['status'] === 1){
           	           	                      clearInterval(timeout)
       	           	                  	      window.location.href = "order.php"
       	           	                          }
       	           	                   }
       	           	               })
        	                    	  },4000)
    	                          }
    	                   },
    	                   error: function () {
    	                      console.log("error")
    	                   }
    	               })
	   }) 
	$('.logname').on("mouseover",function(){
		$('.logout').css("display","inline-block");
		$('.logout').on("click",function(){
			$.ajax({
		        type: "post",
		        url: 'php/api.php',
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
});
</script>
</head>
<body>
	<div class="topBar clearfix">
		<h1 class="topBarLogo">
			<b></b>吃了么
		</h1>
		<div class="topBarList">
			<a href="index.php" class="homePage">首页</a> <a href="order.php">我的订单</a>
			<a href="#">加盟合作</a>
		</div>
		<nav class="topBarNav">
			<a href="#"><i class="fa fa-user-o"></i>服务中心</a> <a href="#">规则中心</a>
			<a href="#"><i class="fa fa-mobile"></i>手机应用</a>
		</nav>
		<div class="topBarNavLogin">
		<?php if(empty($_SESSION['userId'])){?>
			   <a href="login.html"><i class="fa fa-user"></i>登录/注册</a>
			   <?php }else{?>
			    <div class='logname'>
				<a href="order.php"><i class="fa fa-user"></i><?php echo $_SESSION['name'] ?></a>
				<span class="logout">退出</span>
			</div>
			   <?php }?>
	</div>
	</div>
	<div class="container">
		<div class="balance_page">
			<div>
				<div class="order_list">
					
				</div>
				<div class="order_list_bottom"></div>
			</div>
			<div class="balance_list">
				<div class="balance_list_top">
					<span>送餐详情</span>
					<div class="add_address">
						<b></b> 添加新地址
					</div>
				</div>
				<div class="address_list">
					<div class="address_tie">
						<span class="address_name">姓名</span>&nbsp;先生/女士&nbsp;&nbsp;&nbsp;<span
							class="phone_number">电话号码</span>
						<div class="address_alter">
							<a class="modify">选择地址</a>
						</div>
					</div>
					<div class="address_main">地址</div>
				</div>
				<div class="guest_list">
					<span>给商家留言：</span> <input type="text" class="guest"
						placeholder="口味要求/派送时间..." />
				</div>
				<div class="pay_list">
					<span class="pay_sel">付款方式：</span> <span class="pay_way">在线支付</span>
				</div>
				<div class="b_list"></div>
				<div class="balance">
					<div class="balance_button">立即付款</div>
				</div>
			</div>
			<div class="alterBox">
				<div class="alterBoxTitle">新地址</div>
				<b class="abc">-</b> <input type="text" class="rename" value=""
					placeholder="请输入姓名" /> <input type="text" class="rephone" value=""
					placeholder="请输入电话" /> <input type="text" class="readdress"
					value="" placeholder="请输入地址" />
				<div class="btnAddress">提 交</div>
			</div>
			<div class="deleteBox">
				<div class="deleteBoxTitle">删除地址</div>
				<b class="dbc">-</b>
				<p>确定删除该地址吗？</p>
				<div class="btnDelete">确 定</div>
			</div>
			<div class="modifyBox">
				<div class="modifyBoxTitle">选择地址</div>
				<b class="mbc">-</b>
				
			</div>
		</div>
	</div>
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
</body>
</html>