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
  $sql = "DELETE FROM produk WHERE id='$id'";
  $result = mysqli_query($conn, $sql);
  if ($result) {
    header("Location: ./index.php?success=Data berhasil dihapus");
  } else {
    header("Location: ./index.php?error=data error");
  }
} else {
  header("Location: ./index.php");
}
