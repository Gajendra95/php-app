<?php

//Username and Password from form
$username = "wathiree" ;
$password = "sree@123";

//connecting to azure vm using ssh
system( "sudo /usr/sbin/useradd -m -p `openssl passwd -1 $password` $username");
?>
