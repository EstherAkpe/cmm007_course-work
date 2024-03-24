<?php
    $servername = "localhost";
    $dbname='Estacyrice';
    $Email = "";
    $Password = "";
    // Create connection
    $db = new mysqli($servername, $Email, $Password, $dbname);
    // Check connection
    if ($db->connect_error) 
    {
        die("Connection failed: " . $db->connect_error);
    }
   
?>