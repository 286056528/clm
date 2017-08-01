<?php
session_start();
if (empty($_SESSION['userId'])) {
    header("location:login.html");
}
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>吃了么_订单</title>
<link type="text/css" rel="stylesheet" href="css/main.css">
<link
	href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
	rel="stylesheet">
<link rel="shortcut icon" href="favicon.ico">
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/JqueryPaging-1.0.js"></script>
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

.container {
	margin-top: 50px;
	min-width: 980px;
}

.order_page {
	width: 980px;
	margin: 0px auto;
	position: relative;
}

.order_page .view_list {
	display: inline-block;
	width: 170px;
	height: 550px;
	padding-top: 50px;
	background: white;
}

.view_list .list_nav {
	width: 170px;
	height: 50px;
}

.view_list .list_nav:hover {
	cursor: pointer;
	background: #1e89e0;
}

.view_list .list_nav b {
	display: inline-block;
	width: 30px;
	height: 30px;
	margin-top: 10px;
	margin-left: 20px;
	border-radius: 100px;
}

.view_list .list_nav .order_img {
	background: url(images/order.png) no-repeat;
}

.view_list .list_nav .account_img {
	background: url(images/account.png) no-repeat;
}

.view_list .list_nav .collect_img {
	background: url(images/order.png) no-repeat;
}

.view_list .list_nav span {
	display: inline-block;
	position: relative;
	top: -10px;
	left: 5px;
	width: 80px;
	height: 30px;
	font-size: 14px;
	font-weight: 600;
	line-height: 30px;
}

.view_list .list_nav span:hover {
	color: white;
}

/* 当前订单、三个月订单 */
.order_page .order_list {
	display: inline-block;
	float: right;
	width: 800px;
	min-height: 600px;
	margin-bottom: 50px;
	background: white;
}

.order_page .orders_list {
	display: none;
	float: right;
	width: 800px;
	min-height: 600px;
	margin-bottom: 50px;
	background: white;
}

.order_page .order_list .order_list_top {
	width: 100%;
	height: 50px;
	border-bottom: 1px solid #eee;
}

.order_page .orders_list .orders_list_top {
	width: 100%;
	height: 50px;
	border-bottom: 1px solid #eee;
}

.order_list .order_list_top span {
	display: inline-block;
	height: 50px;
	line-height: 50px;
	font-size: 14px;
	color: #6d6d6d;
}

.orders_list .orders_list_top span {
	display: inline-block;
	height: 50px;
	line-height: 50px;
	font-size: 14px;
	color: #6d6d6d;
}

.order_list .order_list_top .content_top {
	width: 420px;
	margin-left: 20px;
}

.order_list .order_list_top .phone_top {
	width: 130px;
}

.order_list .order_list_top .payment_top {
	width: 70px;
}

.order_list .order_list_top .operate_top {
	width: 100px;
	text-align: center;
}

.orders_list .orders_list_top .content_top {
	width: 420px;
	margin-left: 20px;
}

.orders_list .orders_list_top .phone_top {
	width: 130px;
}

.orders_list .orders_list_top .payment_top {
	width: 70px;
}

.orders_list .orders_list_top .operate_top {
	width: 100px;
	text-align: center;
}

.order_page .order_list .order_list_note {
	width: 100%;
	height: 111px;
}

.order_page .orders_list .orders_list_note {
	width: 100%;
	height: 111px;
}

.order_page .orders_list .orders_list_note:hover {
	cursor: pointer;
	background: #fcfcfc;
}

.order_list .order_list_note .note_main {
	width: 760px;
	height: 110px;
	margin-left: 20px;
	position: relative;
	border-bottom: 1px dashed #ddd;
}

.orders_list .orders_list_note .notes_main {
	width: 760px;
	height: 110px;
	margin-left: 20px;
	position: relative;
	border-bottom: 1px dashed #ddd;
}

.note_main .content, .phone, .payment {
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
	border: 1px solid #ddd;
}

.note_main .content .restarant {
	float: left;
	width: 300px;
	height: 80px;
	margin-left: 10px;
	margin-top: 15px;
}

