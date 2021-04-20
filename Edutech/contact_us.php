<?php 

// initializing variables
$fullname = "";
$email    = "";
$errors = array(); 

// connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'edudb') or die (" couldn't connect to database");

//  function for REGISTER USER
if (isset($_POST['contact_us'])) {

  // receive inputs
  $fullname= mysqli_real_escape_string($conn, $_POST['fullname']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
  $msg = mysqli_real_escape_string($conn, $_POST['msg']);

      //save in Database
    $myquery = "INSERT INTO `edudb`.`contact`(`fullname`,  `email`, `mobile`, `msg`) VALUES  ('$fullname', '$email', '$mobile', '$msg')";
    $success = mysqli_query($conn, $myquery);
    if ($success) {
    echo "Thank You For Contacting Us  ! we will reach out soon";
    }
    
  
}

?>
