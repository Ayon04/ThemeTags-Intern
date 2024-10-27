<?php

trait ValidationTrait {

    public function validateNotAllEmpty($data) {
        foreach ($data as $key => $value) {
            if (empty($value)) {
                return "All fields are required.";
            }
        }
        return true;
    }

    public function validateName($name) {
        if (empty($name)) {
            return "Name is required.";
        } elseif (!preg_match('/^[a-zA-Z\s]+$/', $name)) {
            return "Name must be a string with no numbers or special characters.";
        }
        return true;
    }

    public function validateMobile($mobile) {
        if (empty($mobile)) {
            return "Mobile number is required.";
        } elseif (!preg_match('/^\d{11}$/', $mobile)) {
            return "Mobile number must be exactly 11 digits.";
        }
        return true;
    }

    public function validateEmail($email) {
        if (empty($email)) {
            return "Email is required.";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return "Invalid email format.";
        }
        return true;
    }

    public function validatePassword($password) {
        if (empty($password)) {
            return "Password is required.";
        } elseif (strlen($password) < 6) {
            return "Password must be at least 6 characters long.";
        }
        return true;
    }

    public function validateShopName($shopName) {
        if (empty($shopName)) {
            return "Shop name is required.";
        } elseif (!preg_match('/^[a-zA-Z\s]+$/', $shopName)) {
            return "Shop name must be a string with no numbers or special characters.";
        }
        return true;
    }

    public function validateShopAddress($shopAddress) {
        if (empty($shopAddress)) {
            return "Password is required.";
        }
        return true;
    }

    public function validateAddress($address) {
        if (empty($address)) {
            return "Password is required.";
        }
        return true;
    }
}

?>
