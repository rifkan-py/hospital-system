<?php
include 'core.inc.php';

session_destroy();
header("Location: ./pages/signin.php");
