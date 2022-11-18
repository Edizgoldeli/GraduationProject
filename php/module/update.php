<?php

include($_SERVER['DOCUMENT_ROOT'] . "/GraduationProject/php/DBconnection.php");
session_start();
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$module_ID1 = $_POST['module_ID'];
$status1 = $_POST['status'];
$status1 = 1 - $status1; // Changes status between 1 and 0 with each call


moduleAccess($ID, $module_ID, $module_name, $status, $timeStmp);


$sql = "UPDATE  module SET status='$status1' WHERE module_ID=$module_ID1 ";

if ($conn->query($sql) === TRUE) {
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
header("location:/GraduationProject/html/vitrin.php");
