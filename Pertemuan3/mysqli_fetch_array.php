<?php
//mysqli_fetch_array("query SELECT", result_type);
$connection = mysqli_connect("localhost", "root", "", "project1");
if (!$connection) {
    die("Connection Failed : " . mysqli_connect_error());
} echo "Connected Successfully to project1 <br>";

$query = mysqli_query($connection, "SELECT id, nama_lengkap, jurusan FROM guru");

if (!$query) {
    echo ("Error query " . mysqli_error($connection));
}
echo "<br> Hasil numerik <br>";
while ($data = mysqli_fetch_array($query, MYSQLI_NUM)) {
    print "id : " . $data[0] . "<br>";
    print "nama_lengkap : " . $data[1] . "<br>";
    print "jurusan : " . $data[2] . "<br>";
}

mysqli_close($connection);
?>