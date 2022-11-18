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
     <link rel=stylesheet href="/GraduationProject/style/home.css" />
     <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
     <title> Smart 🏠</title>
</head>

<body>
     <div class="feed">
          <div class="top-gap"></div>

          <div class="bottom-gap"></div>
     </div>
     <div class="upper-menu">
          <h2>Smart🏠</h2>
          <div class="gapSupport"></div>
          <div class="selection"> <a href="/GraduationProject/html/vitrin.php">Modules</a></div>
          <div class="selection"><a href="/GraduationProject/html/vitrin2.php">Sensors</a></div>
          <div class="selection"><a href="/GraduationProject/html/video.html">Camera</a></div>



     </div>

     <div class="navbar">
          <a href="/GraduationProject/html/home.php" class="active">
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