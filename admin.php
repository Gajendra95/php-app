<?php
    // Initialize the session
    session_start();

    // Include config file
    require_once "config.php";

    // Fetch Users
    $sql = "SELECT * from users";
    $result = mysqli_query($link, $sql);
    // while ($row = mysqli_fetch_array($result)) {
    //     echo $row["username"].'</br>';
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="checkmark.css">
    <style type="text/css">
        body{
               
               font: 14px sans-serif; text-align: center;
            }

        
     

    </style>
</head>
<body>
    
    <style>
        body {
              background-image: url('Images/Admin.jpg');
              background-repeat: no-repeat;
              background-attachment: fixed;
              background-size: cover;
             }
    </style>
    

    <div class="page-header">
        <!--<h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1> -->
        <h1>Welcome to Manipal School of Information Sciences , Data Science Environment </h1>
    </div>

    <div class="container">
        <div class="row">
        <h1>Admin Page</h1>
        <table class="table">
            <thead>
            <tr>
                <th>id</th>
                <th>username</th>
                <th>Activated<br><small>(Click to Activate/Deactivate)</small></th>
                <th>Delete User</th>
            </tr>
            </thead>
            <tbody>
            <?php  while ($row = mysqli_fetch_array($result)) { ?>
            <tr class="text-left">
                <td><?php echo $row["id"] ?></td>
                <td><?php echo $row["username"] ?></td>
                <td>
                    <a href="activateuser.php?id=<?php echo $row["id"];?>&active=<?php echo $row["isActivated"];?>">
                        <span class="cr"><i class="cr-icon glyphicon <?php echo ($row["isActivated"] == 1 ? 'glyphicon-ok ' : 'glyphicon-remove');  ?>"></i></span> 
                   </a>
                </td>
                <td><a href="deleteuser.php?id=<?php echo $row["id"];?>" class="btn btn-danger" onclick="deleteWarning()">Delete</a></td>
                <td>
                
                </td>
            </tr>
            <?php } ?>
            </tbody>
        </table>

        </div>
    </div>
    <p>
        <!-- <a href="reset-password.php" class="btn btn-warning">Password Reset</a>
        <a href="http://35.232.155.157:8080/" class="btn btn-success" >Data Scient Platform</a> -->
        <a href="logout.php" class="btn btn-warning">Sign Out </a>
    </p>
    <script>
        function deleteWarning() {
            alert('User Deleted!!');
        }
</script>
</body>
</html>