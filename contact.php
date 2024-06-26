<?php
    // Set the Content-Security-Policy header(only allow scripts from the same domain)
    header("Content-Security-Policy: script-src 'self'");
  
    // Start the session
    session_start();

    // Get the session ID
    $sessionId = session_id();

  ?>
  
<!DOCTYPE html>
<html>
  <head>
    <title>Kopi Hainan | Contact Us</title>

    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <style>
      html, body {
        min-height: 100%;
        padding: 0;
        margin: 0;
        font-family: Poppins, sans-serif;
        font-size: 14px;
        color: #666;
      }
      h1 {
        margin: 0 0 20px;
        font-weight: 400;
        color: #ff8000;
      }
      h3 {
        margin: 0 0 20px;
        font-weight: 400;
        color: #453102;
      }
      p {
        margin: 0 0 5px;
      }
      .main-block {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background-color: #fff1df;
        background-image: url("img/coffee_qoys.jpg");
      }
      form {
        padding: 25px;
        margin: 25px;
        border-radius: 15px;
        box-shadow: 0 2px 5px #f5f5f5;
        background: #ffdebe;
      }
      input, textarea {
        width: calc(100% - 18px);
        padding: 8px;
        margin-bottom: 20px;
        border: 1px solid #1c87c9;
        outline: none;
      }
      input::placeholder {
        color: #666;
      }
      button {
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 20px;
        background: #ebaa2a;
        font-size: 16px;
        font-weight: 400;
        color: #fff;
      }
      button:hover {
        background: #efbf5e;
      }
      div-info {
        margin-left: 20px;
        padding: 15px;
        background-color: #ffdebe;
        border-radius: 15px;
      }
      div-2 {
        margin: 1px;
        padding: 20px;
      }
      .main-block {
        flex-direction: row;
      }
    </style>
    <script>
      
      function validateForm() {
        let name = document.forms["contactForm"]["name"].value;
        let email = document.forms["contactForm"]["email"].value;
        let phone = document.forms["contactForm"]["phone"].value;
        let message = document.forms["contactForm"]["message"].value;
        if (name == "" || email == "" || phone == "" || message == "") {
          alert("All fields must be filled out");
          return false;
        }
        let emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
        if (!emailPattern.test(email)) {
          alert("Please enter a valid email address");
          return false;
        }
        let phonePattern = /^\d{10,15}$/;
        if (!phonePattern.test(phone)) {
          alert("Please enter a valid phone number");
          return false;
        }
        return true;
      }
    </script>
  </head>
  <body>
    <section>
      <header>
        <a href="index.php" class="logo"><img src="img/lg-khainan.png"></a>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="product.php">What we sell</a></li>
          <li><a href="promotion.html">Promotion</a></li>
          <li><a href="about.php">About Us</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </header>
    </section>
    <div-2 class="main-block">
      <form name="contactForm" action="process_contact.php" onsubmit="return validateForm()" method="post">
        <h1>Contact Us</h1>
        <div class="info">
        <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
          <input class="fname" type="text" name="name" placeholder="Full name">
          <input type="text" name="email" placeholder="Email">
          <input type="text" name="phone" placeholder="Phone number">
        </div>
        <p>Message</p>
        <div>
          <textarea name="message" rows="4" placeholder="Your message"></textarea>
        </div>
        <button type="submit">Submit</button>
      </form>
      <div-info>
        <h1>Contact</h1>
        <h3>0123654789</h3>
        <h1>Operating Hours</h1>
        <h3>9 AM - 9 PM</h3>
        <h1>Address</h1>
        <h3>Level 2, HS Building, International Islamic University Malaysia, Gombak</h3>
        <h1>Location</h1>
        <h3>Student Mall IIUM Gombak</h3>
        <p style="border: 2px solid black">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d995.8482363707989!2d101.73352087378896!3d3.2521353049674815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc38c10ac59a75%3A0xe8eb22672e55389a!2sIIUM%20Student%20Mall!5e0!3m2!1sen!2smy!4v1655192787877!5m2!1sen!2smy" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </p>
      </div-info>
    </div-2>

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
        <li><a href="index.php">Home</a></li>
        <li><a href="product.php">What we sell</a></li>
        <li><a href="promotion.html">Promotion</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="contact.php">Contact Us</a></li>
      </ul>
      <p class="copyright">
        Copyright of IT Freshers @ 2022.
      </p>
    </div>
  </body>
</html>


