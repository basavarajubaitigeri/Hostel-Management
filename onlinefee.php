<?php
    if(isset($_POST['studentid']) && isset($_POST['name']) && isset($_POST['branch']) && isset($_POST['transaction_ID'])&& isset($_POST['amount'])){
        include 'connection.php';
        $id=$_POST['studentid'];
        $name = $_POST['name'];
        $branch = $_POST['branch'];
        $transactionid = $_POST['transaction_ID'];
        $amount = $_POST['amount'];
        $sql = "INSERT INTO `Online_fee`(`Id`, `Name`, `Branch`, `transaction_ID`, `amount`) VALUES ('$id','$name','$branch','$transactionid','$amount')";
        
    }










?>


<!DOCTYPE html>
<html lang="en">
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <style>
  .content{
      margin-top:10%;
      margin-left:40%;
  }
  
  </style>
</head>
<body>
            <div class="content">
            <div class="card" style="width: 18rem;">
        <img src="https://digitallearning.eletsonline.com/wp-content/uploads/2020/10/fees.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Online fee payment</h5>
            <p class="card-text">
            <?php
            if (mysqli_query($conn, $sql)) {
            echo "Thanks for your payment you will be recieving response from the management in 1 or 2 working days";
            } 
            else {
            // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            echo "Check your ID and pls enter id should be same";
            }
            ?>
            </p>
            <a href="Dashboard.html" class="btn btn-primary">Home</a>
        </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>

