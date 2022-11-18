<?php
include "DBconnection.php";
session_start();
$EM = $_POST['mail1'];
$PW = $_POST['password1'];
$sql = "SELECT ID,name ,surname ,phone FROM User WHERE mail='$EM' and password='$PW'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo " Hoşgeldiniz ";
        $_SESSION['ID'] = $row['ID'];
        $GLOBALS["Name"] = $row['name'] . " " . $row['surname'];
        header("refresh:0; url=/GraduationProject/html/vitrin.php");
        die;
    }
} else {
    echo " Kullanıcı bulunamadı yada mail veya şifre hatalı. ";
    header("refresh:1; url=/GraduationProject/html/index.php");
}
$conn->close();
