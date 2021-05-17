<?php include("config.php"); ?>

<html>
<head>
    <title>MJA's GAMESTORE</title>		
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	
	<?php
session_start();
if($_SESSION['username']){
}else{
 echo header("location:form_login.php");
 
}
$cookie_name = "game";

?>


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
				<h1> <a href="./index.php" class="NamaToko"  > MJA's Gamestore </a> </h1>
			</div>
			
			<hr class="line"><hr class="lineShading">
		</header>

		<hr class="lineShading">	
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
		  echo "<form action='datapenjualan.php'>";
          echo "<button name='toadmin' href='datapenjualan.php'>Admin <i class='fa fa-pen-square'></i></button>";
		  echo "</form>";	
	}else{
		echo "<form action='Order.php'>";
        echo "<button  href='Order.php'>My Order <i class='fas fa-archive'></i></button>";
		echo "</form>";
	} ?>
	</div><br>
			<hr class="line">
			<a href="./sidebar/carapesan.php"><h3>Cara Memesan</h3></a>
			<hr class="line">
			<a href="./sidebar/list.php"><h3>List PC Game</h3></a>
			<hr class="line">
			<a href="./sidebar/qna.php"><h3>FAQ</h3></a>
			<hr class="line">
			<a href="./sidebar/support.php"><h3>Support</h3></a>
			<hr class="lineShading">
			
			
		
		
		</aside>
<?php
        $sql = "SELECT * FROM tb_user";
        $query = mysqli_query($db, $sql);
		$data = mysqli_fetch_array($query)
			   
		?>
		
		<div class="container">	
		 <h2 class="title"><span>Data Pembelian</span></h2>
				<form method="post" name="input" action="proses_pembelian.php">
<table border=0 align="center" cellpadding=5 cellspacing=0>
<tr>
<td colspan=3><center><font size=5>Input Data Pembeli</font></center></td>
</tr>
<tr>
<td>Email</td><td>:</td><td><input readonly type="text"  type="text" name="email" value="<?php echo $data["email"];?>"></td>
</tr>
<tr>
<td>Nama Pemesan</td><td>:</td><td><input readonly  type="text" name="nama" value="<?php echo $data["username"];?>"></td>
</tr>
<tr>
<td>Alamat</td><td>:</td><td><input type="text" name="alamat"></td>
</tr>
<tr>
<td>Nomor Telepon</td><td>:</td><td><input type="text" name="notelp"></td>
</tr>
<tr>
<td>Game</td><td>:</td><td><input readonly type="text" name="idgame" value="Dota" ></td>
</tr>
<tr>
<td>Jumlah</td><td>:</td><td><input type="text" name="jumlah"></td>
</tr>
<tr>
<td colspan=2>&nbsp;</td>
<td><input type="submit" name="input" value="Input Sekarang"></td>
</tr>
<tr>
<td colspan=3><a href="datapenjualan.php">Data Penjualan</a></td>
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

