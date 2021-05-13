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
    <script>
      const formValidation = () => {
        let name = document.forms["form"]["name"].value;
        let email = document.forms["form"]["email"].value;
        let conatctval = document.forms["form"]["contact"].value;
        let date = document.forms["form"]["date"].value;
        let destination = document.forms["form"]["destination"].value;
        if (name == "") {
          alert("Name must be filled out");
          return false;
        }
        let tel = /^\d{11}$/;
        if (!conatctval.match(tel)) {
          alert("Contact format not acceptable");
          return false;
        }

        if (email == "") {
          alert("Email required");
          return false;
        }
        if (date == false) {
          alert("Date must be selected");
          return false;
        }
        if (destination == false) {
          alert("Destination must be selected");
          return false;
        }

        alert("Order Placed");
      };
    </script>
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
        <li><a class="active" href="Order-form.php">Book trip</a></li>
        <li><a href="Sign-In.php">Admin</a></li>
      </ul>
    </nav>
    <div class="regcontainer">
      <form
        name="form"
        onSubmit="return formValidation()"
        action=""
        method="POST"
      >
        <li><label for="name">Name:</label></li>
        <li><input type="text" id="name" name="name" /></li>
        <li><label for="contact">Contact number:</label></li>
        <li><input type="text" id="contact" name="contact" /></li>
        <li><label for="email">Email:</label></li>
        <br />
        <li><input type="email" name="email" /></li>
        <br />
        <li><label for="date">Date:</label><br /></li>
        <br />
        <li>
          <input type="date" id="date" name="Date" />
        </li>
        <br />
        <li>
          <select id="destination" name="Destination" required>
            <option selected="" value="Default">
              (Please select a destination)
            </option>
            <option value="Delhi">Delhi,India</option>
            <option value="Paris">Paris,France</option>
            <option value="Venice">Venice,Italy</option>
            <option value="Kualalumpur">Kualalumpur, Malayshia</option>
          </select>
        </li>

        <li><input type="submit" name="submit" value="Submit" /></li>
        <li></li>
      </form>
      <?php if (isset($_POST['submit'])) {
          # code...
          $name = $_POST['name'];
          $phone = $_POST['contact'];
          $email = $_POST['email'];
          $date = date('Y-m-d', strtotime($_POST['Date']));
          $dest = $_POST['Destination'];

          //inserting data into the database
          $query = "INSERT INTO orders (name, phone, email, date,dest) VALUES ('$name','$phone','$email','$date','$dest')";
          $userOrders = mysqli_query($connection, $query);
          if ($userOrders) {
              header('Location:Order-form.php');
          } else {
              die('Operation failed' . mysqli_error($connection));
          }
      } ?>

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
    <script src="formValid_order.js"></script>
     <?php ob_end_flush(); ?>
  </body>
</html>
