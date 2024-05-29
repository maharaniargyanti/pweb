<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung Luas Persegi Panjang</title>
</head>

<body>
    <div style="display: flex;
                flex-direction: column;
                justify-content: center;
                width: 50%;
                margin-left: 35%" ;>
        <h2>Menghitung Luas Persegi Panjang</h2>
        <div>
            <form method="post" action="">
                Panjang: <input type="number" name="panjang" step="0.01" required><br><br>
                Lebar: <input type="number" name="lebar" step="0.01" required><br><br>
                <input type="submit" name="submit" value="Hitung">
            </form>
        </div>
    </div>


    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $panjang = $_POST["panjang"];
        $lebar = $_POST["lebar"];

        $luas = $panjang * $lebar;
    }
    ?>

    <div style="display: flex;
                flex-direction: column;
                justify-content: center;
                width: 50%;
                margin-left: 35%;">
        <h3>Hasil Perhitungan : </h3>
        Panjang = <?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo $panjang;
        } ?> <br>
        Lebar = <?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo $lebar;
        } ?> <br>
        Luas Persegi Panjang = <?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo $luas;
        } ?>
    </div>

</body>

</html>