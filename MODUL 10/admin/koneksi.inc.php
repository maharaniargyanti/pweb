<?php
$host = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($host, $username, $password) or die("Koneksi gagal dibangun");
$conn->select_db("modul10");
?>