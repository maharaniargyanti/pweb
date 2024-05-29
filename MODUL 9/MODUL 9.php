<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modul 9</title>
</head>

<body>

    <?php

    $conn = new mysqli("localhost", "root", "", "modul 9");

    if ($conn->connect_error) {
        die("Koneksi gagal");
    }

    echo "Berhasil" . "<br> <br>";


    $query = "SELECT * FROM negara";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_array(MYSQLI_BOTH)) {
            echo "kode : " . $row['kode'] . " Negara: " . $row['negara'] . " Champion : " . $row['champion'] . "<br>";
        }
    } else {
        echo "0 results" . "<br>";
    }

    echo "<br>";

    $query = "SELECT *FROM negara";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "kode : " . $row['kode'] . " Negara: " . $row['negara'] . " Champion : " . $row['champion'] . "<br>";
        }
    } else {
        echo "0 result";
    }

    echo "<br>";


    $query = "SELECT * FROM negara";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_row()) {
            echo "Liga : " . $row[1] . " Mempunyai : " . $row[2] . " Wakil di liga champion : " . "<br>";
        }
    } else {
        echo "0 results";
    }


    ?>

</body>

</html>