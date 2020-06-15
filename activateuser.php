<?php
    // Include config file
    require_once "config.php";

    // Check whether id and active status is present
    if(isset($_GET["id"]) && isset($_GET["active"])) {
        if($_GET["active"] == 1) {
            $sql = "Update users SET isActivated = 0 where id = ".$_GET["id"];
        } else {
            $sql = "Update users SET isActivated = 1 where id = ".$_GET["id"];
        }
        $exec = mysqli_query($link, $sql);
        if($exec) {
            header("location: admin.php");
            exit;
        } else {
            echo "Something went wrong";
            exit;
        }
    }

?>