<?php
 

include 'db.php';


$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$address=$_POST['address'];
$telephone=$_POST['telephone'];
$password=$_POST['password'];


//checking if user with that username exist
/*
if(isset($telephone)){
	$tel=mysqli_query($kojo,$checktel);
	$checktel="SELECT * FROM `telephone` WHERE telephone='$telephone'";
	
if((mysqli_num_rows($checktel))>0){
    die ("this user already exist!");
}
*/
if(isset($password)){
	$check="SELECT * FROM `alert` WHERE password='$password'";
	$pass=mysqli_query($kojo,$check);
	
if((mysqli_num_rows($pass))>0){
	
    die ("this password is already taken!");

}

else {
	$sql="INSERT INTO `alert` (first_name,last_name,address,telephone,password) VALUES ('$first_name', '$last_name','$address','$telephone','$password')";
 mysqli_query($kojo,$sql);
 
	 echo "<script>window.location.assign('signin.php'); </script>";
  
}

}


?>



