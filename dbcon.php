<?php 
require_once 'index.php';

if (isset($_POST['firstName'])) {
  $firstName = $_POST['firstName'];
}
if (isset($_POST['lastName'])) {
  $lastName = $_POST['lastName'];
}
if (isset($_POST['email'])) {
  $email = $_POST['email'];
}
if (isset($_POST['dob'])) {
  $dob = $_POST['dob'];
}
if (isset($_POST['gender'])) {
  $gender = $_POST['gender'];
}

    $conn = new mysqli("localhost:3307","root","","practice_1");

    
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " 
          . $conn->connect_error);
    }else{
      
      $sqlquery = "INSERT INTO demo (Name, Surname, Email, DOB, Gender) 
      VALUES ('$firstName', '$lastName', '$email', '$dob', '$gender')";

      
      if($conn->query($sqlquery) === TRUE) {
        ?>
        <script>
          alert("Record Added Succesfully");
        </script>
        <?php
    } else {
        echo "Error: " . $sqlquery . "<br>" . $conn->error;
    }
    $conn->close();
    }
?>