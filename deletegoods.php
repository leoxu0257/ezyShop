<?php
session_start();
$ids = $_GET["ids"];
$arr = $_SESSION["cartNow"];
unset($arr[$ids]);
$_SESSION["cartNow"] = $arr;

header("location:cart.php");
