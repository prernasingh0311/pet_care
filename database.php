<?php
    // if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    //     $fname = $_POST['fname'];
    //     $lname = $_POST['lname'];
    //     $email = $_POST['email'];
    //     $pass = $_POST['pass'];
    //     $phone = $_POST['phone'];        
      
      // Connecting to the Database
      $servername = "localhost";
      $username = "root";
      $password = "";
      $conn = @mysqli_connect($servername, $username, $password);
      //$database = "id17167800_petcare";
    $sqli = "CREATE DATABASE PETCARE";
      // Create a connection
     // $conn = @mysqli_connect($servername, $username, $password, $database);
     mysqli_query($conn, $sqli);
     if (!$conn){
          die("Sorry we failed to connect: ". mysqli_connect_error());
      }
    //   else{ 
    //     $sql = "INSERT INTO `register` (`fname`, `lname`, `email`, `pass`, `phone`) VALUES ('$fname', '$lname', '$email', '$pass', '$phone')";
    //     $result = mysqli_query($conn, $sql);
    //     if($result) {
    //         echo '<script>alert("Registered Successfully!")</script>';
    //     } 
    //     else {
    //         echo '<script>alert("Server Down... Please Try Again Later!")</script>';
    //     }
        
    //   }

   // }

   //$sql= "CREATE TABLE if not exists `register`(`fname` VARCHAR(20), `lname` VARCHAR(20), `email` VARCHAR(20), `pass` VARCHAR(20), `phone` INT)";

?>

