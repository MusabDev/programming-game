<?php

session_start();
// Include autoload file
require_once "../autoload.php";
// Main code
$cl = $_POST["cl"];
if (isset($_POST["add"])) {
    $get_cl_details = mysqli_query($conn, "SELECT score FROM challenges WHERE id='$cl'");
    if (mysqli_num_rows($get_cl_details) > 0) {
        $row = mysqli_fetch_assoc($get_cl_details);
        
        if (isset($_SESSION["score"])) {
            $output = $_SESSION["score"] + $row["score"];
        } else {
            $output = $row["score"];
        }
        $_SESSION["score"] = $output;
        echo $output;
    }
} elseif (isset($_POST["remove"])) {
    $get_cl_details = mysqli_query($conn, "SELECT score FROM challenges WHERE id='$cl'");
    if (mysqli_num_rows($get_cl_details) > 0) {
        $row = mysqli_fetch_assoc($get_cl_details);
        
        if (isset($_SESSION["score"])) {
            $output = $_SESSION["score"] - $row["score"];
        } else {
            $output = -$row["score"];
        }
        $_SESSION["score"] = $output;
        echo $output;
    }
} else {
    echo "Access Denied.";
    die();
}