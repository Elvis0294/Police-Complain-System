
<!DOCTYPE>
<html lang="en">
<head>
<title>Login Page</title>
<style type="text/css">
body{
background-color:#003366;
font-size:16;
font-family:tahoma;
}

header{
height:86;
width:100%;
z-index:100;
position:fixed;
background:white;
border-bottom:3px solid white;
opacity:0.9;
}

nav li{
float:left;
width:75;
margin-top:28;
margin-left:20;
}
.logo img{
margin-top:100;
margin-left:500;

}


li{
list-style-type:none;
}

a{
text-decoration:none;
font-family:tahoma;
font-size:20;
color:black;
}
P{
color:white;
font-family:tahoma;
text-align:center;
}
h1{
color:white;
font-family:tahoma;
text-align:center;
}

h2{
color:white;
font-family:tahoma;
text-align:center;
}
form{
padding:5%;
margin-left:500;
}

</style>
</head>
<body>
<header>

<nav>

<ul>
<li><a href="home.php">home</a></li>
<li><a href="signUp.php">Sign Up</a></li>

</ul>
</nav>
</header>
<div class="logo">
<img src="police.jpg">
</div>

<h1>Help the police to  combat crime</h1>
<P>Your Information to the police May save a live </P>
<h2>Please use the form to report a pending crime issue. </h2>

<form action="complain.php" method="POST">
<input type="text" placeholder="Enter crime" name="crime" required><br>
<input type="text" placeholder="Enter Digital Address or A landmark" name="location" required><br>
<button type="submit" name="submit">report</button>
</form>
</body>
</html>


