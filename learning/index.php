<?php 

 $con = mysqli_connect('localhost','root','','db');

 if (isset($_POST['submit'])) {
          
     $slno = $_POST['slno'];
     $name = $_POST['name'];
     $email = $_POST['email'];
     $age = $_POST['age'];
       
     $qury="INSERT INTO `info` (`slno`, `name`, `email`, `age`) VALUES ('$slno', '$name', '$email', '$age')";

     if (!$con) {
         die( "not connected".mysqli_connect_error());
     }
     $result= mysqli_query($con,$qury);
     if($result){
        echo "sucessfully insert ";
     }
     else echo " not sucessfull";
     
 }

 ?> 
















<!--


        /* 
$server = "localhost";
$username= "root";
$password = "";
$con = mysqli_connect($server,$username,$password);

if(!$con) {
    die("connection to this database failed due to" .mysqli_connect_error());
}
echo "success connection to the db";


 */
        /* if(isset($_POST['submit'])) {


    $slno = $_POST['slno'];
    $name =$_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $con = mysqli_connect("localhost","root"," ","info");
  
    if($con) {
        echo "connected";
    }
    else echo "not connected";
} */


        /* 
$slno = $_POST['slno'];
$name =$_POST['name'];
$email = $_POST['email'];
$age = $_POST['age'];
$con = new mysqli("localhost","root"," ","info");
if($con->connect_error){
    die('connection failed : '.$con->connect_error);

}
else {echo "conection successful"; }


------------------------------------

 */


       





