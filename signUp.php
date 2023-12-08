<?php
 

include 'db.php';
$error = false;
if(isset($_POST['submit'])){
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$address=$_POST['address'];
$telephone=$_POST['telephone'];
$password=$_POST['password'];



	$check="SELECT * FROM `alert` WHERE password='$password'";
	$pass=mysqli_query($kojo,$check);
	
          if((mysqli_num_rows($pass))>0){
	        $error = true;
					 $errorgif = '<div class="alert alert-danger alert-dismissible " role="alert">
  This password is already taken!
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
         

           }

              else {
				  $error= true;
	              $sql="INSERT INTO `alert` (first_name,last_name,address,telephone,password) VALUES ('$first_name', '$last_name','$address','$telephone','$password')";
              mysqli_query($kojo,$sql);
              $errortrue = "<div class='alert alert-success hide alert-dismissible fade show' role='alert'><strong><center>User successfully Registered!!!. Please <a href='signin.php'>signin</a></center></strong>
                             </div>";
	          
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
 <div class="row justify-content-center">
 	<div class="col-lg-6 px-4 pb-4" id="order">
    <h4 class="text-center text-danger p-2">Create an Account! 
	<image src="police.png">
	</h4>
	
    <div class="jumbotron p-3 mb-2 text-left">
    
	<form action="" method="post" id="placeOrder">
	<span> <?php if(isset($errortrue)) echo $errortrue;  ?>   </span>
	<span> <?php if(isset($errorgif)) echo $errorgif;  ?>   </span>
     <div class="form-group">
      <input type="text" name="first_name" class="form-control" placeholder="Enter First Name" required>
     </div>
      <div class="form-group">
      <input type="text" name="last_name" class="form-control" placeholder="Enter Last Name" required>
     </div>
	 <div class="form-group">
      <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
     </div>
	 <div class="form-group">
      <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
     </div>
      <div class="form-group">
      <input type="phone" name="telephone" class="form-control" placeholder="Enter Phone" required>
     </div>
      <div class="form-group">
      <textarea name="address" class="form-control"  rows="3" cols="10" placeholder="Enter Address"></textarea>
     </div>
      <div class="form-group">
        <input type="submit" name="submit" value="Sign Up" class="btn btn-dark btn-block">
      </div>
    </form>
	
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