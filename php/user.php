<?php
class User{
    public $user_id =-1;
    public $user_phone="";
    public $user_password="";
    public $user_name="";
    public $user_photo="";
    public $user_email="";
    
    
    
    public function  getUser_id(){
        return $this->user_id;
    }
    public function  getUser_phone(){
        return $this->user_phone;
    }
    public function  getUser_password(){
        return $this->user_password;
    }
    public function  getUser_name(){
        return $this->user_name;
    }
    public function  getUser_photo(){
        return $this->user_photo;
    }
    public function  getUser_email(){
        return $this->user_email;
    }
    
    
    public function setUser_id($info){
        $this->user_id=$info;
    }
    public function  setUser_phone($info){
         $this->user_phone=$info;
    }
    public function  setUser_password($info){
         $this->user_password=$info;
    }
    public function  setUser_name($info){
         $this->user_name=$info;
    }
    public function  setUser_photo($info){
         $this->user_photo=$info;
    }
    public function  setUser_email($info){
         $this->user_email=$info;
    }
    
  
}