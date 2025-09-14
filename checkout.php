<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login.html");
    exit();
}

$product = isset($_GET['product']) ? $_GET['product'] : "Unknown Product";
$price = isset($_GET['price']) ? $_GET['price'] : "0";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Checkout - Fresh Bloom</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background: linear-gradient(to right, #fff0f5, #ffccdd);
      color: #333;
    }

    header {
      background: #ff4d6d;
      color: white;
      padding: 20px;
      text-align: center;
    }

    .container {
      width: 400px;
      margin: 40px auto;
      background: white;
      padding: 25px;
      border-radius: 12px;
      box-shadow: 0px 4px 12px rgba(0,0,0,0.1);
    }

    h2 {
      text-align: center;
      color: #ff4d6d;
    }

    .summary {
      margin-bottom: 20px;
      padding: 10px;
      background: #ffe6f0;
      border-radius: 8px;
      text-align: center;
    }

    label {
      display: block;
      margin-top: 10px;
      font-weight: bold;
    }

    input, textarea {
      width: 100%;
      padding: 8px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 6px;
    }

    .btn {
      display: block;
      width: 100%;
      margin-top: 20px;
      padding: 12px;
      background: #ff4d6d;
      color: white;
      font-size: 16px;
      font-weight: bold;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: background 0.3s;
    }

    .btn:hover {
      background: #e63950;
    }

    .back-link {
      display: block;
      text-align: center;
      margin-top: 15px;
      text-decoration: none;
      color: #ff4d6d;
    }

    .back-link:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <header>
    <h1>🌸 Checkout - Fresh Bloom 🌸</h1>
  </header>

  <div class="container">
    <h2>Order Summary</h2>
    <div class="summary">
      <p><strong>Product:</strong> <?php echo htmlspecialchars($product); ?></p>
      <p><strong>Price:</strong> ₹<?php echo htmlspecialchars($price); ?></p>
    </div>

    <form action="order_success.php" method="post">
      <input type="hidden" name="product" value="<?php echo htmlspecialchars($product); ?>">
      <input type="hidden" name="price" value="<?php echo htmlspecialchars($price); ?>">

      <label for="name">Full Name</label>
      <input type="text" name="name" id="name" required>

      <label for="address">Address</label>
      <textarea name="address" id="address" rows="3" required></textarea>

      <label for="phone">Phone Number</label>
      <input type="text" name="phone" id="phone" required>

      <button type="submit" class="btn">Place Order ✅</button>
    </form>

    <a href="cart.php?product=<?php echo urlencode($product); ?>&price=<?php echo urlencode($price); ?>" class="back-link">⬅ Back to Cart</a>
  </div>
</body>
</html>
