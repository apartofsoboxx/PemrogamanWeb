<?php
//mysqli_connect("host_name", "username", "password", "db_name");
$connection = mysqli_connect("localhost", "root", "", "project1");
if(!$connection) {
    die("Connection Failed : " . mysqli_connect_error());
} echo "Connected Successfully";
?>