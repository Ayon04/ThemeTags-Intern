<?php
session_start(); // Start the session to access session variables

// Retrieve customer data from session
$customerData = $_SESSION['customerData'] ?? [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Customer Information</title>
</head>
<body>
    <h2>Customer Information</h2>

    <?php if (!empty($customerData)): ?>
        <h3>Submitted Data:</h3>
        <p><strong>Name:</strong> <?php echo htmlspecialchars($customerData['name']); ?></p>
        <p><strong>Email:</strong> <?php echo htmlspecialchars($customerData['email']); ?></p>
        <p><strong>Mobile:</strong> <?php echo htmlspecialchars($customerData['mobile']); ?></p>
        <p><strong>Address:</strong> <?php echo htmlspecialchars($customerData['address']); ?></p>

        <!-- Clear customer data from session after displaying -->
        <?php unset($_SESSION['customerData']); ?>
    <?php else: ?>
        <p>No customer data available.</p>
    <?php endif; ?>

    <a href="../view/SignUPCustomer.php">Back to Signup</a>
</body>
</html>
