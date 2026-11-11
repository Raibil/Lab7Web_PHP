<!DOCTYPE html> 
<html lang="id"> 
<head> 
  <meta charset="UTF-8"> 
  <title>Praktikum PHP</title> 
</head> 
<body> 
<form method="POST"> 
  <label>Nama barang <input name="barang" required></label> 
  <label>Harga <input name="harga" type="number" min="0" step="0.01" required></label> 
  <label>Jumlah <input name="jumlah" type="number" min="1" step="1" required></label> 
  <button type="submit">Hitung</button> 
</form> 
<?php 
if (isset($error)) { 
    echo "<p>" . htmlspecialchars($error) . "</p>"; 
} elseif (isset($subtotal)) { 
    echo "<p>Barang: " . htmlspecialchars($barang) . "</p>"; 
    echo "<p>Subtotal: Rp" . number_format($subtotal, 0, ",", ".") . "</p>"; 
} 
?> 

</body> 
</html> 