.notes_main .contents, .phones, .payments {
	float: left;
	height: 110px;
	margin-right: 5px;
	line-height: 110px;
}

.notes_main .contents {
	width: 420px;
}

.notes_main .contents b {
	float: left;
	width: 80px;
	height: 80px;
	margin-top: 15px;
	border: 1px solid #ddd;
}

.notes_main .contents .restarants {
	float: left;
	width: 300px;
	height: 80px;
	margin-left: 10px;
	margin-top: 15px;
}

.restarant .restname {
	width: 300px;
	height: 40px;
	text-indent: 20px;
	font-weight: 700;
	line-height: 40px;
}

.restarants .restnames {
	width: 300px;
	height: 40px;
	text-indent: 20px;
	font-weight: 700;
	line-height: 40px;
}

.restarant .restmes {
	width: 300px;
	height: 40px;
	line-height: 40px;
}

.restarants .restmess {
	width: 300px;
	height: 40px;
	line-height: 40px;
}

.restarant .restmes .order_time, .order_number {
	display: inline-block;
	font-size: 12px;
}

.restarant .restmes .order_time {
	width: 120px;
}

.restarant .restmes .order_number {
	width: 170px;
}

.restarants .restmess .order_times, .order_numbers {
	display: inline-block;
	font-size: 12px;
}

.restarants .restmess .order_times {
	width: 120px;
}

.restarants .restmess .order_numbers {
	width: 170px;
}

.note_main .phone {
	font-size: 14px;
	width: 130px;
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
	right: 20px;
	border: 1px solid #ddd;
	border-radius: 3px;
}

.note_main .operate:hover {
	border: none;
	background: #1e89e0;
	color: white;
	cursor: pointer;
}

.notes_main .phones {
	font-size: 14px;
	width: 130px;
}

.notes_main .payments {
	font-size: 18px;
	font-weight: 500;
	width: 70px;
}

.notes_main .operates {
	width: 80px;
	height: 30px;
	line-height: 30px;
	text-align: center;
	font-size: 14px;
	position: absolute;
	top: 40px;
	right: 20px;
	border: 1px solid #ddd;
	border-radius: 3px;
}

.notes_main .operates:hover {
	border: none;
	background: #1e89e0;
	color: white;
	cursor: pointer;
}

.order_list .estimate_list {
	width: 750px;
	position: relative;
	margin: 0px auto;
	border: 1px solid #ddd;
}

.order_list .estimate_list .order_main {
	width: 350px;
	min-height: 330px;
	border-right: 1px solid #ddd;
}

.orders_list .estimates_list {
	display: none;
	width: 750px;
	position: relative;
	margin: 0px auto;
	border: 1px solid #ddd;
}

.orders_list .estimates_list .orders_main {
	width: 350px;
	min-height: 330px;
	border-right: 1px solid #ddd;
}

.estimate_list p {
	width: 100%;
	height: 50px;
	line-height: 60px;
	color: #6d6d6d;
	text-indent: 20px;
	font-weight: 600;
	font-size: 15px;
}

.estimates_list p {
	width: 100%;
	height: 50px;
	line-height: 60px;
	color: #6d6d6d;
	text-indent: 20px;
	font-weight: 600;
	font-size: 15px;
}

.estimate_list .order_main  .dish_list {
	width: 310px;
	height: 30px;
	margin: 0px auto;
	line-height: 30px;
	font-size: 14px;
}

.estimates_list .orders_main .dishs_list {
	width: 310px;
	height: 30px;
	margin: 0px auto;
	line-height: 30px;
	font-size: 14px;
}

.order_main .dish_list .name {
	display: inline-block;
	width: 180px;
}

.order_main .dish_list .number {
	display: inline-block;
	width: 30px;
}

.order_main .dish_list .price {
	display: inline-block;
	width: 70px;
}

.orders_main .dishs_list .names {
	display: inline-block;
	width: 180px;
}

.orders_main .dishs_list .numbers {
	display: inline-block;
	width: 30px;
}

.orders_main .dishs_list .prices {
	display: inline-block;
	width: 70px;
}

