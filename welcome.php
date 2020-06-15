<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
} // Check whether the user is admin, if yes the redirect the user to admin page 
 else if (isset($_SESSION["user_type"]) && $_SESSION["user_type"] == 1) {
    header("location: admin.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    
    <style>
        body {
              background-image: url('Images/manipal-building-968x328.jpg');
              background-repeat: no-repeat;
              background-attachment: fixed;
              background-size: cover;
             }
    </style>


    <div class="page-header">
        <!--<h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1> -->
        <h1>Welcome to Manipal School of Information Sciences , Data Science Environment </h1>
        <h2> <?php echo $_SESSION["username"]; ?></h2>
    </div>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Password Reset</a>
        <a href="http://35.232.155.157:8080/" class="btn btn-success" >Data Scient Platform</a>
        <a href="logout.php" class="btn btn-danger">Sign Out </a>
    </p>
</body>
</html>
