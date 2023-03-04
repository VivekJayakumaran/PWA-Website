<?php

$patient_name = $_POST['patient_name'];
$patient_id = $_POST['patient_id'];
$appointment_no = $_POST['appointment_no'];
$doctor_name = $_POST['doctor_name'];
$doctor_id = $_POST['doctor_id'];
$illness = $_POST['illness'];
$medicine = $_POST['medicine'];
$tests = $_POST['tests'];
$curation_period = $_POST['curation_period'];
$feedback = $_POST['feedback'];
$date = $_POST['date'];



$conn = new mysqli('localhost','root','','xn');
if($conn->connect_error)
{
    die('connection failed : '.$conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into login(patient_name,patient_id,appointment_no,doctor_name,doctor_id,illness,medicine,tests,curation_period,feedback,date) values(?,?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("sssssssssss",$patient_name,$patient_id,$appointment_no,$doctor_name,$doctor_id,$illness,$medicine,$tests,$curation_period,$feedback,$date);
    $stmt->execute();
    echo "successful registration...";
    $stmt->close();
    $conn->close();
}
?>