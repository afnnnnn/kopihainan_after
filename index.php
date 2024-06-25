  <?php
    // Set the Content-Security-Policy header(only allow scripts from the same domain)
    header("Content-Security-Policy: script-src 'self'");
  
    // Start the session
    session_start();

    // Check if the user is logged in
    if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
      header("Location: login.php");
      exit;
  }

    // Get the session ID
    $sessionId = session_id();

    // Output the session ID
    echo "Session ID: " . $sessionId;
  ?>

<!DOCTYPE html>
<html lang = "en">

<head>
  <meta charset = "UTF-8">
  <title>Kopi Hainan | Home</title>
  <link rel="icon" type="image/x-icon" href="/img/favicon.ico">
  <link rel = "stylesheet" href = "homePageStyle.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>

<body>
  <section>
    <div class = "circle"></div>
    <header>
      <a href="index.html" class="logo"><img src="img/lg-khainan.png"></a>
      <ul>
        <li><a href = "index.php">Home</a></li>
        <li><a href = "product.php">What we sell</a></li>
        <li><a href = "promotion.html">Promotion</a></li>
        <li><a href = "about.php">About Us</a></li>
        <li><a href = "contact.php">Contact</a></li>

      </ul>
    </header>
    <div class = "content">
      <div class = "textBox">
        <h1><span>Kopi Hainan</span><br>IIUM Student Mall</h1>
        <p>Kopi Hainan can be found selling coffee beverages at International Islamic University Malaysia (IIUM)'s Student Mall. Its purpose and objective is to serve coffee beverages that could put a smile on the faces of every customer.</p>
      </div>
    <div class = "imgBox">
      <img src = "img/signature.png" class = "kopiHainan">
    </div>

  </section>

  <style>
    /* Add your custom styles here */
    .logout-button {
      background-color: #ff6f00;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
      display: block;
      margin: 0 auto;
      width: 200px;
      text-align: center;
    }

    .logout-button:hover {
      background-color: #ff8f00;
    }
  </style>

  <form method="post" action="logout.php">
    <button type="submit" class="logout-button">Logout</button>
  </form>
  
  <div class="footer">
      <div class="social-footer">
        <a href="https://www.instagram.com/kopihainangombak/" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="https://facebook.com/kopihainaniium/?ref=page_internal" target="_blank"><i class="fab fa-facebook"></i></a>
        <a href="https://wa.me/60133920201" target="_blank"><i class="fab fa-whatsapp"></i></a>
      </div>

      <ul class="list">
        <li>
          <a href="index.php">Home</a>
        </li>
        <li>
          <a href="product.php">What we sell</a>
        </li>
        <li>
          <a href="promotion.html">Promotion</a>
        </li>
        <li>
          <a href="about.php">About Us</a>
        </li>
        <li>
          <a href="contact.php">Contact</a>
        </li>
      </ul>
      <p class="copyright">
        Copyright of IT Freshers @ 2022.
      </p>

  </div>
</body>
</html>
