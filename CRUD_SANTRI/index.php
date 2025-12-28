<?php
include 'koneksi.php';
$data = mysqli_query($conn, "SELECT * FROM santri");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Sistem Kartu Santri</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<nav class="navbar">
    <h1>Kartu Santri</h1>
    <ul>
        <li>Dashboard</li>
        <li>Data Santri</li>
    </ul>
</nav>

<div class="container">
    <h2>Data Santri Pondok</h2>

    <table>
        <thead>
            <tr>
                <th>NIS</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>JK</th>
                <th>Agama</th>
                <th>Kelas</th>
                <th>Wali</th>
                <th>No Telp</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($s = mysqli_fetch_assoc($data)) { ?>
            <tr>
                <td><?= $s['nis']; ?></td>
                <td><?= $s['nama_lengkap']; ?></td>
                <td><?= $s['alamat']; ?></td>
                <td><?= $s['jenis_kelamin']; ?></td>
                <td><?= $s['agama']; ?></td>
                <td><?= $s['kelas']; ?></td>
                <td><?= $s['nama_wali']; ?></td>
                <td><?= $s['no_telp']; ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

</body>
</html>
