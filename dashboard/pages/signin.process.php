<?php
include '../core.inc.php';
include '../connect.inc.php';

if(isset($_POST['signin_form'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    if(!empty($email) && !empty($password)) {
        $sql = "SELECT `id` FROM `super_users` WHERE `email`='$email' and `password` = '$password'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $_SESSION['dashboard_user_id'] = $row["id"];
                header("Location: /hospital-system/dashboard");
            }
        } else {
            $_SESSION['dashboardSigninError'] = 'Invalid Credential.';
            header("Location: signin.php");
        }
    }
}