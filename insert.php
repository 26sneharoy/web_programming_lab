<?php

require 'db_connection.php';

$name = $_POST['patient_name'];
$age = $_POST['age'];
$address = $_POST['address'];
$date = $_POST['date'];
$doctor = $_POST['doctor'];
$medicine = $_POST['medicine'];

$query = "SELECT * FROM covid_test";
$result = mysqli_query($connection,$query);

if(mysqli_num_rows($result)>=0){

    $query = "INSERT INTO covid_test (patient_name, age, address, date, doctor,medicine) VALUES ('".$name."',".$age.",'".$address."','".$date."','".$doctor."','".$medicine."')";

    $result= mysqli_query($connection,$query);

    if($result)
    {
        echo"<script> alert ('NEW PATIENT INFORMATION IS INSERTED')</script>";

    }
    else{
        
        echo"<script> alert('DATABASE INSERTION FAILED')</script>";
    }
}
echo "<a href = 'index.php'>CLICK to see the information</a>";
?>