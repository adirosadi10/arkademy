<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "arkademy";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
  echo "Koneksi gagal!";
}
