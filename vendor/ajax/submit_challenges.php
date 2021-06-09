<?php

// Include autoload file
require_once "../autoload.php";
// Main code
if (isset($_POST)) {
    $pl = $_POST["pl"];
    $cl = $_POST["cl"];


    $check_challenge = mysqli_query($conn, "SELECT id FROM challenges WHERE id='$cl' AND programming_language='$pl'");
    $count = mysqli_num_rows($check_challenge);
    if ($count > 0) {
        echo 1;
    } else {
        echo 0;
    }
} else {
    echo "Access Denied.";
    die();
}