<?php 
include_once "koneksi.php"; 
session_start(); 
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="shortcut icon" href="img/logo.png" />

        <!-- Bootstrap CSS -->
        <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous"
        />
        <!-- Aos -->
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

        <!-- My Css -->
        <link rel="stylesheet" href="css/style.css" />
        <!-- My Font -->
        <link
        href="https://fonts.googleapis.com/icon?family=Material+Icons"
        rel="stylesheet"
        />
        <script
        type="text/javascript"
        src="https://platform-api.sharethis.com/js/sharethis.js#property=6108cff0f506cf0019dc20b5&product=inline-share-buttons"
        async="async"
    ></script>
        <title>HALO WULING</title>
    </head>
    <body>
        <!-- Tombol Whatsapp -->
        <a
        href="https://api.whatsapp.com/send?phone=+62<?= $rowprofile['wa'] ?>&text=Halo%20<?= $rowprofile['nama_sales'] ?>%20Saya%20ingin%20konsultasi%20mengenai%20produk%20<?= $rowprofile['cabang'] ?>,%20Info%20harga%20dan%20promo%20bulan%20ini"
        class="float"
        target="_blank"
        >
        <img src="img/whatsapp.svg" alt="" />
        </a>
        <!-- Akhir Tombol whatsapp -->
        <!-- Navbar -->

        <nav
        class="navbar navbar-expand-lg navbar-dark  fixed-top nav-wuling shadow-sm" 
        >
        <div class="container">
            <a class="navbar-brand nav-logo" href="index">
                <img
                    src="img/logo-wuling.webp"
                    alt="logo-header"
                    class="d-inline-block align-text-center img-fluid nav-logo"
                />
                <!-- <span> MY ROYAL QUEEN</span> -->
                </a>
            <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown"
            aria-expanded="false"
            aria-label="Toggle navigation"
            >
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" style="color:#fff!important" href="index">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color:#fff!important" href="list-harga">Pricelist</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color:#fff!important" href="artikel">Info Promo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color:#fff!important" href="kontak">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color:#fff!important" href="https://appsales.galeriide.net">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
