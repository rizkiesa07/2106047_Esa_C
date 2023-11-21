<?php

$conn = mysqli_connect("localhost", "root", "", "2106047_rizkiesa");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$matakuliah = $_POST["matakuliah"];
$kelas = $_POST["kelas"];
$judul = $_POST["judul"];
$deskripsi = $_POST["deskripsi"];
$tanggal_mulai = $_POST["tanggal_mulai"];
$tanggal_pengumpulan = $_POST["tanggal_pengumpulan"];
$pertemuan = $_POST["pertemuan"];
$sql = "INSERT INTO tugas (matakuliah, kelas, judul, deskripsi, tanggal_mulai, tanggal_pengumpulan, pertemuan)
VALUES ('$matakuliah', '$kelas', '$judul', '$deskripsi', '$tanggal_mulai', '$tanggal_pengumpulan', '$pertemuan');";

$result = mysqli_query($conn, $sql);

if ($result) {
    echo "<script>alert('Data berhasil ditambahkan!')</script>";
    echo "<script> window.location='./index.php'</script>";
} else {
    echo "Data gagal ditambahkan: " . mysqli_error($conn);
}

mysqli_close($conn);
