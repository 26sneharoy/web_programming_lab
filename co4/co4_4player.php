<?php 

$players = array("RAVINDRA JADEJA","ROHIT SHARMA","MS DHONI","VIRAT KOHLI","KL RAHUL");

echo "<table border='1'>";
echo "<tr><th>Players</th></tr>";
for($i=0;$i<count($players);$i++)
{
    echo "<tr><td>".$players[$i]."</td></tr>";
}
echo "</table>";

?>