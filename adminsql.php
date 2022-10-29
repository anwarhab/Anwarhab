<?php

    $host               = "localhost";
    $user               = "root";
    $password      = "";
    $dbName       = "hospital";

    $conn = mysqli_connect($host, $user, $password,$dbName);

    $query = "SELECT * FROM patients";
    $result = mysqli_query($conn,$query);

    if ($result){
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr><td>" . $row['id'] . "</td><td>" . $row['name'] . "</td><td>" . $row['number'] . "</td><td>" . $row['date'] . "</td><td>" . $row['time'] . "</td></tr>";
        }
        echo "</table>";
    }
    else{
        echo "يوجد خطا ماء";
    }


?>