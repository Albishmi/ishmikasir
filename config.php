<?php
date_default_timezone_set("Asia/Jakarta");
error_reporting(0);

$host   = 'localhost'; // host server
$user   = '';  // username server
$pass   = ''; // password server, kalau pakai xampp kosongin saja
$dbname = ''; // nama database anda

try {
  $config = new PDO("mysql:host=$host;dbname=$dbname;", $user, $pass);
  //echo 'sukses';
} catch (PDOException $e) {
  echo 'KONEKSI GAGAL' . $e->getMessage();
}

$view = 'fungsi/view/view.php'; // direktori fungsi select data
