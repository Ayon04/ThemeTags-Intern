<?php

include('User.php');
class Customer extends User{
    
    private $address;

    public function __construct($name, $email, $mobile, $password,$address){

        parent::__construct($name, $email, $mobile, $password);
        $this->address= $address;

    }
}



?>