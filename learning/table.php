<?php
$con=mysqli_connect('localhost','root','','db');
$query="SELECT * FROM info";
$result = mysqli_query($con,$query);
$count= mysqli_num_rows($result);
if($count>0){

    ?>
    <table class="table">
        <thead class="thead-dark" >
            <tr>
                <th>Serial No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
                <th>operation</th>

            </tr>
        </thead>

    <?php

while($row = mysqli_fetch_assoc($result)){
    echo "<pre>";
            $sl=$row['slno'];
            $nm=$row['name'];
            $email=$row['email'];
            $age=$row['age'];

        /*  echo "{$row['slno']} &nbsp"; 
        echo "{$row['name']} &nbsp ";
        echo "{$row['email']}&nbsp";
        print_r($row['age']); 
         */ 
        echo "</pre>";
        ?>
        <tbody>
            <tr>
                <td> <?php echo  $sl?> </td>
                <td><?php echo $nm ?></td>
                <td><?php echo $email?></td>
                <td><?php echo $age?></td>
                <td>  <a href="update.php?slno=<?php echo $sl ?>">Edit</a> || <a href="delect.php?slno=<?php echo $sl  ?>"> delect</a>  </td>  
            </tr>
        </tbody>
        
     
     <?php
    }
     
     ?>
         </table>
<?php
}
else  echo " there is not such data in the database"; 

?>
