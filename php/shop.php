<?php
class Shop{
    public $shop_id = -1;  //商铺id
    public $shop_name = "";  //商铺名称
    public $shop_adress = "";  //商铺地址
    public $shop_minimum_delivery_amount = 0;  //商铺起送价
    public $shop_delivery_cost = 0;  //商铺配送费
    public $shop_sales = 0;  //商鋪总的销售数量
    public $shop_rating_count = 0;  //商铺星级等级
    public $shop_comment_count = 0;  //商铺评价总数
    public $shop_img_path = "";  //商铺头像
    public $shop_opening_hours = "";  //商铺营业时间
    public $shop_announcement = "";  //商铺公告
    public $shop_kind_food = "";  //商铺所卖食物的种类
    public $shop_phone = "";  //商铺手机号

/**
     * @return the $shop_phone
     */
    public function getShop_phone()
    {
        return $this->shop_phone;
    }

 /**
     * @param string $shop_phone
     */
    public function setShop_phone($shop_phone)
    {
        $this->shop_phone = $shop_phone;
    }

public function getShop_kind_food()
    {
        return $this->shop_kind_food;
    }
    
 public function getShop_id()
    {
        return $this->shop_id;
    }

 public function getShop_opening_hours()
    {
        return $this->shop_opening_hours;
    }

public function getShop_announcement()
    {
        return $this->shop_announcement;
    }

public function setShop_opening_hours($shop_opening_hours)
    {
        $this->shop_opening_hours = $shop_opening_hours;
    }

public function setShop_announcement($shop_announcement)
    {
        $this->shop_announcement = $shop_announcement;
    }

public function getShop_name()
    {
        return $this->shop_name;
    }

 public function getShop_adress()
    {
        return $this->shop_adress;
    }

 public function getShop_minimum_delivery_amount()
    {
        return $this->shop_minimum_delivery_amount;
    }

 public function getShop_delivery_cost()
    {
        return $this->shop_delivery_cost;
    }

 public function getShop_sales()
    {
        return $this->shop_sales;
    }

 public function getShop_rating_count()
    {
        return $this->shop_rating_count;
    }

 public function getShop_comment_count()
    {
        return $this->shop_comment_count;
    }

 public function getShop_img_path()
    {
        return $this->shop_img_path;
    }
    
public function setShop_kind_food($shop_kind_food)
    {
        $this->shop_kind_food = $shop_kind_food;
    }

 public function setShop_id($shop_id)
    {
        $this->shop_id = $shop_id;
    }

 public function setShop_name($shop_name)
    {
        $this->shop_name = $shop_name;
    }

 public function setShop_adress($shop_adress)
    {
        $this->shop_adress = $shop_adress;
    }

 public function setShop_minimum_delivery_amount($shop_minimum_delivery_amount)
    {
        $this->shop_minimum_delivery_amount = $shop_minimum_delivery_amount;
    }

 public function setShop_delivery_cost($shop_delivery_cost)
    {
        $this->shop_delivery_cost = $shop_delivery_cost;
    }

 public function setShop_sales($shop_sales)
    {
        $this->shop_sales = $shop_sales;
    }

 public function setShop_rating_count($shop_rating_count)
    {
        $this->shop_rating_count = $shop_rating_count;
    }

 public function setShop_comment_count($shop_comment_count)
    {
        $this->shop_comment_count = $shop_comment_count;
    }

 public function setShop_img_path($shop_img_path)
    {
        $this->shop_img_path = $shop_img_path;
    }
    
    
}
?>