<?php

$servername = "localhost";
$dbname  = "estacyrice";
$username= "root";
$password  = "";
//$confirmPassword = 
$db = new mysqli($servername,$username,$password,$dbname);
//$db_conn = mysqli_connect("localhost", "EstherAkpe", "12345", "estacyrice");
// Check connection
//if($db_conn === false){
  //  die("ERROR: Could not connect. " . mysqli_connect_error());
//}
//error_reporting(E_ALL);
//ini_set('display_errors','Off');

if ($db->connect_error)
{

    die("Connection failed: " . $db->connection_error);
}

?>