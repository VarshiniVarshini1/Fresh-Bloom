<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Fresh Blooms - Home</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background: linear-gradient(to right, #ffdde1, #ff99cc);
      color: #333;
    }

    header {
      background: #ff4dc1f7;
      color: white;
      padding: 20px;
      text-align: center;
    }

    nav {
      text-align: center;
      background: #ffe6f0;
      padding: 10px;
    }

    nav a {
      text-decoration: none;
      color: #ff4d6d;
      font-weight: bold;
      margin: 0 15px;
      transition: color 0.3s;
    }

    nav a:hover {
      color: #e60050;
    }
  
    .welcome {
      text-align: center;
      margin: 20px;
      font-size: 1.2em;
    }

    .container {
      text-align: center;
      padding: 40px;
    }

    .flowers {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 25px;
    }

    .card {
      background: WHITE;
      border-radius: 15px;
      box-shadow: 0px 4px 12px rgba(0,0,0,0.1);
      padding: 12px;
      width: 220px;
      text-align: center;
      transition: transform 0.3s;
    }

    .card:hover {
      transform: scale(1.05);
    }

    .card img {
      width: 100%;
      height: 160px;
      object-fit: cover;
      border-radius: 6px;
    }

    .card h3 {
      margin: 10px 0 5px;
      color: #ff4d6d;
    }

    .price {
      font-weight: bold;
      color: #e60050;
      margin: 5px 0 10px;
    }

    .buy-btn {
      display: inline-block;
      padding: 8px 15px;
      background: #ff4d6d;
      color: white;
      border-radius: 6px;
      text-decoration: none;
      font-size: 14px;
      transition: background 0.3s;
    }

    .buy-btn:hover {
      background: #e63950;
    }

    .logout-btn {
      display: inline-block;
      margin-top: 30px;
      padding: 12px 25px;
      background: #ff4d6d;
      color: white;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      text-decoration: none;
      font-weight: bold;
    }

    .logout-btn:hover {
      background: #e63950;
    }

    .cover{
      height: 50vh;
      width: 100%;
      background-image: url('images/imagew.png');
      background-size: cover;
      background-position: center center;
      margin: 0;
    }

    .h1 {
      font-family: 'Brush Script MT', cursive;
      color: #e63950;
      text-align: center;
      font-weight: bold;
      font-size: 30px;
    }

  </style>
</head>
<body>
  <header>
<h1>🌸FRESH BlOOMS🌸</h1>
  </header>

  <nav>
    <a href="home.php">Home</a>
    <a href="register.html">Register</a>
    <a href="login.html">Login</a>
  </nav>

  <div class="welcome">
    Welcome, <strong><?php echo $_SESSION['email']; ?></strong> 🌸
  </div>
      

    <div class="cover">
  </div>
  <div class="h1">
        <h1>Welcome to Our Website</h1>
        <p>A brief description or slogan.</p>
        <a href="/contact/" class="cta-button">Learn More</a>
  </div>
  <div class="container">
       <h2>Freshly Available</h2>
    <div class="flowers">
      <div class="card">
        <img src="images/PINK TULIPS.png" alt="PINK TULIPS">
        <h3>PINK TULIPS</h3>
        <p class="price">₹499</p>
        <a href="cart.php?product=Red Roses&price=499" class="buy-btn">Buy Now</a>
      </div>
      <div class="card">
        <img src="images/WHITE LILLY.png" alt="BROWN ROSES">
        <h3>WHITE LILLY</h3>
        <p class="price">₹399</p>
        <a href="cart.php?product=Yellow Tulips&price=399" class="buy-btn">Buy Now</a>
      </div>
      <div class="card">
        <img src="images/PINK ROSES.png" alt="DRIED HYDROGENS">
        <h3>PINK ROSES</h3>
        <p class="price">₹199</p>
        <a href="cart.php?product=White Lilies&price=599" class="buy-btn">Buy Now</a>
      </div>
      <div class="card">
        <img src="images/BROWN ROSES.png" alt="DRIED HYDROGENS">
        <h3>BROWN ROSES</h3>
        <p class="price">₹599</p>
        <a href="cart.php?product=White Lilies&price=599" class="buy-btn">Buy Now</a>
      </div>
      <div class="card">
        <img src="images/BLUE LOTUS.png" alt="DRIED HYDROGENS">
        <h3>BLUE LOTUS</h3>
        <p class="price">₹599</p>
        <a href="cart.php?product=White Lilies&price=599" class="buy-btn">Buy Now</a>
      </div>
      <div class="card">
        <img src="images/HYDRANGEAS.png" alt="DRIED HYDROGENS">
        <h3>HYDRANGEAS</h3>
        <p class="price">₹299</p>
        <a href="cart.php?product=White Lilies&price=599" class="buy-btn">Buy Now</a>
      </div>
      <div class="card">
        <img src="images/RED ROSES.png" alt="DRIED HYDROGENS">
        <h3>RED ROSES</h3>
        <p class="price">₹299</p>
        <a href="cart.php?product=White Lilies&price=599" class="buy-btn">Buy Now</a>
      </div>
      <div class="card">
        <img src="images/SUNFLOWERS.png" alt="DRIED HYDROGENS">
        <h3>SUNFLOWERS</h3>
        <p class="price">₹299</p>
        <a href="cart.php?product=White Lilies&price=599" class="buy-btn">Buy Now</a>
      </div>
      <div class="card">
        <img src="images/PURPLE BOUQUET.png" alt="PINK ROSES">
        <h3>PURPLE BOUQUET</h3>
        <p class="price">₹299</p>
        <a href="cart.php?product=Bright Sunflowers&price=299" class="buy-btn">Buy Now</a>
      </div>
      <div class="card">
        <img src="images/MULTI FLORAL BOUQUET.png" alt="PINK ROSES">
        <h3>MULTI FLORAL BOUQUET</h3>
        <p class="price">₹299</p>
        <a href="cart.php?product=Bright Sunflowers&price=299" class="buy-btn">Buy Now</a>
      </div>
    </div>

    <a href="logout.php" class="logout-btn">Logout</a>
  </div>
</body>
</html>
