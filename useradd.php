<?php
//Username and Password from form
$systemusername = trim($_POST["username"]);
$systempassword = trim($_POST["password"]);
//connecting to azure vm using ssh
system( "sudo /usr/sbin/useradd -m -p `openssl passwd -1 $systempassword` $systemusername");
header("location: login.php");
//trim($_POST["username"]);

?>
~    
