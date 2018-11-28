<?php ob_start();
include "koneksi.php";

$nik   = $_POST['nik'];
$nama   = $_POST['nama'];
$tmptlahir   = $_POST['tmptlahir'];
$tgllahir   = $_POST['tgllahir'];
$jk   = $_POST['jk'];
$alamat   = $_POST['alamat'];
$status   = $_POST['status'];
$kewarganegaraan  = $_POST['kewarganegaraan'];
//$tglizin = date('Y-m-d');
$pekerjaan  = $_POST['pekerjaan'];
$notelp  = $_POST['notelp'];

mysqli_query($con,"INSERT INTO santri(nik,nama,tempatlahir,tgllahir,jk,alamat,status,kewarganegaraan,pekerjaan,notelp)
VALUE('$nik','$nama','$tmptlahir','$tgllahir','$jk','$alamat','$status','$kewarganegaraan','$pekerjaan','$notelp')")or die("Database Tidak Bisa Di Buka ");
header('location:form-perijinan.php');
?>