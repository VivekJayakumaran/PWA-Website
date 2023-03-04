<?php
session_start();
// header('location: logreg.php');
$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'xn');
$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];


$s = " select * from usertable where username = '$username'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num == 1)
{
    echo" username Already taken";
}
else{
    $reg = " insert into usertable(id,username,password) values ('$id','$username','$password')";
    mysqli_query($con, $reg);
    echo" Registration successfull and your ID has been sent to your mail";
}
?>

