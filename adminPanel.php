<?php
ob_start();
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <title>Tripfest</title>
  </head>
  <body>
    <nav class="navResponse">
      <input type="checkbox" id="check" />
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo" style="cursor: pointer" onclick="home()"
        >Tripfest</label
      >
      <ul>
        <li><a class="active" href="index.php">Home</a></li>
        <li><a href="feedback.php">Feedback</a></li>
        <!-- <li><a href="Register.php">Sign Up</a></li> -->
        <li><a href="Order-form.php">Book trip</a></li>
        <li><a href="./adminPanel.php">Admin Panel</a></li>
      </ul>
    </nav>
    <section class="order-box-div">
      <h1 style="margin-top: 30px; text-align: center; margin-bottom: 40px">
        Admin Panel
      </h1>
      <div class="order-box">
        <div class="order-detail admin-text">
          <a href="./showOrder.php" style="text-decoration: none"
            ><h2>Show Orders</h2></a
          >
        </div>
      </div>
      <div class="order-box">
        <div class="order-detail admin-text">
          <a href="./successOrderHistory.php" style="text-decoration: none"
            ><h2>Order History</h2></a
          >
        </div>
      </div>
      <div class="order-box">
        <div class="order-detail admin-text">
          <a href="./showFeedback.php" style="text-decoration: none"
            ><h2>Feedback</h2></a
          >
        </div>
        
      </div>
    </section>
  </body>
</html>