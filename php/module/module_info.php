<!DOCTYPE html>
<?php
include($_SERVER['DOCUMENT_ROOT'] . "/GraduationProject/php/DBconnection.php");
session_start();
if ($_SESSION['ID']) {
} else {
    header("location:/GraduationProject/html/index.php");
}

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$GLOBALS["i"] = 15;
$i = $GLOBALS["i"];

$sql = "SELECT `ID`,`module_ID`,`module_name`, `status`, `timeStmp` FROM `module` ORDER BY module_ID";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $GLOBALS["ID"] = $row["ID"];
        $GLOBALS["module_ID"] = $row["module_ID"];
        $GLOBALS["module_name"] = $row["module_name"];
        $GLOBALS["status"] = $row["status"];
        $GLOBALS["timeStmp"] = $row["timeStmp"];
        $moduleID = $GLOBALS["module_ID"];
        $status = $GLOBALS["status"];
?>

        <body>
            <?php if ($_SESSION['ID'] == $GLOBALS["ID"]) { ?>

                <div class="control-box1a"><?php echo $GLOBALS["module_name"]; ?> </div>

                <form method="post" action="/GraduationProject/php/module/update.php">
                    <input type="hidden" name="module_ID" value="<?php echo "$moduleID"; ?>">
                    <input type="hidden" name="status" value="<?php echo "$status"; ?>">
                    <button type="submit" class="<?php statusColor(); ?>"><?php status(); ?></button>
                </form>


                <div id="control-box1c">
                    <center><?php timeStmp(); ?><center>
                </div>

            <?php }
            $conn->close(); ?>

            <br><br><br>
        </body>
<?php
    }
} else {
    echo "0 results";
}
function statusColor()
{
    if ($_SESSION['ID'] == $GLOBALS["ID"]) {
        $status = $GLOBALS["status"];
        if ($status == 1) {
            echo "control-box1b";
        } else if ($status == 0) {
            echo "control-box1b off";
        } else {
            $GLOBALS["statusInfo"] = "Contact support";
        }
    } else {
        echo "control-box1b error";
    }
}

function status()
{

    if ($_SESSION['ID'] == $GLOBALS["ID"]) {
        $status = $GLOBALS["status"];
        if ($status == 1) {
            $GLOBALS["statusInfo"] = "ON";
        } else if ($status == 0) {
            $GLOBALS["statusInfo"] = "OFF";
        } else {
            $GLOBALS["statusInfo"] = "Contact support";
        }
    } else {
        $GLOBALS["statusInfo"] = "_X_";
    }
    echo $GLOBALS["statusInfo"];
}
function timeStmp()
{
    if ($_SESSION['ID'] == $GLOBALS["ID"]) {
        $time = $GLOBALS["timeStmp"];
        $status = $GLOBALS["status"];
        if ($status == 1) {
            echo "<p style='text-align:center; transform: translate(0%, -45%)'>" . "open since:" . $GLOBALS["timeStmp"] . "</p>";
        } else if ($status == 0) {
            echo "<p style='text-align:center; transform: translate(0%, -45%)'>" . "closed since:" . $GLOBALS["timeStmp"] . "</p>";
        }
    } else {
        echo "<p style='text-align:center; transform: translate(0%, -45%)'>" . "You are not authorized";
    }
}

?>
<html>

<head>
    <link rel=stylesheet href="/GraduationProject/style/style-vitrin.css" />
</head>

<body>

</body>

</html>