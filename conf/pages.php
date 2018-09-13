<?php
if(isset($_GET['page'])){
  $page = $_GET['page'];

  switch ($page) {

  // Data Mahasiswa
  case 'data_mahasiswa':
    include 'pages/mahasiswa/data_mahasiswa.php';
    break;
  case 'tambah_mahasiswa':
    include 'pages/mahasiswa/tambah_mahasiswa.php';
    break;
  case 'ubah_mahasiswa';
    include 'pages/mahasiswa/ubah_mahasiswa.php';
    break;

  default:
    include 'pages/error404.php';
    break;
  }
}else{
    include "pages/beranda.php";
}
?>
