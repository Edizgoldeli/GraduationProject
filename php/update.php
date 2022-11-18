<?php
include "DBconnection.php";
session_start();
$FN = $_POST['name0'];
$SN = $_POST['surname0'];
$PW = $_POST['password0'];
$EM = $_POST['mail0'];
$TP = $_POST['phone0'];

userAccess(0, $FN, $LN, $Pw, $EM, $TP);
$ID = $_SESSION['ID'];
$sql = "UPDATE  User SET name='$FN', surname='$SN', password='$PW', mail='$EM',phone='$TP' WHERE ID=$ID ";

if ($conn->query($sql) == TRUE) {
    echo 'Bilgiler başarıyla güncellendi.';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

header("refresh: 1; url=/GraduationProject/html/settings.php");
