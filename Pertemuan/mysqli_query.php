<?php
$connection = mysqli_connect("localhost", "root", "", "project1");
if(!$connection) {
    die("Connection Failed : " . mysqli_connect_error());
} echo "Connected Successfully to project 1 <br>";
$query_insert = mysqli_query($connection, "INSERT INTO guru(id, nama_lengkap, alamat, tanggal, nip, jurusan) VALUES('', 'Gibran Soboxx', 'Jalan Brigjen Katamso No. 201', '2004-10-30', '123456789', 'RPL')");
if(!$query_insert) {
    echo ("Error query " . mysqli_error($connection));
}
mysqli_close($connection);
?>