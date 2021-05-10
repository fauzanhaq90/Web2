<?php
include("koneksi.php");
$nama=$_POST['nama'];
$email=$_POST['email'];
$website = $_POST['website'];
$pesan = $_POST['pesan'];
$tanggal = $_POST['tanggal'];
$sql="insert into bukutamu(nama,email,website,pesan,tanggal) values ('$nama','$email','$website','$pesan','$tanggal')";
mysqli_query($koneksi,$sql) or die (mysqli_error());
header('location:bukutamu.php');
?>