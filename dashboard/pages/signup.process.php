<?php
include '../core.inc.php';
include '../connect.inc.php';

if (isset($_POST['signup_form'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password =$_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $user_type = $_POST['user_type'];
    $hashed_password = md5($password);

    if(!empty($first_name)
       && !empty($last_name)
       && !empty($email)
       && !empty($password)
       && !empty($confirm_password)
       && !empty($user_type)) {
        if($password == $confirm_password) {

            $query = "SELECT `email` FROM `super_users` WHERE `email`='$email'";
            $result = $conn->query($query);
            if($result->num_rows == 1) {
                $_SESSION['admin_signup_error'] = 'Given email is already taken';
                header('location: signup.php');
            } else if(mysqli_num_rows($result) == 0) {
                $query = "INSERT INTO `super_users` (`first_name`, `last_name`, `email`, `password`, `user_type`) VALUES ('$first_name','$last_name','$email', '$password', '$user_type')";
                $result = $conn->query($query);
                if($result) {
                    $query = "SELECT `id` FROM `super_users` WHERE `email`='$email'";
                    $result = $conn->query($query);
                    while($row = $result->fetch_assoc()) {
                        $_SESSION['admin_user_id'] = $row['id'];
                        header('location: ../index.php');
                    }
                } else {
                    $_SESSION['dashboard_signup_error'] = 'something went wrong, try again later.';
                    header('Location: signup.php');
                }

            }

        } else {
            $_SESSION['dashboard_signup_error'] = 'passwords do not match.';
            header('Location: signup.php');
        }
    } else {
        echo 'please required all the field';
    }
}