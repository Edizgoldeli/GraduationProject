<!DOCTYPE html>
<?php
include($_SERVER['DOCUMENT_ROOT'] . "/GraduationProject/php/DBconnection.php");
session_start();
if ($_SESSION['ID']) {
} else {
    header("location:/GraduationProject/html/index.php");
}
$ID = $_SESSION['ID'];
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT `ID`,`sensor_ID`,`sensor_name`, `info`, `info2`, `timeStmp` FROM `sensor` WHERE ID=$ID ORDER BY sensor_ID";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $GLOBALS["ID"] = $row["ID"];
        $GLOBALS["sensor_ID"] = $row["sensor_ID"];
        $GLOBALS["sensor_name"] = $row["sensor_name"];
        $GLOBALS["info"] = $row["info"];
        $GLOBALS["info2"] = $row["info2"];
        $GLOBALS["timeStmp"] = $row["timeStmp"];
        $sensor_name = $GLOBALS["sensor_name"];
        $sensorID = $GLOBALS["sensor_ID"];
        $info = $GLOBALS["info"];


        info();
?>

        <body>
            <?php if ($_SESSION['ID'] == $GLOBALS["ID"]) { ?>

                <div class="<?php echo ""; ?>">






                    <div class="<?php echo styleInfo(); ?>"></div>
                </div>

            <?php }
            $conn->close(); ?>

            <br><br><br>
        </body>
<?php
    }
} else {
}


function styleInfo()
{

    if ($_SESSION['ID'] == $GLOBALS["ID"]) {

        $info = $GLOBALS["info"];

        if ($info == 1 || $info == 0) {
            if ($info == 1) {
                if ($GLOBALS["sensor_name"] == "Flame") {
                    echo "sensor-box1 alert";
                } else if ($GLOBALS["sensor_name"] == "Gas") {
                    echo "sensor-box1 alert";
                }
            } else if ($info == 0) {
                echo "sensor-box1";
            }
            header("refresh: 5; url=/GraduationProject/html/vitrin2.php");
        } else {
            echo "sensor-box1";
        }
    }
}
function info()
{

    if ($_SESSION['ID'] == $GLOBALS["ID"]) {

        $info = $GLOBALS["info"];
        $info2 = $GLOBALS["info2"];
        if ($info == 1 || $info == 0) {
            if ($info == 1) {
                if ($GLOBALS["sensor_name"] == "Flame") {
                    $GLOBALS["infoUser"] = "There is Fire!!";
                } else if ($GLOBALS["sensor_name"] == "Gas") {
                    $GLOBALS["infoUser"] = "There is Gas leakage!!";
                }
            } else if ($info == 0)
                if ($GLOBALS["sensor_name"] == "Flame") {
                    $GLOBALS["infoUser"] = "There are no flames";
                } else if ($GLOBALS["sensor_name"] == "Gas") {
                    $GLOBALS["infoUser"] = "There is no Gas leakage";
                } else {
                    $GLOBALS["info"] = "Contact support";
                }
        } else if ($info > 1 || $info < 0) {
            $GLOBALS["sensor_name"] == "Humidity&Heat"; {

                echo "Temperature is ";
                echo $info2;
                echo " °C ";
                echo " Humadity is ";
                echo "$info";
                echo "%";
                $GLOBALS["infoUser"] = "";
            }
        } else {
            $GLOBALS["infoUser"] = "_X_";
        }
        echo $GLOBALS["infoUser"];
    }
}

?>
<html>

<head>
    <link rel=stylesheet href="/GraduationProject/style/style-sensor.css" />
</head>

<body>

</body>

</html>