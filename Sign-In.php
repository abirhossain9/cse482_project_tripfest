<?php
ob_start();
include 'db.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <title>Tripfest</title>
  </head>
  <body>
    <nav>
      <input type="checkbox" id="check" />
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo">Tripfest</label>
      <ul>
        <li><a class="" href="index.php">Home</a></li>
        <li><a href="feedback.php">Feedback</a></li>
        <li><a href="Order-form.php">Book trip</a></li>
        <li><a class="active" href="Sign-In.php">Admin</a></li>
      </ul>
    </nav>
    <div class="signin-box">
      <div class="container">
        <form action="" method="POST">
          <div class="imgcontainer">
            <img src="images/avatar.jpg" alt="Avatar" class="avatar" />
          </div>

          <div class="container">
            <label for="uname"><b>Username</b></label>
            <input
              type="text"
              placeholder="Enter Username"
              name="uname"
              required
            />

            <label for="psw"><b>Password</b></label>
            <input
              type="password"
              placeholder="Enter Password"
              name="psw"
              required
            />

            <button type="submit" name="submit">Login</button>
          </div>

          <div class="container" style="background-color: #f1f1f1">
            <button type="button" class="cancelbtn">Cancel</button>
          </div>
        </form>
      <?php if (isset($_POST['submit'])) {
          $username = $_POST['uname'];
          $password = $_POST['psw'];
          $query = "SELECT * FROM admins WHERE username ='$username' and password='$password' ";
          $result = mysqli_query($connection, $query);
          $isSuccess = mysqli_num_rows($result);
          if ($isSuccess > 0) {
              header('Location:adminPanel.php');
          } else {
              echo 'login failed';
          }
      } ?>

      </div>
    </div>
    <div class="contact">
      <div>
        <h4>Contact Us</h4>
      </div>
      <div class="contact-box">
        <p>Holdind no - 231/1 ECB Chattar, Dhaka Cantonment, Dhaka- 1206.</p>
        <p>Email- Tripfest@gmail.com.</p>
        <p>Phone- 01701010101.</p>
      </div>
    </div>
    <footer class="footer-box">
      <h1>©Tripfest</h1>
    </footer>
    <?php ob_end_flush(); ?>
  </body>
</html>
