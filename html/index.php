<?php include "DBconnection.php";
session_start();
if ($_SESSION['ID']) {
    header("location:/GraduationProject/html/vitrin.php");
}
?>
<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel=stylesheet href="/GraduationProject/style/style.css" />
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
    <title> Smart 🏠</title>

</head>

<body>
    <div id=logo-box>
        <h2>Smart🏠</h2>
    </div>

    <div id=bg-box1>
        <center>
            <form action="/GraduationProject/php/loginAccess.php" method="post">

                <input type="input" id="input-box1" name="mail1" placeholder="✉️" required><br>
                <input type="password" id="input-box2" name="password1" placeholder="🔑" required><br>
                <input type="submit" id="submit-button1" name="submit" value="Login">
            </form>
        </center>
        <p id="link1"><a href="/GraduationProject/html/register.php">Register</a></p>
    </div>
</body>

</html>