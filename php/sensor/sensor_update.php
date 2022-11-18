<?php

if (isset($_GET["token"], $_GET["info"], $_GET["info2"], $_GET["sensor_ID"])) {
    $token = $_GET["token"];
    $info1 = $_GET["info"];
    $info3 = $_GET["info2"];
    $sensor_ID1 = $_GET["sensor_ID"];
}

if ($token == "3fncxnn5XnBqaJQ5UbP7") {

    include($_SERVER['DOCUMENT_ROOT'] . "/GraduationProject/php/DBconnection.php");
    session_start();
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    sensorAccess($ID, $sensor_ID, $sensor_name, $info, $info2, $timeStmp);


    $sql = "UPDATE  sensor SET info='$info1' , info2='$info3' WHERE sensor_ID=$sensor_ID1";
    if ($conn->query($sql) === TRUE) {
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
} else {
    echo "you are not authorized";
}
