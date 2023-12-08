<?php
session_start();

include_once 'db.php'; 


if(isset($_POST['telephone'])){
	
$telephone=$_POST['telephone'];
$password=$_POST['password'];

//protect against SQL injections
/*$username=mysqli_real_escape_string($kojo,$_POST['username']);
$password=mysqli_real_escape_string($kojo,$_POST['password']);
*/

$sql="SELECT*FROM alert WHERE password='$password'";	
$result=mysqli_query($kojo,$sql);
$go=mysqli_num_rows($result);
if($go<1){
	die("Please Username does not Exit!");
}
else if($go>0){	

mysqli_fetch_assoc($result);
echo "Welcome".'<br>';
 echo "<script>window.location.assign('report.php'); </script>";
	
	}
	
else{
    die("username or password does not exist!");	
    }


}





?>
