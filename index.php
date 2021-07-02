<?php
require 'db_connection.php';
$query ="SELECT * FROM covid_test";

$result = mysqli_query($connection,$query);

// echo mysqli_num_rows($result);

echo "<h2 align='center'>LIST AND REGISTRATION PORTAL </h2>";
echo "<table border= '1' align ='center'>";
echo "<tr><th> Patient_ID</th><th>Name</th><th>Age</th><th>Address</th><th>Date_of_Admission</th><th>Doctor</th><th>Medicine</th></tr>";
echo "<form action ='insert.php' method='post'>";
echo "<tr>";
echo "<td><input type = 'submit' value='INSERT'></td>";
echo"<td><input type ='text' name='patient_name'></td>";
echo"<td><input type='number' name='age'></td>";
echo"<td><input type ='text' name='address'></td>";
echo"<td><input type ='date' name ='date'></td>";
echo"<td><input type='text' name='doctor'></td>";
echo"<td><input type ='text' name='medicine'></td>";
echo"</tr>";
echo"</form>";

if(mysqli_num_rows($result)>0){
    
    while($row= mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>".$row["patient_id"]."</td>";
        echo "<td>".$row["patient_name"]."</td>";
        echo "<td>".$row["age"]."</td>";
        echo "<td>".$row["address"]."</td>";
        echo "<td>".$row["date"]."</td>";
        echo "<td>".$row["doctor"]."</td>";
        echo "<td>".$row["medicine"]."</td>";
        echo "</tr>";
    }
    echo "</table>";

    echo "<a href = 'newindex.php'>CLICK here for COVID CLINIC REGISTRATION</a>";
}
?>