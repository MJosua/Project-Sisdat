<html>
	<head>
		<title> MGI's GAMESTORE</title>
		<link href="css/style.css" rel="stylesheet">
		
	</head>
	<?php
session_start();
if(isset($_SESSION["username"])){
	echo header("location:RM/siap.php");
}else{
;
 
}
?>
<body>
	<div class="sidebar">
   		 		<div class="search">
	  			   <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
				   <input type="submit" value="">
	  			</div>
   		 	</div>
		<header id="top-header" >
			<div class="header">
				<h1> <a href="../" class="NamaToko"  > Info Restoran GG </a> </h1>
			</div>
			
			<hr class="line">
		</header>

		<hr class="lineShading">	
		<div class="button-up">
		<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
		</div>
		<aside>
		<div class="menu">
			<div class="login">
				<form method="post" action="login.php">					
						<label for="username"><b>Username</b></label>
						<input type="text" placeholder="Enter Username" name="iusername" required></input>
						<label for="password"><b>Password</b></label>
						<input type="password" placeholder="Enter Password" name="ipassword" required></input>
						<div style="height:10px"></div>
						<button type="submit" value="Login">Login</button>
											
				</form>
			</div>
			<hr class="line">
			<a href="#"><h3>FAQ</h3></a>
			<hr class="line">
			<h2 style="padding-left:15; color: White;"><i style="color: red;" class="fas fa-map-marker-alt"></i> UAS SISDAT</h2>
<h3><p ><font size="4">Yosua Gultom 140810170038<br>Husein Irfan 140810170035<br>Raihan Muhammad Aditia 140810170032</p></font>
			<hr class="lineShading">
			</div>
		</div>
		</aside>
		
		<div class="container">	
		 <h2 class="title"><span>Register</span></h2>
				<form method="post" name="pendaftaran" action="proses_daftar.php">
<table border=0 align="center" cellpadding=5 cellspacing=0>
<tr>
<td colspan=3><center><font size=5>PENDAFTARAN</font></center></td>
</tr>
<tr>
<td>Nama</td><td>:</td><td><input type="text" name="nama"></td>
</tr>
<tr>
<td>Email</td><td>:</td><td><input type="text" name="email"></td>
</tr>
<tr>
<td>Username</td><td>:</td><td><input type="text" name="username"></td>
</tr>
<tr>
<td>Password</td><td>:</td><td><input type="password" name="password"></td>
</tr>
<tr>
<td colspan=2>&nbsp;</td>
<td><input type="submit" name="submit" value="DAFTAR"></td>
</tr>
<tr>
<td colspan=3><a href="login.php">LOGIN</a></td>
</tr>
</table>
</form>
			
			</div>
</div>
		
<footer>
<hr class="lineShading">
<div class="footer1">
<i class="far fa-home"></i>Alamat Toko Pusat<br>
<i class="far fa-home"></i>Alamat Toko Cabang #1<br>
<i class="far fa-home"></i>Alamat Toko Cabang #2<br>
<i class="far fa-home"></i>Alamat Toko Cabang #3<br>
<i class="far fa-home"></i>Alamat Toko Cabang #4<br>
</div>
<div class="footer2">
No. Telepon
E-MAIL
</div>
<div class="contact">
Website ini dibuat oleh MGI studio untuk <br>memudahka pembelian DVD diseluruh Indonesia.
</div>
</footer>
</body>
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

