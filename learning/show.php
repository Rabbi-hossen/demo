
<?php

use function PHPSTORM_META\elementType;

$con=mysqli_connect('localhost','root','','db');


$query="SELECT * FROM info";
$result = mysqli_query($con,$query);

$count= mysqli_num_rows($result);
if($count>0){
while($row = mysqli_fetch_assoc($result)){
    echo "<pre>";
    print_r($row);
    echo "</pre>";
}

echo "total number of row : $count";
}
else echo "no data is found";



?>



<!-- <html>
  <body>
  <form action="show.php" method="post" >
            slno: <input type="number" name="slno" > 
    name : <input type="text" name="name" value="" > 
    Email : <input type="email" name="email" value=""> 
  Age : <input type="number" name="age" value=""  > <br> <br>
    <input type="submit" name="submit" value="submit" >

    </form>
  </body>
</html> -->
