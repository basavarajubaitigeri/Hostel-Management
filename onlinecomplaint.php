<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["Name"];
    $id = $_POST["ID"];
    $branch = $_POST["branch"];
    $group = $_POST["Group"];
    $complaint = $_POST["complaint"];

    // SQL query with placeholders
    $sql = "INSERT INTO `onlinecomplaint` (`Name`, `ID`, `Branch`, `Complaint`, `Group`) VALUES (?, ?, ?, ?, ?)";

    // Prepare the statement
    if ($stmt = $conn->prepare($sql)) {
        // Bind the variables to the prepared statement as parameters
        $stmt->bind_param("sssss", $name, $id, $branch, $complaint, $group);

        // Attempt to execute the prepared statement
        if ($stmt->execute()) {
            echo 'Complaint has been successfully registered';
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<style>

.main{
    margin-top:10%;
    margin-left:30%;
    padding:10px 10px;

{
</style>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Online complaint</title>
</head>
<body>
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid" id="nav-content">
      <a class="navbar-brand" href="#">Hostel management</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="Dashboard.hrml">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="www.svrec.ac.in">contact</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Online fee</a></li>
              <li><a class="dropdown-item" href="#">outing permission</a></li>
              <li><a class="dropdown-item" href="#">Visitor record</a></li>
              <li><a class="dropdown-item" href="#">Staff Data</a></li>
              
            </ul>
          </li>
         
        </ul>

      </div>
    </div>
  </nav>
<div class="main">
<div class="card" style="width: 18rem;">
  <img src="data:image/jpeg;base64,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" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Online complaint</h5>
    <p class="card-text">
    <?php
    //echo $hello;

    ?>
    </p>
    <a href="Online_complain.html" class="btn btn-primary">Go back</a>
  </div>
</div>
</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>