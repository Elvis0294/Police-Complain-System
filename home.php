
<?php
include_once 'db.php'; 
session_start();
$error = false;
if(isset($_POST['complain'])){
$crime=$_POST['crime'];
$location=$_POST['location'];

date_default_timezone_set("africa/accra");
$datetime = date("y-m-d h:m:s");


$sql="INSERT INTO `crime`(crime,location,datetime) VALUES ('$crime','$location','$datetime')";
 $result = mysqli_query($kojo,$sql);
 if($result){
	     $error = true;
					 $errorgif = '<div class="alert alert-success alert-dismissible " role="alert">
  <strong>Thanks for your complain, our dispatch team will be available in few minutes</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
 }
 
}
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="">
	<meta name="description" content="">
<title>Police Alert System</title>
 <link rel="stylesheet" href="lib/css/grid.css" >
 
 <link rel="stylesheet" href="lib/fontawesome/css/fontawesome.css" >
<style>
body{
background-color:#003366;
font-size:16;
font-family:century gothic;
}
#main{
	   padding: 5px 0 90px;
    background-size: 100%;
	color:#fff;
}
</style>
<style type="text/css">

</style>
<body>
<section id="main">
<?php
require "nav.php";
?>

</section>

<div class="container">
 <div class="row justify-content-center" style="text-align:center;">
 	<div class="col-lg-6 px-7 pb-4 " >
	<h4 style="color:#fff">Welcome to the Homepage of the crime Unit of the Ghana Police Service</h4>
    <h4 class="text-center text-danger p-2"><image src="police.png"> </h4>
    <div class="jumbotron p-3 mb-2 text-center">
	<?php
	if((isset($_SESSION['userId'])))
	{
		?>
		<form action="" method="post">
		<span> <?php if(isset($errorgif)) echo $errorgif;  ?>   </span>
		<h6 class="text-center lead">Select Crime </h6>
     <div class="form-group">
       <select name="crime" class="form-control" required>
       	<option value="" selected disabled>-Crime-</option>
       	<option value="rape">rape</option>
<option value="robbery">robbery</option>
<option value="drugs">drugs</option>
<option value="murder">murder</option>
<option value="manslaughter">manslaughter</option>

       </select>
	   
      </div>
           <div class="form-group">
      <textarea name="location" class="form-control"  rows="3" cols="10" placeholder="Enter incident Address Here..." required></textarea>
     </div>
	 <button type="submit" name="complain" class="btn btn-dark btn-block">Report</button>
	 </form>
     

       <?php		
	}
	else{
		?>
		<h5>Your Information to the police May save a live </h5>
<h6>Please Sign Up as an Informant</h6>
<a href="signup.php"><button class="btn btn-success"><b>Sign-Up</b></button></a> <br>
Already have an account? <a href="signin.php"><b>Sign-In</b></a>
<?php
	}
	?>
    

    </div>
    
 	</div>

 </div>
</div>

<script src="lib/js/jquery.js" ></script>
    <script src="lib/js/popper.js" ></script>
	<script src="lib/js/gridjs.js" ></script>
		   <script type="text/javascript">
    //menu toggle button
    
	 
	 //scrolling effect
	 $(window).on("scroll",function(){
		 if($(window).scrollTop() >=50 ){
			 $('.navbar').css('background','#000').css('border-bottom','solid 1px #ff3807');
			 
		 }
		 else {
			 $('.navbar').css('background','transparent').css('border-bottom','transparent');
			 
		 }
		 
	 })
	 
   </script>

</body>
</head>
</html>