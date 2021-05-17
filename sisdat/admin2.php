<html>
	<head>
		<title> Info Kontrakan GG</title>
		<link href="css/style.css" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<?php
	require_once('config.php');


    
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
		 <h2 class="title"><span>Tambah Kontak</span></h2>	  			
				<form  method="post" name="" action="proses_input.php" enctype="multipart/form-data">
<table border=0 align="center" cellpadding=5 cellspacing=0>
<tr>
<td colspan=3><center><font size=5>Input Data </font></center></td>
</tr>
<tr>
<td>Nama RM</td><td>:</td><td><input type="text" name="namarm"></td>
</tr>
<tr>
<td>Jam Buka</td><td>:</td><td><input type="text" name="jambuka"></td>
</tr>
<tr>
<td>Nomor Telepon</td><td>:</td><td><input type="text" name="nomorhp"></td>
</tr>
<tr>
<td>Deskripsi</td><td>:</td><td><textarea name="deskripsi"></textarea></td>
</tr>
<tr>
<td>Upload Gambar</td><td>:</td><td> <input type="file" name="gambar"></td>

   
</tr>
<tr>
<td colspan=2>&nbsp;</td>
<td><input type="submit" name="submit" value="simpan"></td>
</tr>
<tr>
<td colspan=3><a href="./datajualan.php">Data Penjualan</a></td>
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