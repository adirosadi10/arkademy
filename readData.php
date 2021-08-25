<?php 
  include "koneksi.php";
$sql = "SELECT * FROM produk ORDER BY id DESC";
$result = mysqli_query($conn, $sql);
