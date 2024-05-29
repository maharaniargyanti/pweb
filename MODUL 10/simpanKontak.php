<?php
include "admin/koneksi.inc.php";

$vnama = $_POST['nama'];
$vjkel = $_POST['jkel'];
$vemail = $_POST['email'];
$valamat = $_POST['alamat'];
$vkota = $_POST['kota'];
$vpesan = $_POST['pesan'];

$sql = "insert into data10 set nama='$vnama',
    jkel='$vjkel',
    email='$vemail',
    alamat='$valamat',
    kota='$vkota',
    pesan='$vpesan'";

mysqli_query($conn, $sql);
mysqli_close($conn);
header("location:kontak.html");
?>