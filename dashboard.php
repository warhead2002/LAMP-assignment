<!DOCTYPE html>
<head><title>Details</title></head>
<body>
    <?php
        $servername = "localhost";
        $username = "daani";
        $password = "daani";
        $database="userbase";
        $fname = $_POST["first_name"];
        $lname = $_POST["last_name"];
        $email = $_POST["email"]; 
        $password = $_POST["password"];
        $dob = $_POST["birthday"];
        // Create connection
        $conn = new mysqli($servername, $username, $password,$database);
        //$sql = "SELECT * FROM `data` WHERE 1;";
        $sql = "INSERT INTO `data`(first_name,last_name,email,password,dob)VALUES($fname,$lname,$email,$password,$dob)";
    ?>
    <h1>The details provided are:</h1><br>


</body>