<?php

            $host               = "localhost";
            $user               = "root";
            $password      = "rootroot";
            $dbName       = "hospital";
        
            $conn = mysqli_connect($host, $user, $password,$dbName);
            
            if($_POST['send']){
            
                $pName            = $_POST['name'];
                $pNumber           = $_POST['number'];
                $pDate            = $_POST['date'];
                $pTime            = $_POST['time'];            
            
                $query = "INSERT INTO patients(name,number,date,time) VALUE('$pName ','$pNumber ','$pDate ','$pTime ')";
                $result = mysqli_query($conn,$query);
                echo "<p style='color:green'>" . "تم الحجز" . "</p>";
            }
            else{
                echo "<p style='color:red'>" . "عفواً حدث خطأ ما .. حاول مجدد " . "</p>";
            }


            ?>