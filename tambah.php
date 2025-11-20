<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Buku</title>
        <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Tambah Buku Baru</h2>

<form method="POST">
    Judul: <input type="text" name="judul" required><br><br>
    Penulis: <input type="text" name="penulis" required><br><br>
    Penerbit: <input type="text" name="penerbit" required><br><br>
    Tahun: <input type="number" name="tahun" required><br><br>
    <button type="submit" name="simpan">Simpan</button>
</form>

<?php
if(isset($_POST['simpan'])){
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $tahun = $_POST['tahun'];

    mysqli_query($koneksi, "INSERT INTO buku VALUES('', '$judul', '$penulis', '$penerbit', '$tahun')");
    header("location:index.php");
}
?>

</body>
</html>
