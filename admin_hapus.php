<?php
// Mengambil file koneksi.php
include_once("koneksi.php");

// Mengambil id dari URL
$id = $_GET['id'];

// Syntax untuk melakukan soft delete (update is_deleted menjadi 1)
$result = mysqli_query($con, "UPDATE registration SET terhapus = 1 WHERE id='$id'");

// Setelah berhasil dihapus redirect ke data.php
header("Location:data.php");
?>
