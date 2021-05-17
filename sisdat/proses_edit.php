<?php
include "config.php";
$idrm = false;
if(isset($_POST['idrm'])){
    $idrm = $_POST['idrm'];
 } 
$namarm = $_POST['namarm'];
$jambuka = $_POST['jambuka'];
$nomorhp = $_POST['nomorhp'];
$deskripsi = $_POST['deskripsi'];

	

if(empty($namarm)){
echo "<script>alert('Nama RM belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=DataRM.php'>";
}else 
if(empty($jambuka)){
echo "<script>alert('Isi Paket belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=DataRM.php'>";
}else 
if(empty($nomorhp)){
echo "<script>alert('nomorhp belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=DataRM.php'>";
}else 
if(empty($deskripsi)){
echo "<script>alert('Deskripsi belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=DataRM.php'>";
}if(isset($_POST['ubah_foto'])){ // Jika user menceklis checkbox yang ada di form ubah, lakukan :
	// Ambil data foto yang dipilih dari form
	$gambar = $_FILES['gambar']['name'];
	$tmp = $_FILES['gambar']['tmp_name'];
	
	// Rename nama fotonya dengan menambahkan tanggal dan jam upload
	// Set path folder tempat menyimpan fotonya
	$path = "images/".$gambar;

// Proses upload
	if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
		// Query untuk menampilkan data  berdasarkan NIS yang dikirim
		$query = "SELECT * FROM tb_barang WHERE idrm='".$idrm."'";
		$sql = mysqli_query($db, $query); // Eksekusi/Jalankan query dari variabel $query
		$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql

		// Cek apakah file foto sebelumnya ada di folder images
		if(is_file("images/".$data['gambar'])) // Jika foto ada
			unlink("images/".$data['gambar']); // Hapus file foto sebelumnya yang ada di folder images
		

	
		// Proses ubah data ke Database
		$query = "UPDATE tb_barang SET namarm ='".$namarm."', jambuka='".$jambuka."', nomorhp='".$nomorhp."', deskripsi='".$deskripsi."', gambar='".$gambar."' 	";
		$sql = mysqli_query($db, $query); // Eksekusi/ Jalankan query dari variabel $query

		if($sql){ // Cek jika proses simpan ke database sukses atau tidak

			// Jika Sukses, Lakukan :
			echo "<script>alert('Berhasil Mendaftar')</script>";
echo "<meta http-equiv='refresh' content='1 url=datajualan.php'>";

			}else{
			// Jika Gagal, Lakukan :
				echo "<script>alert('Gagal Mendaftar')</script>";
echo "<meta http-equiv='refresh' content='1 url=datajualan.php'>";
		}
	}else{
		// Jika gambar gagal diupload, Lakukan :
		echo "<script>alert('Gagal Mendaftar')</script>";
echo "<meta http-equiv='refresh' content='1 url=datajualan.php'>";
	}

}else{ // Jika user tidak menceklis checkbox yang ada di form ubah, lakukan :
	// Proses ubah data ke Database
	$query = "UPDATE tb_barang SET namarm ='".$namarm."', jambuka='".$jambuka."', nomorhp='".$nomorhp."', deskripsi='".$deskripsi."'";
	$sql = mysqli_query($db, $query); // Eksekusi/ Jalankan query dari variabel $query
	if($sql){ // Cek jika proses simpan ke database sukses atau tidak
		// Jika Sukses, Lakukan :
		echo "<script>alert('Berhasil Mendaftar')</script>";
echo "<meta http-equiv='refresh' content='1 url=datajualan.php'>";
		}else{
		// Jika Gagal, Lakukan :
		echo "<script>alert('Gagal Mendaftar')</script>";
echo "<meta http-equiv='refresh' content='1 url=admin2.php'>";
	}
}

?>




