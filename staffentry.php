<?php
if(isset($_POST['name'])&& isset($_POST['sub']) && isset($_POST['cource']) && isset($_POST['branch']) && isset($_POST['phone'])){
    echo "hello <br>";
    include("connection.php");
    $name = $_POST['name'];
    $subject = $_POST['sub'];
    $branch = $_POST['branch'];
    $phone= $_POST['phone'];
    $cource = $_POST['cource'];
    $sql = "INSERT INTO `staffdataentry`(`Name`, `Phone`, `branch`, `cource`, `subject`) VALUES ('$name','$phone','$branch','$cource','$subject')";
    $query = mysqli_query($conn,$sql);
    if($query){
        echo "data entered";

    }
    else{
        echo "data entry failed".mysqli->error;
        
    }


}
?>