.estimate_list .order_main .real_list {
	width: 310px;
	height: 80px;
	margin: 20px auto;
	line-height: 80px;
	text-align: right;
	font-size: 14px;
	border-top: 1px dashed #ddd;
}

.estimates_list .orders_main .reals_list {
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

.reals_list .reals_pay {
	font-size: 24px;
	font-weight: 600;
	color: #1e89e0;
}

.order_list .estimate_list .estimate_main {
	position: absolute;
	top: 0px;
	right: 0px;
	width: 400px;
}

.estimate_main .estimate_level {
	width: 380px;
	height: 60px;
	margin: 0px auto;
	line-height: 50px;
}

.orders_list .estimates_list .estimates_main {
	position: absolute;
	top: 0px;
	right: 0px;
	width: 400px;
}

.estimates_main .estimates_level {
	width: 380px;
	height: 60px;
	margin: 0px auto;
	line-height: 50px;
}

.estimate_main .estimate_level .wrapper {
	height: 20px;
	padding: 5px;
	width: 130px;
	line-height: 20px;
	float: left;
	display: inline-block;
	margin-left: 12px;
}

.estimate_main .estimate_level .wrapper a {
	float: left;
	width: 24px;
	height: 20px;
	background: url(images/stars.png) 0 -20px no-repeat;
}

.estimate_main span {
	display: inline-block;
	font-size: 15px;
	font-weight: 600;
	float: left;
	color: #6d6d6d;
}

.estimate_main .estimate_level span {
	margin-left: 10px;
}

.estimate_main .estimate_level a {
	display: inline-block;
	width: 50px;
	height: 30px;
	line-height: 30px;
	text-align: center;
	font-size: 15px;
	margin-top: 8px;
	margin-right: 2px;
	padding: 0;
	float: left;
}

.estimates_main span {
	display: inline-block;
	font-size: 15px;
	font-weight: 600;
	float: left;
	color: #6d6d6d;
}

.estimates_main .estimates_level span {
	margin-left: 10px;
}

.estimates_main a {
	display: inline-block;
	width: 50px;
	height: 30px;
	line-height: 30px;
	text-align: center;
	font-size: 15px;
	margin-top: 8px;
	margin-right: 2px;
	padding: 0;
	float: left;
}

.estimate_main .estimate_text {
	width: 360px;
	height: 160px;
	margin: 0px auto;
}

.estimates_main .estimates_text {
	width: 360px;
	height: 160px;
	margin: 0px auto;
}

.estimate_main .estimate {
	width: 360px;
	height: 120px;
	font-size: 14px;
	resize: none;
}

.estimate_main .btnEstimate {
	width: 100px;
	height: 30px;
	line-height: 30px;
	margin: 0px auto;
	font-size: 15px;
	font-weight: 600;
	color: white;
	text-align: center;
	background: #46a3ff;
	border-radius: 5px;
}

.estimate_main .btnEstimate:hover {
	cursor: pointer;
	background: #1e89e0;
}

.ABC {
	color: #1e89e0;
}

.order_page .account_list, .collect_list {
	display: none;
	width: 800px;
	height: 600px;
	position: absolute;
	top: 0px;
	right: 0px;
	background: white;
}

.user_list .user_icon {
	width: 720px;
	height: 100px;
	margin: 0px auto;
	margin-top: 50px;
}

.user_list .user_icon span {
	display: inline-block;
	width: 100px;
	height: 30px;
	position: relative;
	left: 0px;
	top: -45px;
	line-height: 30px;
}

.user_list .user_icon b {
	display: inline-block;
	width: 100px;
	height: 100px;
	border-radius: 100px;
	border: 1px solid #eee;
}

.user_list .user_name, .user_phone {
	width: 720px;
	height: 50px;
	line-height: 50px;
	margin: 0px auto;
}

.user_list .username, .userphone {
	color: black;
	font-weight: 500;
	margin-left: 20px;
}

.btnUser {
	width: 80px;
	height: 30px;
	line-height: 30px;
	margin-top: 30px;
	margin-left: 100px;
	font-size: 15px;
	color: white;
	text-align: center;
	background: #46a3ff;
	border-radius: 5px;
}

.btnUser:hover {
	cursor: pointer;
	background: #1e89e0;
}

.account_list .repwd_list {
	display: none;
	width: 720px;
	margin: 0px auto;
	margin-top: 50px;
}

.repwd_list span {
	display: inline-block;
	width: 80px;
	height: 40px;
	line-height: 40px;
}

.repwd_list input {
	width: 220px;
	height: 30px;
	text-indent: 10px;
	border: 1px solid #46a3ff;
}

.btnSure, .btnCancel {
	display: inline-block;
	width: 80px;
	height: 30px;
	line-height: 30px;
	margin-top: 30px;
	margin-left: 40px;
	font-size: 15px;
	color: white;
	text-align: center;
	background: #46a3ff;
	border-radius: 5px;
}

.btnSure:hover, .btnCancel:hover {
	cursor: pointer;
	background: #1e89e0;
}

.onb {
	background: #1e89e0;
}

.onc {
	color: white;
}
</style>
<script type="text/javascript">

	  
	  
var starnum = 0
$().ready(function(){
	$(".order_nav").addClass("onb");
	$(".s0").addClass("onc");
	$(".order_nav").click(function(){
		$(".order_list").show();$(".order_nav").addClass("onb");$(".s0").addClass("onc");
		$(".orders_list").hide();$(".orders_nav").removeClass("onb");$(".s1").removeClass("onc");
		$(".account_list").hide();$(".account_nav").removeClass("onb");$(".s2").removeClass("onc");
		$(".collect_list").hide();$(".collect_nav").removeClass("onb");$(".s3").removeClass("onc");
	});
	$(".orders_nav").click(function(){
		$(".order_list").hide();$(".order_nav").removeClass("onb");$(".s0").removeClass("onc");
		$(".orders_list").show();$(".orders_nav").addClass("onb");$(".s1").addClass("onc");
		$(".account_list").hide();$(".account_nav").removeClass("onb");$(".s2").removeClass("onc");
		$(".collect_list").hide();$(".collect_nav").removeClass("onb");$(".s3").removeClass("onc");
	});
	$(".account_nav").click(function(){
		$(".order_list").hide();$(".order_nav").removeClass("onb");$(".s0").removeClass("onc");
		$(".orders_list").hide();$(".orders_nav").removeClass("onb");$(".s1").removeClass("onc");
		$(".account_list").show();$(".account_nav").addClass("onb");$(".s2").addClass("onc");
		$(".collect_list").hide();$(".collect_nav").removeClass("onb");$(".s3").removeClass("onc");
	});
	$(".collect_nav").click(function(){
		$(".order_list").hide();$(".order_nav").removeClass("onb");$(".s0").removeClass("onc");
		$(".orders_list").hide();$(".orders_nav").removeClass("onb");$(".s1").removeClass("onc");
		$(".account_list").hide();$(".account_nav").removeClass("onb");$(".s2").removeClass("onc");
		$(".collect_list").show();$(".collect_nav").addClass("onb");$(".s3").addClass("onc");
	});
	$(".btnEstimate").click(function(){
		
	});

	$(".A").click(function(){
		$(".A").addClass("ABC");
		$(".B").removeClass("ABC");
		$(".C").removeClass("ABC");
		console.log("ghtr");
	});
	$(".B").click(function(){
		$(".B").addClass("ABC");
		$(".A").removeClass("ABC");
		$(".C").removeClass("ABC");
	});
	$(".C").click(function(){
		$(".C").addClass("ABC");
		$(".A").removeClass("ABC");
		$(".B").removeClass("ABC");
	});
	$(".btnUser").click(function(){
		$(".repwd_list").show();
		$(".user_list").hide();
	});
	$(".btnSure").click(function(){
		$(".repwd_list").hide();
		$(".user_list").show();
	});
	$(".btnCancel").click(function(){
		$(".repwd_list").hide();
		$(".user_list").show();
	});
});


$().ready(function(){
	
	 var   bid = 0,  //商家id
	    commentarray = new Array(),
	    orderid = 0
	$.ajax({
		type:'post',
		url:'PHP/api.php',
		dataType:'json',
		data:{status:'order',type:'orderdata'},
		success:function(data){
			if(data.length === 0){
			     $('.estimate_list').css("display","none")
			     $('.order_list_note').css("display","none") 
				}else{
        			console.log(data)
        			orderid = data[0].order_id
        			bid = data[0].order_b_id
        			$(".restname").html(data[0].order_b_name);
        			$(".order_time").html(data[0].order_time);
        			$(".order_number").html("订单号："+data[0].order_id);
        			$(".phones").html(data[0].order_b_phone);
        			$(".pmp").html(data[0].order_total_prices);
        			$(".real_pay").html(data[0].order_total_prices);
        			var str0=data[0].order_food_id;
        			var str1=data[0].order_food_name;
        			var str2=data[0].order_food_price;
        			var str3=data[0].order_food_num;
        			var fid = str0.match(/(\d+)/g);
        			var foodname=str1.match(/([\u4e00-\u9fa5]+)/g);
        			var foodprice=str2.match(/(\d+)/g);
        			var foodnum=str3.match(/(\d+)/g);
        			var html="";
        			console.log(foodname)
        			
        
        			for(var i=0;i<foodname.length;i++){
        				html +=	"<div class='dish_list'><span class='name'>"+foodname[i]+"</span>"+
        				"<span class='number'>"+foodnum[i]+"</span>￥<span class='price'>"+foodprice[i]+"</span></div>"
        				var comment = {
        						fid:0,
        						fname:""
        						}
        				comment.fid = fid[i]
        				comment.fname = foodname[i]
        				commentarray.push(comment)
        			}
        			$(".wrapperfood").html(html)

		}
			
		},
		error:function(){
			alert("服务器繁忙");
		},
	})
	
$(".operate").on("click",function(){
	$.ajax({
		type:'post',
		url:'PHP/api.php',
		dataType:'json',
		data:{status:'order',type:'delete',order_id:orderid},
		success:function(data){
			if(data['status'] === 1){    
				window.location.href = "order.php"
				}
		},
		error:function(){
			alert("服务器繁忙");
		},
	})
	
})	
$(".btnEstimate").click(function(){
	console.log(starnum)
	var comment=$(".estimate").val();
	var name=$(".restname").html();
	var names=$(".names").html();
	$.ajax({
		type:'post',
		url:'PHP/api.php',
		dataType:'json',
		data:{status:'order',type:'submit',order_id:orderid,b_id:bid,foodcontent:commentarray,num:starnum,comment:comment},
		success:function(sb){
			if(sb['status']===1){
				alert("订单评价成功");
				window.location.href="order.php"
			}
		},
		error:function(){
			alert("系统繁忙");
		},
	})
});

 function orderShow(data){
	 var html = ""
		 console.log(data)
	 for(var i=0;i<data.length - 1;i++){
		 html += "<div class='orders_list_note'>"+
			"<div class='notes_main'>"+
			 	"<div class='contents'>"+
					"<b></b>"+
					"<div class='restarants'>"+
						"<div class='restnames'>"+data[i].order_b_name+"</div>"+
						"<div class='restmess'>"+
							"<div class='order_times'>"+data[i].order_time+"</div>"+
							"<div class='order_numbers'>订单号:<span class='order_number'>"+data[i].order_id+"</span></div>"+
						"</div>"+
					"</div>"+
				"</div>"+
				"<div class='phones'>"+data[i].order_b_phone+"</div>"+
				"<div class='payments'>￥<span class='pmps'>"+data[i].order_total_prices+"</span></div>"+
			"</div>"+
		"</div>"
		var str1=data[i].order_food_name;
		var str2=data[i].order_food_price;
		var str3=data[i].order_food_num;
		var foodname=str1.match(/([\u4e00-\u9fa5]+)/g);
		var foodprice=str2.match(/(\d+)/g);
		var foodnum=str3.match(/(\d+)/g);
		html +="<div class='estimates_list'>"+
			"<div class='orders_main'>"+
				"<p>订单详情</p>"+
				"<div class='wrapper'>"

				for(var a=0;a<foodname.length;a++){
       			html +="<div class='dishs_list'>"+
       					"<span class='names'>"+foodname[a]+"</span>"+
       					"<span class='numbers'>"+foodnum[a]+"</span>"+
       					"￥<span class='prices'>"+foodprice[a]+"</span>"+
       				"</div>"
     				}
     				
     			html +=	"</div>"+
     				"<div class='reals_list'>"+
     					"<div class='reals'>实际支付：￥<span class='reals_pay'>"+data[i].order_total_prices+"</span></div>"+
     				"</div>"+
     			"</div>"+
     			"<div class='estimates_main'>"+
     				"<div class='estimates_show'>"+
     					"<p>我的评价</p>"+
     					"<div class='estimates_level'>"+
     						"<span>总体评价</span>"
     						var ratingstr = ""
  	     						if(data[i].order_rating_count  <=1){
  	     							ratingstr = "差评"
      	     						}else if(data[i].order_rating_count  <=3){
      	     							ratingstr = "中评"
          	     						}else if(data[i].order_rating_count  <=5 && data[i].order_rating_count >=4){
          	     							ratingstr = "好评"
              	     						}
  	     						html +="<a class='estimates_a'>"+ratingstr+"</a>"+
     					"</div>"+
     				"</div>"+
     			"</div>"+
     		"</div>"
	}
	 $('.all').html(html)
	 var estimates_list = $(".estimates_list"),
	     orders_list_note = $(".orders_list_note")
	 orders_list_note.on("click",function(){	
			var _index = $(this).index() / 2
			  $(estimates_list[_index]).toggle();
		});
 }

 
$(".s1").click(function(){
	console.log("点击了他")
	$.ajax({
		type:'post',
		url:'PHP/api.php',
		dataType:'json',
		data:{status:'order',type:'oldorder',currentPage:1},
		success:function(data){
			console.log(data)
				   orderShow(data)		
			
		          var _data = {
    			   status:"order",
    			   type:"oldorder",
    			   currentPage:1
			   
	          }
                     //配置数据
                   var option = {
                       id: '#paging-wrapper',
                       pages: Math.ceil(data[data.length -1] / 5), //总页数
                       displayPage: 3, //只显示多少页
                       data:_data,
                       drawHtml:function orderShow(data){
                    	   var html = ""
                  			 console.log(data)
                  		 for(var i=0;i<data.length - 1;i++){
                  			 html += "<div class='orders_list_note'>"+
                  				"<div class='notes_main'>"+
                  				 	"<div class='contents'>"+
                  						"<b></b>"+
                  						"<div class='restarants'>"+
                  							"<div class='restnames'>"+data[i].order_b_name+"</div>"+
                  							"<div class='restmess'>"+
                  								"<div class='order_times'>"+data[i].order_time+"</div>"+
                  								"<div class='order_numbers'>订单号:<span class='order_number'>"+data[i].order_id+"</span></div>"+
                  							"</div>"+
                  						"</div>"+
                  					"</div>"+
                  					"<div class='phones'>"+data[i].order_b_phone+"</div>"+
                  					"<div class='payments'>￥<span class='pmps'>"+data[i].order_total_prices+"</span></div>"+
                  				"</div>"+
                  			"</div>"
                  			var str1=data[i].order_food_name;
                  			var str2=data[i].order_food_price;
                  			var str3=data[i].order_food_num;
                  			var foodname=str1.match(/([\u4e00-\u9fa5]+)/g);
                  			var foodprice=str2.match(/(\d+)/g);
                  			var foodnum=str3.match(/(\d+)/g);
                  			html +="<div class='estimates_list'>"+
                  				"<div class='orders_main'>"+
                  					"<p>订单详情</p>"+
                  					"<div class='wrapper'>"

                  					for(var a=0;a<foodname.length;a++){
                  	       			html +="<div class='dishs_list'>"+
                  	       					"<span class='names'>"+foodname[a]+"</span>"+
                  	       					"<span class='numbers'>"+foodnum[a]+"</span>"+
                  	       					"￥<span class='prices'>"+foodprice[a]+"</span>"+
                  	       				"</div>"
                  	     				}
                  	     				
                  	     			html +=	"</div>"+
                  	     				"<div class='reals_list'>"+
                  	     					"<div class='reals'>实际支付：￥<span class='reals_pay'>"+data[i].order_total_prices+"</span></div>"+
                  	     				"</div>"+
                  	     			"</div>"+
                  	     			"<div class='estimates_main'>"+
                  	     				"<div class='estimates_show'>"+
                  	     					"<p>我的评价</p>"+
                  	     					"<div class='estimates_level'>"+
                  	     						"<span>总体评价</span>"
                  	     						var ratingstr = ""
                  	     						if(data[i].order_rating_count  <=1){
                  	     							ratingstr = "差评"
                      	     						}else if(data[i].order_rating_count  <=3){
                      	     							ratingstr = "中评"
                          	     						}else if(data[i].order_rating_count  <=5 && data[i].order_rating_count >=4){
                          	     							ratingstr = "好评"
                              	     						}
                  	     						html +="<a class='estimates_a'>"+ratingstr+"</a>"+
                  	     					"</div>"+
                  	     				"</div>"+
                  	     			"</div>"+
                  	     		"</div>"
                  		}
                  		 $('.all').html(html)
                			 var estimates_list = $(".estimates_list"),
                		     orders_list_note = $(".orders_list_note")
                		 orders_list_note.on("click",function(){	
                				var _index = $(this).index() / 2
                				  $(estimates_list[_index]).toggle();
                			});
                				 }
                   }
                   //调用分页插件
                   new Paging(option)
		
		},
		error:function(){
			alert("系统繁忙");
		},
	})
});
})

window.onload = function(){
//order.html:1102 GET http://faas.elemecdn.com/desktop/media/img/appqc.95e532.png net::ERR_INTERNET_DISCONNECTED
	var star = document.getElementsByClassName('a1');
	var oDiv = document.getElementsByClassName('div')[0];
	var temp = 0;
	
	for(var i = 0, len = star.length; i < len; i++){
		star[i].index = i;
		
		star[i].onmouseover = function(){
			clear();
			for(var j = 0; j < this.index + 1; j++){
				star[j].style.backgroundPosition = '0 0';
			}
		}
		
		star[i].onmouseout = function(){
			for(var j = 0; j < this.index + 1; j++){
				star[j].style.backgroundPosition = '0 -20px';
			}
			current(temp);
		}
		
		star[i].onclick = function(){
			temp = this.index + 1;
			starnum = temp
			console.log(temp);
			if(temp>3)
			{
				$(".A").addClass("ABC");
				$(".B").removeClass("ABC");
				$(".C").removeClass("ABC");
			}
			if(temp>1 && temp<=3)
			{
				$(".B").addClass("ABC");
				$(".A").removeClass("ABC");
				$(".C").removeClass("ABC");
			}
			else if(temp<=1){
				$(".C").addClass("ABC");
				$(".A").removeClass("ABC");
				$(".B").removeClass("ABC");
			}
			current(temp);
		}
	}
	//清除所有
	function clear(){
		for(var i = 0, len = star.length; i < len; i++){
			star[i].style.backgroundPosition = '0 -20px';
		}
	}
	//显示当前第几颗星
	function current(temp){
		for(var i = 0; i < temp; i++){
			star[i].style.backgroundPosition = '0 0';
		}
	}
}




$().ready(function(){
	$.ajax({
		type:'post',
		url:'PHP/api.php',
		dataType:'json',
		data:{status:'order',type:'getphone'},
		success:function(res){
			$(".username").html(res.name);
			$(".userphone").html(res.phone);
		},
		error:function(){
			console.log("获取信息失败");
		},
	});
	$(".btnSure").click(function(){
		var op=$(".op").val();
		var np=$(".np").val();
		var cp=$(".cp").val();
		$.ajax({
			type:'post',
			url:'PHP/api.php',
			dataType:'json',
			data:{status:'order',type:'changepas',op:op,np:np,cp:cp},
			success:function(pas){
				if(pas.resu==0){
					alert("两次密码输入不一致");
				}
				else if(pas.resu==-1){
					alert("旧密码输入错误");
				}
				else if(pas.resu==1){
					alert("密码修改成功");
					window.location.href = "login.html"
				}
				else{
					alert("服务器繁忙");
				}
			},
			error:function(){
				alert("操作失败");
			},
		});
	});
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
			      <a  href="order.php"><i class="fa fa-user"></i><?php echo $_SESSION['name'] ?></a>
			     <span class="logout">退出</span>
			   </div>
			   <?php }?>
	</div>
	</div>
	<div class="container">
		<div class="order_page">
			<div class="view_list">
				<div class="list_nav order_nav">
					<b class="order_img"></b><span class="s0">当前订单</span>
				</div>
				<div class="list_nav orders_nav">
					<b class="order_img"></b><span class="s1">已签收订单</span>
				</div>
				<div class="list_nav account_nav">
					<b class="account_img"></b><span class="s2">我的账号</span>
				</div>
				<div class="list_nav collect_nav">
					<b class="collect_img"></b><span class="s3">我的收藏</span>
				</div>
			</div>
			<div class="order_list">
				<div class="order_list_top">
					<span class="content_top">订单内容</span> <span class="phone_top">商家电话</span>
					<span class="payment_top">支付金额</span> <span class="operate_top">操作</span>
				</div>
				<div class="order_list_note">
					<div class="note_main">
						<div class="content">
							<b></b>
							<div class="restarant">
								<div class="restname"></div>
								<div class="restmes">
									<div class="order_time"></div>
									<div class="order_number">
										<span>订单号:</span>
									</div>
								</div>
							</div>
						</div>
						<div class="phone"></div>
						<div class="payment">
							￥<span class="pmp"></span>
						</div>
						<div class="operate">取消订单</div>
					</div>
				</div>
				<div class="estimate_list">
					<div class="order_main">
						<p>订单详情</p>
						<div class="wrapperfood"></div>
						<div class="real_list">
							<div class="real">
								实际支付：￥<span class="real_pay">25.00</span>
							</div>
						</div>
					</div>
					<div class="estimate_main">
						<div class="estimate_confirm">
							<p>我的评价</p>
							<div class="estimate_level">
								<span>总体评价</span>
								<div class="wrapper">
									<a href="javascript:;" class="a1"></a> <a href="javascript:;"
										class="a1"></a> <a href="javascript:;" class="a1"></a> <a
										href="javascript:;" class="a1"></a> <a href="javascript:;"
										class="a1"></a>
								</div>
								<a class="A">好评</a> <a class="B">中评</a> <a class="C">差评</a>
							</div>
							<div class="estimate_text">
								<span>补充评价</span>
								<textarea class="estimate"></textarea>
							</div>
							<div class="btnEstimate">确认订单</div>
						</div>
					</div>
				</div>
			</div>
			<div class="orders_list">

				<div class="orders_list_top">
					<span class="content_top">订单内容</span> 
					<span class="phone_top">商家电话</span>
					<span class="payment_top">支付金额</span>
					<!--  <span class="operate_top">操作</span> -->
				</div>
				<div class="all">

				</div>
				<ul id="paging-wrapper"></ul>
			</div>



			<div class="account_list">
				<div class="user_list">
					<div class="user_icon">
						<span>头&nbsp;&nbsp;&nbsp;&nbsp;像：</span><b></b>
					</div>
					<div class="user_name">
						用户名称：<span class="username">111</span>
					</div>
					<div class="user_phone">
						手机号码：<span class="userphone">111</span>
					</div>
					<div class="btnUser">修改密码</div>
				</div>
				<div class="repwd_list">
					<div class="op_list">
						<span>旧密码</span> <input class="op" type="password" value=""
							placeholder="请输入旧密码" /> <i class="pro"></i>
					</div>
					<div class="np_list">
						<span>新密码</span> <input class="np" type="password" value=""
							placeholder="请输入新密码" /> <i class="pro"></i>
					</div>
					<div class="cp_list">
						<span>确认密码</span> <input class="cp" type="password" value=""
							placeholder="请确认新密码" /> <i class="pro"></i>
					</div>
					<div class="btnSure">确定</div>
					<div class="btnCancel">取消</div>
				</div>
			</div>
			<div class="collect_list"></div>
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
	
	<script>
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
	</script>
</body>
</html>