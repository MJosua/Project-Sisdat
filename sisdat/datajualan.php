<?php include("config.php");
$sql = "SELECT * FROM tb_barang";
        $query = mysqli_query($db, $sql);
 ?>

<html>
    <head>
        <title> MJA's RMSTORE</title>
        <link href="css/style.css" rel="stylesheet">
        
    </head>
    <?php
session_start();

?>
<body style="margin-left:120px;">
<p>Total: <?php echo mysqli_num_rows($query) ?></p>
    <nav>
        <a href="admin2.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>Id RM</th>
            <th>Nama RM</th>
            <th>Jam Buka</th>
            <th>Nomor Telepon</th>
			<th>Deskripsi</th>
			<th>Foto</th>
        </tr>
    </thead>
	
    <tbody>
        <?php
        
        while($data = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$data['idrm']."</td>";
            echo "<td>".$data['namarm']."</td>";
            echo "<td>".$data['jambuka']."</td>";
			echo "<td>".$data['nomorhp']."</td>";
			echo "<td>".$data['deskripsi']."</td>";
			echo "<td><img src='images/".$data['gambar']."' width='100' height='100'></td>";

            echo "<td>";
            echo "<a href='adminedit.php?idrm=".$data['idrm']."'>Edit</a> | ";
            echo "<a href='hapus.php?idrm=".$data['idrm']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>
    </tbody>
    </table>