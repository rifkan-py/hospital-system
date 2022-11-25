<?php 
include '../core.inc.php';
include '../connect.inc.php';

if(isset($_GET['deleteId'])) {
  $deleteId = $_GET['deleteId'];
  $query = "DELETE FROM `appoinments` WHERE `id`='$deleteId'";

  if ($conn->query($query) === TRUE) {
    echo "Record deleted successfully";
    header("location: appoinment.php");
  } else {
    echo "Error deleting record: " . $conn->error;
  }
}

?>