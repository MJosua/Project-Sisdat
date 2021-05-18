<html>
	<head>
		<title> Info Kontrakan GG</title>
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
	
		
		<div class="container">	
		 <h2 class="title"><span>Tambah Komentar</span></h2>	  			
				<form method="post" name="input" action="proses_pembelian.php">
<table border=0 align="center" cellpadding=5 cellspacing=0>
<tr>
<td colspan=3><center><font size=5>Input Data Pembeli</font></center></td>
</tr>
<tr>
<td>Email</td><td>:</td><td><input readonly type="text"  type="text" name="email" value="<?php echo " " .$_SESSION['username'] . ""; ?>"></td>
</tr>
<tr>
<td>Nama</td><td>:</td><td><input readonly  type="text" name="nama" value=" <?php echo " " .$_SESSION['email'] . ""; ?>">  </td>
</tr>
<tr>
<td>Warteg</td><td>:</td><td><input type="text" name="alamat"></td>
</tr>
<tr>
<td>Komentar</td><td>:</td><td><input  type="text" name="idgame" value="" ></td>
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