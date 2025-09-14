<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login.html");
    exit();
}

$name = $_POST['name'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$product = $_POST['product'];
$price = $_POST['price'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Order Successful - Fresh Bloom</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background: linear-gradient(to right, #d4fc79, #96e6a1);
      text-align: center;
      color: #333;
    }

    .container {
      margin: 50px auto;
      background: white;
      padding: 40px;
      border-radius: 12px;
      width: 500px;
      box-shadow: 0px 4px 12px rgba(0,0,0,0.1);
    }

    h1 {
      color: #28a745;
    }

    .btn {
      display: inline-block;
      margin-top: 20px;
      padding: 12px 20px;
      background: #ff4d6d;
      color: white;
      text-decoration: none;
      border-radius: 8px;
      transition: background 0.3s;
    }

    .btn:hover {
      background: #e63950;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>✅ Order Placed Successfully!</h1>
    <p>Thank you <strong><?php echo htmlspecialchars($name); ?></strong> for your order.</p>
    <p><strong>Product:</strong> <?php echo htmlspecialchars($product); ?></p>
    <p><strong>Price:</strong> ₹<?php echo htmlspecialchars($price); ?></p>
    <p><strong>Delivery Address:</strong> <?php echo nl2br(htmlspecialchars($address)); ?></p>
    <p><strong>Phone:</strong> <?php echo htmlspecialchars($phone); ?></p>

    <a href="home.php" class="btn">🏠 Back to Home</a>
  </div>
</body>
</html>
