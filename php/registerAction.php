<?php
header("conten-type:text/html;charset:utf-8");

$mysql = mysqli_connect("localhost", "root", "", "clm");
mysqli_set_charset($mysql, "utf8");

$phone = $_POST['phone'];
$passwd1 =$_POST['password1'];
$passwd2 =$_POST['password2'];


$sql_check ="select * from user where phone ='{$phone}'";


$sql_insert ="insert buesiness(phone,password) values('{$phone}','{$passwd1}')";
$re_check =mysqli_query($mysql, $sql_check);
$data = mysqli_fetch_array($re_check);
if(empty($phone) ||empty($passwd1)||empty($passwd2)){
    echo "<script>alert('not be empty!');</script>";
}else {
    if ($passwd1 == $passwd2){
        if($phone==$data['phone']){
            echo "<script>alert('the account is existed!!');</script>";
        }else {
            mysqli_query($mysql, $sql_insert);
            mysqli_close($mysql);
            echo "<script>window.location.href='../blogin.html';</script>";
        }
    }else {
        echo "<script>alert('the password should  be the same!!');</script>";
    }
}
?>