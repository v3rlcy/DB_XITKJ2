<?php

$conn = mysqli_connect("localhost", "root", "", "dbxitkj2");
function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result) ){
        $rows[] = $row;

    }
   return $rows;
}


function tambah($data) {
    global $conn;
    $jurusan = $data["jurusan"];
    $kelas = $data["kelas"];
    $hari = $data["hari"];
    $waktu = $data["waktu"];
    $materi = $data["materi"];
    $instruktur = $data["instruktur"];

    $query = "INSERT INTO tbpraktikum 
    VALUES 
    ('','$jurusan','$kelas','$hari','$waktu','$materi','$instruktur')
    ";
    mysqli_query($conn, $query);
}

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM tbpraktikum WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function ubah ($data){
    global $conn;
    $id = $data["id"];
    $jurusan = $data["jurusan"];
    $kelas = $data["kelas"];
    $hari = $data["hari"];
    $waktu = $data["waktu"];
    $materi = $data["materi"];
    $instruktur = $data["instruktur"];

    $query = "UPDATE tbpraktikum SET
                jurusan = '$jurusan',
                kelas = '$kelas',
                hari = '$hari',
                waktu = '$waktu',
                materi = '$materi',
                instruktur = '$instruktur'
                WHERE id = $id
            ";
mysqli_query($conn, $query);

return mysqli_affected_rows($conn);

}


?>