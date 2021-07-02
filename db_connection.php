<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "Hospital";

$connection = mysqli_connect($hostname,$username,$password,$database);

if(!$connection)
{
    die("could not connect to database : ".mysqli_error());
}

?>