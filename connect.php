<?php
$user = "root";
$passw = "";
$server = "localhost";
$db = "mydata";

$co=mysqli_connect($server,$user,$passw,$db);

if($co){
    echo ("co succ");
    
}
 else {
    echo ("oo");
}
?>