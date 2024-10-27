<?php
session_start(); // Start the session to access error messages

// Fetch error messages and form data from session
$errors = $_SESSION['errors'] ?? [];
$formData = $_SESSION['formData'] ?? [];

// Clear session errors after displaying
unset($_SESSION['errors']);
unset($_SESSION['formData']);
?>










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Signup</title>

 <p>
    <a href="SignUPSeller.php">Seller Signup</a>
</p>

</head>
<body>

<h2>Customer Signup</h2>



<?php if (!empty($errors)): ?>
    <div style="color: red;">
        <strong>Error(s):</strong>
        <ul>
            <?php foreach ($errors as $error): ?>
                <li><?php echo htmlspecialchars($error); ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>




<form action="../Controller/Customer_SignUpController.php" method="POST">
    <label for="customerName">Name:</label><br>
    <input type="text" id="customerName" name="name" ><br><br>

    <label for="customerEmail">Email:</label><br>
    <input type="email" id="customerEmail" name="email" ><br><br>

    <label for="customerMobile">Mobile No:</label><br>
    <input type="text" id="customerMobile" name="mobile" ><br><br>

    <label for="customerAddress">Address:</label><br>
    <input type="text" id="customerAddress" name="address" ><br><br>

    <label for="customerPassword">Password:</label><br>
    <input type="password" id="customerPassword" name="password" ><br><br>

    <input type="submit" value="Sign Up">
</form>

</body>
</html>
