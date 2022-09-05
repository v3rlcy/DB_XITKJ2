<?php
require 'LATIHAN1function.php';
if(isset($_POST["submit"])) {
    if (tambah($_POST) > 0 ){
        echo "
            <script>
            alert('data berhasil di tambahkan!');
            document.location.href = 'latihan1_verlacya.php';
            </script>
            ";
    } else {
        echo "<script>
        alert('data gagal di tambahkan!');
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
    <title>Tambah Data</title>
</head>
<body>
    <h1>Tambah data</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="jurusan">JURUSAN :</label>
                <input type="text" name="jurusan" id="jurusan">
            </li>
            <li>
                <label for="kelas">KELAS :</label>
                <input type="text" name="kelas" id="kelas">
            </li>
            <li>
                <label for="hari">HARI :</label>
                <input type="text" name="hari" id="hari">
            </li>
            <li>
                <label for="waktu">WAKTU :</label>
                <input type="text" name="waktu" id="waktu">
            </li>
            <li>
                <label for="materi">MATERI :</label>
                <input type="text" name="materi" id="materi">
            </li>
            <li>
                <label for="instruktur">INSTRUKTUR :</label>
                <input type="text" name="instruktur" id="instruktur">
            </li>
            <li>
                <button type="submmit" name="submit">Tambahkan data</button>
            </li>
        </ul>
    </form>
</body>
</html>