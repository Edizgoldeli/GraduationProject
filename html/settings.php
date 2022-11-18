<?php include "DBconnection.php";
session_start();
if ($_SESSION['ID']) {
} else {
        header("location:/GraduationProject/html/index.php");
}
?>
<DOCTYPE! html>
        <html>

        <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=0.7">
                <link rel=stylesheet href="/GraduationProject/style/style-settings.css" />
                <link rel=stylesheet href="/GraduationProject/style/style-register.css" />
                <link rel=stylesheet href="/GraduationProject/style/navigation.css" />
                <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
                <title> Smart 🏠</title>
                <a href=""><img id="arrow" src="/GraduationProject/images/arrow1.png"></a>
                <a href="/GraduationProject/php/logout.php" class="log-out">Log Out</a>
        </head>

        <body>


                <h1>Profile Settings</h1>
                <div id="#bg-box1">
                        <center>
                                <form action="/GraduationProject/php/register.php" method="post">
                                        <input type="text" id="input-box1" name="name0" minlength="2" placeholder="  Name" required>
                                        <input type="text" id="input-box1" name="surname0" minlength="3" placeholder="  Surname" required><br>
                                        <input type="email" id="input-box2" name="mail0" minlength="6" placeholder="Mail" required><br>
                                        <input type="password" id="input-box2" name="password0" minlength="6" placeholder="Password" required><br>
                                        <input type="tel" id="input-box2" name="phone0" minlength="10" placeholder="Phone Number" required><br>
                                        <input type="submit" id="submit-button1" name="submit" value="Update">
                                </form>
                        </center>
                </div>
                <div class="navbar">
                        <a href="/GraduationProject/html/home.php">
                                <h3>Home</h3>
                        </a>
                        <a href="/GraduationProject/html/settings.php" class="active">
                                <h4>Settings</h4>
                        </a>
                </div>
                <div class="bottom-gap"></div>
                <div class="middle-nav">
                        <center><?php echo $_SESSION['ID']; ?></center>
                </div>
                <div class="top-nav"></div>
        </body>

        </html>