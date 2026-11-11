<!DOCTYPE html> 
<html lang="id"> 
<head> 
  <meta charset="UTF-8"> 
  <title>Praktikum PHP</title> 
</head> 
<body> 
    <?php
function hitungDiskon($harga, $persen) {
    $potongan = $harga * ($persen / 100);
    return $harga - $potongan;
}

function formatRupiah($angka) {
    return "Rp" . number_format($angka, 0, ",", ".");
}

function hitungLuasPersegiPanjang($panjang, $lebar) {
    return $panjang * $lebar;
}

$hargaAkhir = hitungDiskon(150000, 10);
echo "Harga setelah diskon: " . formatRupiah($hargaAkhir). "<br>";

$luas = hitungLuasPersegiPanjang(8, 4);
echo "Luas persegi panjang: " . $luas . "<br>";

?>
</body> 
</html> 