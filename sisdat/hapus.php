<?php

include("config.php");

if( isset($_GET['idrm']) ){

    $idrm = $_GET['idrm'];

    $sql = "DELETE FROM `tb_barang` WHERE `tb_barang`.`idrm` = '$idrm'";
    $query = mysqli_query($db, $sql);

    if( $query ){
        header('Location: datajualan.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>
