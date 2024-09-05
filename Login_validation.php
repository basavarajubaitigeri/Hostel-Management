<?php

    $usename = $_POST['Username'];
    $pass = $_POST['Password'];
    //echo $password."<BR>";
    echo $usename."<BR>";
    // // connection
    //     $servername = "sql209.infinityfree.com";
    //     $username = "if0_34760182";
    //     $password = "2gkOcf0j3NoIhy0";
    //     $dbname = "if0_34760182_hostel_management";

    //     // Create connection
    //     $conn = new mysqli($servername, $username, $password, $dbname);

    //     // Check connection
    //     if ($conn->connect_error) {
    //     die("Connection failed: ". $conn->connect_error);
    //     }
    //     // echo "Connected successfully";
    //     echo ".";
    //  connection code ends here 
    include 'connection.php';
    
    
    $sql = "SELECT * FROM `Login` WHERE `Email`='$usename' and `password`='$pass'";
    $query = mysqli_query($conn,$sql);
    // if($query){
    //     echo $sql;
    //     echo "details obtained";
    //     $result = mysqli_fetch_assoc($query);
    //     echo $result;
    //     $db_username = implode($result);
    //     echo $result["username"];
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "ID: " . $row["Email"] . " - Name: " . $row["password"] . " - Email: " . $row["email"] . "<br>";
            if($row['Email']=$usename && $row["password"]=$pass){
                // echo $usename;
                header("location:Dashboard.html");
            }
            else{
               echo"no records found";
               
            }
        }
        
        
    } else {
        $var = "you have entered the wrong details pls check the username and password";

    }
    
    
    // Close connection
    $conn->close();
            
            

        // }
        
        // else{
        //     echo "details failed to obtain";
        // }
        
        
   

    // trial 1 failed

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//   include 'connection.php';
//   $sql = "SELECT * FROM Login WHERE username = '$username' AND password = '$password'";
//   $result = $conn->query($sql);
//   if ($result->num_rows > 0) {
//     $_SESSION["username"] = $username;
//     header("location: Dashboard.html");
//   } else {
//     echo "Invalid username or password";
//   }
//   $conn->close();
// }


// trial 2-failed

//   trial 3 Failed;


// include('connection.php');  
//     $username = $_POST['Username'];  
//     $password = $_POST['Password'];  
      
//         //to prevent from mysqli injection  
//         $username = stripcslashes($username);  
//         $password = stripcslashes($password);  
//         $username = mysqli_real_escape_string($con, $username);  
//         $password = mysqli_real_escape_string($con, $password);  
      
//         $sql = "SELECT *FROM `Login` WHERE username = '$username' AND password = '$password'";  
//         $result = mysqli_query($con, $sql);  
//         $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
//         $count = mysqli_num_rows($result);  
//         echo implode($row);


          
//         // if($count == 1){  
//         //     header("loaction:Dashboard.html");
//         // }  
//         // else{  
//         //     echo "<h1> Login failed. Invalid username or password.</h1>";  
//         // } 

// trial 4 failed


// require 'connection.php';
// if(!empty($_SESSION["id"]))
// {
//   header("Location: login.php");
// }
// if(isset($_POST["submit"]))
// {
//   $username = $_POST["Username"];
//   $password = $_POST["Password"];
//   $result = mysqli_query($connection, "SELECT * FROM `Login` WHERE username = '$username' OR password = '$password'");
//   $row = mysqli_fetch_assoc($result);
//   if(mysqli_num_rows($result) > 1)
//   {
//     if($password == $row['password'])
//     {
//       $_SESSION["login"] = true;
//       $_SESSION["id"] = $row["id"];
//       header("Location: index.html");
//     }
//     else{
//       echo
//       "<script> alert('Wrong Password'); </script>";
//     }
//   }
//   else{
//     echo
//     "<script> alert('User Not Registered'); </script>";
//   }
// }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        #row{
           margin-top:20%;
           margin-left:20%;
        }
    </style>
    <title>Outing permission</title>
</head>
<body>
    <div class="container">
        <div class="row" id="row">
        <div class="col-sm-8 mb-3 mb-sm-0">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Login failed</h5>
              <p class="card-text"><?php
              echo "pls enter the right detials";
              ?></p>
              <a href="index.html" class="btn btn-primary">Go Home</a>
            </div>
          </div>
        </div>
      </div>

    </div>
    


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>