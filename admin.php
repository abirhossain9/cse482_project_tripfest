<?php
ob_start();
include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>This is admin page</h1> <br><br>
        <button type="button"><a href="showFeedback.php">See feedbacks</a></button>
        <button type="button"><a href="showOrders.php">See orders</a></button>
        <button type="button"><a href="Sign-In.php">Log Out</a></button>

        <?php ob_end_flush(); ?>
    </body>
</html>