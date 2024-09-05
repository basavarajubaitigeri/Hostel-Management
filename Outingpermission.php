<?php


    // $servername = "sql209.infinityfree.com";
    // $username = "if0_34760182";
    // $password = "2gkOcf0j3NoIhy0";
    // $dbname = "if0_34760182_hostel_management";

    // // Create connection
    // $conn = new mysqli($servername, $username, $password, $dbname);

    // // Check connection
    // if ($conn->connect_error) {
    // die("Connection failed: ". $conn->connect_error);
    // }
    include 'connection.php';
    echo "<script>alert('Welcome to validation Page')</script>";


    if(isset($_POST['StudentID']) && isset($_POST['Name']) && isset($_POST['Branch']) && isset($_POST['Phonenumber']) && isset($_POST['Reason'])){
        $studentID = $_POST['StudentID'];
        $name = $_POST['Name'];
        $branch = $_POST['Branch'];
        $phonenumber = $_POST['Phonenumber'];
        $reason = $_POST['Reason'];

        $sql = "INSERT INTO `outingpermission`(`Id`, `Name`, `Branch`, `Phonenumber`, `Reason`) VALUES ('$studentID','$name','$branch','$phonenumber','$reason')";
        $query = mysqli_query($conn,$sql);
        // if($query){
        //     $message = "Your Request is to sent to the Management this and you will recieve the reply with in 1 or 2 hours of time <br> Mr:$name";

        // }
        // else{
        //     $message_2 = "message is unable to send due to some server issue pls try again after some time";

        // }

       
        }







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
              <h5 class="card-title">Outing permission</h5>
              <p class="card-text"><?php
              if($query){
            echo "Your Request has to sent to the Management and you will recieve the reply with in 1 or 2 hours <br> Mr:$name";

            }
            else{
                echo "message is unable to send due to some server issue pls try again after some time";

            }
              
              ?></p>
              <a href="Dashboard.html" class="btn btn-primary">Go Home</a>
            </div>
          </div>
        </div>
      </div>

    </div>
    


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>