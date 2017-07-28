<?php
class Comment{
    public $comment_id = -1;  //评论id
    //public $user_name = "";  //用户的名字
    public $user_img_path = "";  //用户头像
    public $comment_rating_count = 0;  //评论星级等级
    public $comment_content = "";  //评论的内容
    public $food_name = "";  //商品名称

 public function getFood_name()
    {
        return $this->food_name;
    }

 public function setFood_name($food_name)
    {
        $this->food_name = $food_name;
    }

public function getComment_id()
    {
        return $this->comment_id;
    }

 public function getUser_name()
    {
        return $this->user_name;
    }

 public function getUser_img_path()
    {
        return $this->user_img_path;
    }

 public function getComment_rating_count()
    {
        return $this->comment_rating_count;
    }

 public function getComment_content()
    {
        return $this->comment_content;
    }

 public function setComment_id($comment_id)
    {
        $this->comment_id = $comment_id;
    }

 public function setUser_name($user_name)
    {
        $this->user_name = $user_name;
    }

 public function setUser_img_path($user_img_path)
    {
        $this->user_img_path = $user_img_path;
    }

 public function setComment_rating_count($comment_rating_count)
    {
        $this->comment_rating_count = $comment_rating_count;
    }

 public function setComment_content($comment_content)
    {
        $this->comment_content = $comment_content;
    }
    
    
}
?>