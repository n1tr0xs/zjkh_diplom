<?php

$sname= "localhost";
$unmae= "root";
$password = "";
$db_name = "hcs";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

$ALL_USER_TYPES = array(
  'user' => 'users',
  'operator' => 'operators',
  'crewmember' => 'crewmembers'
);

if (!$conn) {
    die("Connection failed!");
}