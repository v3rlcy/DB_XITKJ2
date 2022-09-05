<?php
require 'LATIHAN1function.php';

$id = $_GET["id"];

$dt = query("SELECT * FROM tbpraktikum WHERE id = $id")[0];

if(isset($_POST["submit"])) {
    if (ubah($_POST) > 0 ){
        echo "
            <script>
            alert('data berhasil di ubah!');
            document.location.href = 'latihan1_verlacya.php';
            </script>
            ";
    } else {
        echo "<script>
        alert('data gagal di ubah!');
        document.location.href = 'latihan1_verlacya.php';
        </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data</title>
</head>
<body>
    <h1>Ubah data</h1>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $dt["id"];?>">
        <ul>
            <li>
                <label for="jurusan">JURUSAN :</label>
                <input type="text" name="jurusan" id="jurusan" value="<?= $dt["jurusan"];?>">
            </li>
            <li>
                <label for="kelas">KELAS :</label>
                <input type="text" name="kelas" id="kelas" value="<?= $dt["kelas"];?>">
            </li>
            <li>
                <label for="hari">HARI :</label>
                <input type="text" name="hari" id="hari" value="<?= $dt["hari"];?>">
            </li>
            <li>
                <label for="waktu">WAKTU :</label>
                <input type="text" name="waktu" id="waktu" value="<?= $dt["waktu"];?>">
            </li>
            <li>
                <label for="materi">MATERI :</label>
                <input type="text" name="materi" id="materi" value="<?= $dt["materi"];?>">
            </li>
            <li>
                <label for="instruktur">INSTRUKTUR :</label>
                <input type="text" name="instruktur" id="instruktur" value="<?= $dt["instruktur"];?>">
            </li>
            <li>
                <button type="submmit" name="submit">Ubah data</button>
            </li>
        </ul>
    </form>
</body>
</html>