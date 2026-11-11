# Praktikum 7 – Pemrograman Server-Side dengan PHP

| Keterangan |
|---|---|
| Mata Kuliah | Pemrograman Web |
| Praktikum | 7 – Pemrograman Server-Side dengan PHP |
| Nama | Raihan Nabil Mas'ud |
| NIM | 312510094 |
| Kelas | I.25.1A |

## Tujuan Praktikum

1. Memahami perbedaan pemrosesan client-side dan server-side.
2. Mengenali sintaks PHP dan menjalankan file PHP melalui server lokal.
3. Menggunakan variabel, tipe data, operator, percabangan, perulangan, dan function.
4. Menerima dan memproses data dari form HTML menggunakan metode GET dan POST.
5. Melakukan validasi dan sanitasi input dasar sebelum data ditampilkan atau diproses.
6. Membangun aplikasi sederhana yang menerima, memproses, dan menampilkan data pengguna.

## Perangkat yang Digunakan

- Laptop
- Web browser
- Visual Studio Code
- PHP
- Server lokal XAMPP

## Cara Menjalankan Server Lokal

1. Instal XAMPP atau Laragon.
2. Jalankan layanan web server (Apache) dari aplikasi tersebut.
3. Salin folder proyek `Lab7Web_PHP` ke direktori web server, misalnya `htdocs/` untuk XAMPP.
4. Buka browser dan akses salah satu file lewat alamat lokal, misalnya:
   `http://localhost/Lab7Web_PHP/index.php`
5. Jangan membuka file PHP dengan klik dua kali, karena kode PHP tidak akan dieksekusi dan hanya tampil sebagai teks.

## Struktur File

```
lab7_php/
├── latihan1.php         # Latihan 1 – Menjalankan PHP
├── latihan2.php         # Latihan 2 – Variabel, operator, percabangan
├── latihan3.php         # Latihan 3 – Perulangan dan array
├── latihan4.php         # Latihan 4 – Function
├── latihan5.php         # Latihan 5 – Form GET
├── latihan6.php         # Latihan 6 – Form POST
├── latihan7.php         # Latihan 7 – Pengolahan data sederhana
├── full-latihan.php     # Keseluruhan Latihan 1 hingga 7
├── mini_project.php     # Mini Project – Formulir Data Mahasiswa
└── README.md
```
## Ringkasan Hasil

### Latihan 1 – Menjalankan PHP
PHP berhasil dijalankan melalui `localhost`. Browser menampilkan teks "PHP berhasil dijalankan" dan waktu server, sedangkan kode PHP tidak tampil sebagai teks.

### Latihan 2 – Variabel, Operator, dan Percabangan
Menghitung nilai akhir dengan bobot tugas 30%, UTS 30%, dan UAS 40%, lalu menentukan predikat A/B/C/D dengan `if-elseif-else`. Contoh: tugas 85, UTS 78, UAS 90 menghasilkan nilai akhir 84,90 dan predikat B.

### Latihan 3 – Perulangan dan Array
Daftar mahasiswa disimpan dalam array dan ditampilkan memakai `foreach` dalam daftar bernomor. Ditambahkan tiga nama baru sesuai perintah.

### Latihan 4 – Function
Dibuat function `hitungDiskon()`, `hitungLuasPersegiPanjang()`, dan `tentukanKelulusan()`. Hasil diskon ditampilkan dengan format Rupiah menggunakan `number_format()`.

### Latihan 5 – Form GET
Data kata kunci dikirim lewat URL (`?kata=...`) dan diterima dengan `$_GET`. Perubahan URL setelah form dikirim dapat dilihat langsung di address bar. GET tidak digunakan untuk data sensitif.

### Latihan 6 – Form POST
Data nama dan program studi dikirim lewat body permintaan dan diterima dengan `$_POST`. Input divalidasi (tidak boleh kosong) dan ditampilkan kembali dengan `htmlspecialchars()`. Karakter seperti tanda kutip dan tag HTML tampil sebagai teks biasa.

### Latihan 7 – Pengolahan Data Sederhana
Menghitung subtotal dari harga dan jumlah barang. Validasi memastikan nama tidak kosong, harga berupa angka tidak negatif, dan jumlah berupa bilangan bulat minimal 1.

### Mini Project – Formulir Data Mahasiswa
Form berisi nama, NIM, program studi, semester, dan email dengan metode POST. Validasi server-side meliputi kolom wajib, NIM hanya angka, semester bilangan bulat 1–14, dan format email valid. Semua pesan error ditampilkan sekaligus. Jika valid, ringkasan data ditampilkan dengan `htmlspecialchars()`. Bagian pemrosesan dipisah dari tampilan HTML.

### Eksperimen Mandiri
1. **Rata-rata nilai:** menghitung rata-rata tiga komponen nilai dengan validasi rentang 0–100.
2. **Pencarian dengan GET:** mencari nama dari array menggunakan `stripos()` sehingga pencarian tidak peka huruf besar/kecil.
3. **Format Rupiah:** function `formatRupiah()` agar format harga ditulis sekali dan dipakai berulang.
4. **Validasi NIM:** NIM hanya boleh berisi angka dan panjangnya tepat 10 digit *(sesuaikan dengan ketentuan yang kamu tetapkan)*.
5. **Tombol reset:** Reset bawaan HTML hanya mengembalikan isian form ke nilai awal di browser tanpa menghubungi server. Pemrosesan ulang di server (submit atau refresh) membuat PHP berjalan lagi dan halaman dibuat ulang. Karena PHP mengisi `value` dengan data yang dikirim sebelumnya, tombol reset bawaan tidak selalu mengosongkan form, sehingga digunakan JavaScript sederhana atau pemuatan ulang halaman untuk mengosongkannya.

## Jawaban Pertanyaan Evaluasi

1. **Perbedaan client-side dan server-side:** client-side dijalankan di browser (HTML, CSS, JavaScript), sedangkan server-side dijalankan di server (misalnya PHP) yang memproses permintaan lalu mengirim hasilnya ke browser.
2. **Mengapa PHP harus lewat web server:** PHP butuh interpreter di server. Jika dibuka dengan klik dua kali, browser hanya menampilkan isi file sebagai teks.
3. **Fungsi `$`:** menandai nama sebagai variabel PHP. Nama variabel bersifat case-sensitive.
4. **GET vs POST:** GET mengirim data lewat URL dan cocok untuk permintaan yang tidak mengubah data (misalnya pencarian). POST mengirim data lewat body permintaan dan lazim untuk form. POST bukan enkripsi, gunakan HTTPS untuk melindungi data.
5. **Validasi di sisi server:** validasi di browser bisa dilewati, sedangkan server adalah pemeriksa terakhir yang menjamin data lengkap, valid, dan aman.
6. **Fungsi `htmlspecialchars()`:** mengubah karakter khusus HTML menjadi entitas sehingga input tampil sebagai teks biasa dan mengurangi risiko injeksi HTML/script (XSS).
7. **Manfaat function:** kode dapat dipakai berulang, lebih rapi, mudah dirawat dan diperbaiki, serta fleksibel lewat parameter.