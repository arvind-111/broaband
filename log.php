<?php

session_start();
if(!isset($_SESSION['username'])){
header('location:front.php');
}
include './boot.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2  style="text-align: center;"> WELCOME <?php echo $_SESSION['username'];?></h2>
    
<button type="submit" class="btn btn-primary"><a href="logout.php" style="color:azure;">LOGOUT</a></button>

</body>
</html>
