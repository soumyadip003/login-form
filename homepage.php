<?php 
session_start();
include("connect.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homepage</title>
</head>
<body>
    <div style="text-align:center; paddint:15%">
        <p style="font-size:50px; font-weight:bold;">
            hello  <?php
            if(isset($_SESSION['email'])){
                $email=$_SESSION['email'];
                $query=mysqli_query($conn, "SELECT users.* FORM `users` WHERE users.email='$email'");
                while($row=mysqli_fetch_array($query)){
                    echo $row['firstName'].''.$row['lastName'];
            }
        }
            ?>
            :)
        </p>
    </div>
</body>
</html>