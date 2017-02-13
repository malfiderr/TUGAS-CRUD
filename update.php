<?php 

include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
mysql_query("UPDATE user SET nama='$nama', alamat='$alamat', no_telp='$no_telp' WHERE id='$id'");
header("location:index.php?pesan=update");
?>
