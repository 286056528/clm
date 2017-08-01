<?php

class Order{
    public $order_id = -1;  //订单id
    public $order_b_id = 0;  //商家id
    public $order_b_name = "";  //商家名称
    public $order_b_phone = "";  //商家手机号
    public $order_food_id = -1;  //食物id
    public $order_food_name = "";  //食物名称
    public $order_food_price = "";  //食物单价
    public $order_food_num = "";  //食物份数
    public $order_total_prices = 0;  //订单总额
    public $order_status = 0;  //订单状态  1：表示订单未签收 0：表示订单已签收
    public $order_time = 0;  //订单时间
    public $order_rating_count = 0;

 /**
     * @return the $order_rating_count
     */
    public function getOrder_rating_count()
    {
        return $this->order_rating_count;
    }

 /**
     * @param number $order_rating_count
     */
    public function setOrder_rating_count($order_rating_count)
    {
        $this->order_rating_count = $order_rating_count;
    }

 /**
     * @return the $order_b_id
     */
    public function getOrder_b_id()
    {
        return $this->order_b_id;
    }

 /**
     * @param number $order_b_id
     */
    public function setOrder_b_id($order_b_id)
    {
        $this->order_b_id = $order_b_id;
    }

 /**
     * @return the $order_food_id
     */
    public function getOrder_food_id()
    {
        return $this->order_food_id;
    }

 /**
     * @param number $order_food_id
     */
    public function setOrder_food_id($order_food_id)
    {
        $this->order_food_id = $order_food_id;
    }

 /**
     * @return the $order_id
     */
    public function getOrder_id()
    {
        return $this->order_id;
    }

 /**
     * @return the $order_b_name
     */
    public function getOrder_b_name()
    {
        return $this->order_b_name;
    }

 /**
     * @return the $order_b_phone
     */
    public function getOrder_b_phone()
    {
        return $this->order_b_phone;
    }

 /**
     * @return the $order_food_name
     */
    public function getOrder_food_name()
    {
        return $this->order_food_name;
    }

 /**
     * @return the $order_food_price
     */
    public function getOrder_food_price()
    {
        return $this->order_food_price;
    }

 /**
     * @return the $order_food_num
     */
    public function getOrder_food_num()
    {
        return $this->order_food_num;
    }

 /**
     * @return the $order_total_prices
     */
    public function getOrder_total_prices()
    {
        return $this->order_total_prices;
    }

 /**
     * @return the $order_status
     */
    public function getOrder_status()
    {
        return $this->order_status;
    }

 /**
     * @return the $order_time
     */
    public function getOrder_time()
    {
        return $this->order_time;
    }

 /**
     * @param number $order_id
     */
    public function setOrder_id($order_id)
    {
        $this->order_id = $order_id;
    }

 /**
     * @param string $order_b_name
     */
    public function setOrder_b_name($order_b_name)
    {
        $this->order_b_name = $order_b_name;
    }

 /**
     * @param string $order_b_phone
     */
    public function setOrder_b_phone($order_b_phone)
    {
        $this->order_b_phone = $order_b_phone;
    }

 /**
     * @param string $order_food_name
     */
    public function setOrder_food_name($order_food_name)
    {
        $this->order_food_name = $order_food_name;
    }

 /**
     * @param string $order_food_price
     */
    public function setOrder_food_price($order_food_price)
    {
        $this->order_food_price = $order_food_price;
    }

 /**
     * @param string $order_food_num
     */
    public function setOrder_food_num($order_food_num)
    {
        $this->order_food_num = $order_food_num;
    }

 /**
     * @param number $order_total_prices
     */
    public function setOrder_total_prices($order_total_prices)
    {
        $this->order_total_prices = $order_total_prices;
    }

 /**
     * @param number $order_status
     */
    public function setOrder_status($order_status)
    {
        $this->order_status = $order_status;
    }

 /**
     * @param number $order_time
     */
    public function setOrder_time($order_time)
    {
        $this->order_time = $order_time;
    }
    
    
}


?>