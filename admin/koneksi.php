<?php  
$server= "localhost";  
$username = "root";   
$password = "";   
$database = "trendiksi"; //menghubungkan dengan data base yg telah kita buat 
  
$con=mysqli_connect($server,$username,$password) or die ("Koneksi Gagal");  
  
mysqli_select_db($con,$database) or die ("Database Tidak Bisa Di Buka " );  
  
?> 