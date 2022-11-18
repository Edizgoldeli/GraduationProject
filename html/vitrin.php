<?php include "DBconnection.php";
session_start();
if ($_SESSION['ID']) {
} else {
    header("location:/GraduationProject/html/index.php");
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.7">
    <link rel=stylesheet href="/GraduationProject/style/style-vitrin.css" />
    <link rel=stylesheet href="/GraduationProject/style/navigation.css" />
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
    <title> Smart 🏠</title>
</head>

<body>
    <div class="feed">
        <div class="top-gap"></div>
        <?php include($_SERVER['DOCUMENT_ROOT'] . "/GraduationProject/php/module/module_info.php"); ?>
        <div class="bottom-gap"></div>
    </div>
    <div class="upper-menu">
        <h2>Smart🏠</h2>
        <div class="BG-upper"></div>
        <a href="vitrin.php" class="upper-button">
            <h5>Modules</h5>
        </a>
        <a href="vitrin2.php" class="upper-button2">
            <h5>Sensors</h5>
        </a>
        <div class="whiteUp-upper"></div>
        <div class="whiteDwn-upper"></div>


    </div>

    <div class="navbar">
        <a href="/GraduationProject/html/home.php">
            <h3>Home</h3>
        </a>
        <a href="/GraduationProject/html/settings.php">
            <h4>Settings</h4>
        </a>
    </div>

    <div class="middle-nav">
        <center><?php echo $_SESSION['ID']; ?></center>
    </div>
    <div class="top-nav"></div>





</body>

</html>