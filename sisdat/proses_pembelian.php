<?php
include "config.php";
$email = $_POST['email'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$notelp = $_POST['notelp'];
$idgame = $_POST['idgame'];
$jumlah = $_POST['jumlah'];
if (empty($email)){
echo "<script>alert('Email belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=pembeli.php'>";
}else 
if(empty($nama)){
echo "<script>alert('Nama Game belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=pembeli.php'>";
}else 
if(empty($alamat)){
echo "<script>alert('Alamat belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=pembeli.php'>";
}else 
if(empty($notelp)){
echo "<script>alert('Nomor Telepon belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=pembeli.php'>";
}else 
if(empty($idgame)){
echo "<script>alert('Game belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=pembeli.php'>";
}else 
if(empty($jumlah)){
echo "<script>alert('Jumlah Paket belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=pembeli.php'>";
}else {
$sql = "INSERT INTO tb_pembeli (email, nama, alamat, notelp, idgame, jumlah) values ('$email','$nama','$alamat','$notelp','$idgame','$jumlah')";
$query = mysqli_query($db, $sql);
if ($query){
echo "<script>alert('Berhasil Membeli')</script>";
echo "<meta http-equiv='refresh' content='1 url=index.php'>";
}else{
echo "<script>alert('Gagal Membeli')</script>";
echo "<meta http-equiv='refresh' content='1 url=pembeli.php'>";
}
}
?>

<!-- 
Sumber : http://ardisaputraaa.blogspot.com/2013/09/cara-membuat-form-daftar-login-dan.html#ixzz5Yjxjk9oT -->