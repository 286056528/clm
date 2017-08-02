<?php
header("content-type:text/html;charset=utf-8");
session_start();
$phone = $_POST['bphone'];
$pwd = $_POST['bpassword'];
if(empty($phone) || empty($pwd)){
   echo json_encode(array('msg1' => 'account error',
                                                'msg2' => 'password error',
                                                'sta' => 0));
}else{
    $mysql = mysqli_connect("localhost", "root", "", "clm");
    mysqli_set_charset($mysql, "utf8");
    $sql_check = "select * from buesiness where phone='{$phone}'";
    $re_check = mysqli_query($mysql, $sql_check);
    $data = mysqli_fetch_assoc($re_check);
    if($data){
        if($pwd ==$data['password']){
            $_SESSION['nowShopId']=$data['id'];
            echo json_encode(array('msg1' => 'account right','msg2' => 'password right',
'sta' => 2));
      
        }else{
            echo json_encode(array('msg1' => 'account right',
                                                'msg2' => 'password error',
                                                'sta' => 1));
        }
    }else{
       echo json_encode(array('msg1' => 'account not existed',
                                            'msg2' => '',
                                            'sta' => 0));
    }
}