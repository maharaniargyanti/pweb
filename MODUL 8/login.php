<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['name']) && !empty($_POST['email'])) {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
} elseif ($_SERVER["REQUEST_METHOD"] == "GET" && !empty($_GET['name']) && !empty($_GET['email'])) {
    $name = htmlspecialchars($_GET['name']);
    $email = htmlspecialchars($_GET['email']);
} else {
    // Redirect ke halaman login jika tidak ada data POST atau GET
    header("Location: login.html");
    exit();
}

// Mendapatkan waktu dan tanggal login
date_default_timezone_set('Asia/Jakarta'); // Sesuaikan timezone dengan lokasi Anda
$time = date('H:i:s');
$day = date('l'); // Menampilkan hari dalam bahasa Inggris
$date = date('d-m-Y');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome Page</title>
</head>
<body>
    <h2>Selamat Datang, <?php echo $name; ?>!</h2>
    <p>Email: <?php echo $email; ?></p>
    <p>Waktu Login: <?php echo $time; ?></p>
    <p>Hari: <?php echo $day; ?></p>
    <p>Tanggal: <?php echo $date; ?></p>
</body>
</html>
