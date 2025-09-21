<?php

$host = "sql313.infinityfree.com";
$user = "if0_39757934";
$password = "RaJamao5cCrk";
$database = "if0_39757934_vikash_hms";

$conn = new mysqli($host,$user,$password,$database);

if($conn->connect_error){
    die("Connection failed:".$conn->connect_error);
}

?>