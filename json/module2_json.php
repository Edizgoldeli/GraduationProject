<?php
include($_SERVER['DOCUMENT_ROOT'] . "/GraduationProject/php/DBconnection.php");
$module_ID = 2;
$sql = "SELECT * FROM module WHERE module_ID = $module_ID";
$result = mysqli_query($conn, $sql);
$json_array = array();

while ($row = mysqli_fetch_assoc($result)) {
    $json_array[] = $row;
}
echo json_encode($json_array);
