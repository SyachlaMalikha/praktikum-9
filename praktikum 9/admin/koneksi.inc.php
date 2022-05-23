<?php
$host="localhost"; 
$username="root";
$password=""; 


//membuat koneksi
$konek=mysqli_connect($host, $username, $password) or die("Koneksi gagal dibangun");  
//cek koneksi
mysqli_select_db($konek, 'pengguna') or die("Database tidak dapat dibuka");
?> 