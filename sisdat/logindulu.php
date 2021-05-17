<html lang="en">
<head>
	<title>Login Form</title>
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

</head>
	<?php
session_start();
if(isset($_SESSION["username"])){
	echo header("location:RM/siap.php");
}else{
;
 
}
?>
<body style="margin:0;">
	<div class="sidebar">
   		 		
   		 	</div>
		<header id="top-header" >
			<div class="header">
				<h1> <a href="#" class="NamaToko"  > Info Restoran GG </a> </h1>
			</div>
			
			<hr class="line"><hr class="lineShading">
		</header>
				
		
		<div class="loginblock">
		 
      <h1 style="margin-left:20px;">Login Dulu Gan</h1>
      <div class="login">
				<form method="post" action="login.php">					
						<label for="username"><b>Username</b></label>
						<input type="text" placeholder="Enter Username" name="iusername" required></input>
						<label for="password"><b>Password</b></label>
						<input type="password" placeholder="Enter Password" name="ipassword" required></input><Br><br>
						<button type="submit" value="Login">Login</button>
						<label>
						<label><a href="register.php"> Register </label></a>					
				</form>
    </div>
  
</div>
		

</body>
<footer>
<hr class="lineShading">

<div class="footer1">
<h2><i style="margin-right:5px;margin-top:5px;"class="far fa-user-circle"></i> Yosua Prima Gultom</h2>
<h3><p ><font size="5">NPM : 140810170038 <br>UAS SISDAT<br></p></font>
</div>

<div class="footer2">
<h2><i style="margin-right:5px;margin-top:5px;" class="far fa-user-circle"></i> Husein Irfan</h2>
<h3><p ><font size="5"><i class="fab fa-wifi"></i>NPM : 1408101700<br>UAS SISDAT<br></h3></font>
</div>




</footer>
<script>
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}


function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>
</html>


        
    


