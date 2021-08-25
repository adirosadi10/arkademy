<?php
if (isset($_GET['id'])) {
  include "koneksi.php";
  function validate($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  $id = validate($_GET['id']);
  $sql = "SELECT * FROM produk WHERE id = $id";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
  } else {
    header("Location= ./index.php");
  }
} else if (isset($_POST['update'])) {
  include "koneksi.php";

  function validate($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  $id = validate($_POST['id']);
  $nama = validate($_POST['nama']);
  $keterangan = validate($_POST['keterangan']);
  $harga = validate($_POST['harga']);
  $jumlah = validate($_POST['jumlah']);
  if (empty($nama)) {
    header("Location: ./update.php?id=$id&error=Nama produk harus diisi");
  } elseif (empty($keterangan)) {
    header("Location: ./update.php?id=$id&error=Keterangan harus diisi");
  } elseif (empty($harga)) {
    header("Location: ./update.php?id=$id&error=Harga harus diisi");
  } elseif (empty($jumlah)) {
    header("Location: ./update.php?id=$id&error=Jumlah harus diisi");
  } else {
    $sql = "UPDATE produk SET nama_produk='$nama',keterangan='$keterangan',harga='$harga',jumlah='$jumlah' WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
      header("Location: ./index.php?success=Data berhasil diupdate");
    } else {
      header("Location: ./update.php?id=$id&error=Isi data dengan lengkap!&$dataProduk");
    }
  }
} else {
  header("Location= ./index.php");
}
