<?php
session_start();
$ids = $_GET["ids"];
if (empty($_SESSION["cartNow"])) {
    //When cart in empty
    //build 2D array，
    $arr = array(
        array($ids,1)
        //get ids，add one when click
    );
    $_SESSION["cartNow"]=$arr;
} else {//Not first time click
    //use $ids to check, if the product is in cart
    $arr = $_SESSION["cartNow"];
    
    $show = false;

    foreach ($arr as $v) {
        //If exist
        if ($v[0] == $ids) {//If there is any $v[0](), which means the product exist
            $show = true;
        }
    }
    if ($show) {
        //Exist
        for ($i=0;$i<count($arr);$i++) {
            if ($arr[$i][0] == $ids) {
                $arr[$i][1] += 1;
            }
        }
        $_SESSION["cartNow"] = $arr;
    } else {
        $asg = array($ids,1);
        $arr[] = $asg;
        $_SESSION["cartNow"]=$arr;
    }
}
header("location:index.php");
