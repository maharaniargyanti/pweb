<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tugas 9</title>
</head>

<body>

  <?php

  include 'Modul 9.php';

  $sql = "CREATE TABLE IF NOT EXISTS buku_tamu (
            id INT(10) AUTO_INCREMENT PRIMARY KEY,
            nama VARCHAR(200) NOT NULL,
            email VARCHAR(50) NOT NULL,
            isi TEXT NOT NULL
        )";

  if ($conn->query($sql) === TRUE) {
    echo "Tabel berhasil dibuat";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error . "<br>" . "<br>";
  }


  $sql = "INSERT INTO buku_tamu (nama, email, isi) VALUES ('maharani', 'argyanti898@gmail.com', 'maharani adalah seorang artis india')";

  if ($conn->query($sql) === TRUE) {
    echo "Data berhasil diinput";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error . "<br>" . "<br>";
  }

  $sql = "INSERT INTO buku_tamu (nama, email, isi) VALUES ('erta', 'erta@gmail.com', 'erta adalah seorang penyanyi')";

  if ($conn->query($sql) === TRUE) {
    echo "Data berhasil diinput";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error . "<br>" . "<br>";
  }

  $query = "SELECT * FROM buku_tamu";
  $result = $conn->query($query);

  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      echo "<p><strong> Nama : " . $row['nama'] . "</strong> " . $row['email'] . $row['isi'] . "</p>";
    }
  } else {
    echo "Belum ada tamu.";
  }

  ?>

</body>

</html>