<?php 
include 'koneksi.php';
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
mysql_query("INSERT INTO user VALUES('','$nama','$alamat','$no_telp')");
header("location:index.php?pesan=input");
?>
