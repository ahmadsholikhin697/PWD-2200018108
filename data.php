<?php
// Memanggil file koneksi.php
include_once("koneksi.php");

// Syntax untuk mengambil semua data dari table mahasiswa
$result = mysqli_query($con, "select * from registration");
?>
<html>
<style>
    h3 {text-align: center;}
</style>
<head>
    <title>Profil</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<body>
    <h3>Profil</h3>
    <table class="table">
        <tr>
            <th>E-Mail</th>
            <th>Nama</th>
            <th>Institusi</th>
            <th>Negara</th>
            <th>Alamat</th>
        </tr>
        <?php
        while ($user_data = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $user_data['email'] . "</td>";
            echo "<td>" . $user_data['nama'] . "</td>";
            echo "<td>" . $user_data['institusi'] . "</td>";
            echo "<td>" . $user_data['negara'] . "</td>";
            echo "<td>" . $user_data['alamat'] . "</td>";
            echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='admin_hapus.php?id=$user_data[id]'>Delete</a></td></tr>";
        }
        ?>
         <a href="admin_tambah.php" class="btn btn-danger">Tambah Data</a><br /><br />
    </table>
</body>

</html>