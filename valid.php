<?php
session_start();

$connect = mysqli_connect('localhost', 'root', 'bookbhookh@19');
mysqli_select_db($connect, 'bookbhookh');
$name= $_POST['name'];
$pass= $_POST['pass'];
$s = " select * from userinfo where name='$name' && pass='$pass'";

$result= mysqli_query($connect, $s);
$num= mysqli_num_rows($result);

if($num ==1){
    $_SESSION['name'] = $name;
   header('location:index.php');
    }
    else{
        header('location:login.php');
    }
?>