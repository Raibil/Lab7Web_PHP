<!DOCTYPE html> 
<html lang="id"> 
<head> 
  <meta charset="UTF-8"> 
  <title>Praktikum PHP</title> 
</head> 
<body> 
    <?php 
$nama = "Siti"; 
$tugas = 100; 
$uts = 94; 
$uas = 95; 
$nilaiAkhir = ($tugas * 0.30) + ($uts * 0.30) + ($uas * 0.40); 
$rataRata = ($tugas + $uts + $uas) / 3;

if ($nilaiAkhir >= 85) { 
    $predikat = "A"; 
} elseif ($nilaiAkhir >= 75) { 
    $predikat = "B"; 
} elseif ($nilaiAkhir >= 60) { 
    $predikat = "C"; 
} else { 
    $predikat = "D"; 
} 
echo "Nama: " . htmlspecialchars($nama) . "<br>"; 
echo "Nilai akhir: " . number_format($nilaiAkhir, 2) . "<br>"; 
echo "Rata-rata: " . number_format($rataRata, 2) . "<br>";
echo "Predikat: " . $predikat; 
    ?> 

</body> 
</html> 