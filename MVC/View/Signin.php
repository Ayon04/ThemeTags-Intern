<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Signup</title>
    <script>
        function toggleFields() {
            const userType = document.querySelector('input[name="userType"]:checked').value;
            const customerFields = document.getElementById('customerFields');
            const adminFields = document.getElementById('adminFields');

            if (userType === 'customer') {
                customerFields.style.display = 'block';
                adminFields.style.display = 'none';
            } else {
                customerFields.style.display = 'none';
                adminFields.style.display = 'block';
            }
        }
    </script>
</head>
<body>

<h2>User Signup</h2>
<form action="signup.php" method="POST">
    <label>User Type:</label><br>
    <input type="radio" name="userType" value="customer" checked onclick="toggleFields()"> Customer
    <input type="radio" name="userType" value="admin" onclick="toggleFields()"> Admin<br><br>

    <div id="customerFields">
        <h3>Customer Information</h3>
        <label for="customerName">Name:</label><br>
        <input type="text" id="customerName" name="customerName" required><br><br>

        <label for="customerEmail">Email:</label><br>
        <input type="email" id="customerEmail" name="customerEmail" required><br><br>

        <label for="customerAddress">Address:</label><br>
        <input type="text" id="customerAddress" name="customerAddress" required><br><br>
    </div>

    <div id="adminFields" style="display: none;">
        <h3>Admin Information</h3>
        <label for="adminName">Name:</label><br>
        <input type="text" id="adminName" name="adminName" required><br><br>

        <label for="adminEmail">Email:</label><br>
        <input type="email" id="adminEmail" name="adminEmail" required><br><br>

        <label for="adminRole">Role:</label><br>
        <input type="text" id="adminRole" name="adminRole" required><br><br>
    </div>

    <input type="submit" value="Sign Up">
</form>

</body>
</html>
