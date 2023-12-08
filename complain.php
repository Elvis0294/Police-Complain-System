<?php
 
include 'db.php';

if(isset($_POST['submit'])){
$crime=$_POST['crime'];
$location=$_POST['location'];

$sql="INSERT INTO `crime`(crime,location) VALUES ('$crime','$location')";
 mysqli_query($kojo,$sql);
 
 echo "<script>window.location.assign('confirmation.php'); </script>";
 
}



?>


