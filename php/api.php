<?php
require 'SqlOperation.php';
header('Content-type: application/json;charset=utf-8');
$sqlOperation = new SqlOperation("localhost", "root", "", "clm");
date_default_timezone_set("Asia/Chongqing");
session_start();
if(empty($_SESSION['shopcart'])){
    $_SESSION['shopcart'] = array();
}
if (! empty($_POST['status']) && $_POST['status'] === "index") { // 首页分页
    $currentRow = ($_POST['currentPage'] - 1) * 8; // 当前行
    $sql = "select * from buesiness limit {$currentRow} , 8";
    $sqlNum = "select * from buesiness";
    if (! empty($_POST['type'])) {
        $sql = "select * from buesiness where kind LIKE '%{$_POST['type']}%' limit {$currentRow} , 8";
        $sqlNum = "select * from buesiness where kind LIKE '%{$_POST['type']}%'";
    }
    $tempResult = $sqlOperation->getShopData($sql);
    $_SESSION['shopNum'] = $sqlOperation->getShopNum($sqlNum);
    array_push($tempResult, $_SESSION['shopNum']);
    echo json_encode($tempResult);
} else 
    if (! empty($_GET['status']) && $_GET['status'] === "indextoshop") { // 首页跳转到商家详情页
        $_SESSION['shopId'] = $_GET['id'];
        header("location:../shopdetail.html");
    } else 
        if (! empty($_POST['status']) && $_POST['status'] === "food") {  //获取商家的食品数据
            $bid = intval($_SESSION['shopId']);
            $sql = "select * from food where bid = {$bid} order by sale_num desc";
            $tempResult = $sqlOperation->getFoodData($sql);
            echo json_encode($tempResult);
        } else 
            if (! empty($_POST['status']) && $_POST['status'] === "comment") { // 商家的评价
                $currentRow = ($_POST['currentPage'] - 1) * 5; // 当前行
                $bid = intval($_SESSION['shopId']);
                $sql = "select * from comment where bid = {$bid} limit {$currentRow} , 5";
                $sqlNum = "select * from comment where bid = {$bid}";
                if (! empty($_POST['type'])) {}
                $tempResult = $sqlOperation->getCommentData($sql);
                array_push($tempResult, $sqlOperation->getCommentNum($sqlNum));
                echo json_encode($tempResult);
            } else 
                if (! empty($_POST['status']) && $_POST['status'] === "shopdata") {
                    $bid = intval($_SESSION['shopId']);
                    $sql = "select * from buesiness where id = {$bid}";
                    $tempResult = $sqlOperation->getShopData($sql);
                    echo json_encode($tempResult);
                }else if(! empty($_POST['status']) && $_POST['status'] === "shopcart"){
                    if(! empty($_POST['type']) && $_POST['type'] === "insert"){
                        array_push($_SESSION['shopcart'], $_POST['data']);
                    }else if(! empty($_POST['type']) && $_POST['type'] === "get"){
                       echo json_encode($_SESSION['shopcart']);                       
                    }else if(! empty($_POST['type']) && $_POST['type'] === "delete"){
                        unset($_SESSION['shopcart']);
                        echo json_encode(array("state"=>1));
                    }
                    
                }else if(! empty($_POST['status']) && $_POST['status'] === "shopcart"){
                    
                }

?>