<html>

<head>
    <title> Modul 07 </title>
</head>

<body>
    <!-- Variabel (LA13)-->
    <i>Variabel</i><br>
    <?php
    $nilai_1 = 10;
    $nilai_2 = 2;
    $nilai_3 = 4 * $nilai_1 + 9 * $nilai_2;
    echo "nilai = ", $nilai_3;
    echo "<br>";
    $jumlah = $nilai_1 + $nilai_2;
    echo "hasil dari $nilai_1 + $nilai_2 adalah: $jumlah";
    echo "<br><br>";
    echo "\"Nama: Maharani Argyanti Nurahman\" <br>";
    echo "NIM : 227006038";
    ?>
    <br>
    <hr>

    <!-- Pemrograman PHP dengan Array (LA13)-->
    <i>Array</i><br>
    <?php
    //penulisan array dapat dibuat seperti berikut
    $nama[] = "Dhita Dwinandra ";
    $nama[] = "Herniawan";
    echo $nama[0] . $nama[1];
    echo "<br>";
    // menghitung jumlah elemen array
    $jum_array = count($nama);
    echo "jumlah elemen array = " . $jum_array;
    ?>
    <br>
    <hr>

    <!-- Konversi Tipe (LA13)-->
    <i>Konversi Tipe</i><br>
    <?php
    $a = 300.4;
    echo $a;
    echo "<br>";
    echo "tipe Double : ", doubleval($a), "<br>";
    echo "tipe Integer : ", intval($a), "<br>";
    echo "tipe string : ", strval($a);
    ?>
    <br>
    <hr>

    <!-- Tanggalan (LA13)-->
    <i>Tanggalan</i><br>
    <?php
    echo date("m-F-Y, g:i:s a");
    ?>


</body>

</html>