<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPaasword = "";
$dbName = "lifestylestore";

$con = mysqli_connect($dbServername, $dbUsername, $dbPaasword, $dbName) or die(mysqli_error($con));

if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
?>