<?php
    // Include config file
    require_once "config.php";
    
    // Check whether id is present
    if(isset($_GET["id"])) {
	// delete from database
	$sql = "select username from users where username = ".$_GET["username"];
	$sql = "Delete from users where id = ".$_GET["id"];
	
	// delete from system
	system( "sudo /usr/sbin/userdel -r username");

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