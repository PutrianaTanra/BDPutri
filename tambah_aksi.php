<?php 
// koneksi database
include 'koneksi.php';
 

$nama = $_POST['nama'];
$kode_supir = $_POST['kode_supir'];
$alamat = $_POST['alamat'];
 if (!empty($nama) || !empty($kode_supir) || !empty($alamat)) {
// menginput data ke database
mysqli_query($koneksi,"insert into data_supir values('','$nama','$kode_supir','$alamat')");
 }
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>