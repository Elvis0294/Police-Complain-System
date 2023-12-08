<nav class="navbar  fixed-top navbar-expand-lg navbar-dark bg-dark" >

  <a class="navbar-brand" href="home.php"><img src="img/alertlogo.png" width="90px" > </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav w-100 justify-content-center" id="navb">
      <li class="nav-item active">
        <a class="nav-link" href="home.php"> <span style="color:#fff;"><i class="fa fa-home"></i>&nbsp;HOME</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">ABOUT</a>
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
	<div>
	<?php
	if((isset($_SESSION['userId'])))
	{
		echo "<span style='color:#fff'>Hi&nbsp;</span><span><b style='color:yellow'>".$_SESSION['userName']."</b></span><br>
		<a href='logout.php?out' style='color:#fff'>Logout</a>"; 	
	}
	?>
	</div>
   
  </div>
</nav>