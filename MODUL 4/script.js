function konversiNilai() {
  var nilaiAngka = document.getElementById("nilai").value;
  var hasilKonversi;

  if (nilaiAngka >= 0 && nilaiAngka <= 40) {
    hasilKonversi = "E";
  } else if (nilaiAngka >= 41 && nilaiAngka <= 55) {
    hasilKonversi = "D";
  } else if (nilaiAngka >= 56 && nilaiAngka <= 60) {
    hasilKonversi = "C";
  } else if (nilaiAngka >= 61 && nilaiAngka <= 65) {
    hasilKonversi = "BC";
  } else if (nilaiAngka >= 66 && nilaiAngka <= 70) {
    hasilKonversi = "B";
  } else if (nilaiAngka >= 71 && nilaiAngka <= 80) {
    hasilKonversi = "AB";
  } else if (nilaiAngka >= 81 && nilaiAngka <= 100) {
    hasilKonversi = "A";
  } else {
    hasilKonversi = "Nilai tidak valid";
  }

  document.getElementById("hasil").innerHTML = "Nilai Huruf: " + hasilKonversi;
}
