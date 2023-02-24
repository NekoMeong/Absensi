<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "absensi";

$koneksi = mysqli_connect($host, $user, $pass, $db);
$nama = htmlspecialchars($_GET["nama"]);
$waktu = htmlspecialchars($_GET["waktu"]);
$status = htmlspecialchars($_GET["status"]);
echo "firstname: $nama lastname: $waktu password: $status";
// $nama = $_POST['nama'];
// $waktu = $_POST['waktu'];
// $status = $_POST['status'];
$query = "INSERT INTO absen (nama, waktu, status) 
VALUES ('$nama', '$waktu', '$status')";

if (mysqli_query($koneksi, $query)) {
    echo "Data berhasil disimpan";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}
mysqli_close($koneksi);
?>
