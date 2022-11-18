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
    <link rel="icon" href="/GraduationProject/images/arrow.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel=stylesheet href="/GraduationProject/style/style-register.css" />
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
    <title> Smart 🏠</title>

    <a href="/GraduationProject/html/index.php"><img id="arrow" src="/GraduationProject/images/arrow.png"></a>
</head>

<body id="bg">
    <h2>Create an account within seconds</h2>
    <div id=bg-box1>
        <center>
            <form action="/GraduationProject/php/register.php" method="post">
                <input type="text" id="input-box1" name="name0" minlength="2" placeholder="  Name" required>
                <input type="text" id="input-box1" name="surname0" minlength="3" placeholder="  Surname" required>
                <input type="email" id="input-box2" name="mail0" minlength="6" placeholder="Mail" required>
                <input type="password" id="input-box2" name="password0" minlength="6" placeholder="Password" required>
                <input type="tel" id="input-box2" name="phone0" minlength="10" placeholder="Phone Number" required>
                <input type="submit" id="submit-button1" name="submit" value="Register">
        </center>
        </form>
    </div>

</body>

</html>