<?php 
    include_once "koneksi.php"; 
    session_start(); 
    error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- link google analytic -->
    <?php  
    $querygoogle = mysqli_query($conn, "SELECT * FROM google_analysis WHERE id_admin='3'");
    $rowgoogle = mysqli_fetch_assoc($querygoogle);
    echo $rowgoogle['script_analysis'];
    ?>

    <!-- link fb analytic -->
    <?php  
    $queryfb = mysqli_query($conn, "SELECT * FROM fb_pixel WHERE id_admin='3'");
    $rowfb = mysqli_fetch_assoc($queryfb);
    echo $rowfb['script_pixel'];
    ?>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We"
      crossorigin="anonymous"
    />
    <!-- Google Icon -->
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- Slide -->
    <link rel="stylesheet" href="css/splide.min.css" />
    <!-- Share Butttom -->
    <script
      async=""
      src="https://buttons-config.sharethis.com/js/6108cff0f506cf0019dc20b5.js"
    ></script>
    <script
      type="text/javascript"
      src="https://platform-api.sharethis.com/js/sharethis.js#property=6108cff0f506cf0019dc20b5&amp;product=inline-share-buttons"
      async="async"
    ></script>

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/logo-icon-dark.svg" />
    <title>WEBITE SALES</title>
  </head>
  <body data-color-mode="glr">

  <!-- Admin edit warna ID Admin -->
  <div class="coontainer">
      <div
        id="control"
        class="editwarna btn d-flex flex-row"
        onclick="fungsi()"
      >
        <button
          id="red"
          style="
            background-color: red;
            padding: 1rem;
            border-radius: 50px;
            border: none;
          "
          class="shadow-sm ms-2"
        ></button>

        <button
          id="blue"
          style="
            background-color: blue;
            padding: 1rem;
            border-radius: 50px;
            border: none;
          "
          class="shadow-sm ms-2"
        ></button>

        <button
          id="green"
          style="
            background-color: green;
            padding: 1rem;
            border-radius: 50px;
            border: none;
          "
          class="shadow-sm ms-2"
        ></button>

        <button
          id="orange"
          style="
            background-color: orange;
            padding: 1rem;
            border-radius: 50px;
            border: none;
          "
          class="shadow-sm ms-2"
        ></button>

        <button
          id="pink"
          style="
            background-color: pink;
            padding: 1rem;
            border-radius: 50px;
            border: none;
          "
          class="shadow-sm ms-2"
        ></button>

        <button
          id="default"
          style="
            background-color: #364547;
            padding: 1rem;
            border-radius: 50px;
            border: none;
          "
          class="shadow-sm ms-2"
        ></button>
        <button
          id="default"
          style="
            background-image: linear-gradient(
              to right,
              red,
              orange,
              yellow,
              green,
              blue,
              indigo,
              violet
            );
            padding: 1rem;
            border-radius: 50px;
            border: none;
            color: #fff;
          "
          class="shadow-sm ms-2"
        ></button>
      </div>
    </div>

    <!-- Akhir Admin edit marna -->
    <!--  Header -->
    <section id="header">
      <div class="container">
        <div class="row">
          <div class="col-6">
            <a href="https://api.whatsapp.com/send?phone=62<?= $rowprofile['wa'] ?>"
              ><img src="img/whatsapp.png" alt="whatsapp" /> +62<?= $rowprofile['wa'] ?></a
            >
          </div>
          <div class="col-6 d-flex flex-row-reverse">
            <div class="ps-2">
              <a href="https://www.instagram.com/<?= $rowprofile['ig'] ?>"><img src="img/instagram.png" alt="instagram" /></a>
            </div>
            <div>
              <a href="https://www.facebook.com/<?= $rowprofile['fb'] ?>"><img src="img/facebook.png" alt="facebook" /></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Header -->
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="index">
          <img src="<?= $rowprofile['logo'] ?>" alt="img"
        /></a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="produk">PRODUK</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="promo">PROMO</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="simulasi-kredit"
                >SIMULASI KREDIT</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="kontak">KONTAK</a>
            </li>
            <li class="nav-item tombol-login">
              <a class="nav-link btn" style="color: #fff" href="https://appsales.galeriide.net/">LOGIN APP</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->
    <!-- header home -->