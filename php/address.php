<?php
class Address{
    public $address_id = -1;  //地址id
    public $address_name = "";  
    public $address_content = "";
    public $address_phone = "";
 /**
     * @return the $address_id
     */
    public function getAddress_id()
    {
        return $this->address_id;
    }

 /**
     * @return the $address_name
     */
    public function getAddress_name()
    {
        return $this->address_name;
    }

 /**
     * @return the $address_content
     */
    public function getAddress_content()
    {
        return $this->address_content;
    }

 /**
     * @return the $address_phone
     */
    public function getAddress_phone()
    {
        return $this->address_phone;
    }

 /**
     * @param number $address_id
     */
    public function setAddress_id($address_id)
    {
        $this->address_id = $address_id;
    }

 /**
     * @param string $address_name
     */
    public function setAddress_name($address_name)
    {
        $this->address_name = $address_name;
    }

 /**
     * @param string $address_content
     */
    public function setAddress_content($address_content)
    {
        $this->address_content = $address_content;
    }

 /**
     * @param string $address_phone
     */
    public function setAddress_phone($address_phone)
    {
        $this->address_phone = $address_phone;
    }


    
}