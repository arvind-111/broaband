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
    <h2  style="text-align: center;"> welcome <?php echo $_SESSION['username'];?></h2>
   
    <pre style="font-size: larger;">
        Thank you for contacting us our team will get in touch with you soon!!
        Regards:- 
                    FIBER NET TEAM   
           <form method="get" action="./main.php">
                <button type="submit" class="btn btn-primary">BACK</button>
</form>
    </pre>
</body>
</html>