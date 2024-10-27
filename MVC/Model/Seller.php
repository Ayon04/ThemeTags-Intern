<?php

class Seller extends User{
    
    private $ShopName;

    private $ShopAddress;

    public function __construct($name, $email, $mobile, $password,$ShopName,$ShopAddress){

        parent::__construct($name, $email, $mobile, $password);
        $this->ShopName= $ShopName;
        $this->shopAddress=$ShopAddress;

    }
}



?>