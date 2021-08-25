<?php
include "readData.php"
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="asset/style.css">
  <title>Crud</title>
</head>

<body>
  <div class="container">
    <div class="box">
      <h1 class="display-4 text-center">CRUD</h1>
      <div style="margin: 15px 0;">
        <a class="btn btn-primary" href="create.php">Tambah data</a>
      </div>
      <?php if (isset($_GET['success'])) { ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <?= $_GET['success']; ?>
        </div>
      <?php } ?>
      <?php if (mysqli_num_rows($result)) { ?>
        <table class="table table-striped">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Produk</th>
              <th>Keterangan</th>
              <th>Harga</th>
              <th>Jumlah</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            while ($rows = mysqli_fetch_assoc($result)) { ?>
              <tr>
                <td><?= $no++  ?></td>
                <td><?= $rows['nama_produk']  ?></td>
                <td><?= $rows['keterangan']  ?></td>
                <td><?= $rows['harga']  ?></td>
                <td><?= $rows['jumlah']  ?></td>
                <td>
                  <a class="btn btn-success" href="update.php?id=<?= $rows['id'] ?>">Edit</a>
                  <a class="btn btn-danger" onclick="return confirm('Apakah kamu yakin akan menghapus?')" href="deleteData.php?id=<?= $rows['id'] ?>">Hapus</a>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      <?php } else { ?>
        <h1>Belum ada data</h1>
      <?php } ?>
    </div>
  </div>
</body>

</html>