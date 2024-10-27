<?php

require_once '../models/Customer.php'; 
require_once 'InputsValidation.php'; 

class CustomerSignUpController {


    
    use ValidationTrait; 

    public function signUp($data) {
        $allFieldsCheck = $this->validateNotAllEmpty($data);
        if ($allFieldsCheck !== true) {
            echo $allFieldsCheck;
            return;
        }
    
        $errors = [];
        $errors[] = $this->validateName($data['name']);
        $errors[] = $this->validateEmail($data['email']);
        $errors[] = $this->validateMobile($data['mobile']);
        $errors[] = $this->validatePassword($data['password']);
        $errors[] = $this->validateAddress($data['address']);
    
        $errors = array_filter($errors);
    
        if (!empty($errors)) {
            echo "Error: " . implode(", ", $errors);
            return;
        }
    
    }
    


}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $controller = new CustomerSignUpController();
    $controller->signUp($_POST);
}
?>
