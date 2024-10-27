<?php

session_start(); // Start the session to store error messages

require_once '../model/Customer.php'; 
require_once 'InputsValidation.php'; 

class CustomerSignUpController {
    use ValidationTrait; 

    public function signUp() {
        $name = $_POST['name'] ?? '';
        $email = $_POST['email'] ?? '';
        $mobile = $_POST['mobile'] ?? '';
        $password = $_POST['password'] ?? '';
        $address = $_POST['address'] ?? '';

        $errors = $this->validateInputs([
            'name' => $name,
            'email' => $email,
            'mobile' => $mobile,
            'password' => $password,
            'address' => $address
        ], [
            'name' => 'validateName',
            'email' => 'validateEmail',
            'mobile' => 'validateMobile',
            'password' => 'validatePassword',
            'address' => 'validateAddress'
        ]);

        if (!empty($errors)) {
            $_SESSION['errors'] = $errors;
            $_SESSION['formData'] = $_POST; 
            header("Location: ../view/SignUPCustomer.php"); 
            exit;
        } else {  

           // $customer = new Customer($name, $email, $mobile, $password, $address);

            $_SESSION['customerData'] = [
                'name' => $name,
                'email' => $email,
                'mobile' => $mobile,
                'address' => $address
            ];
        
            // Redirect to CustomerInfo.php

            header("Location: ../view/CustomerInfo.php"); 
            exit;
        }
    }

    private function validateInputs($data, $rules) {
        $errors = [];
        foreach ($rules as $field => $method) {
            $result = $this->$method($data[$field] ?? null);
            if ($result !== true) {
                $errors[] = $result;
            }
        }
        return $errors;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $controller = new CustomerSignUpController();
    $controller->signUp();
}else{

    echo "Invalid Request";
}
?>
