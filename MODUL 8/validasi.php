<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['name']) || empty($_POST['email'])) {
        header("Location: error.html");
        exit();
    } else {
        // Mengirim data POST ke welcome.php
        $name = urlencode($_POST['name']);
        $email = urlencode($_POST['email']);
        header("Location: login.php?name=$name&email=$email");
        exit();
    }
}
?>
