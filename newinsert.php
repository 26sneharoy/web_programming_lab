<?php

require 'db_connection.php';

$name = $_POST['patient_name'];
$age = $_POST['age'];
$address = $_POST['address'];
$date = $_POST['date'];
$doctor = $_POST['doctor'];
$covidresult = $_POST['covid_result'];

$query = "SELECT * FROM newreg where patient_name='".$name."'AND age=".$age." AND date = '".$date."'";
$result = mysqli_query($connection,$query);

if(mysqli_num_rows($result)==0){

    $query = "INSERT INTO newreg(patient_name, age, address, date, doctor,covid_result) VALUES ('".$name."',".$age.",'".$address."','".$date."','".$doctor."','".$covidresult."')";

    $result= mysqli_query($connection,$query);

    if($result)
    {
        echo"<script> alert ('NEW PATIENT INFORMATION IS INSERTED')</script>";

    }
    else{
        
        echo"<script> alert('DATABASE INSERTION FAILED')</script>";
    }

}
else{
    echo "<script>alert ('patient information already available check in the link list')</script>";
    $query = "SELECT * FROM newreg where patient_name='".$name."'AND age=".$age." AND date = '".$date."'";
    $result = mysqli_query($connection,$query);
    $row = mysqli_fetch_row($result);
    echo("Patient id : "), $row[0],"<br>";
    echo("Patient name : "), $row[1],"<br>";
    echo("Patient age : ") ,$row[2],"<br>";
    echo("Patient date of consultancy  : ") ,$row[4],"<br>";
    echo("Doctor : ") ,$row[5],"<br>";
    echo("covid result : ") ,$row[6],"<br>";

    

}
echo "<a href = 'newindex.php'>CLICK to see the covid information</a><br> ";
echo "<a href = 'index.php'>CLICK to see the list and registration of hospital list </a>";

?>