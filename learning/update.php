<?php
$con=mysqli_connect('localhost','root','','db');
$reciv = $_REQUEST['slno'];
echo $reciv;

$get_info = "SELECT * FROM info WHERE slno = $reciv";

$update = mysqli_query($con,$get_info);
while($row = mysqli_fetch_row($update)){

    ?>
 

<input type="number" name="slno" value="<?php echo $row ['slno']; ?>" placeholder="slno" >
<input type="text" name="name" value="<?php echo $row['name']; ?>" placeholder="name" >
<input type="email" name="email" value="<?php echo $row['email']; ?>" placeholder="Email" >
<input type="number" name="age" value="<?php echo $row['age']; ?>" >
<input type="submit" name="submit" value="update" >



    <?php
    $up = "UPDATE `info` SET `slno`='[slno]',`name`='[value-2]',`email`='[value-3]',`age`='[value-4]',`operation`='[value-5]' WHERE slno = $reciv";
$date = mysqli_query($con,$up);
if($date) {
    header("location: table.php?updated ");}
}


?>
