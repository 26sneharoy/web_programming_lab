<?php 

$students = array("SARATHBA", "AKSHAIU","ALBIN", "LAKSHMI", "BLESSYELZAZACHARIYA", "GAUTHAMISREE", "MEGHA", "MANNACHIN", "RENUKA");
echo "Normal Array : <br>";
print_r($students);
echo "<br> Ascending Sort : <br>";
asort($students);
print_r($students);
echo "<br> Descending Sort : <br>";
arsort($students);
print_r($students);

?>