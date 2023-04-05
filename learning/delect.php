<?php


$con=mysqli_connect('localhost','root','','db');

$reciv = $_REQUEST['slno'];

$query= "DELETE FROM `info` WHERE slno=$reciv ";

$delected = mysqli_query($con,$query);
if($delected){
    header("location: table.php?delected");
}

?>
