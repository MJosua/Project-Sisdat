<?php
include "config.php";

$email = $_POST['email'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$idgame = $_POST['idgame'];

if (empty($email)){
echo "<script>alert('Email belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=admin3.php'>";
}else 
if(empty($nama)){
echo "<script>alert('Nama belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=admin3.php'>";
}else 
if(empty($alamat)){
echo "<script>alert('Alamat belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=admin3.php'>";
}else 
if(empty($idgame)){
echo "<script>alert('Komentar belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=admin3.php'>";
}
else {

$sql = "INSERT INTO tb_pembeli ( email, nama, alamat, idgame) values ('$email','$nama','$alamat','$idgame')";
$query = mysqli_query($db, $sql);

if ($query){
echo "<script>alert('Berhasil Menambahkan Komentar')</script>";
echo "<meta http-equiv='refresh' content='1 url=datajualan.php'>";
}else{
echo "<script>alert('Gagal Menambahkan komentar')</script>";
echo "<meta http-equiv='refresh' content='1 url=datajualan.php'>";
}
}
?>

<!-- 
Sumber : http://ardisaputraaa.blogspot.com/2013/09/cara-membuat-form-daftar-login-dan.html#ixzz5Yjxjk9oT -->