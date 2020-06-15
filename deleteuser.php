<?php
    // Include config file
    require_once "config.php";

    // Check whether id is present
    if(isset($_GET["id"])) {
        $sql = "Delete from users where id = ".$_GET["id"];
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