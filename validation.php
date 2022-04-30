<?php
session_start();
include 'alert.php';

$con=mysqli_connect('localhost','root');
if($con)
/*echo "connection succelfull \n  \n ";
else 
echo "could not connect ";
 */
mysqli_select_db($con,'signin');


$name=$_POST['user'];
$password=$_POST['pass'];
$query=" select*from signup  where name='$name' && password='$password' ";
$result= mysqli_query($con,$query);
$num=mysqli_num_rows($result);
if($num==1){
    $_SESSION['username']=$name;
    header('location:log.php');
}
else{

function_alert("first signup");


}
?>