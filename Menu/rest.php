<?php
session_start();
include("connect.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Something was posted
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {
        // save to database
        $user_id = random_num(20);
        $query = "INSERT INTO users (user_id, user_name, password) VALUES ('$user_id', '$user_name', '$password')";
        mysqli_query($con, $query);
        header("Location: signin.php");
        die;
    } else {
        echo "Please enter some valid information!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Background Image Slider</title>
  <link rel="stylesheet" href="payment.css">
</head>
  
    <body id="top">
      <div class="background-slider">

      <div class="topbar">
        <div class="container">
    
          <address class="topbar-item">
            <div class="icon">
              <ion-icon name="location-outline" aria-hidden="true"></ion-icon>
            </div>
    
            <span class="span">
              Riley's Delicious Hot Chicken, Rondebosch, 28 Main Rd, Cape Town
            </span>
          </address>
    
          <div class="separator"></div>
    
          <div class="topbar-item item-2">
            <div class="icon">
              <ion-icon name="time-outline" aria-hidden="true"></ion-icon>
            </div>
    
            <span class="span">Daily : 12.00 pm to 23.59 pm</span>
          </div>
    
          <a href="tel:+11234567890" class="topbar-item link">
            <div class="icon">
              <ion-icon name="call-outline" aria-hidden="true"></ion-icon>
            </div>
    
            <span class="span">+27 62 527 9868</span>
          </a>
    
          <div class="separator"></div>
    
          <a href="mailto:booking@restaurant.com" class="topbar-item link">
            <div class="icon">
              <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>
            </div>
    
            <span class="span">Riley@gmail.com</span>
          </a>
    
        </div>
      </div>
    
    
    
    
    
      <!-- 
        - #HEADER
      -->
    
      <header class="header" data-header>
        <div class="container">
    
          <a href="#" class="logo">
            <img src="imgs\logo_final.png" width="160" height="50" alt="Riley - Home">
            
          </a>
    
          <nav class="navbar" data-navbar>
    
            <button class="close-btn" aria-label="close menu" data-nav-toggler>
              <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
            </button>
    
            <a href="#" class="logo">
              <img src="imgs\logo_final.png" width="160" height="50" alt="Riley - Home">
            </a>
    
            <ul class="navbar-list">
    
              <li class="navbar-item">
                <a href="#home" class="navbar-link hover-underline active">
                  <div class="separator"></div>
    
                  <span class="span">Home</span>
                </a>
              </li>
    
              <li class="navbar-item">
                <a href="Menu\MENU.html" class="navbar-link hover-underline">
                  <div class="separator"></div>
    
                  <span class="span">Menus</span>
                </a>
              </li>
    
             
    
            </ul>
    
            <div class="text-center">
              <p class="headline-1 navbar-title">Visit Us</p>
    
              <address class="body-4">
                Restaurant St, Delicious City, <br>
                London 9578, UK
              </address>
    
              <p class="body-4 navbar-text">Open: 9.30 am - 2.30pm</p>
    
              <a href="mailto:booking@riley.com" class="body-4 sidebar-link">booking@Riley.com</a>
    
              <div class="separator"></div>
    
              <p class="contact-label">Booking Request</p>
    
              <a href="tel:+88123123456" class="body-1 contact-number hover-underline">
                +88-123-123456
              </a>
            </div>
    
          </nav>
    
          <a href="http://localhost/login/signin.php" class="btn btn-secondary">
            <span class="text text-1">View Menu first?</span>
    
            <span class="text text-2" aria-hidden="true"> Menu</span>
          </a>
    
          <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
            <span class="line line-1"></span>
            <span class="line line-2"></span>
            <span class="line line-3"></span>
          </button>
    
          <div class="overlay" data-nav-toggler data-overlay></div>
    
        </div>
      </header>
    
    <div id="box">
        <form method="post">
            <div style="font-size: 20px; margin: 10px;">Sign up</div>
      
            <input id="text" type="text" name="user_name" placeholder="Username"> <br>
            <input id="text" type="password" name="password" placeholder="Password"><br>
            <input id="button" type="submit" value="Sign Up"><br>
            <a href="signin.php">Already have an accout? Log  in</a> <br>
        </form>
      </div>

    
    
</div>
  
  
</body>
</html>
