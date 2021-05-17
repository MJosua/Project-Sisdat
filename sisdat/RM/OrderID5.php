<html>
	<head>
		<title> MGI's GAMESTORE</title>
		<link href="css/style.css" rel="stylesheet">
		<script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn1");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
<?php
session_start();
if(isset($_SESSION["username"])){
	echo 'Login';
}else{
 echo header("location:/logindulu.php");
 
}
?>
<?php
  $sql = "SELECT * FROM tb_barang WHERE 'tb_barang'.'idgame' = '$idgame'";
        $query = mysqli_query($db, $sql);
		
		$cookie_name = "game";
$cookie_value = "$idgame";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

?>
</script>
	</head>	
<body>
	<div class="sidebar">
   		 		<div class="search">
	  			   <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
				   <input type="submit" value="">
	  			</div>
   		 	</div>
		<header id="top-header" >
			<div class="header">
				<h1> <a href="..//index.php" class="NamaToko"  > MJA's Gamestore </a> </h1>
			</div>
			
			<hr class="line"><hr class="lineShading">
		</header>
		<div class="button-up">
		<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
		</div>
		<aside>
		<div class="menu">
			<div class="login">
			<form method="post" action="/log_out.php">	
				 <div class="foto"></div>
				<h4> Username	: <?=$_SESSION['username'];  ?> </h3>
				<h4> ID	: #00<?=$_SESSION['ID'];?> </h4> 
				
			<button type="submit" name="submit" value="Login">Logout <i class="fa fa-sign-out-alt"></i></button>
			</form>
			<?php if($_SESSION['username']=="admin")
    {		
		  echo "<form action='../datapenjualan.php'>";
          echo "<button name='toadmin' href='datapenjualan.php'>Admin <i class='fa fa-pen-square'></i></button>";
		  echo "</form>";	
	}else{
		echo "<form action='../Order.php'>";
        echo "<button  href='Order.php'>My Order <i class='fas fa-archive'></i></button>";
		echo "</form>";
	} ?>
	</div><br>
			
			<hr class="line">
			<a href="sidebar/carapesan.php"><h3>Cara Memesan</h3></a>
			<hr class="line">
			<a href="sidebar/list.php"><h3>List PC Game</h3></a>
			<hr class="line">
			<a href="sidebar/qna.php"><h3>FAQ</h3></a>
			<hr class="line">
			<a href="sidebar/support.php"><h3>Support</h3></a>
			<hr class="lineShading">
			
		</div>
		
		</aside>							
						<ul class="breadcrumb">
							<li><a href="..//index.php">Home</a></li>
							<li><a href="/index.php">DVD Games</a></li>
							<li class="active">Dota 2</li>
						</ul>
<div id="wrapper">
      <div class="box">
        <div class="main-container">
          <div class="left-cl">
            <div class="diagonal"></div>
            <img class="Preview1" src="images/ForzaHorison4.png">
          </div>
          <div class="right-cl">
            <h1>Windows Software DVD <p> +Update V5.6 </p></h1>
			
            <h3>Harga :<s>RP.70.000</s> RP.25.000</h3>
            <p><p>Dynamic seasons change everything at the world’s greatest automotive festival.
Go it alone or team up with others to explore beautiful and historic Britain in a shared open world. 
Collect, modify and drive over 450 cars. 
Race, stunt, create and explore – choose your own path to become a Horizon Superstar. 
The Forza Horizon 4 Standard Edition digital bundle includes the full game of Forza Horizon 4 and the Formula Drift Car Pack.

The Warrior aspect <span id="dots">...</span><span id="more">
is typically patterned after the fictionalized chivalric image of a knight-errant in shining armor from the high middle ages or renaissance period.
The religious aspect harkens back to the historical Paladins' purported role as the bodyguards or right-hand men of Charlemagne.
</span></p><button id="myBtn1" onclick="myFunction()" >Read more</button> 	

            <h4>Isi Paket</h4>
            <p>DVD Software</p>
			<form action="../pembeli.php?idgame=".$data['idgame']."'>
            <button class="primary-btn checkout">Pesan Sekarang</button>
			</form>
          </div>
        </div>
      </div>	  
    </div>
	<hr class="lineShading">	

		
<footer>
<hr class="lineShading">
<div class="footer1">
test
</div>
<div class="footer2">
test2
</div>
<div class="contact">
Contact
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

