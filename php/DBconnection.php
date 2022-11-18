<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "smartHome";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
function userAccess($ID1, $F_Name1, $L_Name1, $Password1, $Email1, $Phone1)
{
  $GLOBALS['ID'] = $ID1;
  $GLOBALS['mail'] = $Email1;
  $GLOBALS['name'] = $F_Name1;
  $GLOBALS['password'] = $Password1;
  $GLOBALS['phone'] = $Phone1;
  $GLOBALS['surname'] = $L_Name1;
}
function moduleAccess($ID2, $module_ID2, $module_name2, $status2, $timeStmp2)
{
  $GLOBALS['ID'] = $ID2;
  $GLOBALS['module_ID'] = $module_ID2;
  $GLOBALS['module_name'] = $module_name2;
  $GLOBALS['status'] = $status2;
  $GLOBALS['timeStmp'] = $timeStmp2;
}
function sensorAccess($ID2, $sensor_ID2, $sensor_name2, $info, $info2, $timeStmp2)
{
  $GLOBALS['ID'] = $ID2;
  $GLOBALS['sensor_ID'] = $sensor_ID2;
  $GLOBALS['sensor_name'] = $sensor_name2;
  $GLOBALS['info'] = $info;
  $GLOBALS['info2'] = $info2;
  $GLOBALS['timeStmp'] = $timeStmp2;
}
