<?php
 
abstract class User{

    protected $name;

    protected $email;
    protected $mobile;

    protected $password;

    protected function __construct($name,$email,$mobile,$password){

        $this->name = $name;
        $this->email =$email;
        $this->mobile=$mobile;
        $this->password=$password;

    }
}

?>