<?php
include "DBconnection.php";
$FN = $_POST['name0'];
$SN = $_POST['surname0'];
$PW = $_POST['password0'];
$EM = $_POST['mail0'];
$TP = $_POST['phone0'];

userAccess(0, $FN, $LN, $Pw, $EM, $TP);


$sql = "INSERT INTO `User`(`ID`, `name`, `surname`, `password`, `mail`, `phone`) VALUES ('$ID', '$FN', '$SN', '$PW', '$EM', '$TP'); ";

if ($conn->query($sql) == TRUE) {
    echo 'Üye olduğunuz için teşekkürler.';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

header("refresh: 1; url=/GraduationProject/html/vitrin.php");
