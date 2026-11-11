<!DOCTYPE html> 
<html lang="id"> 
<head> 
  <meta charset="UTF-8"> 
  <title>Praktikum PHP</title> 
</head> 
<body> 
    <?php 
$mahasiswa = ["Alya", "Bima", "Citra", "Doni","Faiq","Ghaits","Bagus"]; 
echo "<h3>Daftar Mahasiswa</h3><ol>"; 
foreach ($mahasiswa as $nama) { 
    echo "<li>" . htmlspecialchars($nama) . "</li>"; 
} 
echo "</ol>"; 
    ?>
    
<!-- cari.php --> 
<form method="GET" action=""> 
  <label for="kata">Kata kunci:</label> 
  <input id="kata" name="kata" type="text"> 
  <button type="submit">Cari</button> 
</form> 
<?php 
if (isset($_GET["kata"])) {
    $kata = trim($_GET["kata"]);
    echo "Kata kunci: " . htmlspecialchars($kata, ENT_QUOTES, "UTF-8") . "<br>";

    $ketemu = false;
    foreach ($mahasiswa as $nama) {
        if ($kata !== "" && stripos($nama, $kata) !== false) {
            echo "Ditemukan: " . htmlspecialchars($nama) . "<br>";
            $ketemu = true;
        }
    }
    if (!$ketemu) {
        echo "Tidak ada nama yang cocok.";
    }
}
?>
</body> 
</html> 