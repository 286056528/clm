<?php
require 'food.php';
require 'shop.php';
require 'comment.php';
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
}
?>