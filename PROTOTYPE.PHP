

<?php
if(isset($_POST['sign_up']))
{
    $conn = new mysqli_connect("sql209.infinityfree.com","if0_34760182","2gkOcf0j3NoIhy0","if0_34760182_hostel_management") or die("Connection has failed due to the ".mysqli_connect_error());
    
    if(isset($_POST['name']) && isset($_POST['password']) && isset($_POST['email']))
    {
        $name = $_POST['name'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $sql = "INSERT INTO `Login_registration`(`username`,`email`,`password`) VALUES('$name','$email','$password')";
        $query = new mysqli_query($conn,$sql);
        if($query){
            echo"sucesss";
            // header("location:Dashboard.html");
        }
        else{
            echo"connection failed";
        }


    }
}



// $conn = new mysqli_connect("sql209.infinityfree.com","if0_34760182","2gkOcf0j3NoIhy0","if0_34760182_hostel_management") or die("Connection has failed due to the ".mysqli_connect_error());
// if(isset($_POST['username']) && isset($_POST['PASSWORD'])){
//   function validate($data){
//     $data = trim($data);
//     $data  = stripslashes($data);
//     $data = htmlspecialchars($data);
//     return $data;

//   }
//   $username = validate($_POST['username']);
// $Password = validate($_POST['PASSWORD']);

// $sql = "SELECT FROM "

// if(empty($username)){
//   header("location:registration_sucess.php");
//   exit();

// }
// else if(empty($data)){
//   header("location:registration_sucess.php");
// }

// }

