<?php
ob_start();
include 'db.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="style.css"/>
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
        <title>Tripfest</title>
    </head>
    <body>
        <nav>
            <input type="checkbox" id="check"/>
            <label for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
            </label>
            <label class="logo">Tripfest</label>
            <ul>
                <li>
                    <a class="" href="index.php">Home</a>
                </li>
                <li>
                    <a class="active" href="feedback.php">Feedback</a>
                </li>
                <li>
                    <a href="Order-form.php">Book trip</a>
                </li>
                <li>
                    <a href="Sign-In.php">Admin</a>
                </li>
            </ul>
        </nav>
        <div class="container feedback-container">
            <form action="" method="post">
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="firstname" placeholder="Your name.."/>

                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lastname" placeholder="Your last name.."/>

                <label for="email">email</label>
                <input type="text" id="email" name="email" placeholder="Your email.."/>

                <label for="Feedback">Subject</label>
                <textarea
                    id="Feedback"
                    name="feedback"
                    placeholder="Write something.."
                    style="height: 200px"></textarea>

                <input type="submit" value="Submit" name="send"/>
            </form>
             <?php if (isset($_POST['send'])) {
                 # code...
                 $f_name = $_POST['firstname'];
                 $l_name = $_POST['lastname'];
                 $email = $_POST['email'];
                 $subject = $_POST['feedback'];

                 //inserting data into the database
                 $query = "INSERT INTO feedbacks (f_name, l_name, email, subject) VALUES ('$f_name','$l_name','$email','$subject')";
                 $userFeedback = mysqli_query($connection, $query);
                 if ($userFeedback) {
                     header('Location:feedback.php');
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
        <?php ob_end_flush(); ?>
    </body>
</html>