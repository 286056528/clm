<?php
require 'food.php';
require 'shop.php';
require 'comment.php';
require 'user.php';
require 'order.php';
class SqlOperation
{

    private $mysqli = NULL;

    function __construct($locahost, $account, $pwd, $datebase)
    {
        $this->mysqli = new mysqli($locahost, $account, $pwd, $datebase);
        $this->mysqli->set_charset("utf8");
    }
    
    //获取商家的信息
    function getShopData($sql){
        $result_array = array();
        $result = $this->mysqli->query($sql);
        while ($array = $result->fetch_assoc()){
            $temp = new Shop();
            $temp->setShop_id($array['id']);
            $temp->setShop_name($array['name']);
            $temp->setShop_adress($array['address']);
            $temp->setShop_minimum_delivery_amount($array['start_money']);
            $temp->setShop_delivery_cost($array['delivery_cost']);
            $temp->setShop_sales($array['sale']);
            $temp->setShop_rating_count($array['comment_level']);
            $temp->setShop_comment_count($array['comment_num']);
            $temp->setShop_img_path($array['photo']);
            $temp->setShop_opening_hours($array['work_time']);
            $temp->setShop_announcement($array['announcement']);
            $temp->setShop_kind_food($array['kindfood']);
            $temp->setShop_phone($array['phone']);
            array_push($result_array, $temp);
        }
        return $result_array;
    }
    
    //获取商家的总数
    function getShopNum($sql){
        $result = $this->mysqli->query($sql);
        $num = $result->num_rows;
        return $num;  
    }
    
    //修改商家的销售总量
    function updateShopSales($sql){
        return $this->mysqli->query($sql);
    }
    
    //获取食品的信息
    function getFoodData($sql){
        $result_array = array();
        $result = $this->mysqli->query($sql);
        while ($array = $result->fetch_assoc()){
            $temp = new Food();
            $temp->setFood_id($array['id']);
            $temp->setFood_name($array['name']);
            $temp->setFood_price($array['price']);
            $temp->setFood_rating_count($array['food_level']);
            $temp->setFood_sales($array['sale_num']);
            $temp->setFood_description($array['details']);
            $temp->setFood_kind($array['kinds']);
            $temp->setFood_comment_count($array['comment_num']);
            $temp->setFood_state($array['state']);
            $temp->setFood_img_path($array['picture']);
            array_push($result_array, $temp);
        }
        return $result_array;
    }
    
    //修改食品数量
    function updateFoodSales($sql){
        return $this->mysqli->query($sql);
    }
    
    //获取商家评论的信息
    function getCommentData($sql){
        $result_array = array();
        $result = $this->mysqli->query($sql);
        while ($array = $result->fetch_assoc()){
            $temp = new Comment();
            $temp->setComment_id($array['id']);
            $temp->setFood_name($array['food_name']);
            $temp->setComment_rating_count($array['rating_count']);
            $temp->setComment_content($array['comment']);
            array_push($result_array, $temp);
        }
        return $result_array;
    }
    
    //获取商家评论的条数
    function getCommentNum($sql){
        $result = $this->mysqli->query($sql);
        $num = $result->num_rows;
        return $num;
    }
    
    //获取订单信息
    function getOrderData($sql){
        $result_array = array();
        $result = $this->mysqli->query($sql);
        while ($array = $result->fetch_assoc()){
            $temp = new Order();
            $temp->setOrder_id($array['id']);
            $temp->setOrder_b_id($array['bid']);
            $temp->setOrder_b_name($array['b_name']);
            $temp->setOrder_b_phone($array['b_phone']);
            $temp->setOrder_food_id($array['fid']);
            $temp->setOrder_food_name($array['food_name']);
            $temp->setOrder_food_price($array['food_price']);
            $temp->setOrder_food_num($array['food_num']);
            $temp->setOrder_total_prices($array['total_prices']);
            $temp->setOrder_time($array['order_time']);
            $temp->setOrder_status($array['order_status']);
            $temp->setOrder_rating_count($array['order_rating_count']);
            array_push($result_array, $temp);
        }
        return $result_array;
    }
    
    
    
    //获取订单条数
    function getOrderNum($sql){
        $result = $this->mysqli->query($sql);
        $num = $result->num_rows;
        return $num;
    }
    
    
    //想订单表中插入数据
    function insertOrder($sql){
       return $this->mysqli->query($sql);
    }
    
    //获取用户信息
    function getLoginInfo($sql) {
        $result_array = array();
        $result=$this->mysqli->query($sql);
        $data = $result->fetch_assoc();
    
        if(!empty($data)){
            $temp= new User();
            $temp->setUser_id($data['id']);
            $temp->setUser_phone($data['phone']);
            $temp->setUser_password($data['password']);
            $temp->setUser_name($data['name']);
            $temp->setUser_photo($data['photo']);
            $temp->setUser_email($data['e-mail']);
            array_push($result_array, $temp);
    
        }else {
            return false; //未查询到该用户返回错误；
        }
         
        return $result_array ;
    }
    
    //修改数据表中的数据
    function updateData($sql){
        return $this->mysqli->query($sql);
    }
    
    //向表中添加数据
    function insertData($sql){
        return $this->mysqli->query($sql);
    }
    
    //删除表中的数据
    function deleteData($sql){
        return $this->mysqli->query($sql);
    }
    
    
    function getphone($sql){
        $res= $this->mysqli->query($sql);
        $result=mysqli_fetch_assoc($res);
        return $result;
    }
    function selpass($sel){
        $res= $this->mysqli->query($sel);
        $result=mysqli_fetch_assoc($res);
        return $result;
    }
    function uppass($sql){
        $result= $this->mysqli->query($sql);
        return $result;
    }
}
?>