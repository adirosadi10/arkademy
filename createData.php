<?php
if (isset($_POST['create'])) {
  include "koneksi.php";
  function validate($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  $nama = validate($_POST['nama']);
  $keterangan = validate($_POST['keterangan']);
  $harga = validate($_POST['harga']);
  $jumlah = validate($_POST['jumlah']);
  $dataProduk = 'nama=' . $nama . '&keterangan=' . $keterangan . '&harga=' . $harga . '&jumlah=' . $jumlah;
  if (empty($nama)) {
    header("Location: ./create.php?error=Nama produk harus diisi&$dataProduk");
  } elseif (empty($keterangan)) {
    header("Location: ./create.php?error=Keterangan harus diisi&$dataProduk");
  } elseif (empty($harga)) {
    header("Location: ./create.php?error=Harga harus diisi&$dataProduk");
  } elseif (empty($jumlah)) {
    header("Location: ./create.php?error=Jumlah harus diisi&$dataProduk");
  } else {
    $sql = "INSERT INTO produk(nama_produk,keterangan,harga,jumlah) VALUES ('$nama','$keterangan','$harga','$jumlah')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
      header("Location: ./index.php?success=Data berhasil disimpan");
    } else {
      header("Location: ./create.php?error=Isi data dengan lengkap!&$dataProduk");
    }
  }
}
