<?php
include '../core.inc.php';
include '../connect.inc.php';

if(isset($_POST['sign_in'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];
  $password_hash = md5($password);

  if(!empty($email) && !empty($password)) {
    $query = "SELECT `id` FROM `users` WHERE `email`='$email' AND `password`='$password_hash'";
    $result = $conn->query($query);
    // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    if($result->num_rows == 0) {
      $_SESSION['signinError'] = 'Invalid username or password.';
      header('location: signin.php');
    } else if($result->num_rows == 1) {
      while($row = $result->fetch_assoc()) {
        $_SESSION['user_id'] = $row['id'];
        header('location: ../index.php');
      }
    }
  } 
}
?>