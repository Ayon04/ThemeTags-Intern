<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller Signup</title>
</head>
<body>

<p>
    <a href="SignUPCustomer.php">Customer Signup</a> | 
</p>


<h2>Seller Signup</h2>
<form action="../Controller/Seller_SignUpController.php" method="POST">
    <label for="sellerName">Name:</label>
    <input type="text" id="sellerName" name="name" required><br><br>

    <label for="sellerEmail">Email:</label>
    <input type="email" id="sellerEmail" name="email" required><br><br>

    <label for="sellerMobile">Mobile No:</label>
    <input type="text" id="sellerMobile" name="mobile" required><br><br>

    <label for="shopName">Shop Name:</label>
    <input type="text" id="shopName" name="shopName" required><br><br>

    <label for="shopAddress">Shop Address:</label>
    <input type="text" id="shopAddress" name="shopAddress" required><br><br>

    <label for="sellerPassword">Password:</label>
    <input type="password" id="sellerPassword" name="password" required><br><br>

    <input type="submit" value="Sign Up">
</form>

</body>
</html>
