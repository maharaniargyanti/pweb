<?php
session_start(); // Mulai session

include "koneksi.inc.php";

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi database gagal: " . $conn->connect_error);
}

// Ambil data dari form login
$username = $_POST['username'];
$password = $_POST['password'];

// Lindungi dari SQL injection
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string($conn, $username);
$password = mysqli_real_escape_string($conn, $password);

// Query untuk mencari pengguna dengan username dan password yang cocok
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

// Periksa apakah hasil query mengembalikan satu baris data
if ($result->num_rows == 1) {
    // Login berhasil, set session dan redirect ke halaman utama
    $_SESSION['username'] = $username;
    header("location: cetak.php");
} else {
    // Login gagal, redirect kembali ke halaman login
    header("location: index.php");
}

$conn->close();
?>
