<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anwar health & beauty</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/JannaLTRegular.css">
</head>
<body>
    <div class="main">
        <div class="logo">
            <img src="images/logo.png">
            <h2>Anwar health & beauty</h2>
        </div>
        <div class="book">
            <p>مرحبا بك للحجز إملأ الإستمارة وسيتم التواصل معك إنشاء الله</p>
            <form action="index.php" method="post">
                <input type="text" placeholder="أدخل الاسم" name="name"/>
                <input type="number" placeholder="أدخل رقم الهاتف" name="number"/>
                <input type="date" name="date"/>
                <input type="time" name="time"/>
                <input type="submit" value="احجز الان" name="send"/>
            </form>

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


        </div>
    </div>
</body>
</html>
