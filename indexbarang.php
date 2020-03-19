<?php
include 'kon.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Tugas CRUD</title>
</head>

<body>
    <div class="container">
        <h2>Tugas crud</h2>

        <a href="tambahbarang.php" class=" btn btn-primary ">Tambah Data Barang</a>
        <br>
        <br>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Kode barang</th>
                    <th scope="col">Nama barang</th>
                    <th scope="col">Satuan</th>
                    <th scope="col">Harga</th>
                    <th scope="col">aksi</th>
                </tr>
            </thead>


            <?php
            $ambil = $koneksi->query("select * from tb_barang");
            while ($barang = $ambil->fetch_array()) {

                // Tes COmmit
            ?>

                <tbody>
                    <tr>
                        <td><?php echo $barang['kode_barang'] ?></td>
                        <td><?php echo $barang['nama_barang'] ?></td>
                        <td><?php echo $barang['satuan'] ?></td>
                        <td><?php echo $barang['harga'] ?></td>
                        <td>
                            <a href="" class=" btn btn-warning">Edit</a>
                            <a href="" class=" btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php
            }
                ?>
                </tbody>

        </table>

</body>

</html>