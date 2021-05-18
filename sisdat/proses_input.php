<?php
include "config.php";
$namarm = $_POST['namarm'];
$jambuka = $_POST['jambuka'];
$nomorhp = $_POST['nomorhp'];
$deskripsi = $_POST['deskripsi'];
$gambar = $_FILES['gambar']['name'];
$tmp = $_FILES['gambar']['tmp_name'];
$path = "images/".$gambar;

	

if(empty($namarm)){
echo "<script>alert('Nama RM belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=admin2.php'>";
}else 
if(empty($jambuka)){
echo "<script>alert('Isi Paket belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=admin2.php'>";
}else 
if(empty($nomorhp)){
echo "<script>alert('nomorhp belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=admin2.php'>";
}else 
if(empty($deskripsi)){
echo "<script>alert('Deskripsi belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=admin2.php'>";
}if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
	// Proses simpan ke Database
	$sql = "INSERT INTO tb_barang (namarm,jambuka, nomorhp, deskripsi, gambar) values ('$namarm','$jambuka','$nomorhp','$deskripsi','$gambar')";
	$query = mysqli_query($db, $sql);


if ($query){
echo "<script>alert('Berhasil Mendaftar')</script>";
echo "<meta http-equiv='refresh' content='1 url=datajualan.php'>";
}else{
echo "<script>alert('Gagal Mendaftar')</script>";
echo "<meta http-equiv='refresh' content='1 url=admin2.php'>";
}
	
  




}

?>
