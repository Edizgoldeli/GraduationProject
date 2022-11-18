<?php
session_start();
unset($_SESSION['ID']);
header("location:/GraduationProject/html/index.php");
