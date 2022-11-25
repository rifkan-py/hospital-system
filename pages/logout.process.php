<?php
include '../core.inc.php';
include '../connect.inc.php';

session_destroy();
header('location: ../index.php');
?>