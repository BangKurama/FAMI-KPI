<?php
session_start();
error_reporting(0);
include '../asset/conn/config.php';
include '../asset/conn/cek.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="../famicon.png">
    <title>FAMI KPI</title>
    <!-- Font -->

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Feather Icos -->

    <script src="https://unpkg.com/feather-icons"></script>

    <!-- My Style -->
    <link rel="stylesheet" type="text/css" href="../asset/css/cosmo.min.css">
    <link rel="stylesheet" href="../asset/css/style.css" />
  </head>
  <body>
    <!--Navbar star-->
    <nav class="navbar">
      <a href="#" class="navbar-logo">FAMI<span>KPI</span>.</a>

      <div class="navbar-nav">
        <a href="index.php">HOME</a>
        <a href="alternatif.php">ALTERNATIF</a>
        <a href="kriteria.php">KRITERIA</a>
        <a href="nilai.php">NILAI</a>
        <a href="metode.php">METODE SAW</a>
        <a href="hasil.php">HASIL ANALISA</a>
        <a href="logout.php">LOG OUT</a>
      </div>

      <div class="navbar-extra">
        <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
      </div>
    </nav>
    <!--Navbar end-->
    
    <!--Feather Icons-->

    <script>
      feather.replace();
    </script>

    <!--My Javascript-->
    <script src="../js/script.js"></script>
  </body>
</html>

