<?php include("config.php");

        $sql = "SELECT * FROM tb_pembeli";
        $query = mysqli_query($db, $sql); ?>

<html>
    <head>
        <title> MJA's GAMESTORE</title>
        <link href="css/style.css" rel="stylesheet">
        
    </head>
    <?php
session_start();

?>
<body>
    <table border="1">
<p>Total: <?php echo mysqli_num_rows($query) ?></p> 
 <thead>
        <tr>
            <th>Email</th>
            <th>Nama</th>
            <th>Alamat Pemesan</th>
            <th>Nomor Telpon</th>
            <th>Game</th>
            <th>Jumlah Pesanan</th>
        </tr>
    </thead>
    
    <tbody>
        <?php

        while($data = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$data['email']."</td>";
            echo "<td>".$data['nama']."</td>";
            echo "<td>".$data['alamat']."</td>";
            echo "<td>".$data['notelp']."</td>";
            echo "<td>".$data['idgame']."</td>";
            echo "<td>".$data['jumlah']."</td>";
            
            
            echo "</tr>";
        }
        ?>
    </tbody>
    </table>
    
</div>
