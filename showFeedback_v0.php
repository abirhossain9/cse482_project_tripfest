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
        <table style="width:100%">
            <tr>
                <th>#sl</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
                <th>Feedback</th>
            </tr>
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
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $f_name; ?></td>
                <td><?php echo $l_name; ?></td>
                <td><?php echo $email; ?></td>
                <td><?php echo $feedback; ?></td>
            </tr>
        
            <?php $i++;
            }
            ?>

        </table>
        <?php ob_end_flush(); ?>
    </body>
</html>