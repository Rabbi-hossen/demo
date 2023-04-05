<?php

//$con=mysqli_connect('localhost',root)

 $server="localhost";
$username="root";
$pass="";
$con=mysqli_connect($server,$username,$pass); 

if(!$con){
    die("connected". mysqli_connect_error());
}
else echo " connection was successful";



?>