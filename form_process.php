<?php
  $conn = mysqli_connect('localhost', 'root', '', 'emailvalidation') or die("Unable to connet to server");
  $email_error = "";
  $duplicate_error = "";
  $success_message = "";
  if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST["email"];
    if (empty($email)){
      $email_error = "Email is required";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $email_error = "Invalid email format";
    } else {
      $duplicate = mysqli_query($conn, "SELECT * FROM emails WHERE email = '$email'") or die("Unable to search db");
      $num_rows = mysqli_num_rows($duplicate);
      if($num_rows){
          $duplicate_error = "Email already subsciped";
      } else {
        mysqli_query($conn, "INSERT INTO `emails` (`email`) VALUES ('$email')") or die("Unable to add email");
        $success_message = "Thank you for subscriping";
      }
    }
  }
?>
