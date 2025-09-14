<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login.html");
    exit();
}

// Get product info from URL
$product = isset($_GET['product']) ? $_GET['product'] : "Unknown Product";
$price = isset($_GET['price']) ? $_GET['price'] : "0";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Your Cart - Fresh Bloom</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background: linear-gradient(to right, #ffe6f0, #ffb6c1);
      color: #333;
    }

    header {
      background: #ff4d6d;
      color: white;
      padding: 20px;
      text-align: center;
    }

    .container {
      text-align: center;
      padding: 50px;
    }

    .cart-box {
      background: white;
      display: inline-block;
      padding: 25px;
      border-radius: 12px;
      box-shadow: 0px 4px 12px rgba(0,0,0,0.1);
    }

    h2 {
      color: #ff4d6d;
    }

    .price {
      font-size: 18px;
      color: #e60050;
      font-weight: bold;
      margin: 10px 0;
    }

    .btn {
      display: inline-block;
      margin: 10px;
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
  <header>
    <h1>🛒 Your Cart - Fresh Bloom</h1>
  </header>

  <div class="container">
    <div class="cart-box">
      <h2><?php echo htmlspecialchars($product); ?></h2>
      <p class="price">Price: ₹<?php echo htmlspecialchars($price); ?></p>
      
      <a href="home.php" class="btn">⬅ Continue Shopping</a>
      <a href="checkout.php?product=<?php echo urlencode($product); ?>&price=<?php echo urlencode($price); ?>" class="btn">Proceed to Checkout ➡</a>
    </div>
  </div>
</body>
</html>
