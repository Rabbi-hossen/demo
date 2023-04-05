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


<html>
  <body>
  <form action="lc2.php" method="post" >
            slno: <input type="number" name="slno" > 
    name : <input type="text" name="name" value="" > 
    Email : <input type="email" name="email" value=""> 
  Age : <input type="number" name="age" value=""  > <br> <br>
    <input type="submit" name="submit" value="submit" >

    </form>
  </body>
</html>

        
 

<!-- INSERT INTO `info` (`slno`, `name`, `email`, `age`) VALUES ('2', 'sabbir', 'sabbir@gmail.com', '23'); -->
<!-- INSERT INTO `info` (`slno`, `name`, `email`, `age`) VALUES ('1', 'r', 'r@gmail.com', '12'); -->