    <?php
        $connection = mysqli_connect('localhost', 'root', '', 'tripfest');
        if ($connection) {
        } else {
            echo 'failed';
        }

        $sql = "select * from feedbacks";
        $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

        $emparray = array();
        while($row =mysqli_fetch_assoc($result)){
            $emparray[] = $row;
        }

        $fp = fopen('empdata.json', 'w');
        fwrite($fp, json_encode($emparray));
        fclose($fp);
    ?>
       