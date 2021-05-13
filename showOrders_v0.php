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
                <th>Order id</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Date</th>
                <th>Destination</th>
                <th>Action</th>
            </tr>
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
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $id; ?></td>
                <td><?php echo $name; ?></td>
                <td><?php echo $phone; ?></td>
                <td><?php echo $email; ?></td>
                <td><?php echo $date; ?></td>
                <td><?php echo $dest; ?></td>
                <td>
                    <div class="btn-group">
                        <a href="updateUser.php?id=<?php echo $id; ?>" class="btn btn-success btn-sm">Update</a>
                        <a
                            href=""
                            class="btn btn-danger btn-sm "
                            data-bs-toggle="modal"
                            data-bs-target="#deleteUser<?php echo $id; ?>">Delete</a>
                    </div>
                </td>
            </tr>

            <?php $i++;
            }
            ?>

        </table>
        <?php ob_end_flush(); ?>
    </body>
</html>