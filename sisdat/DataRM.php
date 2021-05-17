<html>
	<head>
		<title> Info Restoran GG</title>
		<link href="css/style.css" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<?php
	require_once('config.php');

session_start();
if(isset($_SESSION["username"])){
	
}else{
echo header("location:index.php");
 
}

?>
    
<script>
    function submitForm(action)
    {
        document.getElementByClass('login').action = action;
        document.getElementByClass('login').submit();
    }
</script>
	</head>
	
<body style="margin:0;">
	<div class="sidebar">
   		 		
   		 	</div>
		<header id="top-header" >
			<div class="header">
				<h1> <a href="#" class="NamaToko"  > Info Restoran GG </a> </h1>
			</div>
			
			<hr class="line">
		</header>
		<hr class="lineShading">	
		
		<div class="button-up">
		<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
		</div>
		<aside>
		<div class="menu"><div class="sticky">
			<div class="login">
				<form method="post" action="./">	
				 <h3> Navigasi </h3>
				
				</form>
				<form method="post" action="./RM/">	
				<a><button style="margin-left:15; width:145;" >Kembali <i class='fa fa-pen-back'></i></button></a>
				</form>
			</div>
			
			<hr class="line">
			
			<a href="#"><h3>FAQ</h3></a>
			<hr class="line">
			<h2 style="padding-left:15; color: White;"><i style="color: red;" class="fas fa-map-marker-alt"></i> UAS SISDAT</h2>
<h3><p ><font size="4">Yosua Gultom 140810170038<br>Husein Irfan 1408101700</p></font>
			<hr class="lineShading">
			</div>
		</div>
		</aside>
			<div class="container">
	 <h2 class="title"><span>List Kontak </span></h2>
	<iframe style="width:1285;height:50%;overflow:auto;" src="./datajualan.php"></iframe><br><br>
             
               <div class="container">
	 <h2 class="title"><span>Komentar</span></h2>
	<iframe style="width:1285;height:50%;overflow:auto;" src="./datapembeli.php"></iframe>
                
		</div>
		</div>
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

