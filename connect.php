<?php

$host= "localhost";
$user ="root";
$pass= "";
$db="login_web";

$conn=new mysqli($host,$user,$pass,$db);
if($conn->connect_error){
    echo"failed to  DB" .$conn->connect_error;
}

?>