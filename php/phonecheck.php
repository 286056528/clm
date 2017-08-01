<?php
header("content-type:text/html;charset:utf-8");
$mysql = mysqli_connect("localhost", "root", "", "clm");
mysqli_set_charset($mysql, "utf8");
$phone = $_POST['phone'];//获取异步请求时传值的数据

$sql_checkName = "select * from user where phone = '{$phone}'";//查询数据库中是否存在
$re_checkName = mysqli_query($mysql, $sql_checkName);
$fetch = mysqli_fetch_assoc($re_checkName);
if($re_checkName && $fetch){
    echo json_encode(array('mess'=>'手机号已注册了','status'=>0));
}else{
    $arr = array('mess'=>'手机号可使用哦！','status'=>1);
    echo json_encode($arr);
}
?>