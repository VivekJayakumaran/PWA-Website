  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>table with database</title>
    <style>
        table{
            border-collapse: collapse;
            width: 100%;
            color: blue;
            font-family: monospace;
            font-size: 25px;
            text-align: left;
        }
        th{
            background-color: blue;
            color: white;
        }
        tr:nth-child(even) {background-color: #f2f2f2;}
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Patient_name</th>
            <th>Patient_id</th>
            <th>Appointment_no</th>
            <th>Doctor_name</th>
            <th>Doctor_id</th>
            <th>Illness</th>
            <th>Medicine</th>
            <th>Tests</th>
            <th>Date</th>
            <th>Feedback</th>
        </tr>
        <?php
        session_start();
       
        $conn = mysqli_connect('localhost','root','','xn');
        if($conn-> connect_error)
        {
            die("connection failed : ". $conn-> connect_error);
        }

        $sql = "SELECT patient_name,patient_id,appointment_no,doctor_name,doctor_id,illness,medicine,tests,date,feedback from  login inner join usertable where patient_id ='".$_GET["id"]."'";
        $result = $conn-> query($sql);
        if($result-> num_rows>0)
        {
            $row = mysqli_fetch_assoc($result);
            
                echo " <tr><td>".$row["patient_name"] . "</td><td>".$row["patient_id"]."</td><td>".$row["appointment_no"]."</td><td>".$row["doctor_name"]."</td><td>".$row["doctor_id"]."</td><td>".$row["illness"]."</td><td>".$row["medicine"]."</td><td>".$row["tests"].
                "</td><td>".$row["date"]."</td><td>".$row["feedback"]."</td></tr>";
            
            echo "</table>";
        }
            else{
                echo "0 result";
            }
            $conn-> close();
        ?>

        
         </table>
    
</body>
</html>  