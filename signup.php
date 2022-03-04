<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

if(isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $findus = $_POST['findus'];
    $news = $_POST['news'];
    $message = $_POST['message'];
    
    
    if(($name=="") || ($email=="")) {
        echo "Please provide all information";
    }
    
    else {
        define("HOST","localhost");
        // echo "I have full details";
        $DB_host = "localhost";
        $DB_user = "root";
        $DB_password = "";
        $DB_name = "omnifood";
        $connection = mysqli_connect(HOST,$DB_user,$DB_password,$DB_name);
    }
    
    
    if(!$connection) {
        echo "Connection error";
    } else {
        $insertQuery= "INSERT INTO clients(name,email,findus,news,message) values('$name','$email','$findus','$news','$message')";
        $insert = mysqli_query($connection,$insertQuery) or die("Error occured".mysqli_error($connection));
        if($insert) {
            echo "DATA added Successfully";
        }
    }

}
?>

</body>
</html>
