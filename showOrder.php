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
        <li><a href="Sign-In.php">Admin</a></li>
      </ul>
    </nav>
    <section class="order-box-div">
        <h1 class="order-box-heading">
            Submitted Order
        </h1>
        <!-- php codes start -->

            <?php
            //reading data from database
            $query = 'SELECT * FROM orders';
            //passing sql command to the database
            $allOrders = mysqli_query($connection, $query);
            //counter
            $i = 1;
            while ($row = mysqli_fetch_assoc($allOrders)) {

                # code...
                $id = $row['id'];
                $name = $row['name'];
                $phone = $row['phone'];
                $email = $row['email'];
                $date = $row['date'];
                $dest = $row['dest'];
                ?>
                <div class="order-box">
            <div class="order-detail">
            <small>id : <?php echo $id; ?> </small>
            <p>-------------</p>
          <h2>Name : <?php echo $name; ?> </h1>
          <h2>Email : <?php echo $email; ?> </h2>
          <h2>Phone no. : <?php echo $phone; ?></h2>
          <h2>Destination : <?php echo $dest; ?></h3>
          <h2>Date : <?php echo $date; ?></h3>
          <div class="order-admin-button">
          <a href="showOrder.php?id=<?php echo $id; ?>" type="submit">Confirm</a>
            <!-- <input type="submit" name="success" value="Success" />-->
            </div>           
          </div>
        </div>




            <?php $i++;
            }
            ?>

        <!-- php codes ends -->

    </section>
            <?php if (isset($_GET['id'])) {
                # code...
                $orderId = $_GET['id'];
                $query1 = "SELECT * FROM orders WHERE id = '$orderId' ";

                $sOrders = mysqli_query($connection, $query1);

                while ($row = mysqli_fetch_assoc($sOrders)) {
                    # code...

                    $name = $row['name'];
                    $phone = $row['phone'];
                    $email = $row['email'];
                    $date = $row['date'];
                    $dest = $row['dest'];
                    $insertSquery = "INSERT INTO successful (id, name, phone, email, date,dest) VALUES ('$orderId','$name','$phone','$email','$date','$dest')";
                    $successOrders = mysqli_query($connection, $insertSquery);
                    if ($successOrders) {
                        $query = "DELETE FROM orders WHERE id= '$orderId'";
                        $deleteOrder = mysqli_query($connection, $query);
                        header('Location:showOrder.php');
                    } else {
                        die('Operation failed' . mysqli_error($connection));
                    }
                }
            } ?>
     <?php ob_end_flush(); ?>
  </body>
</html>
