<?php
include_once 'FilmBioskop.php';
session_start();

// Nama session diubah menjadi 'data_final' soalnya error trs
if (!isset($_SESSION['data_final'])) {
    $_SESSION['data_final'] = [
        new FilmBioskop("F01", "Interstellar", 2014, "Nolan", "Sci-Fi", 169, "St 1", 50000, 100, "foto1.jpg"),
        new FilmBioskop("F02", "Inception", 2010, "Nolan", "Action", 148, "St 2", 45000, 80, "foto2.jpg"),
        new FilmBioskop("F03", "Avatar", 2009, "Cameron", "Fantasy", 162, "St 3", 60000, 120, "foto3.jpg"),
        new FilmBioskop("F04", "Joker", 2019, "Phillips", "Drama", 122, "St 1", 50000, 100, "foto4.jpg"),
        new FilmBioskop("F05", "Titanic", 1997, "Cameron", "Romance", 195, "St 2", 40000, 80, "foto5.jpg")
    ];
}

if (isset($_POST['submit'])) {
    $_SESSION['data_final'][] = new FilmBioskop($_POST['id'], $_POST['judul'], $_POST['tahun'], 
        $_POST['sutradara'], $_POST['genre'], $_POST['durasi'], $_POST['studio'], 
        $_POST['harga'], $_POST['kapasitas'], $_POST['foto']);
}
?>
<!DOCTYPE html>
<html>
<body>
    <h2>Tambah Data Film Bioskop</h2>
    <form method="POST">
        <input type="text" name="id" placeholder="ID" required> 
        <input type="text" name="judul" placeholder="Judul" required> 
        <input type="number" name="tahun" placeholder="Tahun" required><br><br>
        <input type="text" name="sutradara" placeholder="Sutradara" required> 
        <input type="text" name="genre" placeholder="Genre" required> 
        <input type="number" name="durasi" placeholder="Durasi" required><br><br>
        <input type="text" name="studio" placeholder="Studio" required> 
        <input type="number" name="harga" placeholder="Harga" required> 
        <input type="number" name="kapasitas" placeholder="Kapasitas" required><br><br>
        <input type="text" name="foto" placeholder="Link/Nama File Foto" required> 
        <button type="submit" name="submit">Tambah Data</button>
    </form>
    <h3>Tabel Data Keseluruhan</h3>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr><th>ID</th><th>Judul</th><th>Tahun</th><th>Sutradara</th><th>Genre</th><th>Durasi</th><th>Studio</th><th>Harga</th><th>Kapasitas</th><th>Foto</th></tr>
        <?php foreach($_SESSION['data_final'] as $film) echo $film->getRow(); ?>
    </table>
</body>
</html>