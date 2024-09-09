<?php
    
    if(isset($_POST['Email']) && isset($_POST['phone']) && isset($_POST['password'])){
        include 'connection.php';
        $Email=$_POST['Email'];
        $phone = $_POST['phone'];
        $pass=$_POST['password'];
        $sql="INSERT INTO `Login`(`Email`,`password`,`Phone`) VALUES('$Email','$pass','$phone')";
        $query = mysqli_query($conn,$sql);
        if($query){
            header('location:Dashboard.html');
        }
        else{
            header('location:Registration.html');
        }   

        
            
            

    }




    





?>