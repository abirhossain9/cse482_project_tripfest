<?php
ob_start();
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="style.css"/>
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
        <title>Tripfest</title>
    </head>
    <body>
        <nav class="navResponse">
            <input type="checkbox" id="check"/>
            <label for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
            </label>
            <label class="logo" style="cursor: pointer" onclick="home()">Tripfest</label >
            <ul>
                <li>
                    <a class="active" href="index.php">Home</a>
                </li>
                <li>
                    <a href="feedback.php">Feedback</a>
                </li>
                <!-- <li><a href="Register.php">Sign Up</a></li> -->
                <li>
                    <a href="Order-form.php">Book trip</a>
                </li>
                <li>
                    <li><a href="./adminPanel.php">Admin Panel</a></li>
                </li>
            </ul>
        </nav>
        <section class="order-box-div">
            <h1 class="order-box-heading">
                Feedback
            </h1>

            <!-- php codes start -->
            <?php
            //reading data from database
            $query = 'SELECT * FROM feedbacks';
            //passing sql command to the database
            $allFeedbacks = mysqli_query($connection, $query);
            //counter
            $i = 1;
            while ($row = mysqli_fetch_assoc($allFeedbacks)) {

                # code...
                $id = $row['id'];
                $f_name = $row['f_name'];
                $l_name = $row['l_name'];
                $email = $row['email'];
                $feedback = $row['subject'];
                ?>

            <div class="order-box">
                <div class="order-detail">
                    <h2>First Name : <?php echo $f_name; ?>
                    </h1>
                    <h2>Email :<?php echo $email; ?>
                    </h2>
                    <h2>Opinion :<?php echo $feedback; ?>
                    </h2>
                </div>
            </div>
            <?php $i++;
            }
            ?>
            <!-- php codes end -->

        </section>
        <?php ob_end_flush(); ?>
    </body>
</html>