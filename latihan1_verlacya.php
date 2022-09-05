<?php

require 'LATIHAN1function.php';
$tbpraktikum = query("SELECT * FROM tbpraktikum");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dbxitkj2</title>
</head>
<body>
    <a href="latihan1tambah.php">Tambah Data</a>
<table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>aksi</th>
            <th>Jurusan</th>
            <th>Kelas</th>
            <th>Hari</th>
            <th>Waktu</th>
            <th>Materi</th>
            <th>Instruktur</th>
        </tr>
    <?php $i = 1; ?>
    <?php foreach ($tbpraktikum as $row): ?>
        <tr> 
            <td><?= $i; ?></td>
            <td>
                <a href="latihan1ubah.php?id=<?= $row ["id"]?>">ubah</a> |
                <a href="latihan1hapus.php?id=<?= $row["id"];?>" onclick = "return confirm ('yakin?');">hapus</a>
            </td>
            <td><?php echo $row["jurusan"]; ?></td>
            <td><?php echo $row["kelas"]; ?></td>
            <td><?php echo $row["hari"]; ?></td>
            <td><?php echo $row["waktu"]; ?></td>
            <td><?php echo $row["materi"]; ?></td>
            <td><?php echo $row["instruktur"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
</body>
</html>