<?php
include '../core.inc.php';
include '../connect.inc.php';

if(isset($_POST['appoinment_form'])) {
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $email = $_POST['email'];
  $phone_number = $_POST['phone_number'];
  $age = $_POST['age'];
  $gender = $_POST['gender'];
  $date = $_POST['date'];
  $description = $_POST['description'];

  if(!empty($first_name) && 
     !empty($last_name) && 
     !empty($email) && 
     !empty($phone_number) && 
     !empty($age) && 
     !empty($gender) && 
     !empty($date) && 
     !empty($description)) {

      if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
        $query = "INSERT INTO `appoinments` (`first_name`, `last_name`, `email`, `phone_number`, `age`, `gender`, `date`, `description`, `user`) VALUES ('$first_name', '$last_name', '$email', '$phone_number', '$age', '$gender', '$date', '$description', '".$_SESSION["user_id"]."')";
        
        if (mysqli_query($conn, $query)) {
          header('Location: appoinment.php');
        } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
        

      } else {
        header('Location: signin.php');
      }
  }
}
?>