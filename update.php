<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$kode_supir = $_POST['kode_supir'];
$alamat = $_POST['alamat'];
 
// update data ke database
mysqli_query($koneksi,"update data_supir set nama='$nama', kode_supir='$kode_supir', alamat='$alamat' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>