<?php ob_start();
include "koneksi.php";

$nama   = $_POST['nama'];
$tujuan   = $_POST['tujuan'];
$tglizin  = $_POST['tglizin'];
//$tglizin = date('Y-m-d');
$tglkembali  = $_POST['tglkembali'];

mysqli_query($con,"INSERT INTO perijinan(nama,tujuan,tgl_izin,tgl_kembali)
VALUE('$nama','$tujuan','$tglizin','$tglkembali')")or die("Database Tidak Bisa Di Buka ");
header('location:form-perijinan.php');
?>