<?php
session_start();

include_once 'db.php'; 
$error = true;
if(isset($_POST['submit'])){
	
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
	     $error = true;
					 $errorgif = '<div class="alert alert-danger alert-dismissible " role="alert">
  Username does not Exist!
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}
else if($go>0){	

$row = mysqli_fetch_assoc($result);
                     $userId =  $row['id'];
                    $username = $row['first_name'];
					
					 //set session 
					 $_SESSION['userId'] = $userId;
					 $_SESSION['userName'] = $username;
                   $error = true;
					 $errortrue = "<center><p style='color:red;'>Please wait!!!</p><img src='img/hour.gif' style='width:30px;'></center>";
			          header('refresh:5; url=home.php');				
 /* echo "Welcome".'<br>';
  echo "<script>window.location.assign('report.php'); </script>";
	*/
	}
	
else{
    die("username or password does not exist!");	
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
<title>About Police Alert System</title>
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
<nav class="navbar  fixed-top navbar-expand-lg navbar-dark bg-dark" >

  <a class="navbar-brand" href="home.php"><img src="img/alertlogo.png" width="90px" > </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav w-100 justify-content-center" id="navb">
      <li class="nav-item active">
        <a class="nav-link" href="home.php"> <span style="color:#fff;"><i class="fa fa-home"></i></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">ABOUT</a>
      </li>
	  <li class="nav-item">
	  <?php
	if((isset($_SESSION['userId'])))
	{
		echo ""; 	
	}else{
		?>
		<a class="nav-link" href="signin.php">
         SIGNIN
        </a>
		<?php
	}
	?>
        
          
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="#">CONTACT</a>
		</li>
		
    </ul>
	
   
  </div>
</nav>
</section>

<div class="container">
 <div class="row justify-content-center">
 	<div class="col-lg-6 px-4 pb-4" id="order">
    <h4 class="text-center text-danger p-2">ABOUT<br> 
	<image src="police.png">
	</h4>
	
    <div class="jumbotron p-3 mb-2 text-left">
    
	<form action="" method="post" >
	<span> <?php if(isset($errortrue)) echo $errortrue;  ?>   </span>
	<span> <?php if(isset($errorgif)) echo $errorgif;  ?>   </span>
      <div class="form-group">
     <p><b>Alert-GH</b> is an initiative to combat crime as quick as possible.  </p>
	 <p> All you have to do is to download the app, sign-up and sign-in to report any strange activity/crimes in your location.</p>
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