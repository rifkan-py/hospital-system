<?php
include '../core.inc.php';
include '../connect.inc.php';

if(isset($_POST['register_form'])) {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirm_password = $_POST['confirm_password'];
  $hashed_password = md5($password);
  if(!empty($username) && !empty($email) && !empty($password) && !empty($confirm_password)) {
    if($password !== $confirm_password) {
      $_SESSION["signupError"] = 'passwords do not match';
      header('location: signup.php');
    } else {
      
      $query = "SELECT `email` FROM `users` WHERE `email`='$email'";
      $result = $conn->query($query);
      if($result->num_rows == 1) {
        $_SESSION['signupError'] = 'Given email is already taken';
        header('location: signup.php');
      } else if(mysqli_num_rows($result) == 0) {
        $query = "INSERT INTO `users` (`email`, `username`, `password`) VALUES ('$email','$username','$hashed_password')";
        $result = $conn->query($query);
        if($result) {
          $query = "SELECT `id` FROM `users` WHERE `email`='$email'";
          $result = $conn->query($query);
          while($row = $result->fetch_assoc()) {
            $_SESSION['user_id'] = $row['id'];
            header('location: ../index.php');
          }
          
        } else {
          $_SESSION['signupError'] = 'something went wrong, try again later.';
          header('location: signin.php');

        }
        
      }

      
    }
  } else {
    header('location: signup.php');
    exit();
  }
}

?>