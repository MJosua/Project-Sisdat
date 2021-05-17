<?php

include("config.php");

if( !isset($_GET['idrm']) ){
    header('Location: datapenjualan.php');
}

$idrm = $_GET['idrm'];

$sql = "SELECT * FROM tb_barang WHERE idrm=$idrm";
$query = mysqli_query($db, $sql);
$data = mysqli_fetch_assoc($query);

if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>

<html>
	<head>
		<title> Restoran GG</title>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		
	</head>
<?php
session_start();
if($_SESSION['username']!="NULL"){

}else{
 echo header("location:form_login.php");
 
}
?> 
<body style="overflow:auto;">
		<div class="container">	
		
		 <h2 class="title"><span>Tambah rm</span></h2>	  			
				<form method="post" name="" action="proses_edit.php" enctype="multipart/form-data">
<table border=0 align="center" cellpadding=5 cellspacing=0>
<tr>
<td colspan=3><center><font size=5>Input Data Penjualan</font></center></td>
</tr>
<tr>
<td>ID rm</td><td>:</td><td><input type="text" disabled name="idrm" value="<?php echo $data['idrm'] ?>"></td>
</tr>
<tr>
<td>Nama rm</td><td>:</td><td><input type="text" name="namarm" value="<?php echo $data['namarm'] ?>"></td>
</tr>
<tr>
<td>jam buka</td><td>:</td><td><input type="text" name="jambuka" value="<?php echo $data['jambuka'] ?>"></td>
</tr>
<tr>
<td>nomor hp</td><td>:</td><td><input type="text" name="nomorhp" value="<?php echo $data['nomorhp'] ?>"></td>
</tr>
<tr>
<td>Deskripsi</td><td>:</td><td><textarea name="deskripsi" value="<?php echo $data['deskripsi'] ?>"></textarea></td>
</tr>
<tr>
<td>Upload Gambar</td><td>:</td><td> <input type="file" name="gambar"></td>
<td>
			<input type="checkbox" name="ubah_foto" value="true"> Ceklis jika ingin mengubah foto<br>
			
		</td>
   
</tr>
<tr>
<td colspan=2>&nbsp;</td>
<td><input  href="javascript:close_window();" type="submit" name="simpan" value="Simpan"></td>
</tr>
<tr>
<td colspan=3><a href="datajualan.php">Data Penjualan</a></td>
</tr>
</table>
</form>
			
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
function close_window() {
  if (confirm("Close Window?")) {
    close();
  }
}
</script>
</html>