<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "absensi";

$koneksi = mysqli_connect($host, $user, $pass, $db);

$query = "SELECT * FROM absen";
$hasil = mysqli_query($koneksi, $query);

$data_absen = array();
while ($row = mysqli_fetch_assoc($hasil)) {
    $data_absen[] = $row;
}

echo json_encode($data_absen);

mysqli_close($koneksi);
?>
