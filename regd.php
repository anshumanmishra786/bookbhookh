<?php
session_start();
header('location:login.php');

$con = mysqli_connect('localhost', 'root', 'bookbhookh@19');
mysqli_select_db($con, 'bookbhookh');
$name= $_POST['name'];
$pass= $_POST['pass'];
$s = " select * from userinfo where name='$name'";

$result= mysqli_query($con, $s);
$num= mysqli_num_rows($result);

if($num ==1){
    echo "Username already taken";
    }
    else{
        $reg= "insert into userinfo(name, pass) values ('$name','$pass')";
        mysqli_query($con, $reg);
        echo "Registration was Successful";
    }
?>