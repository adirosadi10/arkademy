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
    <h1>Create</h1>
    <form method="POST" action="createData.php">
      <?php if (isset($_GET['error'])) { ?>
        <div class="alert alert-danger" role="alert">
          <?= $_GET['error']; ?>
        </div>
      <?php } ?>
      <div class="mb-3">
        <label for="nama" class="form-label">Nama Produk</label>
        <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukan nama produk .." value="<?php if (isset($_GET['nama'])) {
                                                                                                                    echo ($_GET['nama']);
                                                                                                                  } ?>">
      </div>
      <div class="mb-3">
        <label for="keterangan" class="form-label">Keterangan</label>
        <textarea name="keterangan" id="keterangan" class="form-control" placeholder="Masukan keterangan ..."><?php if (isset($_GET['keterangan'])) {
                                                                                                                echo ($_GET['keterangan']);
                                                                                                              } ?></textarea>
      </div>
      <div class="mb-3">
        <label for="harga" class="form-label">Harga</label>
        <input type="number" name="harga" class="form-control" id="harga" placeholder="masukan harga ..." value="<?php if (isset($_GET['harga'])) {
                                                                                                                    echo ($_GET['harga']);
                                                                                                                  } ?>">
      </div>
      <div class="mb-3">
        <label for="jumlah" class="form-label">Jumlah</label>
        <input type="number" name="jumlah" class="form-control" id="jumlah" placeholder="masukan jumlah ..." value="<?php if (isset($_GET['jumlah'])) {
                                                                                                                      echo ($_GET['jumlah']);
                                                                                                                    } ?>">
      </div>
      <button name="create" type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

</body>

</html>