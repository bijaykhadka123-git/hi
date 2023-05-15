<?php
    $hostname="localhost";
    $dbuser="root";
$dbpassword="";
$dbname="project";
$mysqli= new mysqli( hostname: $hostname,
username:$dbuser,
password: $dbpassword,
database: $dbname);
if (!$mysqli->connect_errno){

   die("something went wrong".$mysqli->connect_error);
}
return $mysqli;