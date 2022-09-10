<?php 
    //connect to db
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "test";
    $conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname) or die("DB Connect Error occurred");

    if(isset($_POST["submit"])) {
        //prepare variables
        $username = $_POST["username"];
        $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

        //check if user exists
        $sql = "SELECT * FROM `registration` WHERE `username`='$username'";
        $result = mysqli_query($conn, $sql);
        if($result->num_rows==0) {
            //prepare query
            $sql = "INSERT INTO `registration` (`username`, `password`) VALUES ('$username', '$password')";

            //execute
            $result = mysqli_query($conn, $sql);

            //evaluate result
            if($result==true) {
                include "register-success.html";
            } else {
                include "error.html";
            }
        } else {
            include "user-exists.html";
        }
    }

    $conn->close();
?>