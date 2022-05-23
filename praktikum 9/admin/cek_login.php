<?php
// menghubungkan dengan file koneksi
include 'koneksi.inc.php';
// menampung data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
// cek  username dan password di data admin
$seleksidata = mysqli_query($konek,"SELECT * FROM login WHERE
username='$username' AND password='$password'");
// menghitung dan cek data admin
$cek = mysqli_num_rows($seleksidata);
if($cek > 0){
$_SESSION['username'] = $username;
$_SESSION['status'] = "login";
header("location:cetak.php");
}else{
header("location:index.php?pesan=gagal");
}
?>