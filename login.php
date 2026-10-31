<?php

if ($_SERVER["REQUEST_METHOD"] == "POST")
{

    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "reg"; // Use the same name as in phpMyAdmin

    $conn = mysqli_connect($server, $user, $pass, $db);

    if (!$conn) {
        die ("connection failed due to" . mysqli_connect_error());
    }
     
    //  echo "success connection";

    $email=$_POST['email'];
    $pass=$_POST['pass'];

    $sql="SELECT * FROM `login` WHERE  `email`='$email' AND `pass`='$pass' "; 
    $result=$conn->query($sql);


    //for the Match the database
    if ($result->num_rows==1) {
        
        $row=$result->fetch_assoc();//for the fetching the data 

        session_start();
        $_SESSION['email']=$row['email'];

        echo "Login Success";
        

        exit;
    }

    else {
        echo "invalid pass and email";
        header("Location:.php");
    }

    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <form action="login.php" method="post">
        <h3>login</h3>
        Email:<input type="email" name="email" placeholder="enter the email"><br>
        Password:<input type="password" name="pass" placeholder="enter the password"><br>
        <br>
        <input type="submit"> <input type="reset">
    </form>
</body>

</html>