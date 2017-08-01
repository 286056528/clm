<?php
header("content-type:text/html;charset:utf-8");
session_start();

// $mysql = mysqli_connect("localhost", "root", "", "clm");
// mysqli_set_charset($mysql, "utf8");

$session_vcode=$_SESSION['verifyCode'];//从生成验证码的php文件里获取Session里保存的验证码

$verifyCode = $_POST['verifyCode'];//异步请求时传递过来的输入的验证码
if($verifyCode == $session_vcode){
    echo json_encode(array('mess'=>'验证码正确','status'=>1));
}else{
    echo json_encode(array('mess'=>'验证码错误','status'=>0));
}