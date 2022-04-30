<?php
include './boot.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGNIN</title>
   
 <link rel="stylesheet" href="./broad.css">
 
</head>
<body>
    <div class="container"> 
    <h2 style="text-align: center ;" class="welcome">    WELCOME USER </h2>
        <div class="row">
           
        <div class="col-lg-6">
            <h2>LOGIN FORM</h2>
            <form action="validation.php" method="post" autocomplete="off">
                <div class="form-group">
                    <label for="">USERNAME:</label> <br>
                    <input type="text " name="user" class="from-control">
                </div>
                <div class="form-group">
                    <label for="">PASSWORD:</label> <br>
                    <input type="text " name="pass" class="from-control">
                </div>
                <button type="submit" class="btn btn-primary"> LOGIN</button>
            </form>
        </div>    
        <div class="col-lg-6">
            <h2>SIGNIN FORM</h2>
            <form action="reg.php" method="post" autocomplete="off"> 
                <div class="form-group">
                    <label for="">USERNAME:</label> <br>
                    <input type="text " name="user" class="from-control">
                </div>
                <div class="form-group">
                    <label for="">PASSWORD:</label> <br>
                    <input type="text " name="pass" class="from-control">
                </div>
                <button  type="submit" class="btn btn-primary"> SIGN  IN</button>
            </form>
        </div>    
        </div>
    </div>
    <form method="get" action="./main.php">
                <button type="submit" class="btn btn-primary" style="margin-top: 10%;">BACK TO HOME PAGE</button>
</form>
</body>
</html>