<?php
class Food{
    public $food_id = -1;  //商品id
    public $food_name = "";  //商品的名称
    public $food_price = 0;  //商品价格
    public $food_description = "";  //商品描述
    public $food_sales = 0;  //商品销售数量
    public $food_rating_count = 0;  //商品星级等级
    public $food_comment_count = 0;  //商品评价数量
    public $food_img_path = "";  //商品图片路径
    public $food_state = "";  //商品是否断货
    public $food_kind = "";  //商品种类

    /**
     * @return the $food_comment_count
     */
    public function getFood_comment_count()
    {
        return $this->food_comment_count;
    }

 /**
     * @return the $food_state
     */
    public function getFood_state()
    {
        return $this->food_state;
    }

 /**
     * @return the $food_kind
     */
    public function getFood_kind()
    {
        return $this->food_kind;
    }

 /**
     * @param number $food_comment_count
     */
    public function setFood_comment_count($food_comment_count)
    {
        $this->food_comment_count = $food_comment_count;
    }

 /**
     * @param number $food_state
     */
    public function setFood_state($food_state)
    {
        $this->food_state = $food_state;
    }

 /**
     * @param string $food_kind
     */
    public function setFood_kind($food_kind)
    {
        $this->food_kind = $food_kind;
    }

 public function getFood_id()
    {
        return $this->food_id;
    }

    public function getFood_name()
    {
        return $this->food_name;
    }

    public function getFood_price()
    {
        return $this->food_price;
    }

    public function getFood_description()
    {
        return $this->food_description;
    }

    public function getFood_sales()
    {
        return $this->food_sales;
    }

    public function getFood_rating_count()
    {
        return $this->food_rating_count;
    }

    public function getFood_img_path()
    {
        return $this->food_img_path;
    }

    public function setFood_id($food_id)
    {
        $this->food_id = $food_id;
    }

    public function setFood_name($food_name)
    {
        $this->food_name = $food_name;
    }

    public function setFood_price($food_price)
    {
        $this->food_price = $food_price;
    }

    public function setFood_description($food_description)
    {
        $this->food_description = $food_description;
    }

    public function setFood_sales($food_sales)
    {
        $this->food_sales = $food_sales;
    }

    public function setFood_rating_count($food_rating_count)
    {
        $this->food_rating_count = $food_rating_count;
    }

    public function setFood_img_path($food_img_path)
    {
        $this->food_img_path = $food_img_path;
    }
    
    
}