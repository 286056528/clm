<?php
require 'SqlOperation.php';
header('Content-type: application/json;charset=utf-8');
$sqlOperation = new SqlOperation("localhost", "root", "", "clm");
date_default_timezone_set("Asia/Chongqing");
session_start();
if (empty($_SESSION['shopcart'])) {
    $_SESSION['shopcart'] = array(); // 用于暂存购物车里的数据
}
if (! empty($_POST['status']) && $_POST['status'] === "index") { // 首页分页
    $currentRow = ($_POST['currentPage'] - 1) * 8; // 当前行
    $sql = "select * from buesiness limit {$currentRow} , 8";
    $sqlNum = "select * from buesiness";
    if (! empty($_POST['type'])) { // 首页分类查询执行的sql语句
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
        header("location:../shopdetail.php");
    } else 
        if (! empty($_POST['status']) && $_POST['status'] === "food") { // 获取商家的食品数据
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
                if (! empty($_POST['status']) && $_POST['status'] === "shopdata") { // 获取商家的信息 商家详情页面
                    $bid = intval($_SESSION['shopId']);
                    $sql = "select * from buesiness where id = {$bid}";
                    $tempResult = $sqlOperation->getShopData($sql);
                    $_SESSION['shop'] = $tempResult;
                    echo json_encode($tempResult);
                } else 
                    if (! empty($_POST['status']) && $_POST['status'] === "shopcart") { // 购物车数据的获取|添加
                        if (! empty($_POST['type']) && $_POST['type'] === "insert") {
                            array_push($_SESSION['shopcart'], $_POST['data']);
                        } else 
                            if (! empty($_POST['type']) && $_POST['type'] === "get") {
                                echo json_encode($_SESSION['shopcart']);
                            } else 
                                if (! empty($_POST['type']) && $_POST['type'] === "delete") {
                                    unset($_SESSION['shopcart']);
                                    echo json_encode(array(
                                        "state" => 1
                                    ));
                                }
                    } else 
                        if (! empty($_POST['status']) && $_POST['status'] === "payment") { // 结算
                            if (empty($_SESSION['userId'])) { // 没有登录则不能结算
                                echo json_encode(array(
                                    "status" => 2
                                ));
                            } else 
                                if (sizeof($_SESSION['shopcart']) === 0) {
                                    echo json_encode(array(
                                        "status" => 3
                                    ));
                                } else {
                                    $shopNum = 0;
                                    $b_id = intval($_SESSION['shopcart'][0]['shopId']); // 商家id
                                    $b_name = $_SESSION['shopcart'][0]['shopName']; // 商家名称
                                    $b_phone = $_SESSION['shopcart'][0]['shopPhone']; // 商家手机号
                                    $food_id = ""; // 食品id
                                    $food_name = ""; // 食品名称
                                    $food_price = ""; // 食品单价
                                    $food_num = ""; // 食品份数
                                    $food_total_prices = 0; // 订单总价
                                    $time = date("Y-m-d H:i:s", time()); // 订单时间
                                    for ($i = 0; $i < sizeof($_SESSION['shopcart']); $i ++) {
                                        $food_id .= $_SESSION['shopcart'][$i]['foodId'] . "|";
                                        $food_name .= $_SESSION['shopcart'][$i]['name'] . "|";
                                        $food_price .= $_SESSION['shopcart'][$i]['price'] . "|";
                                        $food_num .= $_SESSION['shopcart'][$i]['num'] . "|";
                                        $food_total_prices += ($_SESSION['shopcart'][$i]['price']) * ($_SESSION['shopcart'][$i]['num']);
                                        $shopNum += $_SESSION['shopcart'][$i]['num'];
                                        $sql_food_num = "update food set sale_num = sale_num + {$_SESSION['shopcart'][$i]['num']} where id = {$_SESSION['shopcart'][$i]['foodId']}";
                                        $sqlOperation->updateFoodSales($sql_food_num);
                                    }
                                    $sql = "insert into orderdata(uid,fid,bid,b_name,b_phone,food_name,food_price,food_num,total_prices,order_status,order_time)" . " values({$_SESSION['userId']},'{$food_id}',{$b_id},'{$b_name}','{$b_phone}','{$food_name}','{$food_price}','{$food_num}',{$food_total_prices},1,'{$time}')";
                                    $sql_shop_num = "update buesiness set sale = sale + {$shopNum} where id = {$_SESSION['shopcart'][0]['shopId']}";
                                    $sqlOperation->updateShopSales($sql_shop_num);
                                    if ($sqlOperation->insertOrder($sql)) {
                                        unset($_SESSION['shopcart']);
                                        echo json_encode(array(
                                            "status" => 1
                                        ));
                                    } else {
                                        echo json_encode(array(
                                            "status" => 0
                                        ));
                                    }
                                }
                        } else 
                            if (! empty($_POST['status']) && $_POST['status'] === "order") { // 获取当前订单
                                if ($_POST['type'] == "orderdata") {
                                    $sql = "select * from orderdata where uid = {$_SESSION['userId']} and order_status=1";
                                    $tempResult = $sqlOperation->getorderdata($sql);
                                    echo json_encode($tempResult);
                                } else 
                                    if ($_POST['type'] == "orderdatas") {
                                        $currentRow = ($_POST['currentPage'] - 1) * 4; // 当前行
                                        $sql = "select * from orderdata where uid = '{$_SESSION['uid']}' limit {$currentRow} , 4";
                                        $sqlNum = "select * from orderdata where uid = '{$_SESSION['uid']}'";
                                        $tempResult = $sqlOperation->getOrderData($sql);
                                        array_push($tempResult, $sqlOperation->getOrderNum($sqlNum));
                                        echo json_encode($tempResult);
                                    } else 
                                        if ($_POST['type'] == "submit") {
                                            $time = date("Y-m-d H:i:s", time());
                                            $sql = "update orderdata set order_status = 0,order_rating_count = {$_POST['num']} where id = {$_POST['order_id']}";
                                            $sqlOperation->updateData($sql);
                                            $sql = "update buesiness set comment_level = comment_level + {$_POST['num']},comment_num = comment_num +1  where id = {$_POST['b_id']}";
                                            $sqlOperation->updateData($sql);
                                            for ($a = 0; $a < sizeof($_POST['foodcontent']); $a ++) {
                                                $sql = "update food set food_level = food_level + {$_POST['num']},comment_num = comment_num + 1 where id = {$_POST['foodcontent'][$a]['fid']}";
                                                $sqlOperation->updateData($sql);
                                                $sql = "insert into comment(uid,bid,fid,food_name,comment,comment_time,rating_count)" . " values({$_SESSION['userId']},{$_POST['b_id']},{$_POST['foodcontent'][$a]['fid']},'{$_POST['foodcontent'][$a]['fname']}','{$_POST['comment']}','{$time}',{$_POST['num']})";
                                                $sqlOperation->insertData($sql);
                                            }
                                            
                                            echo json_encode(array(
                                                "status" => 1
                                            ));
                                        } else 
                                            if ($_POST['type'] == "delete") {
                                                $sql = "delete from orderdata where id = {$_POST['order_id']}";
                                                if ($sqlOperation->deleteData($sql)) {
                                                    echo json_encode(array(
                                                        "status" => 1
                                                    ));
                                                }
                                            } else 
                                                if ($_POST['type'] == "oldorder") {
                                                    $currentRow = ($_POST['currentPage'] - 1) * 5;
                                                    $sql = "select * from orderdata where uid = {$_SESSION['userId']} and order_status = 0 order by order_time desc limit {$currentRow} , 5";
                                                    $tempResult = $sqlOperation->getOrderData($sql);
                                                    $sqlNum = "select * from orderdata where uid = {$_SESSION['userId']} and order_status = 0";
                                                    array_push($tempResult, $sqlOperation->getOrderNum($sqlNum));
                                                    echo json_encode($tempResult);
                                                } else 
                                                    if ($_POST['type'] == "getphone") {
                                                        $sql = "select * from user where id='{$_SESSION['userId']}'";
                                                        $result = $sqlOperation->getphone($sql);
                                                        $_SESSION['phone'] = $result['phone'];
                                                        echo json_encode(array(
                                                            'phone' => $_SESSION['phone'],
                                                            'name' => $result["name"]
                                                        ));
                                                    } else 
                                                        if ($_POST['type'] == "changepas") {
                                                            if ($_POST['np'] != $_POST['cp']) {
                                                                echo json_encode(array(
                                                                    'resu' => 0
                                                                ));
                                                            } else {
                                                                $sel = "select * from user where phone='{$_SESSION['phone']}'";
                                                                $do_sel = $sqlOperation->selpass($sel);
                                                                $op = md5($_POST['op']);
                                                                if ($op != $do_sel["password"]) {
                                                                    echo json_encode(array(
                                                                        'resu' => - 1
                                                                    ));
                                                                } else {
                                                                    $np = md5($_POST['np']);
                                                                    $sql = "update user set password='{$np}' where phone='{$_SESSION['phone']}'";
                                                                    $result = $sqlOperation->uppass($sql);
                                                                    if ($result) {
                                                                        echo json_encode(array(
                                                                            'resu' => 1
                                                                        ));
                                                                       $_SESSION['userId'] = "";
                                                                    }
                                                                }
                                                            }
                                                        }
                            }else if($_POST['status'] == 'logout'){
                                $_SESSION['userId'] = "";
                                echo json_encode(array("status"=>1));
                            } else 
                                if ($_POST['status'] == 'login') {
                                    $phone = $_POST['phone'];
                                    $passwd = $_POST['password'];
                                    
                                    $sql_logincheck = "select * from user where phone = '{$_POST['phone']}'";
                                    $login_result = $sqlOperation->getLoginInfo($sql_logincheck);
                                    
                                    /*
                                     * foreach($login_result as $key=>$val){
                                     * //把"\"过滤掉
                                     * $login_result[$key] = str_replace("\\", $val);
                                     * }
                                     */
                                    // var_dump($login_result[0]->user_password) ; //返回的$login_result 是一个二维数组，成员$temp又是一个数组!!!!!
                                    
                                    if ($login_result) {
                                        $passwd_md5 = md5($passwd); // md5解密
                                        if ($passwd_md5 === $login_result[0]->user_password) {
                                            $_SESSION['userId'] = $login_result[0]->user_id; // 保存用户的id
                                            $_SESSION['name'] = $login_result[0]->user_name;
                                            echo json_encode(array(
                                                'msg1' => 'account right',
                                                'msg2' => 'password right',
                                                'sta' => 2
                                            ));
                                        } else {
                                            echo json_encode(array(
                                                'msg1' => 'account right',
                                                'msg2' => 'password error',
                                                'sta' => 1
                                            ));
                                        }
                                    } else {
                                        echo json_encode(array(
                                            'msg1' => 'account not existed',
                                            'msg2' => '',
                                            'sta' => 0
                                        ));
                                    }
                                } else {
                                    echo json_encode(array(
                                        'msg1' => 'illegal opration',
                                        'msg2' => '',
                                        'sta' => 0
                                    ));
                                }

?>