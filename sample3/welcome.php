<!-- <?php
session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'xn');
if($_SESSION["user"]==true)
{
    echo "welcome"." ".$_SESSION["username"];
}
else{
    header('location:index.php');
}
?>
<a href="logout.php">Logout</a>

<form>
<table>
    <tr>
    <td>Patient_name</td>
    <td><input type="text" name="patient_name"></td>
</tr>

<tr>
    <td>Patient_id</td>
    <td><input type="text" name="patient_id"></td>
</tr>
<tr>
    <td>Appointment_no</td>
    <td><input type="text" name="appointment_no"></td>
</tr>
<tr>
    <td>Doctor_name</td>
    <td><input type="text" name="doctor_name"></td>
</tr>
<tr>
    <td>Doctor_id</td>
    <td><input type="text" name="doctor_id"></td>
</tr>
<tr>
    <td>Illness</td>
    <td><input type="text" name="illness"></td>
</tr>
<tr>
    <td>Medicine</td>
    <td><input type="text" name="medicine"></td>
</tr>
<tr>
    <td>Tests</td>
    <td><input type="text" name="tests"></td>
</tr>
<tr>
    <td>Date</td>
    <td><input type="text" name="date"></td>
</tr>
<tr>
    <td>Feedback</td>
    <td><input type="text" name="feedback"></td>
</tr>


            <!-- <th>Patient_name</th>
            <th>Patient_id</th>
            <th>Appointment_no</th>
            <th>Doctor_name</th>
            <th>Doctor_id</th>
            <th>Illness</th>
            <th>Medicine</th>
            <th>Tests</th>
            <th>Date</th>
            <th>Feedback</th> -->
        
    </tr>
</table>


</form>
// $id = $_POST['id'];
// $username = $_POST['username'];
// $password = $_POST['password'];


// $s = " select * from usertable where username = '$username' && password = '$password' ";
// $result = mysqli_query($con, $s);
// $num = mysqli_num_rows($result);

// if($num == 1)
// {
//    header('location: p2.html');
// }
// else{
//     header('location: logreg.php');
// }
// ?> -->

