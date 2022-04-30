<?php
session_start();
$con=mysqli_connect('localhost','root');
/*if($con){
    echo "conection successful";
    
}
else
{
    echo 'no connection';
}
*/
mysqli_select_db($con,'signin');






$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];


$query="INSERT INTO `information` (`id`, `name`, `email`, `mobile`, `address`) VALUES (NULL, '$name', '$email', '$mobile', '$address')";

$data=mysqli_query($con,$query);
if($data)

{

    $_SESSION['username']=$name;
    header('location:contact.php');
}
else {
echo " data not entered ";
}

?>