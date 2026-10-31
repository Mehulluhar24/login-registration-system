<?php

    $insert=false;

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    
    $server="localhost";
    $username="root";
    $password="";
     $database="reg";

    $con = mysqli_connect($server,$username,$password,$database);
    if (!$con) {
        die ("connection failed Due to" .mysqli_connect_error());
    }
   // echo "success connection...";

   $firstname=$_POST['firstname'];
   $lastname=$_POST['lastname'];
   $phone=$_POST['phone'];
   $gender=$_POST['gender'];

   $sql="INSERT INTO record (`firstname`, `lastname`, `phone`, `gender`) VALUES ('$firstname', '$lastname', '$phone', '$gender');";
    //echo $sql;

    if ($con->query($sql)===true) {
        echo "Successfull inserted....";
      $insert=true;
    }else {
        echo "ERROR: $sql <br> $con->error";
    }

    $con->close();
}


?>

<!-- 
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

// $insert = false;

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $server = "localhost";
//     $username = "root";
//     $password = "";
//     $database = "reg";

//     $con = mysqli_connect($server, $username, $password, $database);

//     if (!$con) {
//         die("Connection failed: " . mysqli_connect_error());
//     }

//     $firstname = $_POST['firstname'];
//     $lastname = $_POST['lastname'];
//     $phone = $_POST['phone'];
//     $gender = $_POST['gender'];

//     $sql = "INSERT INTO record (firstname, lastname, phone, gender) 
//             VALUES ('$firstname', '$lastname', '$phone', '$gender')";

//     if ($con->query($sql) === true) {
//         $insert = true;
//     } else {
//         echo "ERROR: $sql <br>" . $con->error;
//     }

//     $con->close();
// } -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel form</title>
    <link rel="stylesheet" href="style.css">
    <script src="project.js"></script>
</head>
<body>
<!--     
    // if ($insert==true) {
    // echo"<p>Thank you for comming.</p>";

    // }
    // 
    <h3>Registration</h3> -->
    <!-- <form action="project.php" method="post">
        First name:<input type="text" name="firstname" placeholder="Enter the your first name"><br>
        Last name:<input type="text" name="lastname" placeholder="Enter the your Last name"><br>
        Phone:<input type="text" name="phone" placeholder="Enter the your phone no:"><br>
        Gender:<input type="text" name="gender" placeholder="enter Gender">
        <br>
        <input type="submit">   <input type="reset">
     -->

     <form action="project.php" method="post">
        <h3>Registration form</h3>
    First name: <input type="text" name="firstname" placeholder="enter the first name"><br>
    Last name: <input type="text" name="lastname"  placeholder="enter the last name"><br>
    Phone: <input type="text" name="phone"  placeholder="enter the phone name"><br>
    Gender: <input type="text" name="gender"  placeholder="enter the gender name"><br>
    <input type="submit">
    <input type="reset">
    </form>

    
    </form>
    
</body>
</html>

