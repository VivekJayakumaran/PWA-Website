<?php

$patientname = $_POST['patientname'];
$patientid = $_POST['patientid'];
$age = $_POST['age'];
$date = $_POST['date'];
$bloodgrp = $_POST['bloodgrp'];
$mobno = $_POST['mobno'];
$dept = $_POST['dept'];
$time = $_POST['time'];

$conn = new mysqli('localhost','root','','hospital');
if($conn->connect_error)
{
    die('connection failed : '.$conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into registration(patientname,patientid,age,date,bloodgrp,mobno,dept,time) values(?,?,?,?,?,?,?,?)");
    $stmt->bind_param("ssiisisi",$patientname,$patientid,$age,$date,$bloodgrp,$mobno,$dept,$time);
    $stmt->execute();
    echo "successful registration...";
    $stmt->close();
    $conn->close();
}
?>