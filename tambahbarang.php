<?php

$koneksi = mysqli_connect('localhost', 'root', '', 'db_dasar_mysql');
if ($koneksi) {

    echo "terkoneksi";
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Dasar CRUD</title>

    <br>
    <br>
</head>

<body>
    <div class="container">
        <h2>dasar crud</h2>
        <h4>Tambah Data Barang</h4>
        <a href="indexbarang.php" class=" btn btn-primary mb-5 ">Kembali</a>

        <form action="" method="POST" style="width: 50%">
            <div class="form-group">
                <label>kode barang</label>
                <input name="txt_kdbarang" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>nama barang</label>
                <input name="txt_nmbarang" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>satuan</label>
                <input name="txt_satuan" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>harga</label>
                <input name="txt_harga" type="text" class="form-control">
            </div>
            <button type="submit" name="simpan" class="btn btn-success">Simpan</button>
        </form>
        <?php
        if (isset($_POST['simpan'])) {
            $txt_kdbarang = $_POST['txt_kdbarang'];
            $txt_nmbarang = $_POST['txt_nmbarang'];
            $txt_satuan = $_POST['txt_satuan'];
            $txt_harga = $_POST['txt_harga'];



            $koneksi->query("INSERT INTO `tb_barang`(
    `kode_barang`,
     `nama_barang`,
      `satuan`, 
      `harga`) VALUES (
          '$txt_kdbarang',
          '$txt_nmbarang',
          '$txt_satuan',
          '$txt_harga')");
        }
        ?>


    </div>
</body>

</html>