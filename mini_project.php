<!DOCTYPE html> 
<html lang="id"> 
<head> 
  <meta charset="UTF-8"> 
  <title>Mini Project PHP</title> 
</head> 
<body> 
<?php
$data = null;
$error = [];

// Nilai awal form (supaya input tidak hilang jika ada error)
$nama = $nim = $prodi = $email = "";
$semesterInput = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nama          = trim($_POST["nama"] ?? "");
    $nim           = trim($_POST["nim"] ?? "");
    $prodi         = trim($_POST["prodi"] ?? "");
    $semesterInput = trim($_POST["semester"] ?? "");
    $email         = trim($_POST["email"] ?? "");

    // Validasi kolom wajib
    if ($nama === "")  $error[] = "Nama wajib diisi.";
    if ($nim === "")   $error[] = "NIM wajib diisi.";
    if ($prodi === "") $error[] = "Program studi wajib diisi.";

    // Validasi NIM: hanya angka (eksperimen mandiri no. 4)
    if ($nim !== "" && !ctype_digit($nim)) {
        $error[] = "NIM hanya boleh berisi angka.";
    }

    // Validasi email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error[] = "Format email tidak valid.";
    }

    // Validasi semester: bilangan bulat 1-14
    if (!ctype_digit($semesterInput) ||
        (int)$semesterInput < 1 || (int)$semesterInput > 14) {
        $error[] = "Semester harus berupa angka 1–14.";
    }

    // Jika tidak ada error, siapkan data untuk ditampilkan
    if (!$error) {
        $data = compact("nama", "nim", "prodi", "email");
        $data["semester"] = (int)$semesterInput;
    }
}

// Fungsi bantu agar penulisan htmlspecialchars lebih singkat
function e($teks) {
    return htmlspecialchars($teks, ENT_QUOTES, "UTF-8");
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Data Mahasiswa</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f6f9; margin: 0; padding: 20px; }
        .container { max-width: 480px; margin: 0 auto; background: #fff; padding: 24px;
                     border-radius: 8px; box-shadow: 0 2px 6px rgba(0,0,0,.1); }
        h1 { font-size: 22px; margin-top: 0; }
        label { display: block; margin-top: 12px; font-weight: bold; }
        input { width: 100%; padding: 8px; margin-top: 4px; box-sizing: border-box;
                border: 1px solid #ccc; border-radius: 4px; }
        .tombol { margin-top: 16px; }
        button { padding: 10px 16px; border: 0; border-radius: 4px; cursor: pointer; }
        button[type=submit] { background: #2563eb; color: #fff; }
        button[type=reset]  { background: #e5e7eb; }
        .error { background: #fee2e2; color: #991b1b; padding: 10px 16px;
                 border-radius: 4px; margin-bottom: 12px; }
        .error ul { margin: 0; padding-left: 18px; }
        .sukses { background: #dcfce7; color: #166534; padding: 12px 16px;
                  border-radius: 4px; margin-bottom: 12px; }
        table { width: 100%; border-collapse: collapse; margin-top: 8px; }
        td { padding: 6px 4px; border-bottom: 1px solid #e5e7eb; }
        td:first-child { width: 40%; font-weight: bold; }
    </style>
</head>
<body>
<div class="container">
    <h1>Formulir Data Mahasiswa</h1>

    <?php // ===== BAGIAN 2: TAMPILAN HASIL ===== ?>

    <?php if ($error): ?>
        <div class="error">
            <strong>Terdapat kesalahan:</strong>
            <ul>
                <?php foreach ($error as $pesan): ?>
                    <li><?= e($pesan) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <?php if ($data): ?>
        <div class="sukses">
            <strong>Data berhasil diterima.</strong>
            <table>
                <tr><td>Nama</td><td><?= e($data["nama"]) ?></td></tr>
                <tr><td>NIM</td><td><?= e($data["nim"]) ?></td></tr>
                <tr><td>Program Studi</td><td><?= e($data["prodi"]) ?></td></tr>
                <tr><td>Semester</td><td><?= e((string)$data["semester"]) ?></td></tr>
                <tr><td>Email</td><td><?= e($data["email"]) ?></td></tr>
            </table>
        </div>
    <?php endif; ?>

    <?php // ===== BAGIAN 3: FORM HTML ===== ?>
    <form method="POST" action="">
        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama" value="<?= e($nama) ?>" required>

        <label for="nim">NIM</label>
        <input type="text" id="nim" name="nim" value="<?= e($nim) ?>" required>

        <label for="prodi">Program Studi</label>
        <input type="text" id="prodi" name="prodi" value="<?= e($prodi) ?>" required>

        <label for="semester">Semester (1–14)</label>
        <input type="number" id="semester" name="semester" min="1" max="14" step="1"
               value="<?= e($semesterInput) ?>" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="<?= e($email) ?>" required>

        <div class="tombol">
            <button type="submit">Kirim Data</button>
            <button type="button" onclick="resetForm(this.form)">Reset</button>

            <script>
            function resetForm(form) {
            form.querySelectorAll("input").forEach(function (input) {
                input.value = "";
            });
            }
            </script>
        </div>
    </form>
</div>
</body>
</html>
</body> 
</html> 